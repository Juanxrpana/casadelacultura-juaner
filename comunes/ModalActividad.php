
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

        <!--formulario-->
          <form id="frminsertActividad" class="formulario" action="" method="POST">
             <!--  <label>Numero de la Actividad</label>
              <input type="text" id="idActividad" name="idActividad" class="form-control form-control-sm" > -->
             
             <!-- Cédula encargado  -->
             <div class="formulario__grupo"  id="grupo__RCedula">
              <label for="RCedula" class="formulario__label">Cedula del responsable de la Actividad</label>
                <div class="formulario__grupo-input">
                <input class="form-control" name="RCedula" id="RCedula"></input>
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">La Cédula no debe estar vacia</p>
              </div> 

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

              <!-- Salon donde será la actividad -->
              <div class="formulario__grupo"  id="grupo__idsalon">
              <label for="idsalon" class="formulario__label">Salon  de la Actividad</label>
                <div class="formulario__grupo-input">
                  <select class="form-control" name="li-idsalon" id="li-idsalon"></select>                  
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">Debe escoger 1 salon</p>
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

              <input type="hidden" name="tipo_formulario" value="actividad">
              
              
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


