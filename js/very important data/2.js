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

  $("#search").keyup(function() {
    var name = $('#search').val();
    if (name == "") {
      $("#display").html("");
    } else {
      $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {
          search: name,
          subject: $('#subject').val(),
          restype: document.querySelector('input[name="restype"]:checked').value
        },
        success: function(html) {
          $("#display").html(html).show();
        }
      });
    }
  });
});
