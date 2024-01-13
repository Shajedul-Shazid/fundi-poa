<?php
include "up.php";

$getID=$_GET['id'];
$modelObjForWorkDetails=new model();
$resultSeletcWork=$modelObjForWorkDetails->FundiProfileSelect($getID);
$dataFundi=$resultSeletcWork->fetch_assoc();

?>
    <div class="container">
        <div class="row">
                <div class="col-md-6">
                    <div class="card py-5" style="width:400px">
                        <img  style="height: 200px; width:400px"  src="img/<?php echo $dataFundi['photo_one'];?>" alt="" class="img-responsive">
                        <div class="card-body">
                            <h4 class="card-title">Names:<?php echo $dataFundi['first_name'];?></h4>
                           <p> First Name:<?php echo $dataFundi['first_name']; ?></p>
                            <p>Job title:<?php echo $dataFundi ['job_title']; ?></p>
                            <p>Mobile Number:<?php echo $dataFundi ['mobile_number']; ?></p>
                            <p>Email:<?php echo $dataFundi ['email']; ?></p>
                            <p>Locaytion:<?php echo $dataFundi ['location']; ?></p>
                            <p>Certifications<?php echo $dataFundi ['certifications']; ?></p>
                            <p>Skills:<?php echo $dataFundi ['skills']; ?></p>
                            <img  style="height: 200px; width:400px"  src="img/<?php echo $dataFundi['photo_two'];?>" alt="" class="img-responsive">
                            <img  style="height: 200px; width:400px"  src="img/<?php echo $dataFundi['photo_three'];?>" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>











<?php include "down.php"?>