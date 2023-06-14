<?php



function getTable($table){

    require 'database-connexion.php';

    $request = 'SELECT * FROM '.$table .' WHERE 1';
    $stmt = $pdo->query($request);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;

}

?>