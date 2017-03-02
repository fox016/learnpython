<?php

require_once(__DIR__ . "/classes/chapter.php");
require_once(__DIR__ . "/../util/util-logging.php");
$currentPage = NULL;

/*
 * Build initial chapter list
 */
function buildChapterList()
{
	$chapterManager = ChapterManager::getInstance();
	if(!$chapterManager->isEmpty())
		return;
	$chapterManager->addChapter("intro", "Introduction");
	$chapterManager->addChapter("variables", "Variables");
	$chapterManager->addChapter("numbertypes", "Number Types");
	$chapterManager->addChapter("booleans", "Booleans");
	$chapterManager->addChapter("strings", "Strings");
	$chapterManager->addChapter("functions", "Functions");
	$chapterManager->addChapter("conditionals", "Flow Control");
	$chapterManager->addChapter("errors", "Fixing Errors");
	$chapterManager->addChapter("iteration", "Loops");
	$chapterManager->addChapter("lists", "Lists");
	$chapterManager->addChapter("fileio", "File I/O");
	$chapterManager->addChapter("dictionaries", "Dictionaries");
	$chapterManager->addChapter("classes", "Classes &amp; Objects");
	$chapterManager->addChapter("sets", "Sets");
	$chapterManager->addChapter("tuples", "Tuples");
	$chapterManager->addChapter("comprehensions", "List Comprehensions");
	$chapterManager->addChapter("recursion", "Recursion");
	$chapterManager->addChapter("generators", "Generators");
}

/*
 * Show chapter associated with given chapter ID
 */
function showChapter($chapterId)
{
	global $currentPage;
	$currentPage = "chapter_$chapterId";

	// Textbook opener
	if($chapterId == "0")
	{
		include("html/chapters/index.php");
		return;
	}

	// Generic chapters
	$chapterManager = ChapterManager::getInstance();
	$chapter = $chapterManager->getChapterById($chapterId);
	echo "<h1>Chapter " . ($chapter->index+1) . " - {$chapter->name}</h1>";
	include("html/chapters/" . $chapter->id . ".php");
	$prevChapter = $chapterManager->getChapterByIndex($chapter->index-1);
	$nextChapter = $chapterManager->getChapterByIndex($chapter->index+1);
	?>

	<div class='chapterNav'>
		<?php if($prevChapter !== NULL) { ?>
			<a href="./?chapter=<?php echo $prevChapter->id;?>">
				<button class='chapterNavPrev'><span class='chapterNavArrows'>&laquo;</span><?php echo $prevChapter->name;?></button>
			</a>
		<?php } ?>
		<?php if($nextChapter !== NULL) { ?>
			<a href="./?chapter=<?php echo $nextChapter->id;?>">
				<button class='chapterNavNext'><?php echo $nextChapter->name;?><span class='chapterNavArrows'>&raquo;</span></button>
			</a>
		<?php } ?>
	</div>

	<?php
	return;
}

/*
 * Show challenge set associated with given chapter ID
 */
function showChallengeSet($challengeSetId)
{
	global $currentPage;
	$currentPage = "challenge_set_$challengeSetId";
	$userid = checkLogin();

	if($challengeSetId == "0")
	{
		include("html/challengeSets/index.php");
		return;
	}

	require_once(__DIR__ . "/db/DBchallenges.php");
	$db = new DBchallenges();
	$set = $db->getChallengeSet($challengeSetId, $userid);

	if($set === FALSE)
		echo "Challenge set id ($challengeSetId) not found";
	else
		include("html/challengeSets/template.php");
}

/*
 * Show challenge associated with given chapter ID
 */
function showChallenge($challengeId)
{
	global $currentPage;
	$currentPage = "challenge_$challengeId";
	$userid = checkLogin();

	require_once(__DIR__ . "/db/DBchallenges.php");
	$db = new DBchallenges();
	$challenge = $db->getChallenge($challengeId, $userid);

	if($challenge === FALSE)
		echo "Challenge id ($challengeId) not found";
	else
	{
		$currentPage = "challenge_set_{$challenge['challenge_set']}";
		include("html/challenge/template.php");
	}
}

/*
 * Show home page
 */
function showHome()
{
	global $currentPage;
	$currentPage = "home";
	include_once('html/home.php');
}

/*
 * Check login
 * If not logged in, build login screen (no return)
 * Else, return userid
 */
function checkLogin()
{
	$userid = getCookie('userid');
	include_once('html/login.php');
	if($userid === null)
	{
		include_once('html/footer.php');
		die;
	}
	return $userid;
}

/*
 * Get difficulty text from int stored in db
 */
function getDifficulty($n)
{
	switch($n)
	{
		case 1: return "Easy";
		case 2: return "Medium";
		case 3: return "Hard";
		default: return "Unknown";
	}
}

/*
 * Save google data for user in db
 */
function buildUser($googleUser)
{
	$user = array(
		"user_id" => getVal($googleUser, 'sub', NULL),
		"email" => getVal($googleUser, 'email', NULL),
		"full_name" => getVal($googleUser, 'name', NULL),
		"first_name" => getVal($googleUser, 'given_name', NULL),
		"last_name" => getVal($googleUser, 'family_name', NULL),
		"locale" => getVal($googleUser, 'locale', NULL),
	);

	require_once(__DIR__ . "/db/DBchallenges.php");
	$db = new DBchallenges();
	$rc = $db->insertUser($user);
	$db->commit();
}

/*
 * Build encrypted cookie
 */
function buildCookie($name, $value)
{
	require_once(__DIR__ . "/../util/util-security.php");

        $key = pack('H*', AES_128_KEY);
        $alpha = "0123456789abcdef";
        $iv = "";
        for($i = 0; $i < 16; $i++)
                $iv .= $alpha[rand(0, strlen($alpha)-1)];
        $ciphertext = openssl_encrypt($value, "aes128", $key, 0, $iv);
        $ciphertext = base64_encode($iv . $ciphertext);

	$expireTime = time() + (24 * 60 * 60);
	$cookie = array("name" => $name, "value" => $ciphertext, "expires" => $expireTime);
	setcookie($cookie['name'], $cookie['value'], $cookie['expires'], "/");
	return $cookie;
}

/*
 * Get decrypted cookie value
 */
function getCookie($name)
{
	require_once(__DIR__ . "/../util/util-security.php");

	if(!isset($_COOKIE[$name]))
		return null;

	$ciphertext = base64_decode($_COOKIE[$name]);
        $key = pack('H*', AES_128_KEY);
        $iv = substr($ciphertext, 0, 16);
        $ciphertext = substr($ciphertext, 16);
        $value = openssl_decrypt($ciphertext, "aes128", $key, 0, $iv);
	return $value;
}

/*
 * Get list of challenge sets
 */
function getChallengeSets()
{
	require_once(__DIR__ . "/db/DBchallenges.php");
	$db = new DBchallenges();
	return $db->getChallengeSets();
}

/*
 * Convert date string to given format
 */
function formatDate($date, $format="Y-m-d")
{
	return date($format, strtotime($date));
}

/*
 * If index set in array, return value at index, else return default value
 */
function getVal($array, $index, $default="")
{
	if(isset($array[$index]))
		return $array[$index];
	return $default;
}
