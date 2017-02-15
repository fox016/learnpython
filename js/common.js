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

	$.ajax({
		type: "POST",
		dataType: "json",
		url: "ajax/googleSignIn.php",
		data: {id_token: id_token},
		success: function(response) {
			var expire = new Date(parseInt(response['expires']) * 1000);
			document.cookie = response['name'] + "=" + response['value'] + "; expires=" + expire.toUTCString();
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
	if(typeof gapi !== "undefined" && typeof gapi.auth2 !== "undefined")
	{
		var auth2 = gapi.auth2.getAuthInstance();
		auth2.signOut().then(signOut)
	}
	else
	{
		signOut();
	}
}

/*
 * Sign out by deleting cookie
 */
function signOut()
{
	var expire = new Date(1000);
	document.cookie = "userid=null; expires=" + expire.toUTCString();
	location.reload();
}
