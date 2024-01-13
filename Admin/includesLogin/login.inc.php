<?php

session_start();
require_once ('dbh.inc.php');

if(isset($_POST['Login'])) {
    if(empty($_POST['UName']) || empty($_POST['Password'])){
        header("Location:index.php?msg=fill in the blanks");
    }
    else{
    $query="select * from admin where UName='".$_POST['UName']."'and Pass='".$_POST['Password']."'";
    $result = mysqli_query($conn, $query);
    if (mysqli_fetch_assoc($result)) {

        $_SESSION['User']=$_POST['UName'];
        header("Location:../indexAdmin.php?login success");
    } else {
     header("Location:../index.php?give me correct username and password");

    }

    }


}

