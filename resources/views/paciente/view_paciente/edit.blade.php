@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-md-8 col-xs-12">
		<h3>Lista de Pacientes<a href="view_agenda/create"><button class="btn bt-success"> Novo Paciente</button></a></h3>
		@include('paciente.view_paciente.search') 
</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-12 col-xs-12 ">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-contensed table-hover">
				<thead>
					<tr>
					
						<th>Nome do Paciente</th>
						<th>RG</th>
						<th>CPF</th>
						<th>Endereço</th>
						<th>Cidade</th>
						<th>CEP</th>
								
					</tr>
				</thead>
				@foreach($pacientes as $pat)
				<tr>
					<td{{ $pat->nome_paciente}}></td>
					<td{{ $pat->rg_paciente}}></td>
					<td{{ $pat->cpf_paciente}}></td>
					<td{{ $pat->end_paciente}}></td>
					<td{{ $pat->cidade_paciente}}></td>
					<td{{ $pat->cep_paciente}}></td>
					
					<td>
						<form>
						<a href="{URL::action ('PacienteController@edit',$pat->id_paciente)}"><button class="btn btn-info">Editar</button>
						</a>
						<a href="" data-target="#modal-delete-{{$agendas->id_paciente}}" data-toglle="modal"><button class="btn btn-danger">Excluir</button>
						</a>
						
						</form>
					</td>

				</tr>
				@include('paciente.view_paciente.modal')
				@endforeach
				
			</table>
			{{$pacientes->render()}}
	</div>
</div>


@stop
