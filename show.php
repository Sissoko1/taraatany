<?php
session_start();
require_once('conn.php');

if($_GET['id'] && !empty($_GET['id'])){

    $id = strip_tags($_GET['id']);

    $sql = 'SELECT * FROM utilisateurs WHERE id= :id';

    $data = $pdo->prepare($sql);

    $data->bindValue(':id',$id,PDO::PARAM_INT);

    $data->execute();
    $utilisateur = $data->fetch();

    if(!$utilisateur){
        header('Location:liste.php');
        $_SESSION['message'] = "tonden non trouvé";

    }

}else{
    header('Location:liste.php');
    $_SESSION['message'] = "Désolé vous n'avez pas le droit d'y accéder";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <title>Show</title>
</head>
<body>
    <style>
        body{
            background-image:url('assets/images/tontine.png');
            background-size:cover;
        }
    </style>
    <main class="container justify-content-center">
        <div class="col-md-12 mt-5">
            <h1 class="text-primary text-capitalize">utilisateurs <?=$utilisateur['id'] ?> <?=$utilisateur['roles'] ?>  </h1>
            <p>role : <?=$utilisateur['roles'] ?> </p>
            <p>username : <?=$utilisateur['username'] ?> </p>
            <p>password : <?=$utilisateur['passwords'] ?> </p>
            <p>nom : <?=$utilisateur['nom'] ?> </p>
            <a href="liste.php" class="btn btn-primary">Retour</a>
        </div>
    </main>
</body>
</html>