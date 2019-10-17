<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>Marca</th>
                            <th>Serie</th>
                            <th>A.F</th>
                        </thead>
                        @foreach ($monitores as $mon)
                        <tr>
                        {{-- <td>{{$mon->marca}}</td>
                        <td>{{$mon->serie}}</td>
                        <td>{{$mon->caf}}</td> --}}
                        </tr>
                        @endforeach
                    </table>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
      </div>            