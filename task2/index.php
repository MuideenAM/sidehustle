<?php
  session_start();

  if(isset($_SESSION["username"])) {
    header("Location: welcome.php");
  }
  elseif(isset($_POST["submit"])) {
    if($_POST["username"] == "Super User" && $_POST["password"] == "Pass@123") {
      $_SESSION["username"] = $_POST["username"];
      header("Location: welcome.php");
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
      p { text-align: center; }
    </style>
  </head>
  <body>
    <form action="index.php" method="post">
      <fieldset>
        <legend>Sign In</legend>
        <label for="usename">Username:</label>
        <input type="text" name="username"><br /><br />
        <label for="password">Password:&nbsp;</label>
        <input type="password" name="password"><br /><br />
        <div class="btn">
          <input type="submit" name="submit" value="Submit">&nbsp;&nbsp;
          <input type="reset" name="reset" value="Reset">
        </div>
        <p>Don't have an account, click <a href="register.php">here</a> to register.</p>
      </fieldset>
    </form>
  </body>
</html>