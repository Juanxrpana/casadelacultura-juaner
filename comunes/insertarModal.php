
<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="insertarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="insertarModal">Agregar nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">
              <label>Cédula</label>
              <input type="text" id="idDirectorSalon" name="idDirectorSalon" class="form-control form-control-sm" required="">
              <label>Correo</label>
              <input type="text" id="Correo" name="Correo" class="form-control form-control-sm" required="">
              <label>Nombre</label>
              <input type="text" id="Nombre1" name="Nombre1" class="form-control form-control-sm" required="">
              <label>Segundo Nombre</label>
              <input type="text" id="Nombre2" name="Nombre2" class="form-control form-control-sm" required="">
              <label>Apellido</label>
              <input type="text" id="Apellido1" name="Apellido1" class="form-control form-control-sm" required="">
              <label>Segundo Apellido</label>
              <input type="text" id="Apellido2" name="Apellido2" class="form-control form-control-sm" required="">
              <br>
               <input type="submit" value="Guardar" class="btn btn-primary">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


