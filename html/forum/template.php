<div class='backLink'><a href='./?challengeSet=<?php echo $challenge['challenge_set'];?>'>&laquo; <?php echo $challenge['set_name'];?></a></div>

<h2 class='challengeName'><?php echo $challenge['name'];?></h2> - <?php echo getDifficulty($challenge['difficulty']);?>

<?php if($challenge['completed_date_time'] === null) { ?>
	<div id='noEntryDiv'>You must complete <a href='./?challenge=<?php echo $challenge['id'];?>'>this challenge</a> before viewing the forum.</div>
<?php } else { ?>

	<?php if(empty($entries)) { ?>
		<div id='noEntryDiv'>No entries have been submitted for this challenge.</div>
	<?php } else { ?>

		<table id='forumTable' class='textbookTable'>
			<thead>
				<tr><th>Date Completed</th><th>Code</th></tr>
			</thead>
			<tbody>
			<?php foreach($entries as $entry) { ?>
				<tr>
					<td><?php echo formatDate($entry['completed_date_time'], "Y-m-d g:i A");?></td>
					<td><textarea class='forumCode' disabled readonly><?php echo $entry['code'];?></textarea></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>

	<?php } ?>

	<div><textarea id='codeInput' class='forumCode' placeholder='Submit your code here'><?php echo $challenge['code'];?></textarea></div>
	<div><button>Submit Code</button></div>
<?php } ?>
