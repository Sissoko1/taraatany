<?php
session_start();
require_once 'conn.php';
$connexion = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connexion,'taratanin');

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $user = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT username, password,role FROM utilisateurs WHERE username ='".$user."' AND role= '".$role."' AND password='".$password."'";
    $result = mysqli_query($connexion,$sql);
    $row = mysqli_fetch_array($result);


    $_SESSION['username'] = $user;
    if($row['role']=="pariba"){
        header('Location:pagepariba.php');
    }elseif ($row['role']=='tonden') {
        header('Location:connextonden.php');
    }else{
        $message = "username or password incorrect";
    }



}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <title>page de LOGIN</title>
</head>
<body style="background-image:url('assets/images/tontine.png'); background-repeat:no-repeat; background-size:cover;">
    <div class="container d-flex justify-content-center align-items-center"style="min-height:100vh;">
    <h1 class="text-center text-uppercase" style="color:#2435CA;">Page de connexion</h1>
        <form action="" method="POST" class="border shadow p-3 rounded" style="width: 450px;">
            <div class="mb-3">
                <label for="" class="form-label">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Type d'utilisateur</label>
            </div>
            <select name="role" id="" class="form-select mb-3">
                <option value="pariba">Pariba</option>
                <option selected value="tonden">Tonden</option>
            </select>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>

    </div>
</body>
</html>