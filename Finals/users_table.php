<?php 
$wall_paper = "picture.jpg";
?>

<?php 

	 include('db_conn.php');

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
		
        
		 $sql = "DELETE FROM users WHERE id=?";
		$stmt= $conn->prepare($sql);
		$stmt->execute([$id]);
		 header("Location: users_table.php?sucess=Ciao! ");
		exit;
	
			
			}
	   }
	
?>
<!DOCTYPE html>
<html>
<head>
<style>
h1 {
  text-align: center;
}

</style>


<style type="text/css">
body {
background-image: url('<?php echo $wall_paper;?>');
height: 100%;
width: 100%;
background-size: cover;
background-repeat: no-repeat;
background-position: center center;
}
</style>
<style>
.form1 {
background-color:#FFFFFF;
color: #000000;
opacity: .90;
width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
border-radius: 4px;
box-shadow: 5px 5px 1px white;
}
</style>

<style>
.container {
	width: 450px;

}
.container1 {
	min-height: 100vh;

}
</style>
<style>
.button004 {
  display: inline-flex;
  padding: 0.7rem 1rem;
font-family: Arial, sans-serif;
  font-weight: 65000;
  font-size: 16px;
  text-align: center;
  text-decoration: none!important;
   color: #000000;
  backface-visibility: hidden;
  border: 0.3rem solid transparent;
  border-radius: 3rem;
}

.button0044 {
position: relative;
top: 10px;
right:10px;
  text-decoration: none!important;
font-family: Arial, sans-serif;
  border-color: transparent;
  background-color: #F6C70A;
  color: #000000;
  transition: transform 0.2s cubic-bezier(0.235, 0, 0.05, 0.95);
}
  
.button0044:hover {
  transform: perspective(1px) scale3d(1.044, 1.044, 1) translateZ(0) !important;
  text-decoration: none!important;
}
</style>

<style>
table {
 width: 100%;
border: 1px solid #54585d;
background-color: #EDD89A;
	border-collapse: collapse;
    font-family: Tahoma, Geneva, sans-serif;
}
table td {
	padding: 15px;
}
table thead td {
	position: relative;
	background-color: #54585d;
	color: #ffffff;
	font-weight: bold;
	font-size: 13px;
	border: 1px solid #54585d;
}
table tbody td {

	color: #000000;
	border: 1px solid #C6A409;
}
table tbody tr {

	background-color: #EDD89A;
}
table tbody tr:nth-child(odd) {

	background-color: #ffffff;
}
</style>
<style>
.edit_btn {
    text-decoration: none;
    padding: 10px 10px;
    background: #FEAD00;
    color: white;
    border-radius: 3px;
}


.del_btn {
    text-decoration: none;
    padding: 10px 10px;
    color: white;
    border-radius: 3px;
    background: #FF0606;
}

</style>
<style>
.div1 {
 position: absolute;
top: 10px;
left: 10px;
  width:50px;
  height: 50px;
background-color: #FFFFFF;

}
</style>
<style>
.button001 {
  display: inline-flex;
  padding: 0.7rem 1rem;
font-family: Arial, sans-serif;
  font-weight: 65000;
  font-size: 16px;
  text-align: center;
font-weight: bold;
  text-decoration: none!important;
   color: FCFAF1;
  backface-visibility: hidden;
  border: 0.3rem solid transparent;
  border-radius: 3rem;
}

.button0011 {
position: relative;
top: 10px;
left:120px;
font-weight: bold;
font-family: Arial, sans-serif;
  text-decoration: none!important;
  border-color: transparent;
  background-color: #F6C70A;
  color: #090909;
  transition: transform 0.2s cubic-bezier(0.235, 0, 0.05, 0.95);
}
  
.button0011:hover {
  transform: perspective(1px) scale3d(1.044, 1.044, 1) translateZ(0) !important;
  text-decoration: none!important;
}
</style>
<style>
.button002 {
  display: inline-flex;
  padding: 0.7rem 1rem;
font-family: Arial, sans-serif;
  font-weight: 65000;
  font-size: 16px;
  text-align: center;
  text-decoration: none!important;
   color: #000000;
  backface-visibility: hidden;
  border: 0.3rem solid transparent;
  border-radius: 3rem;
}

.button0022 {
position: absolute;
top: 15px;
right:30px;
  text-decoration: none!important;
font-family: Arial, sans-serif;
  border-color: transparent;
  background-color: #FFFFFF;
  color: #000000;
  transition: transform 0.2s cubic-bezier(0.235, 0, 0.05, 0.95);
}
  
.button0022:hover {
  transform: perspective(1px) scale3d(1.044, 1.044, 1) translateZ(0) !important;
  text-decoration: none!important;
}
</style>
<style>
.button003 {
  display: inline-flex;
  padding: 0.7rem 1rem;
font-family: Arial, sans-serif;
  font-weight: 65000;
  font-size: 16px;
  text-align: center;
  text-decoration: none!important;
   color: #000000;
  backface-visibility: hidden;
  border: 0.3rem solid transparent;
  border-radius: 3rem;
}

.button0033 {
position: absolute;
top: 80px;
right:30px;
  text-decoration: none!important;
font-family: Arial, sans-serif;
  border-color: transparent;
  background-color: #FFFFFF;
  color: #000000;
  transition: transform 0.2s cubic-bezier(0.235, 0, 0.05, 0.95);
}
  
.button0033:hover {
  transform: perspective(1px) scale3d(1.044, 1.044, 1) translateZ(0) !important;
  text-decoration: none!important;
}
</style>
<style>
.button005 {
  display: inline-flex;
  padding: 0.7rem 1rem;
font-family: Arial, sans-serif;
  font-weight: 65000;
  font-size: 16px;
  text-align: center;
  text-decoration: none!important;
   color: #000000;
  backface-visibility: hidden;
  border: 0.3rem solid transparent;
  border-radius: 3rem;
}

.button0055 {
position: absolute;
top: 150px;
right:30px;
  text-decoration: none!important;
font-family: Arial, sans-serif;
  border-color: transparent;
  background-color: #FFFFFF;
  color: #000000;
  transition: transform 0.2s cubic-bezier(0.235, 0, 0.05, 0.95);
}
  
.button0055:hover {
  transform: perspective(1px) scale3d(1.044, 1.044, 1) translateZ(0) !important;
  text-decoration: none!important;
}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Users</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 <div class="d-flex justify-content-center align-items-center container1">
    	
<form  class="form1" >
    		
		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
			<h1>Users</h1>
		</br>
		
			<table>				
			<thead>
			<tr>
			<th>ID </th>
			<th>Full Name</th>
			<th>User Name</th>
			<th>Password</th>
			<th>Usertype</th>
			</tr>
			</thead>
			<tbody>
			<?php
			include "db_conn.php";
			$result = $conn->prepare("SELECT * FROM users ORDER BY id ASC");
			$result->execute();
			for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr>
			<td><label><?php echo $row['id']; ?></label></td>
			<td><label><?php echo $row['fname']; ?></label></td>
			<td><label><?php echo $row['username']; ?></label></td>
			<td><label><?php echo $row['password']; ?></label></td>
			<td><label><?php echo $row['usertype']; ?></label></td>
			<td><a href="update_user.php? edit=<?php  echo $row['id']; ?>" class="edit_btn" >Edit</a></td>		
			<td><a href="users_table.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
			</tr>
			<?php } ?>
			</tbody>
			</table>
		 
	

	</form>	
	<button type="button" class="button003 button0033"  onClick="location.href='aboutus.php'">About us</button>
	  <a href="create_user.php"  class="button002 button0022" class="link-secondary" name="view">Create new user</a>
 	<button type="button" class="button005 button0055"  onClick="location.href='home.php'">HOME</button>
    </div>
</body>
</html>
