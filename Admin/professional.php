<?php

include 'phpAction/controller.php';
include 'phpAction/model.php';

$msgDelete="";
$msg="";
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}
$msgDelete="<div class='alert alert-danger' role='alert'>Successfully Deleted !</div>";


if(isset($_POST['deleteProfessional'])){
    $profID=$_GET['id'];
    $modelForProf=new model();
    $resultDelete=$modelForProf->professionalDelete($profID);
    if($resultDelete==true){
        header("location:professional.php?msg=$msgDelete");
    }else{
        echo "Failed ! Please Try Again";
    }

}

$modelObjForProfessionalCount=new model();
$selectData=$modelObjForProfessionalCount->professionServiceSelect();
$count=$selectData->num_rows

?>

<?php include  "up.php"?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <?php echo $msg; ?>
            <h1 class="h3 mb-0 text-gray-800">Professional Page Registration Details</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-----table content---->
            <table class="table table-bordered">
                <h1><div class='alert alert-danger' role='alert'><?php  echo $count; ?></div></h1>
                <thead>
                <tr>
                    <th>Job title</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Email-Address</th>
                    <th>Location</th>
                    <th>Certifications</th>
                    <th>Skills</th>
                    <th>MPESA Verification Code</th>
                    <th>Checkbox Value</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                      <?php

                          $modelObjForProfessional=new model();
                          $selectData=$modelObjForProfessional->professionServiceSelect();
                          while ($dataProfessional=$selectData->fetch_assoc()){

                       ?>
                     <tr>
                        <td><?php echo $dataProfessional['jobtitle']; ?></td>
                        <td><?php echo $dataProfessional ['name']; ?></td>
                        <td><?php echo $dataProfessional ['mobilenumber']; ?></td>
                        <td><?php echo $dataProfessional ['email']; ?></td>
                        <td><?php echo $dataProfessional ['location']; ?></td>
                        <td><?php echo $dataProfessional ['certifications']; ?></td>
                        <td><?php echo $dataProfessional ['skills']; ?></td>
                         <td><?php echo $dataProfessional ['mpga_code']; ?></td>
                         <td><?php echo $dataProfessional ['agreed']; ?></td>
                        <td><a class="btn btn-success" href="professionalUpdate.php?id=<?php echo $dataProfessional['id'];?>">Update</a></td>
                        <td>
                            <form action="professional.php?id=<?php echo $dataProfessional['id'];?>" method="post">
                                <input  name="deleteProfessional" class="btn btn-danger" value="Delete" type="submit">
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