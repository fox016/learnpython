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

	console.log(windowHeight);
	console.log(headerHeight);

	if(headerHeight > 100)
		headerHeight = 61;

	$("#sideBar").outerHeight(windowHeight - headerHeight);
	$("#pageContent").outerHeight(windowHeight - headerHeight);
}
