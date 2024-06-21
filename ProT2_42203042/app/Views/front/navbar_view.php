
<nav class="section">
<nav class="navbar fixed-top navbar-expand-lg navbar-black bg-black" style="z-index: 1030;">
      <div class="container-fluid" style="display: flex; justify-content: space-between;">
        <a class="navbar-brand" href="<?php echo base_url('principal')?>">
          <img src="<?php echo base_url('assets/img/logo.png')?>" alt="marca" width="200" height="60" class="img-fluid"/>
        </a>
        <form class="d-flex" role="search" style="flex: 1;">
          <input class="form-control me-2" type="search" placeholder="¿Qué estas buscando hoy?" aria-label="Search" style="flex: 1; min-width: 200px;">
          <button class="btn btn-outline-light" type="submit">Buscar</button>
        </form>
      </div>
    </nav>

    <nav class="navbar fixed-top navbar-expand-lg navbar-black bg-black" style="top: 90px; z-index: 1029;">
      <div class="container-fluid">
        <a class="icono_user" href="<?php echo base_url('ingresar')?>" style="display: flex; align-items: center;">
          <img class="user" src="https://img.icons8.com/?size=100&id=84898&format=png&color=000000" alt="" style="filter: invert(100%);" width="30" height="30">
        </a>
        <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"   id="navbarNavAltMarkup" >
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
</nav>