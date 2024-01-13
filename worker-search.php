
<?php
include  "db.php";

?>

<?php
include  "up.php";
?>


<h1 style="text-align: center">Worker Search Page</h1>

<div style='width: 900px; background-color:#fff; padding: 30px;'>
    <?php
    if(isset($_POST['submit-search'])) {
        $search =mysqli_real_escape_string($conn, $_POST['search']);
        $sql="SELECT * FROM fundi_page WHERE first_name LIKE '%$search%' OR job_title LIKE '%$search%' OR mobile_number LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if($queryResult > 0){
            while ($row=mysqli_fetch_assoc($result)){
                echo "<div style='padding-bottom:30px; background-color:#ffff00; width: 100%' class='article-box'>
                   <h3>Name:".$row['first_name']."</h3>
                   <h3>Job-Title:".$row['job_title']."</h3>
                   <h3>Phone-Number:".$row['mobile_number']."</h3>
                  </div>";
            }
        }else{
            echo "There are no results matching your search!";
        }
    }
    ?>

</div>


<?php include "down.php";
?>