<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SistemasMazza\Medico;
use Illuminate\Support\Facedes\Redirect;
use App\Http\Request\MedicoFormRequest;
use DB;
class MedicoController extends Controller
{
    function __construct (){

    }

    public function index (Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $medicos=DB::table ('medico')
            ->where('id_medico')
            ->paginate (5);
            return ('medico.view_medico.index',[
                "$medicos"=>"medicos", 'searchText'=>$query
            ]);
        }

    }

    public function create (){
    return view ("medico.view_medico.create");
    }
    public function store(MedicoFormRequest $request){
        $medicos = new Medico;
        $medicos ->nome_med             =$request->get ('nome_med');
        $medicos ->especializacao_med   =$request->get ('especializacao_med');
        $medicos ->crm_med              =$request->get ('crm_med');
        $medicos->save();
        return Redirect::to('medico/view_medico')
    }
    public function show($id){
    return view ('medico.view_medico.show',
        ['medico'->Medico::findOrFail($id)]);
    }
    public function edit($id){
    return  view ('medico.view_medico.edit',
    ["medico"->Medico::findOrFail($id)]);
    }

    public function update(MedicoFormRequest $request, $id){
    $medico->nome_med               =$request->get('nome_med');
    $medico->especializacao_med     =$request->get('especializacao_med');
    $medico->crm_med                =$request->get('crm_med');
    $medico->update();
    return Redirect::to ('medico.view_medico');
    }
    public function destroy($id){
    $medico = Medico::findOrFail($id);
    $medico = update();
    return Redirect::to('medico.view_medico');
    }
}

