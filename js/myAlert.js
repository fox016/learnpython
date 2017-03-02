/*
 * These variables deal with the myAlert function. They allow a queue of
 * error messages to be stored. If a user closes one error message, the next
 * error message in the queue will be shown.
 */
var myAlertQueue = []; // FIFO list of alert errors
var myAlertFlag = false; // Semaphore lock

function initMyAlert(title)
{
	$("body").append("<div id='myAlert' title='" + title + "' style='display:none'><div id='myAlertText'></div></div>");
	$("body").append("<div id='myConfirm' title='" + title + "' style='display:none'><div id='myConfirmText'></div></div>");
}

/*
 * Opens a home-made modal alert containing given string.
 * 
 * @param str - Error message displayed to user
 */
function myAlert(str)
{
	if(typeof $("#myAlert").dialog !== "function")
	{
		alert(str);
		return;
	}

	if(myAlertFlag) {
		myAlertQueue.push({str:str});
		return;
	}

	myAlertFlag = true; // Set lock
	$("#myAlertText").html(str); // Set alert text
	$("#myAlert").dialog({
		resizable: true,
		modal: true,
		height: 200,
		width: 450,
		open: function() {
		},
		close: function()
		{
			myAlertFlag = false; // Release lock
			$(this).dialog("destroy");

			// Show alert messages in queue, if any
			if(myAlertQueue.length > 0) {
				var tempAlert = myAlertQueue.shift();
				myAlert(tempAlert['str']);
			}
		},
		buttons:
			[{ text: "Close", id: "closeBtn", click: function() { $(this).dialog("close"); }}],
	});
}

function myConfirm(str, callback, options)
{
	if(typeof $("#myAlert").dialog !== "function")
	{
		if(confirm(str))
			callback();
		return;
	}

	if(typeof options === "undefined")
	{
		options = {height: 200, width:300};
	}

	$("#myConfirmText").html(str);
	$("#myConfirm").dialog(
	{
		resizable: true,
		modal: true,
		height: options.height,
		width: options.width,
		open: function() { },
		close: function() { $(this).dialog("destroy"); },
		buttons:
		[
			{
				text: "OK",
				id: "okBtn",
				click: function() { callback(); $(this).dialog("close"); },
			},
			{
				text: "Cancel",
				id: "closeBtn",
				click: function() { $(this).dialog("close"); },
			},
		],
	});
}
