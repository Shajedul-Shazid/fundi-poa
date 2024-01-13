<?php include "up.php"?>
<div class="container">
    <div class="row">
        <?php
        $modelObjForJobs=new model();
        $reseltSelect=$modelObjForJobs->jobsSelect();
        while ($dataJobs=$reseltSelect->fetch_assoc()){

            ?>
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">


                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Names:<?php echo $dataJobs['name'];?></h4>
                        <!--Text-->
                        <a href="viewJobProfile.php?id=<?php echo $dataJobs['id'];?>" class="btn btn-info">View Profile</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
        <?php } ?>
    </div>
</div>
</div>




<?php include "down.php"?>
