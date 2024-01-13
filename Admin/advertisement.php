<?php
include 'phpAction/controller.php';
include 'phpAction/model.php';
$msgAccept="";
$msg="";
$msgForDeleteComment="<div class='alert alert-danger' role='alert'>Successfully Rejected !</div>";
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}

if(isset($_GET['msgAccept'])){
    $msgAccept=$_GET['msgAccept'];
}


if(isset($_POST['accept'])){
   $getID=$_GET['id'];
   $modelObjForAccept=new model();
   $resultAccept=$modelObjForAccept->advertisementAccept($getID);
   if($resultAccept==true){
       header("location:advertisement.php?msgAccept=Accepted");

   }else{
       echo "Failed ! Please Try Again";
   }

}


if(isset($_POST['delete'])){
     $advertisementDelteId=$_GET['id'];
     $modelObjForIdDelete=new model();
     $runDelete=$modelObjForIdDelete->advertiementDelete($advertisementDelteId);
     if($runDelete==true){
         header("location:advertisement.php?msg=$msgForDeleteComment");
     }else{
         return false;
     }



}

$modelObjForAdvertisementCount=new model();
$selectData=$modelObjForAdvertisementCount->advertisementSelect();
$count=$selectData->num_rows


?>
<?php include "up.php"; ?>

<div class="container">
    <br class="row">
        <h2>Advertisement User Images</h2></br>
    <h1><div class='alert alert-danger col-md-1' role='alert'><?php  echo $count; ?></div></h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>picture</th>
                <th>Status</th>
                <th>MPESA Verification Code</th>
                <th>Checkbox Value</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $modelObjForSelectAdvertisement=new model();
            $resultSelect=$modelObjForSelectAdvertisement->advertisementSelect();
            while ($dataAdvertisementForadmin=$resultSelect->fetch_assoc()){

                ?>
                <tr>

                    <td> <img  style="height: 200px; width:200px"  src="../img/<?php echo $dataAdvertisementForadmin['photo'];?>" alt="" class="img-responsive"></td>
                    <td><?php echo $dataAdvertisementForadmin['status'];?></td>
                    <td><?php echo $dataAdvertisementForadmin ['mpga_code']; ?></td>
                    <td><?php echo $dataAdvertisementForadmin ['agreed']; ?></td>
                    <td>
                        <form action="advertisement.php?id=<?php echo $dataAdvertisementForadmin['id'];?>" method="post">
                            <input onclick="return confirm('Do you Want to Accept')" name="accept" type="submit" value="Approve" class="btn btn-success">
                        </form>
                    </td>
                    <td>
                        <form action="advertisement.php?id=<?php echo $dataAdvertisementForadmin['id'];?>" method="post">
                            <input onclick="return confirm('Do you Want to Deleted')" type="submit" name="delete" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "down.php"?>
