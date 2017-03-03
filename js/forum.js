function submitCode(form)
{
	$.ajax({
		type: "POST",
		dataType: "json",
		url: "ajax/saveForumEntry.php",
		data: $(form).serialize(),
		success: function(response) {
			location.reload();
		},
		error: function(xhr) {
			myAlert("Error saving forum entry: " + xhr.responseText);
		},
	});
	return false;
}
