<div class="modal fade" id="modalCalendar" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="message"></div>
        <form id="formEvent">
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titulo</label>
                <div class="col-sm-8">
                    <input type="text" name="title" class="form-control" id="title">
                    <input type="hidden" name="id">
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Local</label>
                <div class="col-sm-8">
                    <input type="text" name="location" class="form-control" id="location">
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                    <input type="text" name="status" class="form-control" id="status">
                </div>
            </div>
            <div class="form-group row">
                <label for="start" class="col-sm-4 col-form-label">Data/Hora Inicial</label>
                <div class="col-sm-8">
                    <input type="text" name="start" class="form-control date-time" id="start">
                </div>
            </div>
            <div class="form-group row">
                <label for="end" class="col-sm-4 col-form-label">Data/Hora Final</label>
                <div class="col-sm-8">
                    <input type="text" name="end" class="form-control date-time" id="end">
                </div>
            </div>
            <div class="form-group row">
                <label for="color" class="col-sm-4 col-form-label">Cor do Evento</label>
                <div class="col-sm-8">
                    <input type="color" name="color" class="form-control" id="color">
                </div>
            <div class="form-group row">
                <label for="color" class="col-sm-4 col-form-label">Descrição</label>
                <div class="col-sm-8">
                    <textarea name="description" id="description" cols="40" rows="4"></textarea>
                </div>
            </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger deleteEvent">Excluir</button>
        <button type="button" class="btn btn-primary saveEvent">Salvar</button>
      </div>
    </div>
  </div>
</div>