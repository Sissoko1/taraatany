<?php
session_start();
require_once 'conn.php';

$sname = 'localhost';
$uname = 'root';
$password = '';
$db_name = 'taratanin';


$conn = mysqli_connect ($sname,$uname,$password,$db_name);

if(!$conn){
    echo "connexion echouée";
}
if (isset($_POST['username'])&& isset ($_POST['password']) && isset($_POST['role'])){
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $username=test_input($_POST['username']);
    $password=test_input($_POST['password']);
    $role=test_input($_POST['role']);

    if(empty($username)){
        header('location:connexion.php?error=User name is requiered');
    }else if (empty($password)){
        header('location:connexion.php?error=password is requiered');
    }else {
        //hasting password
        $password=md5($password);
        $sql="SELECT * FROM utilisateurs WHERE username='$username' AND password='$password' AND role=''";
        $result=mysqli_querry($conn, $sql);
        if(mysqli_num_rows($result)===1){
            $row=mysqli_fetch_assoc($result);
            if($row['password']===$password && $row['role']==$role){
            $_SESSION['nom']=$row['nom'];
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$row['username'];
            header('Location:pagepariba.php');
            }else{
                header('Location:connexion.php?error User name is incorrect');
            }

        }else {
            header('Location:connexion.php?error User name or passwors is incorect');
        }
        
    }
}else {
    header('Location:connexion.php');
}
?>