<?php
session_start();
if(!$_SESSION["username"]){
   
    header("Location: login2.php");
    
}
?>

success!