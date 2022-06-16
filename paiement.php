<?php
session_start();
require_once('conn.php');

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['montant'])&& !empty($_POST['dates'])){

    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $email = strip_tags($_POST['montant']);
    $email = strip_tags($_POST['dates']);

    $sql = 'INSERT INTO cotisation(nom,prenom,montant,dates) VALUES(:nom,:prenom,:montant,:dates)';
    
    $utilisateur = $connexion->prepare($sql);
    $utilisteur->bindValue(':nom',$nom,PDO::PARAM_STR);
    $utilisateur->bindValue(':prenom',$prenom,PDO::PARAM_STR);
    $utilisateur->bindValue(':montant',$email,PDO::PARAM_STR);
    $utilisateur->bindValue(':dates',$email,PDO::PARAM_STR);

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
    <link rel="stylesheet" href="assets/css/payer.css">
    <title>paiement</title>
</head>
<body>
    <a href=""><img class="retour" src="/assets/images/retour.png" width="50px" alt=""></a>
    <img class="logo" src="assets/images/logo.png" width="100px" alt="">
    <h1>paiement</h1>
    <form class="payer border shadow rounded p-5 " style="width: 500px;" action="" method="POST">
      <div class="mb-3">
      <label for="">mode de paiement:</label>
      <select name="mode" id="">
            <option selected value=""></option>
            <option value="">ORANGE-MONEY</option> 
            <option value="">MOOV-MONEY</option> 
            <option value="">SAMA-MONEY</option> 
            <option value="">WAVE</option>
       </select>
      </div>
      <div class="mb-0">
            <label for="id"class="form-label">id :</label> 
            <input  type="number" name="id"class=" form-control" >
      </div>  
        <div class="mb-0">
            <label for="" class="form-label">nom :</label>
            <input class=" form-control" type="text" name="nom">
        </div>
        <div class="mb-0">
            <label for="" class="form-label">prenom :</label>
            <input class=" form-control" class="prenom" type="text" name="prenom">
        </div>
        <div class="mb-0">
            <label for="" class="form-label">Montant :</label>
            <input class=" form-control" class="montant" type="number" name="montant"><br>
        </div>
        <div class="mb-0" >
            <label for="" class="form-label">date :</label>
            <input class=" form-control" class="date"  type="date" name="date">
        </div>
       
     
        <div class="bouton">
            <button  type="button" class="btn btn-success btn-sm">PAYER</button>
            <button id="annuler"  type="button" class="btn btn-danger btn-sm">ANNULER</button>
        </div>

    </form>
    
</body>
</html>