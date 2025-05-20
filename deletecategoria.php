<?php
include ('config.php');

if ($_SERVER['REQUEST_METHOD']==='GET'){
    $id_categoria=$_GET['id_categoria'];
}
$stmt=$pdo->prepare("DELETE FROM categoria WHERE id_categoria=:id_categoria");
$stmt->bindParam(":id_categoria",$id_categoria);

if ($stmt->execute()){
    header("Location: index.php");
    exit();
}


?>