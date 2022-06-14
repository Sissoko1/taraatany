<?php
session_start();
require_once('conn.php');

$sql = 'SELECT * FROM tondenw';
$data = $connexion->prepare($sql);

$data->execute();

$tondenw = $data->fetchAll(PDO::FETCH_ASSOC);





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <title>liste tondenw</title>
</head>
<body>
    <style>
         body{
            background-image:url('assets/images/tontine.png');
            background-size:cover;
        }
    </style>
    <div class="container">
        <div class="row">
            <section class="mt-5 col-md-12">
                <?php
                
                if($_SESSION['message']){
                ?>  

                <div class="alert">
                    <p class="alert alert-success">
                        <?php 
                        echo $_SESSION['message'];
                            $_SESSION['message'] = "";
                        ?>
                    </p>
                </div>

                <?php    
                
                }
                
                
                ?>
                <h1 class="text-primary">Liste tonden</h1>
                <a href="create.php" class="btn btn-primary">Ajouter tondenw</a>
                <table class="table mt-3 bg-#FEF9F9">
                    <thead>
                        <th>ID</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>email</th>
                        <th>actions</th>
                    </thead>

                    <tbody>
                        <?php foreach ($tondenw as $tonden ) { ?>
                        <tr>
                            <td><?=$tonden['id_tonden']?></td>
                            <td><?=$tonden['nom']?></td>
                            <td><?=$tonden['prenom']?></td>
                            <td><?=$tonden['email']?></td>
                            <td class='update'>
                                <a href="show.php?id_tonden=<?=$tonden['id_tonden']?>" class="text-primary"><i class="fa-regular fa-eye"></i></a>
                                <a href="edit.php?id_tonden=<?=$tonden['id_tonden']?>" class="text-success"><i class="fa-solid fa-pen"></i></a>
                                <a href="delete.php?id_tonden=<?=$tonden['id_tonden']?>" class="text-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>