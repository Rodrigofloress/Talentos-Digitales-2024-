<div class="form_registro d-flex justify-content-center align-items-center" style="background-color: #f8f9fa; min-height: 80vh;">
  <div class="card  mb-4 mt-4" style="width: 400px; padding: 20px;">
    <h3 class="card-title text-center" style="color: #343a40; margin-bottom: 20px;">Registrar Usuario</h3>
    <form style="margin-bottom: 1rem;">
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="firstName" style="color: #343a40;">Nombre</label>
        <input type="text" class="form-control" id="firstName" placeholder="Ingresa tu nombre" style="border-radius: 5px;">
      </div>
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="lastName" style="color: #343a40;">Apellido</label>
        <input type="text" class="form-control" id="lastName" placeholder="Ingresa tu apellido" style="border-radius: 5px;">
      </div>
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="email" style="color: #343a40;">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" style="border-radius: 5px;">
      </div>
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="phone" style="color: #343a40;">Número de Teléfono</label>
        <input type="tel" class="form-control" id="phone" placeholder="Ingresa tu número de teléfono" style="border-radius: 5px;">
      </div>
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="username" style="color: #343a40;">Nombre de Usuario</label>
        <input type="text" class="form-control" id="username" placeholder="Ingresa tu nombre de usuario" style="border-radius: 5px;">
      </div>
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="password" style="color: #343a40;">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña (mínimo 5 caracteres)" style="border-radius: 5px;">
      </div>
      <button type="submit" class="btn btn-primary btn-block" style="background-color: #007bff; border: none; border-radius: 5px; padding: 10px; ">Guardar</button>
      <button type="button" class="btn btn-secondary btn-block" style="border: none; border-radius: 5px; padding: 10px;">Cancelar</button>
    </form>
    <div class="text-center" style="margin-top: 20px;">
      <p style="color: #343a40;">¿Ya tienes tu Usuario? <a href="<?php echo base_url('ingresar') ?>" style="color: #007bff;">Ingresar</a></p>
    </div>
  </div>
</div>
