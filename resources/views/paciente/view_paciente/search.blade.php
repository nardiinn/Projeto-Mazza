{!!Form::open (array ('url'=>'paciente/view_pacientes', 'method'=>'GET', 'autocomplete'=>'off', 'role'=>'search'))!!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Busca" value="{{$searchText}}"><span>
			<button type="submit" class="btn btn-primary">Busca
				
			</button>
		</span>
		
	</div>	
	
</div>

{{!!Form::close()}}