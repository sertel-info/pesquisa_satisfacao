<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respostas;
use DB;

class EstatisticasController extends Controller
{
    public function index(){
    	return view('estatisticas.index', ['active'=>"estatisticas",
    										'panel_title'=>'Estatísticas']);
    }

    public function getGraphs(Request $request){
    	$resp_class = new Respostas;

        $query_conditions = [['ramal','=', $request->ramal]];

        if($request->data_inicio !== null){
            list($data_inicio, $hora_inicio) = explode(' ', $request->data_inicio);
            $data_inicio = explode("/", $data_inicio);
            $hora_inicio = explode(":", $hora_inicio);
            $inicio = date('Y-m-d H:i:s', mktime($hora_inicio[0],
                             $hora_inicio[1],
                             0,
                             $data_inicio[1],
                             $data_inicio[0], 
                             $data_inicio[2]));
                             
            array_push($query_conditions, ['created_at', '>=', $inicio]);
        }

        if($request->data_final !== null){
            list($data_final, $hora_final) = explode(' ', $request->data_final);
            $data_final = explode("/", $data_final);
            $hora_final = explode(":", $hora_final);
            $final = date('Y-m-d H:i:s', mktime($hora_final[0],
                            $hora_final[1],
                            0,
                            $data_final[1],
                            $data_final[0], 
                            $data_final[2]));

            array_push($query_conditions, ['created_at', '<=', $final]);
        }

    	$data = $resp_class->select(DB::raw('case pergunta when 1 then "um" when 2 then "dois" '.
    										'when 3 then "tres" when 4 then "quatro" when 5 then "cinco" end as pergunta,'.
    								'sum(case when resposta=1 then 1 else 0 end) as resp_um,'.
    								'sum(case when resposta=2 then 1 else 0 end) as resp_dois,'.
    								'sum(case when resposta=3 then 1 else 0 end) as resp_tres,'.
    								'sum(case when resposta=4 then 1 else 0 end) as resp_quatro,'.
    								'sum(case when resposta=5 then 1 else 0 end) as resp_cinco, max(ramal)'))
    								->where($query_conditions)
    								->groupBy('pergunta')
    								->get()
    								->groupBy('pergunta');

    	$vazio = [
    			"resp_um"=>0,
    			"resp_dois"=>0,
    			"resp_tres"=>0,
    			"resp_quatro"=>0,
    			"resp_cinco"=>0
    			];

    	$respostas = [
		    	"um"=>isset($data['um']) ? $data['um'][0] : $vazio,
		    	"dois"=>isset($data['dois']) ? $data['dois'][0] : $vazio,
		    	"tres"=>isset($data['tres']) ? $data['tres'][0] : $vazio,
    	];


    	return json_encode($respostas);
    }

 
}
