$("#login-button").click(function(event){
  event.preventDefault();

$('form').fadeOut(500);
$('.wrapper').addClass('form-success');
});

function signIn(){

  var email = document.getElementById("email");
  var password = document.getElementById("password");
  
  if (email.value == "" || password.value== "") {
    alert("Boş Geçilemez.")
  } else if (email.value != "a" || password.value !="1") {

    alert("Mail ya  da şifre yanlış!");
    location.reload();
  } else {
  
    window.location.href ="/PAFF/admin"
  }

}