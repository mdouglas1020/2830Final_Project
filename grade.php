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
  </head>
  <body>
    <?php

    button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Secret message for Grader inside</button>


    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">


        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <p id="last">Thanks for teaching me some super cool stuff! Have an awesome summer!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>



     ?>

  </body>
</html>
