<?php
include ('config.php');

if ($_SERVER['REQUEST_METHOD']==='GET'){
    $id=$_GET['id'];
}
$stmt=$conn->prepare("DELETE FROM produto WHERE id=:id");
$stmt->bindParam(":id",$id);

if ($stmt->execute()){
    header("Location: index.php");
    exit();
}


?>