<?php

$currentPage = NULL;

$chapters = array(
	array("id" => "variables", "name" => "Variables"),
	array("id" => "numbertypes", "name" => "Number Types"),
	array("id" => "booleans", "name" => "Booleans"),
	array("id" => "strings", "name" => "Strings"),
	array("id" => "functions", "name" => "Functions"),
	array("id" => "conditionals", "name" => "Flow Control"),
	array("id" => "errors", "name" => "Fixing Errors"),
	array("id" => "iteration", "name" => "Loops"),
	array("id" => "lists", "name" => "Lists"),
	array("id" => "dictionaries", "name" => "Dictionaries"),
	array("id" => "classes", "name" => "Classes &amp; Objects"),
	array("id" => "recursion", "name" => "Recursion"),
	array("id" => "generators", "name" => "Generators"),
	array("id" => "sets", "name" => "Sets"),
	array("id" => "tuples", "name" => "Tuples"),
	array("id" => "comprehensions", "name" => "List Comprehensions")
);

/*
 * Show chapter associated with given chapter ID
 */
function showChapter($chapterId)
{
	global $chapters;
	global $currentPage;
	$currentPage = "chapter_$chapterId";

	// Textbook opener
	if($chapterId == "0")
	{
		require_once("html/chapter_0.php");
		return;
	}

	// Generic chapters
	foreach($chapters as $index => $chapter)
	{
		if($chapter['id'] == $_REQUEST['chapter'])
		{
			echo "<h1>Chapter " . ($index+1) . " - {$chapter['name']}</h1>";
			require_once("html/chapter_" . $_REQUEST['chapter'] . ".php");
			return;
		}
	}
}

function showHome()
{
	global $currentPage;
	$currentPage = "home";
	require_once('html/home.php');
}
