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
        
       $id_tonden = strip_tags($_GET['id_tonden']);

        $sql = 'DELETE FROM tondenw  WHERE id_tonden=:id_tonden';

        $data = $connexion->prepare($sql);

        $data->bindValue(':id_tonden',$id_tonden,PDO::PARAM_INT);
       
        

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


