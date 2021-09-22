<!doctype html>

<?php 

require("functions.php"); 


    $class = [];
    $data = [];
    $class["taskname"] = $data["taskname"] = "";
    $class["description"] = $data["description"] = "";
    $class["date_time"] = $data["date_time"] = "";


    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $valid = 1;
        if(isset($_POST["taskname"]) && empty($_POST["taskname"])){
            $class ["taskname"] = "is-invalid";
            $valid = 0;
        }else{
            $data["taskname"] = $_POST["taskname"];
        }

         if(isset($_POST["description"]) && empty($_POST["description"])){
            $class ["description"] = "is-invalid";
            $valid = 0;
        }else{
            $data["description"] = $_POST["description"];
        }

         if(isset($_POST["date_time"]) && empty($_POST["date_time"])){
            $class ["date_time"] = "is-invalid";
            $valid = 0;
        }else{
            $data["date_time"] = $_POST["date_time"];
        }

        if($valid == 1){
             insertTask($_POST);
             header("location: index.php");
        }
    }

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

<div class="mb-5 mt-2 container">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
    <h1>Create your task here</h1>
  </div>
<div class="row">
  <div class="col-12">  

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
        <div class="form-group">
            <label for="">Task name</label>
            <input type="text" name="taskname" class="form-control <?=$class ["taskname"]?>" value="<?=$data["taskname"]?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control <?=$class ["description"]?>" value="<?=$data["description"]?>">
        </div>

        <button class="btn btn-primary">Create</button>
        <a class="btn btn-dark" href="index.php">Back</a>

    </form>
</div>

<?php include('footer.html') ?>

</body>
</html>