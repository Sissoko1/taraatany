<?php
session_start();
require_once('conn.php');
echo 'connexion a la base etablie';

if(isset($_POST['envoyer']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['messages'])){
  //if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['messages'])){

    $nom = strip_tags($_POST['nom']);
    $email = strip_tags($_POST['email']);
    $message = strip_tags($_POST['messages']);

    $sql= $pdo->prepare ("INSERT INTO contact(nom ,email, messages ) VALUES (?,?,?)");
    $params=array($nom,$email,$message);
    
    
    $sql->execute($params);
    
    $_SESSION['message'] = "message envoyer ";
    header('Location:admin.php');
    




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
    <title>Contact</title>
</head>
<body style="background-image:url('assets/images/tontine.png'); background-repeat:no-repeat; background-size:cover;">
    <div class="container d-flex justify-content-center align-items-center"style="min-height:100vh;">
        <h1 class="text-center text-uppercase" style="color:#2435CA;margin-right:50px;">Page de contact</h1>
        <form class="border shadow p-3 rounded" style="width: 450px;">
          <div class="mb-3">
            <label class="form-label" for="nom">Nom</label>
            <input class="form-control" id="nom" type="text" name="nom" placeholder="nom" />
          </div>

          <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" placeholder="votre email" />
          </div>
      
         
          <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" name="messages" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
          </div>
          <div class="d-grid">
          <button class="btn btn-primary btn-lg" name="envoyer" type="submit">Envoyer</button>
          </div>
      
        </form>
      
      </div>
</body>
</html>