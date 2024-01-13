<?php


include 'phpAction/controller.php';
include 'phpAction/model.php';

$jobsID=$_GET['id'];
$msg="<div class ='alert alert-primary' role ='alert'>Successfully Update !</div>";


$modelObjForJobsSelect=new model();
$selectData=$modelObjForJobsSelect->jobsSelectForUpdate($jobsID);
$getSelectData=$selectData->fetch_assoc();

if(isset($_POST['harewareUpdate'])){
    $modelObjForJobsUpdate=new model();
    $updateResult=$modelObjForJobsUpdate->jobsUpdate($jobsID);
    if($updateResult==true){
        header("Location:jobs.php?msg=$msg");
    }else{
        echo "Failed ! Please Try Again";
    }
}


?>
<?php
include "up.php";?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">jobs form updated page</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-----update form for fundi content---->
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Name</label>
                        <input value="<?php echo $getSelectData['name']; ?>" name="name" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email</label>
                        <input value="<?php echo $getSelectData ['email']; ?>" name="email" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input value="<?php echo $getSelectData ['mobilenumber']; ?>" name="mobilenumber" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Date job was posted</label>
                        <input value="<?php echo $getSelectData ['jobdate']; ?>" name="jobdate" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Deadline to apply </label>
                        <input value="<?php echo $getSelectData ['apply']; ?>" name="apply" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Type of job</label>
                        <input value="<?php echo $getSelectData ['jobtype']; ?>" name="jobtype" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Contact </label>
                        <input value="<?php echo $getSelectData ['contact']; ?>" name="contact" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>MPESA Verification Code</label>
                        <input value="<?php echo $getSelectData ['mpga_code']; ?>" name="mpga_code" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Checkbox Value</label>
                        <input value="<?php echo $getSelectData ['agreed']; ?>" name="agreed" class="form-control" type="text">
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
