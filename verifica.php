<?php
session_start();
$email="mel@123.com";
$senha=123;
$emailrecebido=$_POST["email"];
$senharecebida=$_POST["senha"];
if($email==$emailrecebido && $senha==$senharecebida){
    $_SESSION['logado']=1;
    header('location:index.php');
}
else{
    $_SESSION['logado']=0;
    header("location:login.php");
    

}
?>