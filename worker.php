<?php include "up.php"?>

<?php
// pagination code
include"db.php";

$limit=6;
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$start=($page- 1) * $limit;

$selectSQL="SELECT * FROM `fundi_page` order  by rand() LIMIT $start, $limit";
$runSelect=mysqli_query($conn,$selectSQL);

$result=$conn->query("SELECT count(id) AS id FROM fundi_page");
$workerCount=$result->fetch_all(MYSQLI_ASSOC);

$total=$workerCount[0]['id'];

$pages=ceil($total/$limit);

$previous=$page -1;

$next=$page + 1;



?>

<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">



<div class="container">
    <form action="worker-search.php" method="post">
        <input style="padding: 0px 20px; width:300px; height:40px; font-size: 22px" type="text" name="search" placeholder="Enter Name/Job-title/phone-number">
        <button style="width:100px; height: 44px; font-size: 22px" type="submit" name="submit-search">Search</button>
    </form>
    <div class="row">
        <?php
        while ($dataFundi=$runSelect->fetch_assoc()){

        ?>
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid" src="img/<?php echo $dataFundi['photo_one'];?>"
                         alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Names:<?php echo $dataFundi['first_name'];?></h4>
                        <!--Text-->
                        <p class="card-text">Jobs title=:<?php echo $dataFundi['job_title'];?></p>
                        <a href="viewProfile.php?id=<?php echo $dataFundi['id'];?>" class="btn btn-info">View Profile</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <?php } ?>
        </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="worker.php?page=<?= $previous; ?>">Previous</a>
            </li>
            <?php for ($i=1; $i<=$pages; $i++) : ?>
            <li class="page-item"><a class="page-link" href="worker.php?page=<?= $i; ?>"><?= $i; ?></a></li>
            <?php endfor; ?>
            <li class="page-item">
                <a class="page-link" href="worker.php?page=<?= $next; ?>">Next</a>
            </li>
        </ul>
    </nav>

</div>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>



<?php include "down.php"?>
