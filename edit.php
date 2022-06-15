<?php
session_start();
require_once('conn.php');

if($_GET['id_pariba'] && !empty($_GET['id_pariba'])){

    $id_pariba = strip_tags($_GET['id_pariba']);

    $sql = 'SELECT * FROM pariba WHERE id_pariba= :id_pariba';

    $data =  $pdo->prepare($sql);

    //$data->bindValue(':id',$id,PDO::PARAM_INT);
    //$data->(:,$id,PDO::PARAM_INT);

    $data->execute();
    $pariba = $data->fetch();

    if($pariba){
        if(!empty($_POST['nom']) && !empty($_POST['prenom'])  && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['adresse']) && !empty($_POST['telephone'])){
            $nom = strip_tags($_POST['nom']);
            $prenom = strip_tags($_POST['prenom']);
            $email = strip_tags($_POST['email']);
            $passwors = strip_tags($_POST['password']);
            $adresse = strip_tags($_POST['adresse']);
            $telephone = strip_tags($_POST['telephone']);
           

        $sql = "UPDATE pariba SET nom=:nom,prenom=:prenom,email=:email,password=:password,adresse=:adresse,telephone=:telephone WHERE id_pariba=:id_pariba";

        $data = $pdo->prepare($sql);

        // $data->bindValue(':role',$role,PDO::PARAM_INT);
        // $data->bindValue(':username',$username,PDO::PARAM_STR);
        // $data->bindValue(':nom',$nom,PDO::PARAM_STR);
        

        $data->execute();

        header('Location:pagepariba.php');
        $_SESSION['message'] = "ce tonden a bien été modifié";
        }
        

    }else {
        header('Location:pagepariba.php');
        $_SESSION['message'] = "tonden non trouvé";
    }

}else{
    header('Location:pagepariba.php');
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
    
            <h1 class="text-center p-3 text-primary text-uppercase">modifier tonden <?=$pariba['nom']?> </h1>
            <div class="col-md-6">
                <form action="" method="POST" class="border shadow rounded p-3" style='width:450px;'>
                    <div class="mb-3">
                        <label for="nom" class="form-label">nom</label>
                        <input type="text" name="nom" value="<?=$pariba['nom']?>" id="nom" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">prenom</label>
                        <input type="text" name="prenom" value="<?=$pariba['prenom']?>" id="prenom" class="form-control">
                    </div><br>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" name="email" value="<?=$pariba['email']?>" id="email" class="form-control">
                    </div><br>
                    <div class="mb-3">
                        <label for="password" class="form-label">mot de passe</label>
                        <input type="password" name="password" value="<?=$pariba['password']?>" id="password" class="form-control">
                    </div><br>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">adresse</label>
                        <input type="text" name="adresse" value="<?=$pariba['adresse']?>" id="adresse" class="form-control">
                    </div><br>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">telephone</label>
                        <input type="tel" name="telephone" value="<?=$pariba['telephone']?>" id="telephone" class="form-control">
                    </div><br>
                    <div class="mb-3">
                        <a href="pagepariba.php" class="btn btn-success">Modifier</a>
                        <a href="pagepariba.php" class="btn btn-danger">Retour</a>
                    </div><br>
                </form>
            </div>
    </div>
</body>
</html>