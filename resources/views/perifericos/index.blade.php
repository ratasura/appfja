@include('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Perifericos <a href="/perifericos"><button class="btn btn-success">Nuevo</button></a> </h3>
		@include('perifericos.search')
	</div>
</div>


@endsection()
