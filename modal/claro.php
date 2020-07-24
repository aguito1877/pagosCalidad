  <!-- Modal -->
  <div class="modal fade" id="claro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese su Cedula</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="verificarc.php" method='POST' class="modal-body">
          <div class="form-group">
            <input type="text" placeholder="cedula" name='cedula' required class="form-control">
          </div>
          <input type="text" hidden name='claro' value='claro'>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Revisar</button>
        </form>
      </div>
    </div>
  </div>
</div>