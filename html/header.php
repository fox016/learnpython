<!DOCTYPE html>
<html>
<head>
	<title>Python Explorer</title>

	<meta name='google-signin-client_id' content='784403148714-c2dotmflmj5ps6crteomonmqcs6osj01.apps.googleusercontent.com'>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://cdn.datacamp.com/datacamp-light-latest.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="jqueryui/jquery.js"></script>
-->
	<script src="jqueryui/jquery-ui.js"></script>

	<script src="js/myAlert.js?v4"></script>
	<script src="js/common.js?v4"></script>

	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">

<!--
	<link rel='stylesheet' type='text/css' href='jqueryui/jquery-ui.min.css' />
	<link rel='stylesheet' type='text/css' href='jqueryui/jquery-ui.structure.min.css' />
	<link rel='stylesheet' type='text/css' href='jqueryui/jquery-ui.theme.min.css' />
-->
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
	<div id='expandSideBar'  title='Expand Side Bar' style='display:none'>&raquo;</div>
	<div class='table wide'>
		<div class='row'>
			<div class='cell top' id='sideBarParent'>
				<div id='sideBar'>
					<div id='collapseSideBar' title='Collapse Side Bar'>&laquo;</div>
					<a href='/learnpython/'><div id='link_home' class='navlink'>Home</div></a>
					<a href='/learnpython/?chapter=0'><div id='link_chapter_0' class='navlink'>Interactive Textbook</div></a>
					<?php
						$chapterManager = ChapterManager::getInstance();
						$chapters = $chapterManager->getChapterList();
						foreach($chapters as $index=>$chapter)
							echo "<a href='/learnpython/?chapter={$chapter->id}'><div id='link_chapter_{$chapter->id}' class='navlink sublink'>Chapter " . ($index+1) . " - {$chapter->name}</div></a>\n";
					?>
					<a href='/learnpython/?challengeSet=0'><div id='link_challenge_set_0' class='navlink'>Coding Challenges</div></a>
					<?php
						$challengeSets = getChallengeSets();
						foreach($challengeSets as $i => $set)
							echo "<a href='/learnpython/?challengeSet={$set['id']}'><div id='link_challenge_set_{$set['id']}' class='navlink sublink'>{$set['name']}</div></a>";
					?>
				</div>
			</div>
			<div class='cell top' id='pageContentParent'>
				<div id='pageContent'>
