<?php include
"up.php";

include "phpAction/controller.php";
include "phpAction/model.php";



$modelObjForfundiCount=new model();
$selectData=$modelObjForfundiCount->fundiPageSelect();
$count=$selectData->num_rows;

$modelObjForProfessionalCount=new model();
$selectData=$modelObjForProfessionalCount->professionServiceSelect();
$count2=$selectData->num_rows;

$modelObjForJobsCount=new model();
$reseltData=$modelObjForJobsCount->jobsSelect();
$count3=$reseltData->num_rows;

$modelObjForHardwareCount=new model();
$selectData=$modelObjForHardwareCount->hardwareSuppliesSelect();
$count4=$selectData->num_rows;

$modelObjForAdvertisementCount=new model();
$selectData=$modelObjForAdvertisementCount->advertisementSelect();
$count5=$selectData->num_rows;

// only for registered usser
$modelUserCont=new model();
$runSelect=$modelUserCont->userSelect();
$count6=$runSelect->num_rows;

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Fundi Registraion Details</div>
                    </div>
                    <div class="col-auto">
                        <div class='alert alert-success' role='alert'><?php  echo $count; ?></div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="fundiPage.php" type="submit" class="text-muted">View Details</a>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Professional Services Details</div>
                    </div>
                    <div class="col-auto">
                        <div class='alert alert-success' role='alert'><?php  echo $count2; ?></div>
                    </div>
                    
                  </div>
                </div>
                <div class="card-footer">
                  <a href="professional.php" type="submit" class="text-muted">View Details</a>
                </div>
              </div>
            </div>
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jobs Registraion Details</div>
                              </div>
                              <div class="col-auto">
                                  <div class='alert alert-success' role='alert'><?php  echo $count3; ?></div>
                              </div>
                          </div>
                      </div>
                      <div class="card-footer">
                          <a href="jobs.php" type="submit" class="text-muted">View Details</a>
                      </div>
                  </div>
              </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-3 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Hardware  Suppliers Details</div>
                    </div>
                    <div class="col-auto">
                        <div class='alert alert-success' role='alert'><?php  echo $count4; ?></div>
                    </div>

                  </div>
                </div>
                <div class="card-footer">
                  <a href="hardware.php" type="submit" class="text-muted">View Details</a>
                </div>
              </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-md-4 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Advertisements Details</div>
                    </div>
                    <div class="col-auto">
                        <div class='alert alert-success' role='alert'><?php  echo $count5; ?></div>
                    </div>

                  </div>
                </div>
                <div class="card-footer">
                  <a href="advertisement.php" type="submit" class="text-muted">View Details</a>
                </div>
              </div>
            </div>

              <!-- Pending Requests Card Example -->
              <div class="col-md-4 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Signup Users</div>
                              </div>
                              <div class="col-auto">
                                  <div class='alert alert-success' role='alert'><?php echo $count6; ?></div>


                              </div>

                          </div>
                      </div>
                      <div class="card-footer">
                          <a href="user.php" type="submit" class="text-muted">View Details</a>
                      </div>
                  </div>
              </div>





        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

