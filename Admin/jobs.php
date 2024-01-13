<?php

include 'phpAction/controller.php';
include 'phpAction/model.php';

$msgDelete="";
$msg="";
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}
$msgDelete="<div class='alert alert-danger' role='alert'>Successfully Deleted !</div>";

if(isset($_POST['deleteJobs'])){
    $jobsId=$_GET['id'];
    $modeForJobs=new model();
    $resultDelete=$modeForJobs->jobsDeleteToday($jobsId);
    if($resultDelete==true){
        header("location:jobs.php?msg=$msgDelete");
    }else{
        echo "Failed ! Please Try Again";
    }


}

$modelObjForJobsCount=new model();
$reseltData=$modelObjForJobsCount->jobsSelect();
$count=$reseltData->num_rows


?>
<?php include  "up.php"?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <?php echo $msg; ?>
            <h1 class="h3 mb-0 text-gray-800">Jobs Page Registration Details</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-----table content---->
            <table class="table table-bordered">
              <div class='alert alert-danger' role='alert'><?php  echo $count; ?></div>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Date job was posted</th>
                    <th>Deadline to apply </th>
                    <th>Type of job</th>
                    <th>Contact</th>
                    <th>MPESA Verification Code</th>
                    <th>Checkbox Value</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $modelObjForJobs=new model();
                    $reseltSelect=$modelObjForJobs->jobsSelect();
                    while ($dataJobs=$reseltSelect->fetch_assoc()){

                        ?>
                    <tr>
                        <td><?php echo $dataJobs['name']; ?></td>
                        <td><?php echo $dataJobs ['email']; ?></td>
                        <td><?php echo $dataJobs ['mobilenumber']; ?></td>
                        <td><?php echo $dataJobs ['jobdate']; ?></td>
                        <td><?php echo $dataJobs ['apply']; ?></td>
                        <td><?php echo $dataJobs ['jobtype']; ?></td>
                        <td><?php echo $dataJobs ['contact']; ?></td>
                        <td><?php echo $dataJobs ['mpga_code']; ?></td>
                        <td><?php echo $dataJobs ['agreed']; ?></td>
                        <td><a class="btn btn-success" href="jobsUpdate.php?id=<?php echo $dataJobs['id'];?>">Update</a></td>
                        <td>
                            <form action="jobs.php?id=<?php echo $dataJobs['id'];?>" method="post">
                                <input  name="deleteJobs" class="btn btn-danger" value="Delete" type="submit">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <!-- Content Row -->

        </div>
        <!-- End of Main Content -->


    </div>














<?php include "down.php"?>