@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-md-8 col-xs-12">
		<h3>Lista de Agendamentos <a href="view_agenda/create"><button class="btn bt-success"> Novo Agendamento</button></a></h3>
		@include('agenda.view_agenda.search') 
</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-12 col-xs-12 ">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-contensed table-hover">
				<thead>
					<tr>
						<h>Id Agendamento</h>
						<th>Id Médico</th>
						<th>Id Paciente</th>
						<th>Data do Agendamento</th>
						<th>Horario do Agendamento</th>
						<th>Data Atendimento</th>
						<th>Horario do Atendimento</th>
								
					</tr>
				</thead>
				@foreach($agendamentos as $agendas)
				<tr>
					<td>{{$agendas->id_agendamento}}</td>
					<td{{ $agendas->id_medico}}></td>
					<td{{ $agendas->id_paciente}}></td>						
					<td{{ $agendas->data_agendamento}}></td>
					<td{{ $agendas->hora_agendamento}}></td>
					<td{{ $agendas->data_atendimento}}></td>
					<td{{ $agendas->hora_atendimento}}></td>
					
					<td>
						<form>
						<a href="{URL::action ('AgendamentoController@edit',$agendas->id_agendamento)}"><button class="btn btn-info">Editar</button>
						</a>
						<a href="" data-target="#modal-delete-{{$agendas->id_agendamento}}" data-toglle="modal"><button class="btn btn-danger">Excluir</button>
						</a>
						
						</form>
					</td>

				</tr>
				@include('agenda.view_agenda.modal')
				@endforeach
				
			</table>
			{{$agendamentos->render()}}
	</div>
</div>


@stop
