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
      <!-- end navbar row -->
      <div class="jumbotron">
        <div class="container-fluid">
          <!-- row 1 -->
          <div class="row">
            <!-- Panel 1 -->
            <div class="col-md-4">
              <div class="panel panel-danger">
                <div class="panel-heading">Favorites</div>
                <div class="panel-body">
                  <a class="btn btn-danger btn-block" target="_blank" href="https://www.w3schools.com"> W3schools</a>
                  <a class="btn btn-primary btn-block" target="_blank" href="https://courses.missouri.edu/">Canvas/Blackboard</a>
                  <a class="btn btn-danger btn-block" target="_blank" href="https://www.reddit.com"> Reddit</a>
                  <a class="btn btn-primary btn-block" target="_blank" href="https://www.nhl.com">NHL Network</a>
                  <a class="btn btn-danger btn-block" target="_blank" href="https://www.cnn.com">News</a>
                </div>
              </div>
              <div class="panel panel-danger">
                <div class="panel-heading">My Stuff</div>
                <div class="panel-body">
                  <a class="btn btn-danger btn-block" href="videos.php">Go to Your Videos</a>
                  <a class="btn btn-primary btn-block" href="pictures.php">Go to Your Pictures</a>
                </div>
              </div>
              <div class="pane panel-danger">
                <div class="panel-heading">VIP ONLY</div>
                <div class="panel-body">
                  <a href="vip.php" class="btn btn-block btn-danger">VIPs only beyond this point</a>
                  <a href="require.php" class="btn btn-block btn-primary">Requirements sheet</a>
                </div>
              </div>
            </div>
            <!-- Panel 2 -->

              <div class="col-md-8">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

  <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                      <div class="item active">
                        <img src="images\sharp.JPG" alt="Sharp" style="50%";>
                      </div>
                      <div class="item">
                        <img src="images\colorado.JPG" alt="Col" style="50%";>
                      </div>
                      <div class="item">
                        <img id="rotate" src="images\snow.JPG" alt="Snow" style="50%";>
                      </div>
                      <div class="item">
                        <img src="images\boys.jpg" alt="Boys" style="50%";>
                      </div>

                    </div>

  <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

      </div>


            <!-- Panel 3 -->

          <!-- row 2 -->

</div>






      </div>
    </div>
  </body>
</html>
