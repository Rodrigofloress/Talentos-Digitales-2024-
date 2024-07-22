<?php
$session = session();
$usuario = $session->get('usuario');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg">

  <div class="container-fluid">

    <a class="logo" href="<?php echo base_url('principal') ?>">
      <img src="<?php echo base_url('assets/img/Logo.png') ?>" alt="logo" width="150" height="60" class="img-fluid" />
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if (session()->perfil_id == 1) : ?>
      <!-- NAVBAR PARA ADMINISTRADOR ------------------------------------------------------------------------------>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="btn btn-light active btnUser btn-sm">
          <a href="" class=" link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">ADMIN: <?php echo session('usuario'); ?></a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="catalogo">Catálogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('listado') ?>">CRUD</a>
          </li>
          <li class="nav-link" href="#">
            <i class="bi bi-cart-check">Ventas</i>
          </li>
          <hr style="border-color: white;">
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="confirmLogout()">Cerrar Sesión</a>
          </li>
        </ul>
      </div>

      <script>
        function confirmLogout() {
          if (confirm("¿Estás seguro que deseas cerrar sesión?")) {
            window.location.href = "<?php echo base_url('/logout'); ?>";
          } else {
            return false;
          }
        }
      </script>

<?php elseif (session()->perfil_id == 2) : ?>
      <!-- ------------------------------------------------------- ----------------------------------------------->

      <!-- NAVBAR PARA CLIENTE ----------------------------------------------------------------------------------->

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="btn btn-light active btnUser btn-sm">
          <a href="" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">CLIENTE: <?php echo session('usuario'); ?></a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="catalogo">Catálogo</a>
          </li>
          <li>
            <a class="nav-link dropdown-item" href="#footer">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre">Sobre M-IA</a>
          </li>
          <a class="nav-link" href="#"><i class="bi bi-cart-check">Mi carrito</i></a>
          <hr style="border-color: white;">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
          </li>
        </ul>

        <form class="barra d-flex" role="search">
          <input class="intobarra form-control me-2" type="search" placeholder="¿Qué buscas hoy?" aria-label="Search">
          <button class="botonbarra btn btn-outline-light" type="submit">Buscar</button>
        </form>
      </div>

      <script>
        function confirmLogout() {
          if (confirm("¿Estás seguro que deseas cerrar sesión?")) {
            window.location.href = "<?php echo base_url('/logout'); ?>";
          } else {
            return false;
          }
        }
      </script>
      
      <?php else : ?>
      <!-- ------------------------------------------------------------------------------------------------------- -->


      <!-- NAVBAR PARA TODO PÚBLICO ----------------------------------------------------------------------------------->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="catalogo">Catálogo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color:white !important" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuarios
            </a>
            <ul class="dropdown-menu bg-black">
              <li>
                <a class="nav-link dropdown-item" href="ingreso">Ingresar</a>
              </li>
              <li>
                <a class="nav-link dropdown-item" href="registro">Registrarse</a>
              </li>
              <li>
                <hr class="dropdown-divider" style="background-color: white;">
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre">Sobre M-IA</a>
          </li>
        </ul>

        <form class="barra d-flex" role="search">
          <input class="intobarra form-control me-2" type="search" placeholder="¿Qué buscas hoy?" aria-label="Search">
          <button class="botonbarra btn btn-outline-light" type="submit">Buscar</button>
        </form>
      </div>
    <?php endif; ?>

  </div>
</nav>
</header>