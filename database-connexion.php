<?php


$pdo = new PDO("mysql:host=localhost;dbname=PO;port=8889", "root", "root");          #Connection to the database

return $pdo;

?>