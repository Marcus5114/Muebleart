

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" role="navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
    

        <div class="collapse navbar-collapse navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item <?= $activo=='inicio'?'active':''?>">
                  <a  class="nav-link" href="Inicio.php">Inicio</a>
                </li>
                <li class="nav-item <?= $activo=='inventario'?'active':''?>">
                  <a class="nav-link" href="Inventario.php">Inventario</a>
                </li>
                <li class="nav-item <?= $activo=='fabricas'?'active':''?>">
                  <a  class="nav-link" href="Fabricas.php">Fabricas</a>
                </li>
                <li class="nav-item <?= $activo=='distribuidoras'?'active':''?>">
                  <a  class="nav-link" href="Distribuidoras.php">Distribuidoras</a>
                </li>
                <li class="nav-item <?= $activo=='viajantes'?'active':''?>">
                  <a  class="nav-link" href="Viajantes.php">Viajantes</a>
                </li>
                <li class="nav-item <?= $activo=='contacto'?'active':''?>">
                  <a  class="nav-link" href="Contacto.php">Contacto</a>
                </li>
              </ul>
        </div>
    </div>
</nav>

 
  
  