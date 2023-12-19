<?php 
$wall_paper = "picture.jpg";
?>

<!DOCTYPE html>
<html>
<head>
<style> h1 { color: #ffffff;
font-size: 62px; 
font-weight: 800; 
line-height: 72px; 
margin: 0 0 24px; 
text-align: center; 
text-transform: uppercase; 

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
form1 {
background-color: #EDD89A;
color: #000000;
opacity: .90;
width: 100%;
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
left:250px;
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
label {
position: relative;
font-family: 'Poppins', sans-serif;
font-size: 2.25rem;
font-weight: 500;
letter-spacing: 0.335rem;
font-style: italic;
text-transform: capitalize;
color: #ffffff;
border-radius: 2.75rem;
-webkit-border-radius: 2.75rem;
-moz-border-radius: 2.75rem;
padding: 0rem 0.625rem;
border-style: none;
border-width: 0rem;
border-color: #EF2D56;
-webkit-box-shadow: none;
-moz-box-shadow: none;
-box-shadow: none;

}

</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div  class="d-flex justify-content-center align-items-center container1">
    	
    	<form class="form1"   action="create_user.php"  method="post">

    		<h1 class="h1">WELCOME</h1> <br>
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
		    <label class="label">Fundamentals of Database</label>
		</div>
	  <div class="mb-3">
		  <button type="submit" class="button001 button0011" class="btn btn-primary">Login</button>
		
		  </div>
		</form>
	
    </div>
</body>
</html>