<?php include "up.php"?>
<div class="container">
    <div class="row">
        <?php

        $modelObjForSelectHardwareSupplies=new model();
        $runSelectData=$modelObjForSelectHardwareSupplies->hardwareSuppliesSelect();
        while($dataHaraware=$runSelectData->fetch_assoc()){

            ?>
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid" src="img/<?php echo $dataHaraware['photo'];?>"
                         alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Buisness-Name:<?php echo $dataHaraware['buisnessname'];?></h4>
                        <!--Text-->
                        <a href="viewHardwareSupplies.php?id=<?php echo $dataHaraware['id'];?>" class="btn btn-info">View Profile</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
        <?php } ?>
    </div>
</div>
</div>




<?php include "down.php"?>
