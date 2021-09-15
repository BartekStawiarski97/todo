<!doctype html>

<?php
    include('functions.php');
    $lists = listn();
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


         <?php foreach ($lists as $listn) { ?>       
           <div class="card text-center">            
            <div class="card-body">
                <h4 class="card-title"><?php echo $listn['name'] ?></h4>
                <p class="card-text"><?php echo $listn['description'] ?></p>
                <p class="card-text"><?php echo $listn['date_time'] ?></p>
                <a href="task.php?id=<?php echo $listn['id'] ?> "class="btn btn-dark">Edit List</a>
            </div>
        </div>

<?php
}
?>

<?php include('footer.html') ?>


</body>
</html>