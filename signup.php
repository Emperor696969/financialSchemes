<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

    <title>Signup</title>
  </head>
  <body>
    <div class="bgimg"></div> 
    <div class="center">
      <img src="icon1.png" alt="ixon">
      <h1>Sign Up</h1>
      <form method="post" action="register.php">
        <div class="txt_field">
          <input type="text" id="fullname" name="fullname" required>
          <span></span>
          <label>Full Name</label>
        </div>
        <div class="txt_field">
          <input type="text" id="uname" name="uname" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="text" id="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="text" id="password1" name="password1" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" id="password" name="password" required>
          <span></span>
          <label>Confirm Password</label>
        </div>
        <!-- <div class="pass">Forgot Password?</div> -->
        <input type="submit" value="Sign Up">
        <div class="signup_link">
          Already a member? <a href="#">Login</a>
        </div>
      </form>
      </div>
    </div>
  <!-- </div> -->
  <!-- <form action="" method="get"></form>
  <div class="txt_field">
  <label for="fname">First Name: </label>
  <input type="text" name="fname" id="fname">
  <span></span>
  </div> -->

  </body>
</html>