<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SistemasMazza\Paciente;
use Illuminate\Support\Facedes\Redirect;
use SistemasMazza\Http\Request\PacienteFormRequest;
use DB;

class PacienteController extends Controller
{
    function __construct (){

    }

    public function index (Request $request){
    if($request){
        $query=trim ($request->get ('searchText'));
        $pacientes =DB::table ('paciente');
        ->where ('id_paciente')
        ->paginate (2);
        return ('paciente.view_paciente.index',[
        "pacientes" => 'pacientes', 'searchText' =>$query
        ]);
    }
    }

    public function create (){
    return ('paciente.view_paciente.create');
    }
    public function store(PacienteFormRequest $request){
    $paciente = new Paciente;
    $paciente ->nome_paciente  =$request->get('nome_paciente');
    $paciente ->rg_paciente    =$request->get('rg_paciente');
    $paciente ->cpf_paciente   =$request->get('cpf_paciente');
    $paciente ->end_paciente   =$request->get('end_paciente');
    $paciente ->cidade_paciente=$request->get('cidade_paciente');
    $paciente ->cep_paciente   =$request->get('cep_paciente');
    $paciente->save();
    return Redirect::to ('paciente.view_paciente')
    }
    public function show($id){
    return view ('paciente.view_paciente',
    ['paciente' ->Paciente::findOrfail($id)]);
    }
    public function edit($id){
    return view ('paciente.view_paciente.edit',
    ["paginate" ->Paciente::findOrfail($id)]);
    }

    public function update(PacienteFormRequest $request, $id){
    $paciente  = Paciente::findOrfail($id);
    $paciente ->nome_paciente  =$request->get('nome_paciente');
    $paciente ->rg_paciente    =$request->get('rg_paciente');
    $paciente ->cpf_paciente   =$request->get('cpf_paciente');
    $paciente ->end_paciente   =$request->get('end_paciente');
    $paciente ->cidade_paciente=$request->get('cidade_paciente');
    $paciente ->cep_paciente   =$request->get('cep_paciente');
    $paciente->update();
    return Redirect::('paciente.view_paciente');
    }
    public function destroy($id){
    $paciente = Paciente::findOrfail($id);
    $paginate->update();
    return Redirect::to('paciente.view_paciente');
    }
}
