<?php

require_once("./classes/chapter.php");
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
	$chapterManager->addChapter("dictionaries", "Dictionaries");
	$chapterManager->addChapter("classes", "Classes &amp; Objects");
	$chapterManager->addChapter("recursion", "Recursion");
	$chapterManager->addChapter("generators", "Generators");
	$chapterManager->addChapter("sets", "Sets");
	$chapterManager->addChapter("tuples", "Tuples");
	$chapterManager->addChapter("comprehensions", "List Comprehensions");
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
		include("html/chapters/0.php");
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
	echo "TODO show challenge set $challengeSetId";
}

/*
 * Show challenge associated with given chapter ID
 */
function showChallenge($challengeId)
{
	echo "TODO show challenge $challengeId";
}

/*
 * Show home page
 */
function showHome()
{
	global $currentPage;
	$currentPage = "home";
	require_once('html/home.php');
}
