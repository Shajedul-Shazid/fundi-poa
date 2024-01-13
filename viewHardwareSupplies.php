<?php
include "up.php";

$modelObjForSelectHardwareSupplies=new model();
$getID=$_GET['id'];
$runSelectData=$modelObjForSelectHardwareSupplies->hardwareSuppliesSelect($getID);
$dataHaraware=$runSelectData->fetch_assoc();

?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card py-5" style="width:400px">
                    <img  style="height: 200px; width:400px"  src="img/<?php echo $dataHaraware['photo'];?>" alt="" class="img-responsive">
                    <div class="card-body">
                        <h4 class="card-title">Buisness-Name:<?php echo $dataHaraware['buisnessname'];?></h4>
                        <p>Mobile Number:<?php echo $dataHaraware ['mobilenumber']; ?></p>
                        <p>Email:<?php echo $dataHaraware ['email']; ?></p>
                        <p>Dealersin:<?php echo $dataHaraware ['dealersin']; ?></p>
                        <p>Location:<?php echo $dataHaraware ['location']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>











<?php include "down.php"?>