window.onload = function() {
	window.onscroll = function() {
	  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		document.querySelector(".go-to-top").style.display = "block";
	  } else {
		document.querySelector(".go-to-top").style.display = "none";
	  }
	};
	document.querySelector(".go-to-top").addEventListener("click", function() {
	  document.body.scrollTop = 0; // For Safari
	  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	});
  }


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
	$('.fade-in-image').addClass('show');
});

