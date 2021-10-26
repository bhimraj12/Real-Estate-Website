<?php

include "./db.php";

if (isset($_POST['signup'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $mobileno=$_POST['mob'];
    $email=$_POST['email'];
    $stmt= $conn->prepare("SELECT * FROM account_details WHERE EMAIL=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result= $stmt->get_result();
    $count= mysqli_num_rows($result);
    if($count>0){
        header("Location: ./login.php?msg=signup");
    }
    else{
        $reg= $conn->prepare("INSERT INTO account_details(USERNAME,PASSWORD,PH_NO,EMAIL) VALUES(?,?,?,?)");
        $reg->bind_param("ssss",$username,$password,$mobileno,$email);
        if($reg->execute()){
            header("Location: ./login.php?msg=success");
        }
        else{
            header("Location: ./login.php?msg=fail");
        }
            
    }
}

if (isset($_POST['signin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt= $conn->prepare("SELECT * FROM account_details WHERE EMAIL=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result= $stmt->get_result();
    $count= mysqli_num_rows($result);
    $data= $result->fetch_assoc();
    if($count>0){
        if($data['EMAIL']==$email && $data['PASSWORD']==$password){
            session_start();
            $_SESSION['ID']=$data['ACCOUNT_ID'];
            header('Location: ./dashboard.php');
        }
        else{
            header("Location: ./login.php?msg=invalid");
        }
         
    }
    else{
        header("Location: ./login.php?msg=signin");  
    }
}


?>