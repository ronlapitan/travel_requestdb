function checkPassword(){
  var password = $("#password").val();
  var confirm_password = $("#confirm_password").val();
  var password_check = $(".password_check");
  
  if(password != confirm_password) {											
    password_check.html('<div class="alert alert-danger" role="alert" align="center">Passwords do not match!</div>');
  } else {					
    password_check.html('<div class="alert alert-success" role="alert"align="center">Passwords match!</div>');
  }
}

$(document).ready(function(){
  $("#confirm_password").keyup(checkPassword);
});