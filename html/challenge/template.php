<h2 style='display:inline'><?php echo $challenge['name'];?></h2> - <?php echo getDifficulty($challenge['difficulty']);?>

<p class='description'><?php echo $challenge['description'];?></p>

<?php if($challenge['completed_date_time'] !== null) { ?>
	<p>
		Answer: <?php echo $challenge['solution'];?><br/>
		Solved: <?php echo formatDate($challenge['completed_date_time']);?><br/>
		<a target='_blank' href='/learnpython/?forum=<?php echo $challenge['id'];?>'>View Forum</a>
	</p>
<?php } else { ?>
	<p>
		<form onsubmit='return submitAnswer(this);'>
			<input type=hidden name='challenge_id' id='challenge_id' value='<?php echo $challenge['id'];?>'>
			<label for='solution'>Answer:&nbsp;</label><input type=text size='75' name='solution' id='solution' value=''>
			<input type='submit' value='Submit'>
		</form>
	</p>
<?php } ?>

<div data-datacamp-exercise data-lang="python">
</div>

