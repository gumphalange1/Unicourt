<?php

if (isset($_GET['del'])) {
$id = $_GET['del'];

if(isset($_POST['id']))
{
        include "../db_conn.php";
    $id = $_POST['id'];
        
 $sql = "DELETE FROM users WHERE id=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$id]);
 header("Location: ../users.php?sucess=Ciao! ");
	exit;

} else { 
	header("Location: ../index2.php?error=error");
	exit;
}

?>

if (isset($_GET['del'])) {
		$id = $_GET['del'];
	
		$sql = "SELECT * FROM users WHERE id = ?";
    		$stmt = $conn->prepare($sql);
    		$stmt->execute([$id]);

		
 	   if($stmt->rowCount() == 1)
		{
   			 $user = $stmt->fetch();
		                $id =  $user['id'];
			$_SESSION['id'] = $id;
	if(isset($_POST['id']))
	{
      		  include "../db_conn.php";
  		  $id = $_POST['id'];
        
		 $sql = "DELETE FROM users WHERE id=?";
		$stmt= $conn->prepare($sql);
		$stmt->execute([$id]);
		 header("Location: ../users.php");
		exit;

	} else { 
			header("Location: ../users.php?error=error");
			exit;
		}		
	   }
} else{
header("Location: ../users.php?error=error");
			exit;
}