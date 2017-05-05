<?php
    session_start();
    if(!isset($_SESSION['loggedin']))
    {
      header('Location: index.html');
    }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GIVE ME AN A:)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="statics\script.js"></script>
    <link rel="stylesheet" href="statics/stylesheet.css"\>
  </head>
  <body>
    <script>
    $(function(){
      $("#username").html("Michael");
      $.get("statics/vip.html",        // GET REQUEST
            function(content){
              $("#content").html(content);
      });
    });

    </script>
    <style>
    #rotate{
            transform: rotate(270deg);
    }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <!-- navbar -->
      <div class="row">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">

            <div class="navbar-header">
              <div class="navbar-brand" class="clock">
                <span id='hours'></span><span id='min'></span><span id='sec'></span><span id='ampm'></span>
              </div>
            </div>

            <ul class="nav navbar-nav">
              <li style="width: 200px;">
                <a></a>
              </li>
              <li>
                <a id='hello'></a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="profile.php">Home</a></li>
              <li><a href="statics/logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
            </ul>
          </div>
        </nav>
      </div>


      <div class="jumbotron">
        <div id="content">

        </div>



      </div>
    </div>
  </body>
</html>
