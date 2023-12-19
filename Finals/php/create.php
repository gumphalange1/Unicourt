<?php 
    include "../db_conn.php";
	

if(isset($_POST['fname']) && 
   isset($_POST['username']) &&  
   isset($_POST['password'])  &&  
   isset($_POST['usertype'])    ){

    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype= $_POST['usertype'];

    $data = "fname=".$fname."&username=".$username;
    
    if (empty($fname)) {
    	$em = "Full name is required";
    	header("Location: ../create_user.php?error=$em&$data");
	    exit;
    }else if(empty($username)){
    	$em = "User name is required";
    	header("Location: ../create_user.php?error=$em&$data");
	    exit;
    }else if(empty($password)){
    	$em = "Password is required";
    	header("Location: ../create_user.php?error=$em&$data");
	    exit;
    }else {
	
$sql = "INSERT INTO users (fname, username, password,usertype) VALUES (?,?,?,?)";
$conn->prepare($sql)->execute([$fname, $username, $password,$usertype]);

 header("Location: ../create_user.php?success=Your account has been created successfully");
                exit;
 }

}else {
	header("Location: ../create_user.php?error= Can't create user, try again later");
	exit;
}