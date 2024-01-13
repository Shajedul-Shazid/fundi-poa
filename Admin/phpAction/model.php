<?php
class model{

public function fundiPageInsert(){
    $first_name=$_POST['first_name'];
    $job_title=$_POST['job_title'];
    $unique=date("Y-M-D-H-i-s");
    $photoName=$unique.$_FILES['photo']['name'];
    $tmpName=$_FILES['photo']['tmp_name'];
    move_uploaded_file($tmpName,"img/$photoName");
    $mobile_number=$_POST['mobile_number'];
    $email=$_POST['email'];
    $location=$_POST['location'];
    $certifications=$_POST['certifications'];
    $skills=$_POST['skills'];
    $unique=date("Y-M-D-H-i-s");
    $photoNametwo=$unique.$_FILES['photoo']['name'];
    $tmpName=$_FILES['photoo']['tmp_name'];
    move_uploaded_file($tmpName, "img/$photoNametwo");
    $unique=date("Y-M-D-H-i-s");
    $photoNameThree=$unique.$_FILES['photooo']['name'];
    $tmpName=$_FILES['photooo']['tmp_name'];
    move_uploaded_file($tmpName, "img/$photoNameThree");
    $mpga_code=$_POST['mpga_code'];
    $agreed=$_POST['agreed'];
    $insertFundiSQL="INSERT INTO `fundi_page`(`first_name`, `job_title`, `photo_one`, `mobile_number`, `email`, `location`, `certifications`, `skills`, `photo_two`, `photo_three`, `mpga_code`, `agreed`) VALUES ('$first_name','$job_title','$photoName','$mobile_number','$email','$location','$certifications','$skills','$photoNametwo','$photoNameThree','$mpga_code','$agreed')";
    $controllerObj=new controller();
    $runInsert=$controllerObj->dataInsert($insertFundiSQL);
    if($runInsert==true){
        return true;
    }else{
        return false;
    }


}



   public function fundiPageSelect(){
        $selectFundiSQL="SELECT * FROM `fundi_page` order  by rand()";
       $controllerObj=new controller();
       $runSelect=$controllerObj->dataSelect($selectFundiSQL);
       if($runSelect==true){
           return $runSelect;
       }else{
           return false;
       }
    }

   public function userSelect(){
    $selectUserSQL="SELECT * FROM `users`";
       $controllerObj=new controller();
       $runSelect=$controllerObj->dataSelect($selectUserSQL);
       if($runSelect==true){
           return $runSelect;
       }else{
           return false;
       }
   }



    public function advertisementInsert($advertisementId){
    $unique=date("Y-M-D-H-i-s");
    $photoName=$unique.$_FILES['photo']['name'];
    $tmpName=$_FILES['photo']['tmp_name'];
    move_uploaded_file($tmpName,"img/$photoName");
    $status="Pending";
    $mpga_code=$_POST['mpga_code'];
    $agreed=$_POST['agreed'];
    $insertAdvertisemetSQL="INSERT INTO `advertisements`(`advertisement_id`,`photo`, `status`, `mpga_code`, `agreed`) VALUES ('$advertisementId','$photoName','$status','$mpga_code','$agreed')";
    $controllerObj=new controller();
    $runInsert=$controllerObj->dataInsert($insertAdvertisemetSQL);
    if($runInsert==true){
        return true;
    }else{
        return false;
    }

}

public function advertisementSelect(){
    $selectSQL="SELECT * FROM `advertisements`";
    $controllerObj=new controller();
    $runSelect=$controllerObj->dataSelect($selectSQL);
    if($runSelect==true){
        return $runSelect;
    }else{
        return false;
    }
}



public function advertisementSelectForUser($advertisementId){
    $accepted="Accepted";
    $selectSQL="SELECT * FROM `comment` WHERE `status`='$accepted' AND  `work_id`='$advertisementId'";
    $controllerObj=new controller();
    $runSelect=$controllerObj->dataSelect($selectSQL);
    if($runSelect==true){
        return $runSelect;
    }
    else{
        return false;
    }
}


public function advertisementAccept($ID){
    $accept="Accepted";
    $updateSQL="UPDATE `advertisements` SET `status`='$accept' WHERE `id`='$ID'";
    $controllerObj=new controller();
    $runUpdate=$controllerObj->dataUpdate($updateSQL);
    if($runUpdate==true){
        return true;
    }else{
        return false;
    }
}

public  function advertiementDelete($ID){
     $deleteAdvertisementSQL="DELETE FROM `advertisements` WHERE `id`='$ID'";
     $controllerObjf=new controller();
     $runDelete=$controllerObjf->dataDelete($deleteAdvertisementSQL);
     if($runDelete==true){
         return true;
     }else{
         return false;
     }

}





public function fundiPageDelete($ID){
    $adminDeleteSQL="DELETE FROM `fundi_page` WHERE `id`='$ID' ";
    $controllerObj=new controller();
    $runDelete=$controllerObj->dataDelete($adminDeleteSQL);
    if($runDelete==true){
        return true;
    }else{
        return false;
    }

}

public function fundiPageSelectForUpdate($ID){
   $selectFundiUpdateSQL="SELECT * FROM `fundi_page` WHERE `id`='$ID'";
   $controllerObj=new controller();
   $runSelectUpdate=$controllerObj->dataSelect($selectFundiUpdateSQL);
   if($runSelectUpdate==true){
       return $runSelectUpdate;
   }else{
       return false;
   }
}
//29-April-2020

public function hardwareSelectForUpdate($selectID){
    $selectSQLForUpdate="SELECT * FROM `hardwaresupplies` WHERE `id`=$selectID";
    $controllerObj=new controller();
    $selectUpdateData=$controllerObj->dataSelect($selectSQLForUpdate);
    if($selectUpdateData==true){
        return $selectUpdateData;
    }else{
        return false;
    }

}






public function fundiUpdate($ID){
    $first_name=$_POST['first_name'];
    $job_title=$_POST['job_title'];
    $mobile_number=$_POST['mobile_number'];
    $email=$_POST['email'];
    $location=$_POST['location'];
    $certifications=$_POST['certifications'];
    $skills=$_POST['skills'];
    $mpga_code=$_POST['mpga_code'];
    $agreed=$_POST['agreed'];
    $fundiUpdateSQL="UPDATE `fundi_page` SET `first_name`='$first_name',`job_title`='$job_title',`mobile_number`='$mobile_number',`email`='$email',`location`='$location',`certifications`='$certifications',`skills`='$skills',`mpga_code`='$mpga_code',`agreed`='$agreed'WHERE `id`='$ID'";
    $controllerObjForFundiUpdate=new controller();
    $runUpdate=$controllerObjForFundiUpdate->dataUpdate($fundiUpdateSQL);
    if($runUpdate==true){
        return true;
    }else{
        return false;
    }

}

    public function harewareUpdate($hardwareID){
        $buisnessname=$_POST['buisnessname'];
        $email=$_POST['email'];
        $mobilenumber=$_POST['mobilenumber'];
        $dealersin=$_POST['dealersin'];
        $location=$_POST['location'];
        $mpga_code=$_POST['mpga_code'];
        $agreed=$_POST['agreed'];
        $hardwareUpdateSQL="UPDATE `hardwaresupplies` SET `buisnessname`='$buisnessname',`email`='$email',`mobilenumber`='$mobilenumber',`dealersin`='$dealersin',`location`='$location',`mpga_code`='$mpga_code',`agreed`='$agreed' WHERE `id`='$hardwareID'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($hardwareUpdateSQL);
        if($runUpdate==true){
            return true;
        }else{
            return false;
        }

    }



    public function FundiProfileSelect($ID){
        $selectFundiSQL="SELECT * FROM `fundi_page` WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runSelect=$controllerObj->dataSelect($selectFundiSQL);
        if ($runSelect==true){
            return $runSelect;
        }
        else{
            return false;
        }
    }

    public function hardwareSuppliesInsert(){
             $buisnessname=$_POST['buisnessname'];
             $unique=date("Y-M-D-H-i-s");
             $photoName=$unique.$_FILES['photo']['name'];
             $tmpName=$_FILES['photo']['tmp_name'];
             move_uploaded_file($tmpName,"img/$photoName");
             $email=$_POST['email'];
             $mobilenumber=$_POST['mobilenumber'];
             $dealersin=$_POST['dealersin'];
             $location=$_POST['location'];
             $mpga_code=$_POST['mpga_code'];
             $agreed=$_POST['agreed'];
             $insertHardwareSQL="INSERT INTO `hardwaresupplies`(`buisnessname`, `photo`, `email`, `mobilenumber`, `dealersin`, `location`, `mpga_code`, `agreed`)VALUES ('$buisnessname','$photoName','$email','$mobilenumber','$dealersin','$location','$mpga_code','$agreed')";
             $controlerObj=new controller();
             $runInsertSQL=$controlerObj->dataInsert($insertHardwareSQL);
             if($runInsertSQL==true){
                 return true;
             }else{
                 return false;
             }
    }


    public function hardwareSuppliesSelect(){
            $selectSQL="SELECT * FROM `hardwaresupplies`";
            $controllerObj=new controller();
            $runSelect=$controllerObj->dataSelect($selectSQL);
            if($runSelect==true){
                return $runSelect;
            }else{
                return false;
            }
    }

    // 25-04-2020 check hardwareSuppliesSelect

    public  function suppliesHardwareSelect(){
             $selectSQL="SELECT * FROM `hardwaresupplies`";
             $controllerObj=new controller();
             $runSelect=$controllerObj->dataSelect($selectSQL);
             if($runSelect==true){
                 return $runSelect;
             }else{
                 return false;
             }
    }


    public function jobsInsert(){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $mobilenumber=$_POST['mobilenumber'];
            $jobdate=$_POST['jobdate'];
            $apply=$_POST['apply'];
            $jobtype=$_POST['jobtype'];
            $contact=$_POST['contact'];
            $mpga_code=$_POST['mpga_code'];
            $agreed=$_POST['agreed'];
            $insertSQL="INSERT INTO `jobs`(`name`, `email`, `mobilenumber`, `jobdate`, `apply`, `jobtype`, `contact`, `mpga_code`, `agreed`) VALUES ('$name','$email','$mobilenumber','$jobdate','$apply','$jobtype','$contact','$mpga_code','$agreed')";
            $controllerObj=new controller();
            $insertRun=$controllerObj->dataInsert($insertSQL);
            if($insertRun==true){
                return true;
            }else{
                return false;
            }
    }




    public  function jobsSelect(){
           $selectSQL="SELECT * FROM `jobs`";
           $controllerObj=new controller();
           $runSelect=$controllerObj->dataSelect($selectSQL);
           if($runSelect==true){
               return $runSelect;
           }
           else{
               return false;
           }



    }
    public  function jobsSelectForUpdate($jobsID){
        $selectForUpdateSQL="SELECT * FROM `jobs` WHERE `id`=$jobsID";
        $controllerObj=new controller();
        $runSelect=$controllerObj->dataSelect($selectForUpdateSQL);
        if($runSelect==true){
            return $runSelect;
        }else{
            return false;
        }
    }

    public function jobsUpdate($jobsID){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['mobilenumber'];
    $jobdate=$_POST['jobdate'];
    $apply=$_POST['apply'];
    $jobtype=$_POST['jobtype'];
    $contact=$_POST['contact'];
    $mpga_code=$_POST['mpga_code'];
    $agreed=$_POST['agreed'];
    $updateSQL="UPDATE `jobs` SET `name`='$name',`email`='$email',`mobilenumber`='$mobilenumber',`jobdate`='$jobdate',`apply`='$apply',`jobtype`='$jobtype',`contact`='$contact',`mpga_code`='$mpga_code',`agreed`='$agreed' WHERE `id`='$jobsID'";
    $controllerObj=new controller();
    $runUpdate=$controllerObj->dataUpdate($updateSQL);
    if($runUpdate==true){
        return true;
    }else{
        return false;
    }

    }




    public  function jobsDeleteToday($jobID){
        $deleteSQL="DELETE FROM `jobs` WHERE `id`=$jobID";
        $controllerObj=new controller();
        $runDelete=$controllerObj->dataDelete($deleteSQL);
        if($runDelete==true){
            return true;
        }else{
            return false;
        }


    }

    public function professionalServiceInsert(){
        $jobtitle=$_POST['jobtitle'];
        $unique=date("Y-M-D-H-i-s");
        $photoName=$unique.$_FILES['photo']['name'];
        $tmpName=$_FILES['photo']['tmp_name'];
        move_uploaded_file($tmpName,"img/$photoName");
        $name=$_POST['name'];
        $mobilenumber=$_POST['mobilenumber'];
        $email=$_POST['email'];
        $location=$_POST['location'];
        $certifications=$_POST['certifications'];
        $skills=$_POST['skills'];
        $unique=date("Y-M-D-H-i-s");
        $photoNameTwo=$unique.$_FILES['phototwo']['name'];
        $tmpName=$_FILES['phototwo']['tmp_name'];
        move_uploaded_file($tmpName,"img/$photoNameTwo");
        $unique=date("Y-M-D-H-i-s");
        $photoNameThree=$unique.$_FILES['photothree']['name'];
        $tmpName=$_FILES['photothree']['tmp_name'];
        move_uploaded_file($tmpName,"img/$photoNameThree");
        $mpga_code=$_POST['mpga_code'];
        $agreed=$_POST['agreed'];
        $insertSQL="INSERT INTO `professional`(`jobtitle`, `photo`,`name`, `mobilenumber`, `email`, `location`,`certifications`, `skills`, `phototwo`, `photothree`, `mpga_code`, `agreed`)VALUES ('$jobtitle','$photoName','$name','$mobilenumber','$email','$location','$certifications','$skills','$photoNameTwo','$photoNameThree','$mpga_code','$agreed')";
        $controllerObj=new controller();
        $insertRun=$controllerObj->dataInsert($insertSQL);
        if($insertRun==true){
            return true;
        }else{
            return false;
        }
    }




    public function professionServiceSelect(){
            $selectSQL="SELECT * FROM `professional`";
            $controllerObj=new controller();
            $runSelect=$controllerObj->dataSelect($selectSQL);
            if($runSelect==true){
                return $runSelect;
            }else{
                return false;
            }

    }


    public function serviceProfessionalSelectForUpdate($ID){
        $selectSQLFordataUpdate="SELECT * FROM `professional` WHERE `id`=$ID";
        $controllerObj=new controller();
        $runSelectUpdate=$controllerObj->dataSelect($selectSQLFordataUpdate);
        if($runSelectUpdate==true){
            return $runSelectUpdate;
        }else{
            return false;
        }

    }

    public function professionUpdate($ID){
    $jobtitle=$_POST['jobtitle'];
    $name=$_POST['name'];
    $mobilenumber=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $location=$_POST['location'];
    $certifications=$_POST['certifications'];
    $skills=$_POST['skills'];
    $mpga_code=$_POST['mpga_code'];
    $agreed=$_POST['agreed'];
    $updateSQL="UPDATE `professional` SET `jobtitle`='$jobtitle',`name`='$name',`mobilenumber`='$mobilenumber',`email`='$email',`location`='$location',`certifications`='$certifications',`skills`='$skills',`mpga_code`='$mpga_code',`agreed`='$agreed' WHERE `id`='$ID'";
    $controllerObj=new controller();
    $runUpdat=$controllerObj->dataUpdate($updateSQL);
    if($runUpdat==true){
        return true;
    }else{
        return false;
    }

    }




    public function professionalDelete($proDelete){
        $deleteSQL="DELETE FROM `professional` WHERE `id`='$proDelete'";
        $controllerObj=new controller();
        $deleteData=$controllerObj->dataDelete($deleteSQL);
        if($deleteData==true){
            return true;
        }else{
            return false;
        }
    }



    // today code 25-04-2020

    public function hardwareSupplesDelete($ID){
             $deleteSQL="DELETE FROM `hardwaresupplies`WHERE `id`='$ID' ";
             $controllerObj=new controller();
             $runDelete=$controllerObj->dataDelete($deleteSQL);
             if($runDelete==true){
                 return true;
             }else{
                 return false;
             }


    }



}
?>