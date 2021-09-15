<!doctype html>

<?php 

require("functions.php"); 


    $class = [];
    $data = [];
    $class["name"] = $data["name"] = "";
    $class["description"] = $data["description"] = "";
    $class["date_time"] = $data["date_time"] = "";

    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $valid = 1;
        if(isset($_POST["name"]) && empty($_POST["name"])){
            $class ["name"] = "is-invalid";
            $valid = 0;
        }else{
            $data["name"] = $_POST["name"];
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
             insertList($_POST);
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
    <h1>Create your list here</h1>
  </div>
<div class="row">
  <div class="col-12">  

    <form action="" method="POST">
        <div class="form-group">
            <label for="">List name</label>
            <input type="text" name="name" class="form-control <?=$class ["name"]?>" value="<?=$data["name"]?>">
        </div>
        <div class="form-group">
            <label for="">List description</label>
            <textarea class="form-control <?=$class ["description"]?>" name="description" ><?=$data["description"]?></textarea>
        </div>

        <button class="btn btn-primary">Create</button>
        <a class="btn btn-dark" href="index.php">Back</a>

    </form>
</div>

<?php include('footer.html') ?>

</body>
</html>