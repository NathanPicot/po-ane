<?php

require 'login.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
<div>
    <h1 class="text-center p-5">Dashboard</h1>
</div>
<form class="offset-4 col-4 mt-5" action="" method="post">
    <div class="row">
        <div class="mb-3 col-sm">
            <a href="stock.php" class=" col-12 btn btn-primary mb-3 p-5 font-size">Gestion du Stock</a>
        </div>
        <div class="mb-3 col-sm">
            <a href="po.php" class=" col-12 btn btn-primary mb-3 p-5 font-size">Mode PO</a>
        </div>
    </div>
    <div>
        <div class="mb-3 col-sm">
            <a href="action-disconnect.php" class=" col-12 btn btn-primary mb-3 p-2 font-size">Déconexion</a>
        </div>
    </div>

</form>


</body>
</html>
<style>
    .font-size {
        font-size: 16px;
    }
</style>