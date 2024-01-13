<?php
include "up.php";

$modelObjForProfessional=new model();
$getID=$_GET['id'];
$selectData=$modelObjForProfessional->professionServiceSelect($getID);
$dataProfessional=$selectData->fetch_assoc();

?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card py-5" style="width:400px">
                    <img  style="height: 200px; width:400px"  src="img/<?php echo $dataProfessional['photo'];?>" alt="" class="img-responsive">
                    <div class="card-body">
                        <h4 class="card-title">Names:<?php echo $dataProfessional['name'];?></h4>
                        <p>Job title:<?php echo $dataProfessional ['jobtitle']; ?></p>
                        <p>Mobile Number:<?php echo $dataProfessional ['mobilenumber']; ?></p>
                        <p>Email:<?php echo $dataProfessional ['email']; ?></p>
                        <p>Locaytion:<?php echo $dataProfessional ['location']; ?></p>
                        <p>Certifications:<?php echo $dataProfessional ['certifications']; ?></p>
                        <p>Skills:<?php echo $dataProfessional ['skills']; ?></p>
                        <img  style="height: 200px; width:400px"  src="img/<?php echo $dataProfessional['phototwo'];?>" alt="" class="img-responsive">
                        <img  style="height: 200px; width:400px"  src="img/<?php echo $dataProfessional['photothree'];?>" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


<?php include "down.php"?>