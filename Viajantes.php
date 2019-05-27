<!DOCTYPE html>
<html>

<head>
    <title>Viajantes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link data-require="bootstrap@4.1.3" data-semver="4.1.3" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script data-require="bootstrap@4.1.3" data-semver="4.1.3" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Estilo.css" />

</head>


<body>
    <?php $activo = 'viajantes';?>

    <?php include 'Navbar.php'; ?> 
    
    <div class="container-fluid">
	<div class="row">
        
    <?php include 'Izquierda.php';?>
        <?php require 'Centro.php'; ?>
        <?php include 'Derecha.php';?>
    </div>
	
</div>

</body>
</html> 
