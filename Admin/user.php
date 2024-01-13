<?php include
"up.php";

$msg="";

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}

include "phpAction/controller.php";
include "phpAction/model.php";

$modelUserCont=new model();
$runSelect=$modelUserCont->userSelect();
$countUser=$runSelect->num_rows;

?>


<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sign Up  Page Registration Details</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-----table content---->
        <table class="table table-bordered">
            <?php echo $msg; ?>
            <div class='alert alert-danger' role='alert'><?php  echo $countUser; ?></div>
            <thead>
            <tr>

                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php

          while($dataUser=$runSelect->fetch_assoc()){

                ?>

                <tr>
                    <td><?php echo $dataUser['idUsers']; ?></td>
                    <td><?php echo $dataUser ['uidUsers']; ?></td>
                    <td><?php echo $dataUser ['emailUsers']; ?></td>
                    <td><a class="btn btn-danger" href="userDelete.php?idUsers=<?php echo $dataUser['idUsers'];?>">Delete</a></td>
                </tr>
            <?php  }  ?>
            </tbody>
        </table>

        <!-- Content Row -->

    </div>
    <!-- End of Main Content -->












    <?php include "down.php" ?>
