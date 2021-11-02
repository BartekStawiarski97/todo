 <?php 

  $id = $_GET["id"];
  require 'header.html';
  require 'footer.html';
  require 'functions.php';
  $task = taskById($id); 
  updateTask();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Plan It Right</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

  <form name="update" method="post" action="updateTask.php">
            <div class="form-group d-flex justify-content-center mt-5">
                <input type="hidden" name="id" value="<?php echo $task['id'] ?>"/>
                <label for="">Change task here:</label>
             </div>
            <div class="text-center mb-3">
                <input class="form-control w-25 mx-auto" type="text" name="description" placeholder="description" value="<?php echo $task['description'] ?>" required>
              </div>
            <div class="text-center mb-3">
                <select type="text" name="status" class="form-control w-25 mx-auto <?=$class ["status"]?>" value="<?=$data["status"]?>">
               <option class="bg-danger text-center text-danger">Not started</option>
               <option class="bg-warning text-center text-warning">In progress</option>
               <option class="bg-success text-center text-success">Finished</option>
             </select>
              </div>
            <div class="text-center mb-3">
             <input type="number" id="appt" name="duration" class="form-control w-25 mx-auto <?=$class ["duration"]?>" value="<?=$data["duration"]?>">
             </div> 

           <div class="text-center">
            <input type="submit" value="Update" class="mt-2 btn btn-dark">
            <a href="index.php"><input type="button" class="mt-2 btn btn-danger" value="Back"></a>
           </div>
        </form>

</body>
</html>