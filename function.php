<?php
session_start();

class Connection{
    public $host="localhost";
    public $user="root";
    public $password="";
    public $db_nm="oopsdb";
    public $conn;
    public function __construct(){
        $this->conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_nm);
    }
}
class Register extends Connection{
    public function registration($name,$email,$password,$cpassword) {
        $duplicate=mysqli_query($this->conn,"SELECT * FROM `users` WHERE `name`='$name' OR `email`='$email';");
    if(mysqli_num_rows($duplicate)>0){
        return 10;
    }
    else{
        if($password==$cpassword){
            $query="INSERT INTO `users`( `uname`, `email`, `password`) VALUES ('$name','$email','$password')";
            mysqli_query($this->conn,$query);
            return 1;
        }
        else{
            return 100;
        }
    }

    
    }
}

?>