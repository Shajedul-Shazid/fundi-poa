<?php include "up.php"?>
<div class="container">
    <div class="row">
        <?php
        $modelObjForFundi=new model();
        $reseltSelect=$modelObjForFundi->fundiPageSelect();
        while ($dataFundi=$reseltSelect->fetch_assoc()){

            ?>
            <div class="col-md-6">
                <div class="card py-5" style="width:400px">
                    <img  style="height: 200px; width:400px"  src="img/<?php echo $dataFundi['photo_one'];?>" alt="" class="img-responsive">
                    <div class="card-body">
                        <h4 class="card-title">Names:<?php echo $dataFundi['first_name'];?></h4>
                        <h5>Job title:<?php echo $dataFundi['job_title'];?></h5>
                        <a href="viewProfile.php?id=<?php echo $dataFundi['id'];?>" class="btn btn-border">View Profile</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>



<?php include "down.php"?>
