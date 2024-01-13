<?php
include "up.php"?>


<div class="container">
    <div class="row">
        <?php
        $modelObjForSelectAdvertisement=new model();
        $resultSelect=$modelObjForSelectAdvertisement->advertisementSelect();
        while ($dataAdvertisementForadmin=$resultSelect->fetch_assoc()){

            ?>
            <div class="col-md-4">
                <div class="card py-5" style="width:400px">
                    <img   style="height: 400px; width:600px; border: 3px solid #ccc; float: left;  margin: 5px;"  src="img/<?php echo $dataAdvertisementForadmin['photo'];?>" alt="" class="img-responsive">
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>


<?php include "down.php"?>

