 <?php 
  $id = $_GET["id"];
  require 'functions.php';
  deleteTask($id);
  header("location: index.php");
 ?>
