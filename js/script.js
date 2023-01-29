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
	var urlParams = new URLSearchParams(window.location.search);
	var search = urlParams.get('search');
	if (search) {
	  $('#search').val(search);
	  $.ajax({
		type: "POST",
		url: "ajax.php",
		data: {
		  search: search,
		  subject: $('#subject').val(),
		  restype: document.querySelector('input[name="restype"]:checked').value
		},
		success: function(html) {
		  $("#display").html(html).show();
		}
	  });
	}
  
  
  
  $(document).ready(function() {
  
	  $("#search").keyup(function() {
		  var name = $('#search').val();
		  var subject = $('#subject').val();
		  var restype = document.querySelector('input[name="restype"]:checked').value;
		  var url = "?search=" + name + "&sub=" + subject + "&restype=" + restype;
		  
		  window.history.pushState({}, '', url);
		  
		  if (name == "") {
			  $("#display").html("");
		  } else {
			  $.ajax({
				  type: "POST",
				  url: "ajax.php",
				  data: {
					  search : name,
					  subject: subject,
					  restype: restype
				  },
				  success: function(html) {
					  $("#display").html(html).show();
				  }
			  });
		  }
	  });
  });
  
  });
  