<!DOCTYPE html>
<html>

<head>
    <title>Inventario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link data-require="bootstrap@4.1.3" data-semver="4.1.3" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
<script data-require="bootstrap@4.1.3" data-semver="4.1.3" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Estilo.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


</head>


<body>
    <?php $activo = 'inventario'; $iconos='inventario';?>

    <?php include 'Navbar.php'; ?> 
    
    <div class="container-fluid">
	<div class="row">
        
    <?php if($iconos=='inventario') include 'Izquierda-Inventario.php';?>
        <?php require 'Centro.php'; ?>
        <?php include 'Derecha.php';?>
    </div>
	
</div>

</body>
</html> 
