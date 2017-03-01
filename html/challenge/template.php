<h2><?php echo $challenge['name'];?></h2>
<p><?php echo $challenge['description'];?></p>
<p><?php echo getDifficulty($challenge['difficulty']);?></p>
<?php if($challenge['completed_date_time'] !== null) { ?>
	<p><?php echo formatDate($challenge['completed_date_time']);?></p>
<?php } ?>
