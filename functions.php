<?php 

function dbConnect(){
 $servername = "localhost";
 $username = "root";
 $password = "stawiarski";
 $database = "todolist";

 try {
   $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	   // set the PDO error mode to exception
	   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   //echo "Connected successfully";
	   return $conn;
 }
	catch(PDOException $e)
 {
   echo "Connection failed: " . $e->getMessage();
 }
}

//All list functions below:

  function insertList($data){
   $conn = dbConnect();
   $stmt = $conn->prepare("INSERT INTO todo (`name`) VALUES(:name)");
   $stmt->bindParam(":name", $data["name"]);  
   $stmt->execute();
  }

  function listn(){
   $conn = dbConnect();
   $stmt = $conn->prepare("SELECT * FROM todo");
   $stmt->execute();
   $listn = $stmt->fetchAll();
   return $listn;
  }

  function listById($id){
   $conn = dbconnect();
   $stmt = $conn->prepare("SELECT * FROM todo WHERE id =:id");
   $stmt->execute([":id"=>$id]);
   return $stmt->fetch();
  }

  function deleteList($id){
   $conn = dbconnect();
   $stmt = $conn->prepare("DELETE FROM todo WHERE id =:id");
   $stmt->bindParam(":id", $id);
   $stmt->execute();
  }

  function updateList(){
    $conn = dbconnect();
    $id = $_POST['id'];
    $stmt = $conn->prepare("UPDATE todo SET name = :name WHERE id = :id");
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();
  }

//All task functions below:

  function insertTask(){
   $conn = dbConnect();
   $stmt = $conn->prepare("INSERT INTO tasks (list_id, taskname, description) VALUES(:list_id, :taskname, :description)");
   $stmt->bindParam(":list_id", $_POST['id']);
   $stmt->bindParam(":taskname", $_POST["taskname"]);
   $stmt->bindParam(":description", $_POST["description"]);   
   $stmt->execute();
  }

  function task(){
   $conn = dbConnect();
   $stmt = $conn->prepare("SELECT * FROM tasks");
   $stmt->execute();
   $task = $stmt->fetchAll();
   return $task;
  }

  function taskById($id){
   $conn = dbconnect();
   $stmt = $conn->prepare("SELECT * FROM tasks WHERE id =:id");
   $stmt->execute([":id"=>$id]);
   return $stmt->fetch();
  }

  function deleteTask($id){
   $conn = dbconnect();
   $stmt = $conn->prepare("DELETE FROM tasks WHERE id =:id");
   $stmt->bindParam(":id", $id);
   $stmt->execute();
  }

  function updateTask(){
    $conn = dbconnect();
    $id = $_POST['id'];
    $stmt = $conn->prepare("UPDATE tasks SET taskname = :taskname, description = :description WHERE id = :id");
    $stmt->bindParam(":taskname", $_POST['taskname']);
    $stmt->bindParam(":description", $_POST['description']);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();
  }


?>