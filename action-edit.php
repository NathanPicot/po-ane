<?php
require 'database-connexion.php';


$sql = "UPDATE stock SET name='".$_POST['name']."', quantity=".$_POST['quantity'].", sale=".$_POST['sale']." WHERE id=".$_GET['id'];
$stmt= $pdo->prepare($sql);
$stmt->execute();

header('Location: stock.php');