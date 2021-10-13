<!doctype html>

<?php
    include('functions.php');
    $lists = listn();
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Plan It Right</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php include('header.html');
?>

 <div class="text-center mt-5 mb-5">
  <a class="btn-lg btn-dark text-white" href="createList.php">Add new list +</a>
</div>
  <div class="dropdown text-right">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Filters
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Duration (ascending)</a>
    <a class="dropdown-item" href="#">Duration (descending)</a>
    <hr>
    <a class="dropdown-item" href="#">Status (Finished)</a>
    <a class="dropdown-item" href="#">Status (In-progress)</a>
    <a class="dropdown-item" href="#">Status (Not started)</a>
   </div>
  </div>



<div class="mb-5 mt-2 text-center">
  <h1>Your lists:</h1>
</div>

        <div class="css">  
         <?php foreach ($lists as $listn) { ?> 
            <div class="item card mb-5">        
               <h4 class="card-title mt-2"><?php echo $listn['name'] ?></h4>
               <p class="card-text"><?php echo $listn['date_time'] ?></p>
              <div class="row mx-auto">
               <a href="createTask.php?id=<?php echo $listn['id'] ?> "class="btn btn-dark">Add Task</a>
               <a href="list.php?id=<?php echo $listn['id'] ?> "class="btn btn-danger">Edit List</a>
             </div>
              <hr>      
            <?php foreach (taskByListId($listn['id']) as $task){ ?>
             <div class="task card">
                  <p><?php echo $task['date_time'] ?></p> 
                  <p class="card-title">Name: <?php echo $task['taskname'] ?></p>
                  <p class="card-text">Description: <?php echo $task['description'] ?></p>
                  <p class="card-text">Status: <?php echo $task['status'] ?></p>
                  <p class="card-text">Duration: <?php echo $task['duration'] ?></p>
                  <div class="row mx-auto">          
                  <a href="updateTask.php?id=<?php echo $task['id'] ?> "class="btn btn-danger">Edit Task</a>
                  <a href="deleteTask.php?id=<?php echo $task['id'] ?> "class="btn btn-dark">Delete Task</a>
                </div>
               </div>

<?php } ?>
   </div>
<?php } ?>
       
     </div>



<?php include('footer.html') ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>


