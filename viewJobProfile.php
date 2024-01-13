<?php
include "up.php";

$getID=$_GET['id'];
$modelObjForJobs=new model();
$reseltSelect=$modelObjForJobs->jobsSelect($getID);
$dataJobs=$reseltSelect->fetch_assoc();


?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card py-5" style="width:400px">
                    <div class="card-body">
                        <h4 class="card-title">Names:<?php echo $dataJobs['name'];?></h4>
                        <p>Mobile Number:<?php echo $dataJobs ['mobilenumber']; ?></p>
                        <p>Email:<?php echo $dataJobs ['email']; ?></p>
                        <p>Job-type:<?php echo $dataJobs ['jobdate']; ?></p>
                        <p>Apply:<?php echo $dataJobs ['apply']; ?></p>
                        <p>Job-type:<?php echo $dataJobs ['jobtype']; ?></p>
                        <p>Contact:<?php echo $dataJobs ['contact']; ?></p>
                        <img  style="height: 200px; width:400px"  src="img/<?php echo $dataJobs['photo_two'];?>" alt="" class="img-responsive">
                        <img  style="height: 200px; width:400px"  src="img/<?php echo $dataJobs['photo_three'];?>" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>











<?php include "down.php"?>