{{-- {!! Form::open(array('url'=>'computadoras','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!} --}}
{!! Form::open(['route'=>'computadoras.create','method' => 'GET']) !!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..."  >
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

{{Form::close()}}