<?php

include "phpAction/controller.php";
include "phpAction/model.php";

$urlId=$_GET['id'];

$msg="<div class ='alert alert-primary' role ='alert'>Successfully Update !</div>";

$modelObjForSelect=new model();
$dataSelect=$modelObjForSelect->serviceProfessionalSelectForUpdate($urlId);
$result=$dataSelect->fetch_assoc();

if(isset($_POST['profUpdate'])){
    $modelObjForProfUpdate=new model();
    $resultUpdate=$modelObjForProfUpdate->professionUpdate($urlId);
    if($resultUpdate==true){
        header("Location:professional.php?msg=$msg");
    }else{
        echo "FAiled ! Please Try Again";
    }
}




?>
<?php include  "up.php"?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Professional form updated page</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-----update form for fundi content---->
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Job title</label>
                        <input value="<?php echo $result['jobtitle']; ?>" name="jobtitle" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Name</label>
                        <input value="<?php echo $result ['name']; ?>" name="name" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input value="<?php echo $result ['mobilenumber']; ?>" name="mobilenumber" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email-Address</label>
                        <input value="<?php echo $result ['email']; ?>" name="email" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Location</label>
                        <input value="<?php echo $result ['location']; ?>" name="location" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Certifications</label>
                        <input value="<?php echo $result ['certifications']; ?>" name="certifications" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Skills</label>
                        <input value="<?php echo $result ['skills']; ?>" name="skills" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>MPESA Verification Code</label>
                        <input value="<?php echo $result ['mpga_code']; ?>" name="mpga_code" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Checkbox Value</label>
                        <input value="<?php echo $result ['agreed']; ?>" name="agreed" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input name="profUpdate" value="UPDATE" class="form-control btn btn-success" type="submit">
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
