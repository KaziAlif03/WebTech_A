<?php
session_start();
?>

<!DOCTYPE html>

<html>
<fieldset>
     
	 <head>
	     <title> Home </title>
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<style>

* {
    box-sizing: border-box;
  }
  .pp1 {
    width: 40%;
    float: left;
    margin-left: 80px;
    margin-right: 40px;
    padding: 30px;
  }
  .pp1 img {
    height: 400px;
  }

  div a:hover{

background: skyblue;

color:black;

}

body{
	background-image: url(../uploads/44.png);
	background-repeat: no-repeat;
  	background-attachment: fixed;
  	background-size: cover;
	
  }
</style>
	 </head>
	     
	 <body>



	 <?php
	require "../view/dnav.php"
?>
	   

		<fieldset>

		<legend align="center"><h1  > Welcome to <?php echo $_SESSION["Name"]?> of our Hotel Radisson Blu<h1/></legend>
			<span> <p> </p> </span>
		</fieldset>
		
	


    <table align="center">
        <tr>
            <td>
            <img src="../uploads/5.jpg" height="350" width="400">
            <center><p>Delux master room</p></center>
            </td>
            <td>
            <img src="../uploads/55.jpg" height="350" width="400">
            <center><p>Rooftop swimming pool </p></center>
            </td>
            <td>
            <img src="../uploads/gym.png" height="350" width="400">
            <center><p>A indoor gymnasium </p></center>
            </td>
        </tr>
        <tr>
        <td>
            <img src="../uploads/t.jpg" height="350" width="400">
            <center><p>Ground floor swimming pool</p></center>
            </td>
            <td>
            <img src="../uploads/spa2.PNG" height="350" width="400">
            <center><p>Our spa center </p></center>
            </td>
            <td>
            <img src="../uploads/77.png" height="350" width="400">
            <center><p>The buffet package</p></center>
            </td>
        </tr>
    </table>




		
<div>

<?php
       include 'footer.php';
       ?>
</div>
	 </body>
	 </fieldset>
</html>	 