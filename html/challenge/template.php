<div class='backLink'><a href='./?challengeSet=<?php echo $challenge['challenge_set'];?>'>&laquo; <?php echo $challenge['set_name'];?></a></div>

<h2 class='challengeName'><?php echo $challenge['name'];?></h2> - <?php echo getDifficulty($challenge['difficulty']);?>

<p class='description'><?php echo $challenge['description'];?></p>

<?php if($challenge['completed_date_time'] !== null) { ?>
	<p>
		Solved: <?php echo formatDate($challenge['completed_date_time']);?><br/>
		<a target='_blank' href='/learnpython/?forum=<?php echo $challenge['id'];?>'>View Forum</a>
	</p>
<?php } ?>

<p>
	<div id='correctDiv'><strong>Correct!</strong> Share your code on the <a target='_blank' href='/learnpython/?forum=<?php echo $challenge['id'];?>'>forum</a></div>
	<div id='incorrectDiv'><strong>Incorrect</strong>, <span id='incorrectMessage'></span></div>
</p>
<p>
	Upload your code in a Python file (extension .py) here
	<form name='solutionForm' id='solutionForm' onsubmit='return false;'>
		<input type=hidden name='challenge_id' id='challenge_id' value='<?php echo $challenge['id'];?>'>
		<input type=file class='fileBtn' name='challenge_file' id='challenge_file' required>
		<div><button class='fileBtn' type='button' onclick='uploadSolutionFile()'>Submit Solution File</button></div>
	</form>
</p>

<div data-datacamp-exercise data-lang="python">
	<?php if($challenge['completed_date_time'] !== null && $challenge['code'] !== null) { ?>
	<code data-type="sample-code">
<?php echo $challenge['code'];?>
	</code>
	<?php } ?>
</div>
