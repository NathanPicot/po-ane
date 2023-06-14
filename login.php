<?php
session_start();

if($_SESSION['connexion'] !== 'on'){

    header('Location: index.php');

}

?>