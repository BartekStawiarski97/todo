<!doctype html>

<?php
    include('functions.php');
    $lists = listn();
    $tasks = task();
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Plan It Right</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php include('header.html');
?>

<div class="mt-2 text-center mt-5 mb-5">
  <a class="btn-lg btn-dark text-white" href="createList.php">Add new list +</a>
</div>


<div class="mb-5 mt-2 text-center">
  <h1>Your lists:</h1>
</div>

       <div class="col-12">
        <div class="row d-flex justify-content-around">    
         <?php foreach ($lists as $listn) { ?> 
           <div class="card text-center mb-3">            
            <div class="card-body">
                <h4 class="card-title">List:</h4>
                <p class="card-text"><?php echo $listn['name'] ?></p>
                <p class="card-text"><?php echo $listn['date_time'] ?></p>
                <a href="createTask.php?id=<?php echo $listn['id'] ?> "class="btn btn-dark">Add Task</a>
                <a href="list.php?id=<?php echo $listn['id'] ?> "class="btn btn-danger">Edit List</a>
            </div>
          </div>

<?php } ?>
       </div>
      </div>

      <div class="col-12">
        <div class="row d-flex justify-content-around">    
         <?php foreach ($tasks as $task) { ?> 
           <div class="card text-center mb-3">            
            <div class="card-body">
                <h5 class="card-title">Task:</h5>
                <p class="card-title"><?php echo $task['taskname'] ?></p>
                <p class="card-text"><?php echo $task['description'] ?></p>
                <p class="card-text"><?php echo $task['date_time'] ?></p>
                <a href="task.php?id=<?php echo $task['id'] ?> "class="btn btn-danger">Edit Task</a>
            </div>
          </div>

<?php } ?>
       </div>
      </div>


<?php include('footer.html') ?>


</body>
</html>