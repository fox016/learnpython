<h2><?php echo $set['name'];?></h2>
<p><?php echo $set['description'];?></p>
<table id='challengeSetTable'>
	<thead>
		<tr><th>Challenge Name</th><th>Difficulty</th><th>Completed</th><th>Forum</th></tr>
	</thead>
	<tbody>
		<?php
		foreach($set['challenges'] as $i => $challenge)
		{
			?>
			<tr>
				<td><a href='/learnpython/?challenge=<?php echo $challenge['id'];?>'><?php echo $challenge['name'];?></a></td>
				<td><?php echo getDifficulty($challenge['difficulty']);?></td>
			<?php if($challenge['completed_date_time'] === null) { ?>
				<td></td>
				<td></td>
			<?php } else { ?>
				<td><?php echo formatDate($challenge['completed_date_time']);?></td>
				<td><a href='/learnpython/?forum=<?php echo $challenge['id'];?>'>Forum</a></td>
			<?php } ?>
			</tr>
		<?php } ?>
	</tbody>
</table>
