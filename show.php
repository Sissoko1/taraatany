<?php
session_start();
require_once('conn.php');

if($_GET['id_tonden'] && !empty($_GET['id_tonden'])){

    $id_tonden = strip_tags($_GET['id_tonden']);

    $sql = 'SELECT * FROM tondenw WHERE id_tonden= :id_tonden';

    $data = $connexion->prepare($sql);

    $data->bindValue(':id_tonden',$id_tonden,PDO::PARAM_INT);

    $data->execute();
    $tonden = $data->fetch();

    if(!$tonden){
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
            <h1 class="text-primary text-capitalize">tonden <?=$tonden['id_tonden'] ?> <?=$tonden['nom'] ?>  </h1>
            <p>Nom : <?=$tonden['nom'] ?> </p>
            <p>Prenom : <?=$tonden['prenom'] ?> </p>
            <p>Email : <?=$tonden['email'] ?> </p>
            <a href="liste.php" class="btn btn-primary">Retour</a>
        </div>
    </main>
</body>
</html>