<?php
session_start();
$_SESSION['connexion'] = 'off';
header('Location: main.php');

