 <?php 

  $id = $_GET["id"];
  require 'header.html';
  require 'footer.html';
  require 'functions.php';
  $listn = listById($id); 
  updateList();

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

  <form name="update" method="post" action="updateList.php">
            <div class="form-group d-flex justify-content-center mt-5">
                <input type="hidden" name="id" value="<?php echo $listn['id'] ?>"/>
                <label for="">Change list name and description here:</label>
             </div>
            <div class=text-center>
                <input class="form-control w-25 mx-auto" type="text" name="name" placeholder="List name" value="<?php echo $listn['name'] ?>" required>
                <input class="form-control w-25 mx-auto" type="text" name="description" placeholder="List description" value="<?php echo $listn['description'] ?>" required>
              </div>
            </div>

           <div class="text-center">
            <input type="submit" value="Update" class="mt-2 btn btn-dark">
            <a href="index.php"><input type="button" class="mt-2 btn btn-danger" value="Back"></a>
           </div>
        </form>

</body>
</html>