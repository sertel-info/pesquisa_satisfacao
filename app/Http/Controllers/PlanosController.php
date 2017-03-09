<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planos;
use DB;

class PlanosController extends Controller
{   

    public function __construct(Planos $planos){
        $this->pla_model = $planos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("rv.planos.create", ["panel_title"=>"Cadastrar Plano",
                                         "active"=>"pla_criar"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            $this->pla_model->create(["nome"=>$request->pla_nome,
                                      "tipo"=>$request->pla_tipo,
                                      "valor_sms"=>$request->pla_val_sms,
                                      "valor_fixo_local"=>$request->pla_val_fx_lc,
                                      "valor_fixo_ddd"=>$request->pla_val_fixo_ddd,
                                      "valor_movel_local"=>$request->pla_val_mv_lc,
                                      "valor_movel_ddd"=>$request->pla_val_mv_ddd,
                                      "valor_ddi"=>$request->pla_val_ddi,
                                      "valor_ip"=>$request->pla_val_ip,
                                      "simultaneas"=>$request->pla_simultaneas,
                                      "descricao"=>$request->pla_descricao
                                ]);

            SessionController::flashMessage("success", "Sucesso ", "Plano cadastrado com sucesso");

            return redirect()->route('rv.planos.create');

        } catch (\Exception $ex){

           SessionController::flashMessage("danger", "Ops ", "Um erro inesperado ocorreu, tente novamente.");

           return redirect()->back()->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = "c4ca4238a0b923820dcc509a6f75849b")
    {   
        $plano = '';
        try{
            $plano = $this->pla_model->where(DB::raw('MD5(id)'), $id)->first();
        } catch(\Exception $ex){
            SessionController::flashMessage("danger", "Ops ", "Um erro inesperado ocorreu, tente novamente.");
        }

        return view("rv.planos.edit", ["panel_title"=>"Atualizar Plano",
                                        "active"=>"pla_gerenciar",
                                        "plano"=>$plano]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
