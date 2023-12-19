<?php 
$wall_paper = "picture.jpg";
?>
<?php 

	 include('db_conn.php');

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
	
		$sql = "SELECT * FROM users WHERE id = ?";
    		$stmt = $conn->prepare($sql);
    		$stmt->execute([$id]);

		
 		     if($stmt->rowCount() == 1)
			{
   			 $user = $stmt->fetch();

		                $id =  $user['id'];

			$_SESSION['id'] = $id;
			
			}
	   }
	
?>

<!DOCTYPE html>
<html>
<head>
<style> h1 {text-align: center;
  font-weight: bold;

} </style>
</head>
<body>
<style>
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
background-color: #EDD89A;
color: #000000;
opacity: .90;
width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
border-radius: 4px;
box-shadow: 5px 5px 1px white;
}
</style>

<style>
.search_categories{
width: 100%;
font-size: 13px;
  padding: 10px 8px 10px 14px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 6px;
  position: relative;
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
left:130px;
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
top: 150px;
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
  
.button0044:hover {
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
top: 220px;
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
	<title>Update User</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <div class="d-flex justify-content-center align-items-center container1">
    	
    	<form class="form1" class="shadow w-450 p-3"   action="php/update.php"  method="post">

    		<h1 class="h1">Update user</h1> <br>
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
		
		  

		  <div class="mb-3">
		  <label class="form-label">User ID: </label>
		    <input type="text"  class="form-control"4 name="idd" value= "<?=$_SESSION['id']?>" value="<?php echo (isset($_GET['idd']))?$_GET['idd']:"" ?> ">
		  </div>
		  <div class="mb-3">
		  <label class="form-label">Full Name</label>
		    <input type="text" 
		           class="form-control"4
		           name="fname"
		           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="username" 
		           value="<?php echo (isset($_GET['username']))?$_GET['username']:"" ?>">
		  </div>
		<div class="mb-3">
			 <label class="form-label">User Type</label></br>
			<select class="search_categories"  name="usertype"  value="<?php echo (isset($_GET['usertype']))?$_GET['usertype']:"" ?>">		
			<option value=""> </option>
			  <option value="Admin">Admin</option>
			 <option value="User">User</option>				
			</select>
		</div>
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		 <input type="password"  class="form-control" name="password"  value="<?php echo (isset($_GET['password']))?$_GET['password']:"" ?>"> 
		  <a href="create_user.php"  class="button002 button0022" class="link-secondary" name="view">Create new user</a>
		<a href="users_table.php"  class="button004 button0044" class="link-secondary" name="view">Delete a user</a>
		  
		
		<button type="submit" name="update" class="button001 button0011" class="btn btn-primary">Update</button>
		
		  </div>
		</form>
 	 <button type="button" class="button003 button0033"  onClick="location.href='aboutus.php'">About us</button>

	 <button type="button" class="button005 button0055"  onClick="location.href='home.php'">HOME</button>
    </div>
	<div class="div1" style="display: none;">
		  <h5 >ID:  <?=$_SESSION['id']?></h3>
	
	</div>


</body>
</html>