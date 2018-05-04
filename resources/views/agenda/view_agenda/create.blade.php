@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Novo Agendamento</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'agenda/view_agenda','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="data_agendamento">Data Agendamento</label>
            	<input type="text" name="data_agendamento" class="form-control" placeholder="data agendamento">
            </div>
            <div class="form-group">
            	<label for="hora_agendamento">Hora Agendamento</label>
            	<input type="text" name="hora_agendamento" class="form-control" placeholder="hora Agendamento">
            </div>
            <div class="form-group">
            	<label for="data_atendimento'">Data Atendimento</label>
            	<input type="text" name="data_atendimento'" class="form-control" placeholder="data Atendimento">
            </div>
            <div class="form-group">
            	<label for="hora_atendimento">Hora Atendimento</label>
            	<input type="text" name="hora_atendimento" class="form-control" placeholder="hora Atendimento">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop