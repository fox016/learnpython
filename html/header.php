<?php
	require_once('common.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Python Explorer</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdn.datacamp.com/datacamp-light-latest.min.js"></script>
	<script src="js/common.js"></script>

	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
	<link rel='stylesheet' type='text/css' href='css/common.css' />
</head>
<body>
	<div id='pageHeader'>
		<table>
			<tr>
				<td><img src='images/python_logo.png'></td>
				<td><a href='/learnpython'>Python Explorer</a></td>
			</tr>
		</table>
	</div>
	<div class='table wide'>
		<div class='row'>
			<div class='cell top' id='sideBarParent'>
				<div id='sideBar'>
					<a href='/learnpython/'><div class='navlink'>Home</div></a>
					<a href='/learnpython/?chapter=0'><div class='navlink'>Interactive Textbook</div></a>
					<?php
						foreach($chapters as $key=>$value)
							echo "<a href='/learnpython/?chapter={$value['id']}'><div class='navlink sublink'>Chapter " . ($key+1) . " - {$value['name']}</div></a>\n";
					?>
					<a href='/learnpython/'><div class='navlink'>Coding Challenges</div></a>
					<a href='/learnpython/'><div class='navlink sublink'>Math Problems</div></a>
				</div>
			</div>
			<div class='cell top' id='pageContentParent'>
				<div id='pageContent'>
