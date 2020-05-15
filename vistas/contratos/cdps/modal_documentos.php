<div class="modal fade" id="modal_documentos_cdp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Subir Documento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <div class="text-center">
          
          
          <form>

              <div class="form-group">
              <label for="exampleInputFile">Subir archivo</label>
                <input type="file"  id="fileToUploadCdps" onchange="upload_cdps();">
                <input type="text"  id="id_cdp" name="id_cdp">
              </div>
              <div class="upload-msg"></div><!--Para mostrar la respuesta del archivo llamado via ajax -->
        
          </form>

        </div>
          
      </div>
    </div>
  </div>
</div>
