<?php
session_start();
require_once 'conn.php';

$pdo = mysqli_connect('localhost','root','');
$db = mysqli_select_db($pdo,'taratanin');

//$connexion = mysqli_connect('localhost','root','');
//$db = mysqli_select_db($connexion,'taratanin');


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $user = $_POST['username'];

    $password = $_POST['passwords'];
    $role = $_POST['roles'];
   
    $sql= "SELECT username, passwords, roles FROM utilisateurs WHERE username ='".$user."' AND roles= '".$role."' AND passwords='".$password."'";

    //$sql = "SELECT * FROM utilisateurs WHERE username ='.$user.' AND roles= '.$role.' AND passwords='.$password.'";

    //$password = $_POST['password'];
    //$roles = $_POST['role'];

    //$sql = "SELECT username, passwords,roles FROM utilisateurs WHERE username ='".$user."' AND roles= '".$roles."' AND passwords='".$password."'";
    $result = mysqli_query($pdo,$sql);
    $row = mysqli_fetch_array($result);
    // $result = $sql->execute();
    //$_SESSION["username"] = $user;
    if($row["roles"]=="pariba"){
        header('Location:pagepariba.php');

    }
    elseif ($row['role']=='tonden') {
        header('Location:pagepariba.php');

    }else{
        echo "username or password incorrect";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <title>page de connexion</title>
</head>
<body style="background-image:url('assets/images/tontine.png'); background-repeat:no-repeat; background-size:cover;">
        <a href="admin.php" class="btn btn-primary mt-5" style="float:right; margin-right:10px;">Retour</a>
        
    <div class="container d-flex justify-content-center align-items-center"style="min-height:100vh;">
    <a href="motdepasseoublier.php" class="text-center" style="margin-top:300px; margin-left:100px; color:#2435CA; text-decoration:none;">Mot de passe oublié</a>
    
    <h1 class="text-center" style="color:#2435CA; margin-right:50px;">Page de connexion</h1>
    
        <form action="" method="POST" class="border shadow p-3 rounded" style="width: 450px;">
            <div class="mb-3">
                <label for="" class="form-label">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mot de passe</label>
                <input type="password" name="passwords" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Type d'utilisateur</label>
            </div>
            <select name="roles" id="" class="form-select mb-3">
                <option value="pariba">Pariba</option>
                <option selected value="tonden">Tonden</option>
            </select>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
        
    </div>
    
</body>
</html>