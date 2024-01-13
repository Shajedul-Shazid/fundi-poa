<?php  include "up.php"?>

<?php



?>

<div style="background-color: #FBD232" class="page-wrapper  p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <?php echo $msg;?>
                <h2 class="title">JOBS  - ​ ​PAGE REGISTRATION CONTENT</h2>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-row m-b-55">
                    <div class="form-row">
                        <div class="name">Name</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5 form-control" type="text" name="name">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5 form-control" type="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Mobile Number</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5 form-control" type="number" name="mobilenumber">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Date job was posted</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5 form-control" type="date" name="jobdate">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Deadline to apply </div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5 form-control" type="text" name="apply">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Type of job</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-5 form-control" type="text" name="jobtype"  id="" cols="25" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Contact </div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5 form-control" type="text" name="contact">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">MPESA Verification Code</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5 form-control" type="text" placeholder="Enter MPESA Verification Code" name="mpga_code">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class=" value flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="agreed" value="agreed">
                            <label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the Fundipoa Terms of Use and Privacy Policy. Your account may get BLOCKED
                                    without prior notice, if you   don not follow our Terms of Use or Privacy Policy. It is
                                    recommended to read these. It only takes a minute!
								</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn--radius-2 btn btn-info" type="submit" name="submitJobs">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php include "down.php"?>


















