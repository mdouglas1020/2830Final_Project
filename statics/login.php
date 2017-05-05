<?php
  if(isset($_POST['submit']))
  {
      $user = htmlspecialchars($_POST['user']);
      $pwd = htmlspecialchars($_POST['pwd']);

      if($user == "test")
      {
        if($pwd == "pass")
        {
          session_start();
          $_SESSION['loggedin'] = "true";
          header('Location: ../profile.php');
        }
        else {
            echo "Wrong Password";
            echo " ";
            echo "<a href=../index.html>Want to try again?</a>";
        }
      }
      else {
        echo "Wrong Username";
        echo " ";
        echo"\n\n";
        echo "<a href=../index.html>Want to try again?</a>";
  }
  }
  else {
    header('Location: ../index.html');
  }
 ?>
