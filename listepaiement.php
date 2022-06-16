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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    
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
                <h1 class="text-primary">liste des paiement</h1>
                <table class="table mt-3 bg-#FEF9F9">
                    <thead>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Etat</th>
                    </thead>

                    <tbody>
                        <?php foreach ($tondenw as $tonden ) { ?>
                        <tr>
                            <td><?=$tonden['id_tonden']?></td>
                            <td><?=$tonden['nom']?></td>
                            <td><?=$tonden['prenom']?></td>
                            <td><?=$tonden['email']?></td>
                            <td class='update'>
                                <?php if ()?>
                                <a href="etat.php?id_tonden=<?$tonden['id_tonden']?>" class="text-success"><i class="fa fa-check-circle-o green-color"></i></a>

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