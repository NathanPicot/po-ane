<?php

require 'login.php';

$request = 'SELECT * FROM Stock WHERE 1';


require_once 'database-connexion.php';
require 'database-function.php';
$stmt = $pdo->query($request);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
        <title>Gestion-Stock</title>
    </head>
    <body>


    <div class="col bg-light">

        <table class="table mr-5">
            <thead class="thead-light">
            <tr>
                <th>Plat</th>
                <th>Quantité</th>
                <th>Vendu</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            <form action="#" method="post">
                <tr>
                    <td><input type="text" name="name" class="form-control" required></td>

                    <td><input type="number" name="quantity" class="form-control" required></td>

                    <td><input type="number" name="sale" class="form-control" required></td>

                    <td><button type="submit" class=" col-12 btn btn-primary mb-3">Ajouter</button></td>

                </tr>
            </form>

            <?php
            do {

                if($_GET['id'] != $row['id']){?>

                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td> <?php echo $row['quantity']; ?> </td>
                        <td><?php echo $row['sale']; ?></td>
                        <td><a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg></a>
                            <a href="action-delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg></a>
                        </td>
                    </tr>

               <?php }else{?>
                    <tr>
                        <form action="action-edit.php?id=<?php echo $row['id'] ?>" method="post">
                            <td><input type="text" class="form-control" value="<?php echo $row['name'];?>" name="name" required></td>
                            <td> <input type="number" class="form-control" value="<?php echo $row['quantity']; ?>" name="quantity" required> </td>
                            <td><input type="number" class="form-control" value="<?php echo $row['sale']; ?>" name="sale" required></td>
                            <td><button type="submit" class="btn btn-primary">Valider</button>
                                <a href="stock.php" class="btn btn-danger">Annuler</a>
                            </td>
                        </form>

                    </tr>
                <?php }
                ?>



                <?php
            }while($row = $stmt->fetch(PDO::FETCH_ASSOC))


            ?>

            </tbody>
        </table>

    </div>
    <div>
        <a href="main.php" class="col-1 btn btn-primary">retour</a>
    </div>


    </body>
    </html>

<?php
if(isset($_POST['name'])){


    $request = "INSERT INTO stock (name, quantity, sale) VALUES ('".$_POST['name']."','".$_POST['quantity']."','".$_POST['sale']."')";
    echo $request;
    $stmt = $pdo->prepare($request);
    $stmt->execute();

    header('Location: stock.php');

}
?>