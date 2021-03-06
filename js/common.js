/*
 * Globals
 */
var current_user = null; // Object holding current_user data from Google

/*
 * Init page
 */
$(document).ready(function()
{
	initMyAlert("Python Explorer Alert");

	$(window).resize(sideBarResize).trigger('resize');

	$("#link_" + $("#currentPage").val()).addClass('selected');

	// Click listeners
	$(".navlink").click(function() {
		$(".navlink").removeClass('selected');
		$(this).addClass('selected');
	});
	$("#collapseSideBar").click(function() {
		$("#sideBarParent").hide();
		$("#expandSideBar").show();
	});
	$("#expandSideBar").click(function() {
		$("#expandSideBar").hide();
		$("#sideBarParent").show();
	});

	// Datacamp instructions
	$("div[data-lang='python']").before("<div class='datacampInstructions'>Hit Ctrl-L (Command-L on Mac) to clear right console.</div>");

	$("#challenge_file").unbind('change').change(handleFileSelect);
});

// Trigger resize once window is completely done loading
window.onload = function()
{
	$(window).trigger('resize');
};

/*
 * Resize side bar and content height to fit perfectly in window
 * Called on init and whenever window changes size
 */
function sideBarResize()
{
	var windowHeight = $(window).outerHeight();
	var headerHeight = $("#pageHeader").outerHeight();

	if(headerHeight > 100)
		headerHeight = 61;

	$("#sideBar").outerHeight(windowHeight - headerHeight);
	$("#pageContent").outerHeight(windowHeight - headerHeight);
}

/*
 * Sign in using Google
 */
function googleSignIn(googleUser)
{
	var cookies = hasCookies();
	if(!cookies)
	{
		myAlert("You must enable cookies for the coding challenges to work." +
			"Change your browser settings to allow local cookies and third party cookies.");
		return;
	}

	var id_token = googleUser.getAuthResponse().id_token;
	setCurrentUser(googleUser.getBasicProfile())

	var userid = getCookie('userid');
	if(userid !== null)
		return;

	$.ajax({
		type: "POST",
		dataType: "json",
		url: "ajax/googleSignIn.php",
		data: {id_token: id_token},
		success: function(response)
		{
			if(response.refresh)
				location.reload();
		},
		error: function(xhr) {
			$("#pageContent").append("Error with Google sign in: " + xhr.responseText);
		},
	});
}

/*
 * Sign out from Google
 */
function googleSignOut()
{
	deleteCookie('userid');
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function() { location.reload(); });
}

/*
 * Set current user from google basic profile object
 */
function setCurrentUser(profile)
{
	current_user = {};
	current_user.id = profile.getId();
	current_user.name = profile.getName();
	current_user.first_name = profile.getGivenName();
	current_user.last_name = profile.getFamilyName();
	current_user.image_url = profile.getImageUrl();
	current_user.email = profile.getEmail();

	$("#displayUserImage").attr('src', current_user.image_url);
	$("#displayUserName").html(current_user.first_name);
}

/*
 * Get cookie value by name
 * Return null if not found
 */
function getCookie(cname)
{
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for(var i = 0; i <ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
		    c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			    return c.substring(name.length, c.length);
		}
	}
	return null;
}

/*
 * Delete cookie by name
 */
function deleteCookie(cname)
{
	var expire = new Date(1000);
	document.cookie = cname + "=null; expires=" + expire.toUTCString() + ";path=/";
}

/*
 * @return false if cookies are disabled
 */
function hasCookies()
{
	var enabled = navigator.cookieEnabled;
	if(!enabled)
		return false;
	if(!document.cookie && (enabled === null || /*@cc_on!@*/ false))
	{
		document.cookie = "testcookie=1";
		if(!document.cookie)
			return false;
		deleteCookie("testcookie");
	}
	return true;
}

/*
 * Submit solution file for a challenge
 */
function uploadSolutionFile()
{
	var userid = getCookie('userid');
	if(userid === null)
	{
		myAlert("You cannot submit an answer without logging in");
		return false;
	}

	var challengeId = $("#challenge_id").val();
	var fileForm = new FormData();
	fileForm.append("challengeId", challengeId);
	fileForm.append("file", selected_file);

	$("#correctDiv").hide();
	$("#incorrectDiv").hide();
	$(".fileBtn").attr('disabled', 'disabled');
	$("#processingDisplay").show();
	$.ajax({
		type: "POST",
		dataType: "json",
		url: "ajax/uploadSolutionFile.php",
		data: fileForm,
		processData: false,
		contentType: false,
		success: function(response)
		{
			$(".fileBtn").removeAttr('disabled');
			$("#processingDisplay").hide();
			if(response.correct)
			{
				$("#correctDiv").show();
			}
			else
			{
				var errorMessage = response.message + ": ";
				if(response.test && response.solution)
					errorMessage += "<br/>Test: " + response.test + "<br/>Expected: " + response.solution;
				if(response.output)
					errorMessage += "<br/>Your Output: " + response.output;
				$("#incorrectMessage").html(errorMessage);
				$("#incorrectDiv").show();
			}
		},
		error: function(xhr)
		{
			$(".fileBtn").removeAttr('disabled');
			$("#processingDisplay").hide();
			myAlert("Error submitting answer: " + xhr.responseText);
		},
	});

	return false;
}

/*
 * Handle file upload select
 */
var selected_file = null;
function handleFileSelect(evt)
{
	selected_file = evt.target.files[0];
}
