



<!-- Modal -->
<div class="modal fade" id="ModalSalon" tabindex="-1" role="dialog" aria-labelledby="ModalSalonLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalSalon1">Agregar nuevo salon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertsalon" class="formulario" action="" method="POST">
           
          <!-- grupo numero de salon -->
            <div class="formulario__grupo" id="grupo__idsalon">
              <label for="idsalon" class="formulario__label">Numero del salon</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="idSalon" name="idSalon" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El numero del salon no debe llevar letras ni caracteres especiales "();/&*</p>
            </div> 

             <!-- grupo Nombre del salon -->
             <div class="formulario__grupo"  id="grupo__NombreSalon">
              <label for="NombreSalon" class="formulario__label">Nombre del Salon</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="NombreSalon" name="NombreSalon" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El nombre del salon no debe llevar numeros ni caracteres especiales "();/&*</p>
            </div> 

              <!-- grupo cantidad de personas del salon -->
              <div class="formulario__grupo" id="grupo__CantidadPersonasSalon">
              <label for="CantidadPersonasSalon" class="formulario__label">Capacidad de personas en el salon</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="CantidadPersonasSalon" name="CantidadPersonasSalon" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">La capacidad de el salon no debe contener letras ni caracteres especiales "();/&*</p>
            </div> 

             <!-- grupo cantidad de sillas del salon -->
             <div class="formulario__grupo" id="grupo__CantidadSillas">
              <label for="CantidadSillas" class="formulario__label">Cantidad de sillas del salon</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="CantidadSillas" name="CantidadSillas" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">La cantidad de sillas del salon no debe contener letras ni caracteres especiales "();/&*</p>
            </div> 

            <!-- Nombredirector            Nombredirector2            Apellidodirector            Apellidodirector2 -->

            <!-- grupo Nombre del director -->
            <div class="formulario__grupo" id="grupo__Nombredirector">
              <label for="Nombredirector" class="formulario__label">Nombre del director del salon</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Nombredirector" name="Nombredirector" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El nombre del director no debe poseer numeros ni caracteres especiales "();/&*</p>
            </div> 

             <!-- grupo Nombre2 del director -->
             <div class="formulario__grupo" id="grupo__Nombredirector2">
              <label for="Nombredirector2" class="formulario__label">Segundo nombre del director del salon</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Nombredirector2" name="Nombredirector2" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El nombre del director no debe poseer numeros ni caracteres especiales "();/&*</p>
            </div> 

            <!-- grupo Apellido del director -->
            <div class="formulario__grupo" id="grupo__Apellidodirector">
              <label for="Apellidodirector" class="formulario__label">Apellido del director del salon</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Apellidodirector" name="Apellidodirector" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El Apellido del director no debe poseer numeros ni caracteres especiales "();/&*</p>
            </div> 

            <!-- grupo Apellido2 del director -->
             <div class="formulario__grupo" id="grupo__Apellidodirector2">
              <label for="Apellidodirector2" class="formulario__label">Segundo Apellido del director del salon</label>
                <div class="formulario__grupo-input">
                  <input type="text" id="Apellidodirector2" name="Apellidodirector2" class="form-control form-control-sm form__input">
                  <i class="formulario__validacion-estado fa-solid fa-xmark"></i>
                </div>
                <p class="formulario__ipnut-error">El Apellido del director no debe poseer numeros ni caracteres especiales "();/&*</p>
            </div>      
            
              <br>

               <!-- MENSAJE DE ERROR -->
              <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fa-solid fa-exclamation error_icon"></i><b>ERROR:</b>Debes rellenar el formulario</p>
              </div>

              <button type="button" id="incluir2" class="btn btn-primary">Guardar</button>

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


