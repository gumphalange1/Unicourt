<?php
    include "../db_conn.php";

if(isset($_POST['idd'])){


if(isset($_POST['idd']) )
{

        include "../db_conn.php";
    
    $id = $_POST['idd'];
    $fname = $_POST['fname'];
    $username = $_POST['username'];
   $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    
    
    $sql = "UPDATE users SET fname=?, username=?, password=?, usertype=? WHERE id=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$fname, $username, $password, $usertype,$id]);
    $id = $_POST['idd'];
	 header("Location: ../users_table.php?sucess=User updated successfully");
	exit;

}


} else { 
	header("Location: ../users_table.php?error=Can't update user, try again later");
	exit;
}

?>