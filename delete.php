<?php
session_start();
require_once('conn.php');

if($_GET['id'] && !empty($_GET['id'])){

    $id_tonden = strip_tags($_GET['id']);

    $sql = 'SELECT * FROM utilisateurs WHERE id= :id';

    $data = $pdo->prepare($sql);

    $data->bindValue(':id',$id_tonden,PDO::PARAM_INT);

    $data->execute();
    $utilisateur = $data->fetch();

    if($utilisateur){
        
       $id = strip_tags($_GET['id']);

        $sql = 'DELETE FROM utilisateurs  WHERE id=:id';

        $data = $pdo->prepare($sql);

        $data->bindValue(':id',$id,PDO::PARAM_INT);
       
        

        $data->execute();

        header('Location:liste.php');
        $_SESSION['message'] = "ce tonden a bien été supprimé";
    
        

    }else {
        header('Location:liste.php');
        $_SESSION['message'] = "tonden non trouvé";
    }

}else{
    header('Location:liste.php');
    $_SESSION['message'] = "Désolé vous n'avez pas le droit d'y accéder";
}


?>


