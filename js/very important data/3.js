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
        var url = "?search=" + name + "&subject=" + subject + "&restype=" + restype;
        
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
