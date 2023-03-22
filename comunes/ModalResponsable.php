
<!-- Modal -->
<div class="modal fade" id="ModalResponsable" tabindex="-1" role="dialog" aria-labelledby="ModalResponsableLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalResponsable1">Agregar nueva Responsable</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--formulario-->
       
        <form id="frminsertResponsable" class="formulario" action="controlador/gestionresponsable.php" method="POST">
         <!-- Cédula encargado  -->
         <div class="formulario__grupo"  id="grupo__Rid">
              <label for="Rid" class="formulario__label">Cedula del Responsable</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Rid" name="Rid" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">La Cédula no debe estar vacia, no acepta letras ni caracteres especiales "();/&*</p>
              </div> 
              
        <!-- nACIONALIDAD encargado  -->
               <div class="formulario__grupo"  id="grupo__idNacionalidad">
              <label for="RidNacionalidad" class="formulario__label">Nacionalidad del Responsable</label>
                <div class="formulario__grupo-input">

                 
                 <select class="form-control" id="idNacionalidad" name="idNacionalidad" class="form-control form-control-sm form__input"> <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                    <option disabled selected value="">Seleccionar Opcion</option>
                  <option value="V">Venezolano</option>
                  <option value="E">Extranjero</option>
                 </select>
    
                </div>
                <p class="formulario__ipnut-error"></p>
              </div> 

            

               <!-- grupo Nombre encargado -->
               <div class="formulario__grupo"  id="grupo__Nombre1">
              <label for="Nombre1" class="formulario__label">Nombre del Encargado de la Responsable</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Nombre1" name="Nombre1" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El nombre del Responsable no debe llevar numeros ni caracteres especiales "();/&*</p>
              </div> 

               <!-- grupo Nombre encargado2 -->
               <div class="formulario__grupo"  id="grupo__Nombre2">
              <label for="Nombre2" class="formulario__label">Segundo nombre del Encargado de la Responsable</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Nombre2" name="Nombre2" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El nombre del encargado de la Responsable no debe llevar numeros ni caracteres especiales "();/&*</p>
              </div> 

               <!-- grupo Apellido encargado -->
               <div class="formulario__grupo"  id="grupo__Apellido1">
              <label for="Apellido1" class="formulario__label">Apellido del Encargado de la Responsable</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Apellido1" name="Apellido1" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El apellido del encargado de la Responsable no debe llevar numeros ni caracteres especiales "();/&*</p>
              </div> 

               <!-- grupo Apellido2 encargado -->
               <div class="formulario__grupo"  id="grupo__Apellido2">
              <label for="Apellido2" class="formulario__label">Segundo Apellido Encargado de la Responsable</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Apellido2" name="Apellido2" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El apellido del encargado de la Responsable no debe llevar numeros ni caracteres especiales "();/&*</p>
              </div> 

               <!-- grupo telefono encargado -->
               <div class="formulario__grupo"  id="grupo__Telefono">
              <label for="Telefono" class="formulario__label">Nro telefonico del Encargado de la Responsable</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Telefono" name="Telefono" class="form-control form-control-sm form__input" placeholder="04XX-XXXXXXX">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El teléfono del encargado de la Responsable debe ser XXXX-XXXXXXX </p>
              </div>              
              <input type="hidden" name="tipo_formulario" value="responsable">
              <br>
              <button type="button" id="incluir4" class="btn btn-primary">Guardar</button>
              
              <input class="form-control form-control-sm" type="text" value="insertar" name="accion" id="accion" style= "display: none;">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button"  id="" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


