
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
          <form id="frminsertActividad" action="" method="POST">
              <label>Numero de la Actividad</label>
              <input type="text" id="idActividad" name="idActividad" class="form-control form-control-sm" >
              <label>Nombre de la Actividad</label>
              <input type="text" id="NombreActividad" name="NombreActividad" class="form-control form-control-sm" >
              <label>Fecha de la Actividad</label>
              <input type="text" id="idActividad" name="idActividad" class="form-control form-control-sm" >
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


