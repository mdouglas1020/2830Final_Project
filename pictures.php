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
     <title>My Videos</title>
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
     <style media="screen">
       img {
         height: 500px;
        width: 800px;
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
               <li class="active"><a href="../profile.php">Home</a></li>
               <li style="width: 200px;">
                 <a></a>
               </li>
               <li>
                 <a id='hello'></a>
               </li>
             </ul>
             <ul class="nav navbar-nav navbar-right">
               <li><a href="statics/logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
             </ul>
           </div>
         </nav>
       </div>
       <!-- end navbar row -->
       <div class="jumbotron">
         <div class="container-fluid">
           <div class="row">
             <?php

  foreach(new DirectoryIterator(images) as $file) {
    if($file->isFile()){
      switch ($file->getExtension()) {
        case "jpg":
          echo "<img src='images/" . $file . "' alt='jpg didnt work'/>";
          break;


        case "jpeg":
          echo "<img src='images/"  . $file . "' alt='jpeg didnt work'/>";
          break;


          case "png":
          echo "<img src='images/"  . $file ."' alt= 'png didnt work'/>";
          break;


          case "gif":
            echo "<img src='images/"  . $file . "' alt='gif didnt work'/>";
            break;
      }
  }
}
?>


           </div>
         </div>
       </div>
