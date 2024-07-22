<!-- carousel -----------------------------------------------------------------------------> 

<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/QS.jpg" class="d-block w-100 " height="100%"alt="...">

      <div class="carousel-caption top-0 mt-4">
        <h2>SOMOS M-IA</h2>
          <div style="text-align: center; margin-top: 20px;"> 
            <a href="sobre">
            <button class="btn_carousel btn btn-light" >Nuestra historia</button>
            </a>
          </div> 
      </div>

    </div>
    <div class="carousel-item">
    <img src="assets/img/AS.jpg" class="d-block w-100" height="100%" alt="...">

    <div class="carousel-caption top-0 mt-4">
          <h2> Regístrate gratis si tenes una empresa o distribuidor. Descuentos, beneficios extra y atención personalizada </h2>
            <div style="text-align: center; margin-top: 20px;"> 
              <a href="registrarse">
              <button class="btn_carousel btn btn-light">Unirse a M-IA</button>
             </a>
            </div> 
           </div>
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- SUBPARRAFO E ICONOS -------------------------------------------------------------->

<div class="container mt-5 text-center ">
    <h2>Explora M-IA</h2>
    <div class="row justify-content-center mt-4">
        <div class="col-6 col-sm-3 mb-4">
            <a class="pie" href="catalogo"> 
                <div class="icono">
                    <img src="assets/img/iconos/iconopc.png" alt="Computadoras" class="img-fluid">
                </div>
                <p>Computadoras</p>
            </a>
        </div>
        <div class="col-6 col-sm-3 mb-4">
            <a class="pie" href="catalogo"> 
                <div class="icono">
                    <img src="assets/img/iconos/iconocel.png" alt="Teléfonos" class="img-fluid">
                </div>
                <p>Teléfonos</p>
            </a>
        </div>
        <div class="col-6 col-sm-3 mb-4">
            <a class="pie" href="catalogo"> 
                <div class="icono">
                    <img src="assets/img/iconos/iconoaccesorio.png" alt="Accesorios" class="img-fluid">
                </div>
                <p>Accesorios</p>
            </a>
        </div>
        <div class="col-6 col-sm-3 mb-4">
            <a class="pie" href="#footer"> 
                <div class="icono">
                    <img src="assets/img/iconos/iconosoport.png" alt="Soporte" class="img-fluid">
                </div>
                <p>Soporte</p>
            </a>
        </div>
    </div>
</div>

<!-- COMENTARIOS -------------------------------------------------------------------------------->

<div class="Comentario container mt-5 mb-5">
    <form class="text-center">
      <div class="grupocomentario form-group">
          <h4>¿Dudas ó consultas?</h4>
          <input type="email" class="form-control mb-3" placeholder="Ingresa tu email" aria-label="Email" required>
      </div>
        <div class="grupocomentario form-group">
            <label for="pais">Selecciona tu país:</label>
            <select id="pais" class="form-control mb-3">
                <option value="">Selecciona un país</option>
                <option value="argentina">Argentina</option>
                <option value="brasil">Brasil</option>
                <option value="chile">Chile</option>
                <option value="colombia">Colombia</option>
                <option value="mexico">México</option>
                <option value="peru">Perú</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        

        <div class="grupocomentario form-group mt-4">
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" class="form-control mb-3" rows="4" placeholder="Deja tus comentarios aquí..."></textarea>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
</div>

