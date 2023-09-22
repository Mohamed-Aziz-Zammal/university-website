<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
  
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
         <form action="sign_in.php" class="sign-in-form" method="post" onsubmit="return test1()">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="mail1" name="mail1" type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password1" name="password1" type="password" placeholder="Password" />
            </div>
            <input name="valider" type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            

          </form>
          <form name="connexion" action="sign_up.php" method="post" class="sign-up-form" 
    onsubmit="return test()" 
           >
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="user" name="user" type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="mail" name="mail" type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="cin" name="cin" type="text" placeholder="(cin)" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" name="password" type="password" placeholder="Password(cin)" />
            </div>
            <p>date de naissanse</p>
            <div class="input-field">
              <i class="fas fa-lock"></i>
             <input id="date" name="date" type="date" placeholder="date" />
            </div>
            <p>si vous êtes etudiant entrez '0000' sinon votre code </p>
            <div class="input-field">
              <i class="fas fa-lock"></i>
             <input id="code" name="code" type="text" placeholder="code" />
            </div>
            <input name="submit" type="submit" class="btn" value="Sign up"  />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    
    

    <script src="app.js"></script>
  </body>
</html>


