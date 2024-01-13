<?php
class controller{
    public $dbHost="localhost";
    public $dbUser="root";
    public $dbPass="";
    public $dbName="fundi_poa";
    public $conn;

    function __construct()
    {
        $this->dbConnection();
    }

    public function dbConnection(){
        $this->conn=new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $this->conn->set_charset("utf8");
    }

    public function dataInsert($insertSQL){
        $runInsert=$this->conn->query($insertSQL);
        if ($runInsert==true){
            return true;
        }
        else{
            return false;
        }
    }

    public function dataSelect($selectSQL){
        $runSelect=$this->conn->query($selectSQL);
        $row=$runSelect->num_rows;
        if ($runSelect==true && $row > 0){
            return $runSelect;
        }
        elseif ($row==false){
            return false;
        }
        else{
            return false;
        }
    }

    public function dataUpdate($updateSQL){
        $runUpdate=$this->conn->query($updateSQL);
        if ($runUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }

    public function dataDelete($deleteSQL){
        $runDelete=$this->conn->query($deleteSQL);
        if ($runDelete==true){
            return true;
        }
        else{
            return false;
        }
    }
}

?>