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
    <title>Your Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Luckiest Guy' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="statics/script.js"></script>
    <link rel="stylesheet" href="statics/stylesheet.css"\>
    <script>
    $(function(){
      $("#username").html("Michael");
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
              <li style="width: 300px;">
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
      <div>
        <h1>Completed Requirements</h1>
      </div>

      <ul id="myUL">

        <li>5 Required HTML tags</li>
        <li>Well structured and logically organized</li>
        <li>Publicly available content and privately available content</li>
        <li>Log in function</li>
        <li>Using GET and POST</li>
        <li>Form elements used past the long in</li>
        <li>Feedback to input</li>
        <li>Multiple Photos page</li>
        <li>Multiple Youtube videos</li>
        <li>JavaScript is used</li>
        <li>jQuery and Bootstrap.....CHECK</li>
        <li>Document with details to where everything is completed at and link</li>
      </ul>
