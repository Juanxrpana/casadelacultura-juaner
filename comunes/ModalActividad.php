
<!-- Modal -->
<div class="modal fade" id="ModalActividad" tabindex="-1" role="dialog" aria-labelledby="ModalActividadLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalActividad1">Agregar nueva Actividad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertActividad" class="formulario" action="" method="POST">
              <!-- <label>Numero de la Actividad</label>
              <input type="text" id="idActividad" name="idActividad" class="form-control form-control-sm" > ESTO ES AUTO INCREMENTABLE wtf-->
             
              <!-- grupo Nombre de actividad -->
              <div class="formulario__grupo"  id="grupo__NombreActividad">
              <label for="NombreActividad" class="formulario__label">Nombre de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="NombreActividad" name="NombreActividad" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El nombre de la actividad no debe llevar numeros ni caracteres especiales "();/&*</p>
              </div> 
              
              <!-- grupo Fecha actividad -->
              <div class="formulario__grupo"  id="grupo__FechaActividad">
              <label for="FechaActividad" class="formulario__label">Fecha de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="date" id="FechaActividad" name="FechaActividad" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">La fecha no debe estar vacia</p>
              </div> 

              <!-- grupo cantidad de participantes -->
              <div class="formulario__grupo"  id="grupo__Participantes">
              <label for="Participantes" class="formulario__label">Cantidad de participantes para la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Participantes" name="Participantes" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">Los participantes no pueden llevar ni letras ni caracteres especiales *()/&%$"</p>
              </div> 

              <!-- grupo cantidad de encuentros -->
              <div class="formulario__grupo"  id="grupo__CantidadEncuentros">
              <label for="CantidadEncuentros" class="formulario__label">Cantidad de Encuentros</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="CantidadEncuentros" name="CantidadEncuentros" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">Los encuentros no pueden llevar ni letras ni caracteres especiales *()/&%$"</p>
              </div> 
              
               <!-- grupo Hora de inicio -->
               <div class="formulario__grupo"  id="grupo__HoraInicio">
              <label for="HoraInicio" class="formulario__label">Hora de inicio de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="time" id="HoraInicio" name="HoraInicio" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">La Hora no debe estar vacia</p>
              </div> 

               <!-- Hora de cierre -->
               <div class="formulario__grupo"  id="grupo__HoraCierre">
              <label for="HoraCierre" class="formulario__label">Hora de cierre de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="time" id="HoraCierre" name="HoraCierre" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">La Hora no debe estar vacia</p>
              </div> 

              <!-- Cédula encargado  -->
              <div class="formulario__grupo"  id="grupo__Cedula">
              <label for="Cedula" class="formulario__label">Cedula del encargado de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Cedula" name="Cedula" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">La Hora no debe estar vacia</p>
              </div> 

               <!-- grupo Nombre encargado -->
               <div class="formulario__grupo"  id="grupo__Nombre1">
              <label for="Nombre1" class="formulario__label">Nombre del Encargado de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Nombre1" name="Nombre1" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El nombre del encargado de la actividad no debe llevar numeros ni caracteres especiales "();/&*</p>
              </div> 

               <!-- grupo Nombre encargado2 -->
               <div class="formulario__grupo"  id="grupo__Nombre2">
              <label for="Nombre2" class="formulario__label">Segundo nombre del Encargado de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Nombre2" name="Nombre2" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El nombre del encargado de la actividad no debe llevar numeros ni caracteres especiales "();/&*</p>
              </div> 

               <!-- grupo Apellido encargado -->
               <div class="formulario__grupo"  id="grupo__Apellido1">
              <label for="Apellido1" class="formulario__label">Apellido del Encargado de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Apellido1" name="Apellido1" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El apellido del encargado de la actividad no debe llevar numeros ni caracteres especiales "();/&*</p>
              </div> 

               <!-- grupo Apellido2 encargado -->
               <div class="formulario__grupo"  id="grupo__Apellido2">
              <label for="Apellido2" class="formulario__label">Segundo Apellido Encargado de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Apellido2" name="Apellido2" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El apellido del encargado de la actividad no debe llevar numeros ni caracteres especiales "();/&*</p>
              </div> 

               <!-- grupo telefono encargado -->
               <div class="formulario__grupo"  id="grupo__Telefono">
              <label for="Telefono" class="formulario__label">Nro telefonico del Encargado de la Actividad</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Telefono" name="Telefono" class="form-control form-control-sm form__input" placeholder="04XX-XXXXXXX">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El teléfono del encargado de la actividad debe ser XXXX-XXXXXXX </p>
              </div> 

               <!-- grupo Estatus de actividad NO SE COMO USARLO AUN xd-->
               <div class="formulario__grupo"  id="grupo__Estatus">
              <label for="Estatus" class="formulario__label">Estatus de la actividad</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Estatus" name="Estatus" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El Estatus de la actividad no debe estar vacio</p>
              </div> 
              
              
              <br>
              <button type="button" id="incluir3" class="btn btn-primary">Guardar</button>
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


