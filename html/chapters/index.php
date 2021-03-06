<div>
	<h1>Interactive Textbook</h1>
	<p>
		The interactive programming textbook helps beginning programmers to learn about general principles of coding while learning Python. The textbook contains interactive coding exercises that allow learners to apply what they learn as they learn it. Although all of the interactive exercises only run Python code, the textbook teaches basic coding principles that can be applied to a wide variety of programming languages.
	</p>
	<h1>Coding Exercise Example</h1>
	<div data-datacamp-exercise data-lang="python">
		<code data-type="sample-code">
			greeting = "Hello, world!"
			print(greeting)	
		</code>
	</div>
	<h1>Table of Contents</h1>
	<table>
<?php
	$chapterManager = ChapterManager::getInstance();
	$chapters = $chapterManager->getChapterList();
	foreach($chapters as $index=>$chapter)
		echo "<tr><td><a href='/learnpython/?chapter={$chapter->id}'>Chapter " . ($index+1) . " - {$chapter->name}</a></td></tr>\n";
?>
	</table>
</div>
