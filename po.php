<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="30;url=#"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gestion-Stock</title>


</head>
<body>

<div>
    <h1 class="text-center p-5">Mode Porte Ouvertes</h1>
</div>

<?php
require 'login.php';

require 'database-connexion.php';
$count_request = 'SELECT COUNT(*) FROM Stock WHERE 1';
$count = $pdo->query($count_request);
$count = $count->fetch(PDO::FETCH_ASSOC);


require 'database-connexion.php';
$request = 'SELECT * FROM Stock WHERE 1';
$stmt = $pdo->query($request);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($count['COUNT(*)'] > 0) {
    do {
        ?>

        <div class="row">
            <div class="col-12">
                <?php
                if ($row['quantity'] - $row['sale'] > 0) {
                    ?>
                    <a href="action-update.php?id=<?php echo $row['id'] ?>&sale=<?php echo $row['sale'] ?>"
                       class="col-4 offset-4 btn btn-primary mb-3 p-5 font-size">
                        <?php echo $row['name']; ?>
                    </a>
                    <?php
                } else {
                    ?>

                    <a href="action-update.php?id=<?php echo $row['id'] ?>&sale=<?php echo $row['sale'] ?>"
                       class="col-4 offset-4 btn btn-warning disabled mb-3 p-5 font-size">
                        <?php echo $row['name']; ?>
                    </a>
                    <?php
                }
                ?>
                <label>Reste <?php echo $row['quantity'] - $row['sale'] ?> / <?php echo $row['quantity'] ?></label>
            </div>
        </div>
        <?php
    } while ($row = $stmt->fetch(PDO::FETCH_ASSOC));
}
?>

<div>
    <a href="main.php" class="col-1 btn btn-primary">retour</a>
</div>

</body>