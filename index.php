<!doctype html>

<?php
    include('functions.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method
    $lists = listn();
    //$list = getListWithSortedTasks();
  }
  else{
      $lists = listn();
    
  }
  echo $message ;
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
 <form method="post" action="index.php">
    <div>
      <label for="duration">Sort by Duration:</label>
      <select name="sort">
        <option value="ASC">Time up!</option>
        <option value="DESC">Time down!</option>
        <option value="notstarted">Not started</option>
        <option value="inprogress">In progress</option>
        <option value="finished">Finished</option>
      </select>
    </div>
      <button type="submit" value="update">Sort</button>
  </form>



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
            <!-- foreach (taskByListId($listn['id']) as $task){ ?> -->
            <?php
            $test = taskByListId($listn['id']);
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                 $test = sortFilter($listn['id']);
             }

             foreach ($test as $task){ ?>


             <div class="task card">
                  <p class="card-text"><?php echo $task['description'] ?></p>
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


