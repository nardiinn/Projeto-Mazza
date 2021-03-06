@extends('layouts.admin')
@section('conteudo')
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>Editar Médico: {{$medicos->nome_med}}</h3>
                  @if (count($errors)>0)
                  <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                        @endforeach
                        </ul>
                  </div>
                  @endif

                  {!!Form::model($medicos, ['method'=>'PATCH'],'route'=['view_medico.update', $medicos->id_medico]])!!}
                  {{Form::token()}}
                  <div class="form-group">
                        <label for="nome_med">Nome do Médico</label>
                        <input type="text" name="nome_med" class="form-control" value="{{$medicos->nome_med}}" placeholder="Nome do Médico">
                  </div>
                  <div class="form-group">
                        <label for="especializacao_med">Especialização Médico</label>
                        <input type="text" name="especializacao_med" class="form-control" value="{{$medicos->especializacao_med}}" placeholder="Especializacão">
                  </div>
                  <div class="form-group">
                        <label for="crm_med">CRM Médico</label>
                        <input type="text" name="crm_med" class="form-control" value="{{$medicos->crm_med}}" placeholder="CRM">
                  </div>
              
                  <div class="form-group">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                        <button class="btn btn-danger"  type="reset">Cancelar</button>
                  </div>
            

                  {!!Form::close()!!}           
            
            </div>
      </div>
@stop