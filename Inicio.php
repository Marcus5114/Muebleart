<!DOCTYPE html>
<html>
<head>
<title>Inicio</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="Estilo.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
<?php $activo = 'inicio'; $iconos='inicio';?>


<?php include 'Navbar.php'; ?> 


<div class="container-fluid">
	<div class="row">
        <?php if($iconos=='inicio') include 'Izquierda.php';?>
        <?php require 'Centro.php'; ?>
        <?php include 'Derecha.php';?>
    </div>
	
</div>



</body>
</html> 
