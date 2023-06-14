<?php

require 'database-connexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM stock WHERE id= ".$id;
echo $sql;
$stmt= $pdo->prepare($sql);

$stmt->execute();




header('Location: stock.php');