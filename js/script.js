function fill(Value) {
	$('#search').val(Value);
	$('#display').hide();
}
$(document).ready(function() {
	$("#search").keyup(function() {
		

		var name = $('#search').val();
		if (name == "") {
			$("#display").html("");
		} else {
			$.ajax({
				type: "POST",
				url: "ajax.php",
				data: {
					search : name,
					subject: $('#subject').val(),
					restype:document.querySelector('input[name="restype"]:checked').value
				},
				success: function(html) {
					$("#display").html(html).show();
				}
			});
		}
	});
});