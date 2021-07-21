$('#purp_char').keyup(function () {
  var max = 200;
  var len = $(this).val().length;
  if (len >= max) {
    $('#purp_char_length').html('<br><div class="usercheck"><div class="alert alert-danger"><p>Purpose should be 200 characters long!</p></div></div>');
  } else {
    var char = max - len;
    // $('#charNum').text(char + ' characters left');
  }
});