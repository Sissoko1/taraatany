<?php
session_start();

require_once('conn.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>payer cotisation</title>
</head>
<body>
    <style>
      body{
        background-image: url('/assets/images/tontine.png');
        background-repeat: no-repeat;
         background-size: cover;
}
    </style>

    <img class="logo" src="assets/images/logo.png" alt="">
    <h1>payer cotisation</h1>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="img" src="assets/images/moov.png" alt="">
                <p>payer sur ce numéro: 66 66 66 66.</p>
            </div>
            <div class="col-6">
                <img class="img" src="assets/images/Orange-Money.png" alt="">
                <p>payer sur ce numéro: 66 66 66 66.</p>
            </div>
        </div>    
        <div class="row">
            <div class="col-6">
                <img class="img" src="assets/images/sama.png" alt="">
                <p>payer sur ce numéro: 66 66 66 66.</p> 
            </div>
            <div class="col-6">
                <img class="img" src="assets/images/wave.png" alt="">
                <p>payer sur ce numéro: 66 66 66 66.</p> 
            </div> 
        </div>        
    </div>
    
</body>
</html>