@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Adicionar novo Paciente</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'paciente/view_paciente','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

                  <div class="form-group">
                  	<label for="nome_paciente">Nome do Paciente</label>
                  	<input type="text" name="nome_paciente" class="form-control" placeholder="Nome do Paciente">
                  </div>
                  <div class="form-group">
                  	<label for="rg_paciente">RG </label>
                  	<input type="text" name="rg_paciente" class="form-control" placeholder="RG">
                  </div>
                  <div class="form-group">
                  	<label for="cpf_paciente">CPF</label>
                  	<input type="text" name="cpf_paciente" class="form-control" placeholder="CPF">
                  </div>
                  <div class="form-group">
                        <label for="end_paciente">Endereço</label>
                        <input type="text" name="end_paciente" class="form-control" placeholder="Endereço">
                  </div>
                  <div class="form-group">
                        <label for="cidade_paciente">Cidade</label>
                        <input type="text" name="cidade_paciente" class="form-control" placeholder="Cidade">
                  </div>
                  <div class="form-group">
                        <label for="cep_paciente">CEP</label>
                        <input type="text" name="cep_paciente" class="form-control" placeholder="CEP">
                  </div>
              
                  <div class="form-group">
                  	<button class="btn btn-primary" type="submit">Salvar</button>
                  	<button class="btn btn-danger"  type="reset">Cancelar</button>
                  </div>
            

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop