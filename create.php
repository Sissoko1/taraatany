<?php
session_start();
require_once('conn.php');

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])){

    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $email = strip_tags($_POST['email']);

    $sql = 'INSERT INTO tondenw(nom,prenom,email) VALUES(:nom,:prenom,:email)';
    
    $tonden = $connexion->prepare($sql);
    $tonden->bindValue(':nom',$nom,PDO::PARAM_STR);
    $tonden->bindValue(':prenom',$prenom,PDO::PARAM_STR);
    $tonden->bindValue(':email',$email,PDO::PARAM_STR);

    $tonden->execute();
    
    $_SESSION['message'] = "ce tonden a ete ajouter a la BD ";
    header('Location:liste.php');

}else{
    $_SESSION['message'] = " vous devez remplir tous les champs";
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <title>Creer</title>
</head>
<body>
    <style>
         body{
            background-image:url('assets/images/tontine.png');
            background-size:cover;
        }
        form{
            margin-left:300px;
        }
        h1{
            margin-left: 300px;
            color:#2435CA;
        }
        
    </style>
    <main class="container mt-5">
        <div class="col-md-12">
            <h1>Ajouter tondenw</h1>
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="nom" id="name" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label for="price">Prenom</label>
                        <input type="text" name="prenom" id="price" class="form-control">
                    </div> <br>
                    <div class="form-group">
                        <label for="stock">email</label>
                        <input type="text" name="email" id="stock" class="form-control">
                    </div><br>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Creer</button>
                        <a href="liste.php" class="btn btn-danger">Retour</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>