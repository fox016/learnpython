<?php

require_once(__DIR__ . "/classes/chapter.php");
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

	// Include DataCamp JS only on chapter pages
	echo '<script src="https://cdn.datacamp.com/datacamp-light-latest.min.js"></script>';

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
	$set = $db->getChallengeSet($challengeSetId);

	if($set === FALSE)
	{
		echo "Challenge set id ($challengeSetId) not found";
	}
	else
	{
		echo "<h2>{$set['name']}</h2><p>{$set['description']}</p>";
		// TODO show challenges in challenge set
	}
}

/*
 * Show challenge associated with given chapter ID
 */
function showChallenge($challengeId)
{
	global $currentPage;
	$currentPage = "challenge_$challengeId";
	$userid = checkLogin();

	echo "TODO show challenge $challengeId";

	$currentPage = "challenge_set_math"; // TODO mock
	include_once("html/challenge/" . $challengeId . ".php"); // TODO mock
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
