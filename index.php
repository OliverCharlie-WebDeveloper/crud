<?php
    require_once "php/init.php";


?>

<!doctype html>
<html lang="en">
    <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

          <title>Todo List</title>
    </head>
  <body>

      <nav class="navbar navbar-dark bg-dark shadow">
        <span class="navbar-brand mb-0 h1">Todo List App</span>
      </nav>

      <div class="container mt-5">
        <?php 
        insertT();
        deleteT();
        editT();      
         ?>
        <form action="" method="GET">
          <div class="row">
            <div class="col-md-7 form-group">
              <input class="form-control" type="text" name="items" placeholder="Insert a new Task" required/> </br>
              <div class="col-md">
                 <input class="btn btn-success" type="submit" value="Add Task">
              </div>
            </div>
          </div>
        </form>

        <?php 
        $view = new view();
        $view->viewData();
        $view->viewCompleted();
          ?>

      </div>


















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>