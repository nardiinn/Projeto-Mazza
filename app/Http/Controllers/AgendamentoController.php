<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AgendamentoFormRequest;
use DB;



class AgendamentoController extends Controller
{
    public function __construct(){
		//
    }
public function index(Request $request){
	if ($request){
		$query=trim($request->get('searchText'));
		$agendamentos=DB::table ('agendamento')
		->where('id_agendamento')
		->paginate (5);
		return view ('agenda.view_agenda.index',[
		 "agendamentos"=> $agendamentos, 'searchText'=>$query
		]);
	}
}
public function create(){
	return view ("agenda.view_agenda.create");
}	
public function store(AgendamentoFormRequest $request){
	$agendamento = new Agendamento;
	$agendamento->id_agendamento  =$request->get ('id_agendamento');
	$agendamento->id_medico       =$request->get ('id_medico');
	$agendamento->id_paciente     =$request->get ('id_paciente');
	$agendamento->data_agendamento=$request->get ('data_agendamento');
	$agendamento->hora_agendamento=$request->get ('hora_agendamento');
	$agendamento->data_atendimento=$request->get ('data_atendimento');
	$agendamento->hora_atendimento=$request->get ('hora_atendimento');	
	$agendamento->save();
	return Redirect::to('agenda/view_agenda');
	     

}

public function show($id){
	return view ("agenda.view_agenda.show",
	["agendamento"->Agendamento::findOrFail($id)]);
}
public function edit($id){
	return view ("agenda.view_agenda.edit",
	["agendamento"->Agendamento::findOrFail($id)]);
}
public function update(AgendamentoFormRequest 	$request, $id){
		$agendamento = Agendamento::findOrFail($id);	
	  	$agendamento->data_agendamento    =$request->get('data_agendamento');
		$agendamento->hora_agendamento	  =$request->get('hora_agendamento');
		$agendamento->data_atendimento	  =$request->get('data_atendimento');
		$agendamento->hora_atendimento    =$request->get('hora_atendimento');
		$agendamento->update();
		return Redirect::to('agenda.view_agenda');

}
public function destroy($id){
	$agendamento=Agendamento::findOrFail($id);
	$agendamento->update();
	return Redirect::to('agenda.view_agenda');
}
    
}
