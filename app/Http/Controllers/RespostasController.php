<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respostas;
use DB;

class RespostasController extends Controller
{   
    public function __construct(Respostas $respostas){
        $this->entity = $respostas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $ramais = DB::table('atendimentos')->select("callerid")
                                            ->distinct()
                                            ->get()
                                            ->pluck('callerid');
                                            
        return view("respostas.index", ["active"=>'respostas',
                                        "panel_title"=>'Respostas',
                                        "ramais"=>$ramais]);
    }


    public function getTableData(){
        $respostas = $this->entity->all();
        return json_encode(["data"=>$respostas]);
    }
}
