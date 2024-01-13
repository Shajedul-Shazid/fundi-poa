<?php

include "../includes/dbh.inc.php";
    $message="<div class='alert alert-danger' role='alert'>Successfully Deleted !</div>";
    $ID=$_GET['idUsers'];
    $deleteSQL="DELETE FROM `users` WHERE `idUsers`='$ID'";
    $runDelete=mysqli_query($conn,$deleteSQL);
    if($runDelete==true){
        header("Location:user.php?msg=$message");
    }else{
        echo"Failed ! Please Try Again later";
    }



