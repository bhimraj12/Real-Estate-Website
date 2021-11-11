<?php
session_start();
include "./db.php";

if (isset($_POST['signup'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            
            echo '<script> alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character."); document.location.href="./login.php"</script>';
            return;
        }
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
            header('Location: ./sell.php');
        }
        else{
            header("Location: ./login.php?msg=invalid");
        }
         
    }
    else{
        header("Location: ./login.php?msg=signin");  
    }
}

if (isset($_POST['sell'])){
    $cost=$_POST['cost'];
    $name=$_POST['name'];
    $location=$_POST['location'];
    $area=$_POST['area'];
    $bedroom=$_POST['bedroom'];
    $bathroom=$_POST['bathroom'];
    $tm=md5(time());
    $image=$_FILES["image"]["name"];
    $path_db1="./images/upload/".$tm.$image;
    move_uploaded_file($_FILES["image"]["tmp_name"],$path_db1);
    $phno=$_POST['phno'];
    $stmt= $conn->prepare("INSERT INTO property_master(COST,NAME,LOCATION,AREA,BEDROOM,BATHROOM,IMAGE,ACCOUNT_ID,OWNER_INFO) values (?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss",$cost,$name,$location,$area,$bedroom,$bathroom,$path_db1,$_SESSION['ID'],$phno);
    if($stmt->execute()){
       header("Location:./sell.php?msg=success") ;
    }
    else{
        header("Location:./sell.php?msg=fail") ;
    }
    
}

?>