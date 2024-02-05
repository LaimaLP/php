<div class="modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Patvirtinkite atsisakyma</h5>
          <button type="button" data-close class="btn-close" ></button>
        </div>
        <div class="modal-body">
          <p>Ar tikrai norite atsisakyti imones {{$company->name}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" data-close class="btn btn-secondary" >Ne</button>
          <button type="button" data-destroy data-url={{route('companies-destroy', $company)}} class="btn btn-danger">Atsisakyti</button>
        </div>
      </div>
    </div>
  </div>