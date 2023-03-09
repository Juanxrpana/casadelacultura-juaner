
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
          <form id="frminsertsalon" action="" method="POST">
              <label>Numero del salon</label>
              <input type="text" id="idSalon" name="idSalon" class="form-control form-control-sm" >
              <label>Nombredel salon</label>
              <input type="text" id="NombreSalon" name="NombreSalon" class="form-control form-control-sm" >
              <label>Cantidad de personas por salon</label>
              <input type="text" id="CantidadPersonasSalon" name="CantidadPersonasSalon" class="form-control form-control-sm" >
              <label>Cantidad de sillas por salon</label>
              <input type="text" id="CantidadSillas" name="CantidadSillas" class="form-control form-control-sm" >
              <br>
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


