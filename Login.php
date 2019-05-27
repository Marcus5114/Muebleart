 <!DOCTYPE html>
<html>

  <head>
    <title>Bienvenido</title>
    <link data-require="bootstrap@4.1.3" data-semver="4.1.3" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script data-require="bootstrap@4.1.3" data-semver="4.1.3" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Estilo.css" />
    <script>
      function redirect() {
        window.location.href='Inicio.html';
      }
    </script>
  </head>

  <body>
    <div class="container-fluid"  >
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4" id="contenido">
          <form role="form" id="login" method="GET">
            <div class="form-group">
    
              <label for="exampleInputEmail1">
                Usuario:
              </label>
              <input type="text" class="form-control" id="Email" />
            </div>
            <div class="form-group">
               
              <label for="exampleInputPassword1">
                Contraseña:
              </label>
              <input type="password" class="form-control" id="Password" />
            </div>
            
            <div class="checkbox">
               
              <label>
                <input type="checkbox" /> Recuerdame
              </label>
            </div> 
            <button type="button" class="btn btn-primary" onclick="window.location.href='Inicio.html'" >
              Submit
            </button>
          </form>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </body>

</html>
