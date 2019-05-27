

<div class="col-md-1">

<!--Modal Usuario -->
<div>
 <button type="button" class="btn btn-light btn-block" data-toggle="modal" data-target="#myModal"><i id="icon" class="fas fa-boxes"></i></button>

  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Usuarios</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <ul class="list-group">
            <li class="list-group-item">
              <i id="modal-icon" class="far fa-user"></i>
              <span id="modal-label">Usuario1</span>
              <span id="centrar"><a id="modal-link-edit" href="modal-user-edit" data-toggle="modal" data-target="#modal-user-edit"><i class="far fa-edit"></a></i></span>
              <span id="centrar"><a id="modal-link-delete"href="#"><i class="far fa-trash-alt"></a></i></span>
            </li>
            <li class="list-group-item">
              <i id="modal-icon" class="far fa-user"></i>
              <span id="modal-label">Usuario2</span>
              <span><a id="modal-link-edit"href="#"><i class="far fa-edit"></a></i></span>
              <span><a id="modal-link-delete"href="#"><i class="far fa-trash-alt"></a></i></span>
            </li>
            <li class="list-group-item">
              <i id="modal-icon" class="far fa-user"></i>
              <span id="modal-label">Usuario3</span>
              <span><a id="modal-link-edit"href="#"><i class="far fa-edit"></a></i></span>
              <span><a id="modal-link-delete"href="#"><i class="far fa-trash-alt"></a></i></span>
            </li>
          </ul> 
          
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
      
    </div>
  </div>
  




</div>
  
<div class="modal" id="modal-user-edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Usuario1</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
          <label>Nombre:</label><input type="text" name="nombre">
          <br>
          <label>Apellido:</label><input type="text" name="apellido">
          <br>
          <label>Usuario:</label><input type="text" name="usuario">
          <br>
          <label>Contraseña:</label><input type="password" name="contraseña">
          <br>


        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</div>
