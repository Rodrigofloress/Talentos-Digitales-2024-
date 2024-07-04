<div class="form_ingreso " style="display: flex; justify-content: center; align-items: center; height: 80vh; background-color: #f8f9fa;">
    <div class="card" style="width: 400px; padding: 40px;">
      <h3 class="card-title text-center" style="color: #343a40; margin-bottom: 20px;">Iniciar Sesión</h3>
      <form>
        <div class="form-group" style="margin-bottom: 15px;">
          <label for="emailOrPhone" style="color: #343a40;">Correo Electrónico o Número de Teléfono</label>
          <input type="text" class="form-control" id="emailOrPhone" placeholder="Ingresa tu correo electrónico o número de teléfono" style="border-radius: 5px;">
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
          <label for="password" style="color: #343a40;">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" style="border-radius: 5px;">
        </div>
        <button type="submit" class="btn btn-primary btn-block" style="background-color: #007bff; border: none; border-radius: 5px; padding: 10px; ">Ingresar</button>
        <button type="button" class="btn btn-secondary btn-block" style="border: none; border-radius: 5px; padding: 10px;">Cancelar</button>
      </form>
      <div class="text-center" style="margin-top: 20px;">
        <p style="color: #343a40;">¿Aún no te registraste? <a href="<?php echo base_url('registrarse')?>" style="color: #007bff;">Registrarse</a></p>
        <p style="color: #343a40;">¿Olvidaste la contraseña? <a href="#" style="color: #007bff;">Recuperar contraseña</a></p>
      </div>
    </div>

  </div>