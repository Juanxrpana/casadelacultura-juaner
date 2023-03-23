<!-- Modal -->
<div class="modal fade" id="ModalUsuario" tabindex="-1" role="dialog" aria-labelledby="ModalUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalUsuario1">Agregar nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertUsuario" class="formulario" action="" method="POST">
           
          <!-- grupo cedula/id de Usuario -->
            <div class="formulario__grupo" id="grupo__IdUsuario">
              <label for="IdUsuario" class="formulario__label">Cedula del Usuario</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="IdUsuario" name="IdUsuario" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El numero del Usuario no debe llevar letras ni caracteres especiales "();/&*</p>
            </div> 
             <!-- grupo privilegio de Usuario -->
             <div class="formulario__grupo" id="grupo__privilegio">
              <label for="privilegio" class="formulario__label">Privilegio de Usuario</label>
                <div class="formulario__grupo-input">
                    <select class="form-control" id="privilegio" name="privilegio">
                    <option value="" disabled selected>Selecciona una opción</option>
                      <option value="user">User</option>
                      <option value="admin">Admin</option>
                    </select>
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El numero del Usuario no debe llevar letras ni caracteres especiales "();/&*</p>
            </div> 

             <!-- grupo Nombre de Usuario -->
             <div class="formulario__grupo" id="grupo__Usuario">
              <label for="Usuario" class="formulario__label">Nombre del Usuario</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Usuario" name="Usuario" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El numero del Usuario no debe llevar letras ni caracteres especiales "();/&*</p>
            </div> 
             <!-- grupo clave de Usuario -->
             <div class="formulario__grupo" id="grupo__clave">
              <label for="clave" class="formulario__label">Clave</label>
                <div class="formulario__grupo-input">
                  <input type="password" id="clave" name="clave" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El numero del Usuario no debe llevar letras ni caracteres especiales "();/&*</p>
            </div> 
              <!-- grupo confirmar clave de Usuario -->
              <div class="formulario__grupo" id="grupo__conclave">
              <label for="conclave" class="formulario__label">Confirmar Clave</label>
                <div class="formulario__grupo-input">
                  <input type="password" id="conclave" name="conclave" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El numero del Usuario no debe llevar letras ni caracteres especiales "();/&*</p>
            </div> 
             <!-- grupo pregunta de Usuario -->
             <div class="formulario__grupo" id="grupo__Seguridad_idPregunta">
              <label for="Seguridad_idPregunta" class="formulario__label">Pregunta de seguridad</label>
                <div class="formulario__grupo-input">
                <select class="form-control" name="Seguridad_idPregunta" id="Seguridad_idPregunta"></select> 
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">Escoja uno</p>
            </div> 
             <!-- grupo respuesta de Usuario -->
             <div class="formulario__grupo" id="grupo__respuesta">
              <label for="respuesta" class="formulario__label">Respuesta</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="respuesta" name="respuesta" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El numero del Usuario no debe llevar letras ni caracteres especiales "();/&*</p>
            </div> 


              
            
              <br>

               <!-- MENSAJE DE ERROR -->
              <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fa-solid fa-exclamation error_icon"></i><b>ERROR:</b>Debes rellenar el formulario</p>
              </div>

              <button type="button" id="incluir6" class="btn btn-primary">Guardar</button>

              <input class="form-control form-control-sm" type="text" value="insertar" name="accion" id="accion" 
              style= "display: none;">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button"  id="" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


