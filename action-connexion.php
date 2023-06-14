<?php
session_start();

if ($_POST['password'] == 'admin' and $_POST['username'] == "admin") {
    $_SESSION['connexion'] = 'on';
    echo $_SESSION['connexion'];
}

if ($_SESSION['connexion'] == 'on') {
    header('Location: main.php');
}
