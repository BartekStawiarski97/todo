 <?php 
  $id = $_GET["id"];
  require 'functions.php';
  deleteList($id);
  header("location: index.php");
 ?>
