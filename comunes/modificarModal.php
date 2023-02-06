
<!-- Modal -->
<div class="modal fade" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="modificarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modificarModal">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertu" onsubmit="return modificarDatos()" method="post">
              
              <input type="text" id="idDirectorSalon" name="idDirectorSalon" hidden="";>
              <label>Correo</label>
              <input type="text" id="Correou" name="Correou" class="form-control form-control-sm" required="">
              <label>Nombre</label>
              <input type="text" id="Nombre1u" name="Nombre1u" class="form-control form-control-sm" required="">
              <label>Segundo Nombre</label>
              <input type="text" id="Nombre2u" name="Nombre2u" class="form-control form-control-sm" required="">
              <label>Apellido</label>
              <input type="text" id="Apellido1u" name="Apellido1u" class="form-control form-control-sm" required="">
              <label>Segundo Apellido</label>
              <input type="text" id="Apellido2u" name="Apellido2u" class="form-control form-control-sm" required="">
              <br>
               <input type="submit" value="Actualizar" class="btn btn-primary">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


