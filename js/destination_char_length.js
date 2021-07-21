$('#dest_char').keyup(function () {
  var max = 150;
  var len = $(this).val().length;
  if (len >= max) {
    $('#dest_char_length').html('<br><div class="usercheck"><div id="alert1" class="alert alert-danger"><p>Item Description should be 150 characters long!</p></div></div>');
  } 
  setTimeout(function() {
          $("#alert1").fadeOut().empty();
        }, 3000);
});