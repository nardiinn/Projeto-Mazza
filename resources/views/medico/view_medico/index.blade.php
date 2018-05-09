@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-md-8 col-xs-12">
		<h3>Lista de Médicos <a href="view_medico/create"><button class="btn bt-success"> Adicionar novo Médico</button></a></h3>
		@include('medico.view_medico.search')
</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-12 col-xs-12 ">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-contensed table-hover">
				<thead>
					<tr>
						<th>Nome do Médico</th>
						<th>Especialização</th>
						<th>CRM</th>
								
					</tr>
				</thead>
				@foreach($medicos as $med)
				<tr>
					<td{{ $med->nome_med}}></td>
					<td{{ $med->especializacao_med}}></td>						
					<td{{ $med->crm_med}}></td>
					
					<td>
						<form>
						<a href="{URL::action ('MedicoController@edit',$med->id_medico)}"><button class="btn btn-info">Editar</button>
						</a>
						<a href="" data-target="#modal-delete-{{$med->id_medico}}" data-toglle="modal"><button class="btn btn-danger">Excluir</button>
						</a>
						
						</form>
					</td>

				</tr>
				@include('medico.view_medico.modal')
				@endforeach
				
			</table>
			{{$medicos->render()}}
	</div>
</div>

@stop
