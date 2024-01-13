<?php


include 'phpAction/controller.php';
include 'phpAction/model.php';

$ID=$_GET['id'];
$msg="<div class ='alert alert-primary' role ='alert'>Successfully Update !</div>";


$modelObjSelectForUpdate=new model();
$resultForSelectUpdate=$modelObjSelectForUpdate->hardwareSelectForUpdate($ID);
$dataSelectForUPdate=$resultForSelectUpdate->fetch_assoc();

if(isset($_POST['harewareUpdate'])){
    $modelObjForUpdate=new model();
    $resultHardwareUpdate=$modelObjForUpdate->harewareUpdate($ID);
    if($resultHardwareUpdate==true){
        header("Location:hardware.php?msg=$msg");
    }
    else{
        echo "Failed ! Please Try again";
    }

}



?>
<?php include 'up.php';?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hardware form updated page</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-----update form for fundi content---->
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Business Name</label>
                        <input value="<?php echo $dataSelectForUPdate['buisnessname']; ?>" name="buisnessname" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email</label>
                        <input value="<?php echo $dataSelectForUPdate ['email']; ?>" name="email" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input value="<?php echo $dataSelectForUPdate ['mobilenumber']; ?>" name="mobilenumber" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Dealers In</label>
                        <input value="<?php echo $dataSelectForUPdate ['dealersin']; ?>" name="dealersin" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Location</label>
                        <input value="<?php echo $dataSelectForUPdate ['location']; ?>" name="location" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>MPESA Verification Code</label>
                        <input value="<?php echo $dataSelectForUPdate ['mpga_code']; ?>" name="mpga_code" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Checkbox Value</label>
                        <input value="<?php echo $dataSelectForUPdate ['agreed']; ?>" name="agreed" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input name="harewareUpdate" value="UPDATE" class="form-control btn btn-success" type="submit">
                    </div>
                </div>
            </div>
        </form>
        <!-- Content Row -->

    </div>
    <!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include "down.php"?>
