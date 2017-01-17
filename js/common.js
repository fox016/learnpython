$(document).ready(function()
{
	$(window).resize(sideBarResize).trigger('resize');
});

function sideBarResize()
{
	var windowHeight = $(window).outerHeight();
	var headerHeight = $("#pageHeader").outerHeight();

	$("#sideBar").outerHeight(windowHeight - headerHeight);
	$("#pageContent").outerHeight(windowHeight - headerHeight);
}
