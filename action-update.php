<?php

require 'database-connexion.php';


$sql = "UPDATE stock SET sale=" . $_GET['sale'] + 1 . " WHERE id=" . $_GET['id'];
$stmt = $pdo->prepare($sql);
$stmt->execute();

header('Location: po.php');
?>