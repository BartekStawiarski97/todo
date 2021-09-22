<!doctype html>

<?php
    $id = $_GET["id"];
    require 'functions.php';
    $listn = listById($id);  
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Plan It Right</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php include('header.html') ?>

    <div class="content mt-2">     
        <div>
            <div>
                <div class="text-center mb-4">
                    <div>
                        <h4>Name: <?php echo $listn['name'] ?></h4>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
   
   <div class="text-center">
       <a class="btn-lg btn-dark text-white" href="updateList.php?id=<?= $listn["id"]?>">Update list</a>
       <a class="btn-lg btn-danger text-white" href="deleteList.php?id=<?= $listn["id"]?>">Delete list</a>
       <a class="btn-lg btn-danger text-white" href="index.php">Cancel</a>
    </div>
   <hr>



<?php include('footer.html') ?>

</body>
</html>