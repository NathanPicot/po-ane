<?php
session_start();

if($_SESSION['connexion'] != 'on'){

    header('Location: connexion.php');

}

?>