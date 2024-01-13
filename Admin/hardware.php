<?php

include 'phpAction/controller.php';
include 'phpAction/model.php';

$msgDelete="";
$msg="";
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}
$msgDelete="<div class='alert alert-danger' role='alert'>Successfully Deleted !</div>";
if(isset($_POST['deleteHardware'])){
    $deleteID=$_GET['id'];
    $modelObjForDelete=new model();
    $resultDelete=$modelObjForDelete->hardwareSupplesDelete($deleteID);
    if($resultDelete==true){
        header("location:hardware.php?msg=$msgDelete");
    }else{
        echo "Failed ! Please Try Again";
    }
}


$modelObjForHardwareCount=new model();
$selectData=$modelObjForHardwareCount->hardwareSuppliesSelect();
$count=$selectData->num_rows


?>
<?php include  "up.php"?>
<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?php echo $msg; ?>
        <h1 class="h3 mb-0 text-gray-800">Hardware Page Registration Details</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-----table content---->
        <table class="table table-bordered">
            <h1><div class='alert alert-danger' role='alert'><?php  echo $count; ?></div></h1>
            <thead>
            <tr>
                <th>Business Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Dealers In</th>
                <th>Location</th>
                <th>MPESA Verification Code</th>
                <th>Checkbox Value</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>

            <?php

               $modelObjForSelectHardwareSupplies=new model();
               $runSelectData=$modelObjForSelectHardwareSupplies->hardwareSuppliesSelect();
               while($dataHaraware=$runSelectData->fetch_assoc()){

            ?>

                <tr>
                    <td><?php echo $dataHaraware['buisnessname']; ?></td>
                    <td><?php echo $dataHaraware ['email']; ?></td>
                    <td><?php echo $dataHaraware ['mobilenumber']; ?></td>
                    <td><?php echo $dataHaraware ['dealersin']; ?></td>
                    <td><?php echo $dataHaraware ['location']; ?></td>
                    <td><?php echo $dataHaraware ['mpga_code']; ?></td>
                    <td><?php echo $dataHaraware ['agreed']; ?></td>
                    <td><a class="btn btn-success" href="hardwareUpdate.php?id=<?php echo $dataHaraware['id'];?>">Update</a></td>
                    <td>
                        <form action="hardware.php?id=<?php echo $dataHaraware['id'];?>" method="post">
                            <input  name="deleteHardware" class="btn btn-danger" value="Delete" type="submit">
                        </form>
                    </td>
                </tr>
            <?php  }  ?>
            </tbody>
        </table>

        <!-- Content Row -->

    </div>
    <!-- End of Main Content -->




<?php include "down.php"?>
