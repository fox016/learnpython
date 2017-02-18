/*
 * Globals
 */
var current_user = null; // Object holding current_user data from Google

/*
 * Init page
 */
$(document).ready(function()
{
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
