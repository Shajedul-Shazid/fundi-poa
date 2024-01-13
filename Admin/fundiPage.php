<?php
include 'phpAction/controller.php';
include 'phpAction/model.php';
$msgDelete="";
$msg="";

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}
$msgDelete="<div class='alert alert-danger' role='alert'>Successfully Deleted !</div>";
if(isset($_POST['delete'])){
    $deleteID=$_GET['id'];
    $modelObjForDelete=new model();
    $resultDelete=$modelObjForDelete->fundiPageDelete($deleteID);
    if($resultDelete==true){
        header("location:fundiPage.php?msg=$msgDelete");
    }else{
        echo "Failed ! Please Try Again";
    }
}

$modelObjForfundiCount=new model();
$selectData=$modelObjForfundiCount->fundiPageSelect();
$count=$selectData->num_rows

?>

<?php include  "up.php"?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <?php echo $msg; ?>
                    <h1 class="h3 mb-0 text-gray-800">Fundi Page Registration Details</h1>
                </div>

                <!-- Content Row -->
                <div class="row">
             <!-----table content---->
                    <table class="table table-bordered">
                        <h1><div class='alert alert-danger' role='alert'><?php  echo $count; ?></div></h1>
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Job title</th>
                            <th>Mobile Number</th>
                            <th>Email-Address</th>
                            <th>Location</th>
                            <th>Certification</th>
                            <th>skills</th>
                            <th>MPESA Verification Code</th>
                            <th>Checkbox Value</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $modelObjForFundi=new model();
                        $reseltSelect=$modelObjForFundi->fundiPageSelect();
                        while ($dataFundi=$reseltSelect->fetch_assoc()){

                        ?>
                            <tr>
                                <td><?php echo $dataFundi['first_name']; ?></td>
                                <td><?php echo $dataFundi ['job_title']; ?></td>
                                <td><?php echo $dataFundi ['mobile_number']; ?></td>
                                <td><?php echo $dataFundi ['email']; ?></td>
                                <td><?php echo $dataFundi ['location']; ?></td>
                                <td><?php echo $dataFundi ['certifications']; ?></td>
                                <td><?php echo $dataFundi ['skills']; ?></td>
                                <td><?php echo $dataFundi ['mpga_code']; ?></td>
                                <td><?php echo $dataFundi ['agreed']; ?></td>

                                <td><a class="btn btn-success" href="fundiUpdate.php?id=<?php echo $dataFundi['id'];?>">Update</a></td>
                                <td>
                                    <form action="fundiPage.php?id=<?php echo $dataFundi['id'];?>" method="post">
                                        <input  name="delete" class="btn btn-danger" value="Delete" type="submit">
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
    <!-- End of Content Wrapper -->
<?php include "down.php"?>