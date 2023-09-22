function contact(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;
    if (name ==="" ) {
      alert("Vérifier votre login et votre name");
      return false;
      }
  
    else if (email ==="") {
          alert("Vérifier votre login et votre email");
  
          return false;}
    else if (subject==="") {
      alert("Vérifier votre login et votre subject");
  
      return false;
  
  } else if (message==="") {
    alert("Vérifier votre login et votre message");

    return false;

}
}