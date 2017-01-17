$(document).ready(function()
{
	$(window).resize(sideBarResize).trigger('resize');
});

window.onload = function()
{
	$(window).trigger('resize');
};

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
