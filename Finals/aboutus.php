<?php
$wall_paper = "picture.jpg";
?>



<!DOCTYPE html>
<html>

<title> About Us</title>

<style>
h2 {text-align: center;}
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
background-color: #EDD89A;
color: #000000;
opacity: .90;
width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
border-radius: 4px;
box-shadow: 5px 5px 1px white;
text-align: center;
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
top: 10px;
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
	<title>Welcome</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>

   <div class="d-flex justify-content-center align-items-center vh-100">
<form class="form1" class="shadow w-450 p-5"  method="post">
<?php
echo "<h2> GROUP MEMBERS</h2>";
echo "Belle Placedes <br>";
echo " Eric Llovit<br>";
echo "Jadell Mendoza  <br>";
echo " Janell Mendoza<br>";
echo " Jeffrey Buen<br>";
echo " Jenella Aranel<br>";
echo " Jhon Gerald S. Lopo<br>";
echo "John Montarde<br>";
echo " Jose Varela<br>";
echo " Josefa Marie Arnaldo<br>";
echo "Liezel Bertlyn Ais<br>";
echo " Maricar Buen<br>";
echo "Noeme Nunez<br>";
echo "Shane Laurence Arnaldo <br>";
 ?>


</form>
</div>

 <button type="button" class="button005 button0055"  onClick="location.href='home.php'">HOME</button>
</body>
</html>