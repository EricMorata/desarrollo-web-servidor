<link rel="stylesheet" href="../resources/images/style.css">
<nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cenec Modas</a>
    <div class="d-flex flex-row">
      <div class="p-1">
        <a class="nav-link flex" href="http://localhost/06_bbdd/tienda_ropa/public/cerrar_sesion_cliente.php">
            Cerrar sesión
          </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            Cenec Modas
          </h5>

          <a class="nav-link" href="">
            <svg class="svg-icon" viewBox="0 0 20 20">
              <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
            </svg>
            <?php echo $_SESSION["usuario"] ?>
          </a>

          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/06_bbdd/tienda_ropa/public/">Home</a>
            </li>
            <?php
            if ($_SESSION["rol"] == "administrador") {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/06_bbdd/tienda_ropa/public/prendas/">Prendas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/06_bbdd/tienda_ropa/public/clientes/">Clientes
                  <!-- <span class="badge bg-success">New</span> -->
                </a>
              </li>
              <li class="nav-item"></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Compras
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="nav-link" href="http://localhost/06_bbdd/tienda_ropa/public/compras/">Compras</a>
                  </li>
                <?php
              }
                ?>
                <li>
                  <a class="nav-link" href="http://localhost/06_bbdd/tienda_ropa/public/compras/comprar_prendas.php">Nueva compra</a>
                </li>

                <li>
                  <a class="nav-link" href="http://localhost/06_bbdd/tienda_ropa/public/compras/cliente_compras.php?usuario=">Historial compras</a>

                </li>
                </ul>
              </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-primary" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </div>
</nav>