<?php
    require_once "config.php";

    $FirstName = $LastName = $Email = $Message = "";
    $FirstName_err = $LastName_err = $Email_err = $Message_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["name"]))){
            $FirstName_err = "Please Enter Your First Name";
        }elseif('/^[a-zA-Z]+$/', trim($_POST["username"]))){
            $FirstName_err = "Names can only contain letters";
        }else{
        $param_fname = trim($_POST["username"]);
        $sql = "INSERT INTO First_Name VALUES " +  $param_u;
        if($stmt = $mysqli->prepare($sql)){
            if($stmt->execute()){
                // store result
                $stmt->store_result();
            } 
            $stmt->close(); 
        }
    }
?>