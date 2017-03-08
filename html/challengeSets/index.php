<?php

$challengeSets = getChallengeSets();

?>
<h1>Coding Challenges</h1>
<p>
Coding challenges are more complex than the coding exercises in the textbook. They require an integration of knowledge and test your ability to break down and solve problems.
</p>
<p>
Challenges are divided into challenge sets. The math challenge set, for example, contains challenges that relate to math problems. Within each challenge set, the individual challenges are loosely ranked by difficulty: easy, medium, and hard. Once you solve a challenge, you can choose to share your code in the forum for that challenge, where you can also see how others solved the challenge. As you solve challenges, the system tracks your progress and rewards you with medals.
</p>
<h1>Challenge Sets</h1>
<table>
<?php
foreach($challengeSets as $i => $set)
{
	echo "<tr><td><a href='/learnpython/?challengeSet={$set['id']}'>{$set['name']}</a></td></tr>";
}
?>
</table>
