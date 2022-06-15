<?php
session_start();
require_once('conn.php');
//$connexion = mysqli_connect('localhost','root','');
//$db = mysqli_select_db($connexion,'taratanin');

if(!empty($_POST['role']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['nom'])){

    $role = strip_tags($_POST['role']);
    $username = strip_tags($_POST['username']);
    $password = strip_tags(sha1($_POST['password']));
    $nom = strip_tags($_POST['nom']);

    $sql= $pdo->prepare ("INSERT INTO utilisateurs(roles ,username,passwords ,nom) VALUES (?,?,?,?)");
    $params=array($role,$username,$password,$nom);
    
    
    // $utilisateur = $connexion->prepare($sql);
    // $utilisateur->value(':roles',$role,PDO::PARAM_STR);
    // $utilisateur->bindValue(':username',$username,PDO::PARAM_STR);
    // $utilisateur->bindValue(':passwords',$password,PDO::PARAM_STR);
    // $utilisateur->bindValue(':nom',$nom,PDO::PARAM_STR);

    $sql->execute($params);
    
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
    <title>Ajout toden</title>
</head>
<body>
    <style>
         body{
            background-image:url('assets/images/tontine.png');
            background-size:cover;
        }

        h1{
            margin-right:50px;
        }
        
        
        
    </style>
        <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
        <h1 class="text-primary text-center text-uppercase">Ajouter Tonden</h1>
        <form action="" method="POST" class="border shadow rounded p-3" style="width: 450px;">
                    <div class="mb-3">
                        <label for="name">Nom d'utilisateur</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="role">Type d'utilisateur</label>
                    </div>
                    <select name="role" id="" class="form-select mb-3">
                        <option value="pariba">Pariba</option>
                        <option selected value="tonden">Tonden</option>
                    </select>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a href="liste.php" class="btn btn-danger">Retour</a>
                    </div>
                </form>       
            </div>
    
</body>
</html>