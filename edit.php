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

    if($tonden){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])){
            $nom = strip_tags($_POST['nom']);
            $prenom = strip_tags($_POST['prenom']);
            $email = strip_tags($_POST['email']);

        $sql = 'UPDATE tondenw SET nom=:nom,prenom=:prenom,email=:email WHERE id_tonden=:id_tonden';

        $data = $connexion->prepare($sql);

        $data->bindValue(':id_tonden',$id_tonden,PDO::PARAM_INT);
        $data->bindValue(':nom',$nom,PDO::PARAM_STR);
        $data->bindValue(':prenom',$prenom,PDO::PARAM_STR);
        $data->bindValue(':email',$email,PDO::PARAM_STR);
        

        $data->execute();

        header('Location:liste.php');
        $_SESSION['message'] = "ce tonden a bien été modifié";
        }
        

    }else {
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
    <title>Edition</title>
</head>
<body>
    <style>
        body{
            background-image:url('assets/images/tontine.png');
            background-size:cover;
        }
        input{
            width: 500px;
            height: 40px;
            border-radius:5px;
        }
    </style>
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    
            <h1 class="text-center p-3 text-primary text-uppercase">modifier tonden <?=$tonden['nom']?> </h1>
            <div class="col-md-6">
                <form action="" method="POST" class="border shadow rounded p-3" style='width:450px;'>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" value="<?=$tonden['nom']?>" id="nom" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="prenom">prenom</label>
                        <input type="text" name="prenom" value="<?=$tonden['prenom']?>" id="prenom" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" name="email" value="<?=$tonden['email']?>" id="email" class="form-control">
                    </div><br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Modifier</button>
                        <a href="liste.php" class="btn btn-danger">Retour</a>
                    </div><br>
                </form>
            </div>
    </div>
</body>
</html>