<nav class="navbar bg-black border-body">
    <div class="container-fluid" style="display: flex; justify-content: space-between;">
      <a class="navbar-brand" href="<?php echo base_url('principal')?>">
        <img src="<?php echo base_url('assets/img/logo.png')?>" alt="marca" width="150" height="60" class="img-fluid"/>
      </a>

      <a class="icono_user" href="<?php echo base_url('ingresar')?>" style="display: flex; align-items: center;">
        <img class="user" src="assets/img/user.png" width="40" height="40">
      </a>

      <form class="d-flex form-inline my-2 my-lg-0">
        <input class="form-control me-2 form-control-sm my-2 my-sm-0 mr-sm-2" type="search" placeholder="¿Qué buscas hoy?" aria-label="Search">
        <button class="btn btn-outline-light btn-sm my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
    
    <!-- inicio de nav contraido -->
    <nav class="navbar navbar-expand-lg navbar-black bg-black">
      <div class="container-fluid">
        <button class="navbar-toggler btn btn-outline-secondary navbar-toggle-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link text-light" href="principal">Inicio</a>
            <a class="nav-link text-light" href="ingresar">Ingresar</a>
            <a class="nav-link text-light" href="registrarse">Registrarse</a>
            <a class="nav-link text-light" href="catalogo">Catálogo</a>
            <a class="nav-link text-light" href="sobre">Sobre M-IA</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- fin de nav contraido -->
  </nav>
