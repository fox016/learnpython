<link rel='stylesheet' type='text/css' href='css/challenge.css' />

<!-- If signed in -->
<div id='displayUserHeader' <?php if(!isset($userid)) { ?> style='display:none !important;' <?php } ?>>
	<table id='displayUserTable'>
		<tr>
			<td><img src='images/small-loader.gif' id='displayUserImage'></td>
			<td><span id='displayUserName'></span></td>
			<td><button id='signOutBtn' onclick='googleSignOut()'>Sign Out</button></td>
		</tr>
	</table>
</div>

<!-- If not signed in -->
<div id='loginWrapper' <?php if(isset($userid)) { ?> style='display:none !important;' <?php } ?>>
	<p>
	Sign in with your Google account to start working on Coding Challenges
	</p>
	<div class="g-signin2" data-onsuccess="googleSignIn"></div>
</div>
