<?php
  session_start();
  $username = "";

  if(isset($_SESSION["username"])) {   
    $username = $_SESSION["username"];
    
    if(isset($_POST["submit"])) {
      unset($_SESSION["username"]);
      
      header("Location: index.php");
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Session Demo Welcome</title>
    <style>
      input {
        background: none!important;
        border: none;
        padding: 0!important;
        color: #069;
        text-decoration: underline;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <h1>Hello <?php echo $username; ?> !</h1>
    <p>You are hereby welcome to this home of yours. Thanks for coming.</p>
    <br /><br /><br />
    <?php
      if($username) {
        echo "<form action='welcome.php' method='post'>";
        echo "<input type='submit' name='submit' value='Click here to avoid my automatic login.'>";
        echo "</form>";
      }
    ?>
  </body>
</html>