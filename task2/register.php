<?php
  $unequal = false;
  if(isset($_POST["submit"])) {
    session_start();

    if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password_confirm"])) {
      if($_POST["password"] != $_POST["password_confirm"]) {
        $unequal = true;
      }
      else {
        $_SESSION["username"] = $_POST["username"];

        header("Location: welcome.php");
      }
    }
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Session Demo Login</title>
    <style>
      form {
        width: 30em;
        background-color: #ccc;
        margin: 5em auto;
      }
      label, input {
        font-size: 1.2em;
      }
      .btn {
        margin: 0 auto;
        text-align: center;
      }
      #signin { text-align: center; }
      #warning { color: #f00; }
    </style>
  </head>
  <body>
    <form action="register.php" method="post">
      <fieldset>
        <legend>Sign Up</legend>
        <label for="usename">Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="username" required="required"><br /><br />
        <label for="password">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="password" name="password" required="required"><br /><br />
        <label for="password_confirm">Confirm Password:  </label>
        <input type="password" name="password_confirm" required="required"><br />
        <?php if($unequal == true) { echo "<p id='warning'>Confirm Password must be equal to Password.</p>"; } ?> <br />
        <div class="btn">
          <input type="submit" name="submit" value="Register">&nbsp;&nbsp;
          <input type="reset" name="reset" value="Reset">
        </div>
        <p id="signin">Already have an account, click <a href="index.php">here</a> to sign in.</p>
      </fieldset>
    </form>
  </body>
</html>