<div>
	<h1>Interactive Textbook</h1>
	<p>
		The interactive programming textbook helps beginning coders to learn about general principles of coding while learning Python. The textbook contains interactive coding simulations that allow learners to apply what they learn as they learn it. Although all of the interactive simulations only run Python code, the textbook teaches basic coding principles that can be applied to a wide variety of programming languages.
	</p>
	<h1>Coding Simulation Example</h1>
	<div data-datacamp-exercise data-lang="python">
		<code data-type="sample-code">
			greeting = "Hello, world!"
			print(greeting)	
		</code>
	</div>
	<h1>Table of Contents</h1>
	<table>
<?php
	foreach($chapters as $key=>$value)
		echo "<tr><td><a href='/learnpython/?chapter={$value['id']}'>Chapter " . ($key+1) . " - {$value['name']}</a></td></tr>\n";
?>
	</table>
</div>
