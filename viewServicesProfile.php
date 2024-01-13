<?php include "up.php"?>
<div class="container">
    <div class="row">
        <?php

        $modelObjForProfessional=new model();
        $selectData=$modelObjForProfessional->professionServiceSelect();
        while ($dataProfessional=$selectData->fetch_assoc()){

            ?>
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid" src="img/<?php echo $dataProfessional['photo'];?>"
                         alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Names:<?php echo $dataProfessional['name'];?></h4>
                        <!--Text-->
                        <p class="card-text">Jobs title=:<?php echo $dataProfessional['jobtitle'];?></p>
                        <a href="viewServiceProfile.php?id=<?php echo $dataProfessional['id'];?>" class="btn btn-info">View Profile</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
        <?php } ?>
    </div>
</div>
</div>




<?php include "down.php"?>
