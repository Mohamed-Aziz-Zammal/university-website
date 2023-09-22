const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
function test() {
  var user = document.getElementById("user").value;
  var mail = document.getElementById("mail").value;
  var a = "@";
  var cin =document.getElementById("cin").value;
  var pwd =document.getElementById("password").value;
  var date =document.getElementById("date").value;
  var code =document.getElementById("code").value;


  if (user.length === 0) {
  alert("Vérifier votre user");
  
  return false;
  }else if (mail.substring(mail.indexOf(a)) != '@isikef.u-jendouba.tn') {
        alert("Votre de mot de passe doit avoir une adresse gmail");

        return false;}
  else if (cin.length < 8 || cin.length > 8) {
    alert("Votre cin doit avoir une longueur égale à 8 caractères");

    return false;
  }else if (pwd.length < 8 || pwd.length > 8 || pwd==cin) {
    alert("Votre mot de passe doit avoir une longueur égale à 8 caractères");

    return false;
    }
  else if (date == "") {
        alert("Votre date");

        return false;
    }else if (code.length <4 || code.length>4){

      alert("Votre code doit avoir une longueur égale à 4 caractères");
      return false;
     }
}
function test1(){
  var mail1 = document.getElementById("mail1").value;
  var pwd1 = document.getElementById("password1").value;
  var a = "@";
  if (mail1.length === 0 || pwd1.length === 0) {
    alert("Vérifier votre login et votre de mot de passe");
    return false;
    }

  else if (mail1.substring(mail1.indexOf(a)) != '@isikef.u-jendouba.tn') {
        alert("Votre de mot de passe doit avoir une adresse gmail");

        return false;}
  else if (cin.length < 8 || cin.length > 8) {
    alert("Votre cin doit avoir une longueur égale à 8 caractères");

    return false;

}}
