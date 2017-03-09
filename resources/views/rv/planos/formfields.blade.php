
{{csrf_field()}}

<div class="panel panel-default panel-toggle">
    <div class="panel-heading"  >
          <h3 class="panel-title"> Dados do Plano
 
          </h3>
    </div>
    <div class="panel-body " id="body-acesso">
                    <div class="form-group row">
						<label for="pla_nome" class="col-md-4 col-form-label">Nome</label>
						<div class="col-md-8">
						   {{Form::text('nome', 'aaaadsads', ['class'=>'form-control'])}}
						</div>
					</div>

                    <div class="form-group row">
						<label for="pla_simultaneas" class="col-md-4 col-form-label">Simultâneas</label>
						<div class="col-md-8">
						    <input class="form-control" type="text" value="" name="simultaneas" id="pla_simultaneas">
						</div>
					</div>

					<div class="form-group row">
						<label for="pla_tipo" class="col-md-4 col-form-label"> Tipo do Plano  </label>
						<div class="col-md-8">
						   <select name="pla_tipo" class='form-control'> 
						   		<option value='pre'> PRÉ PAGO</option>
						   		<option value='pos'> PÓS PAGO</option>
						   </select>
						</div>
					</div>

					<div class="form-group row">
						<label for="pla_val_sms" class="col-md-4 col-form-label "> Valor para fixo local  </label>
						<div class="col-md-8">
						   <input class="form-control money-val" type="text" value="" name="pla_val_sms" id="pla_val_sms">
						</div>
					</div>

					<div class="form-group row">
						<label for="pla_val_fx_lc" class="col-md-4 col-form-label "> Valor para fixo local  </label>
						<div class="col-md-8">
						   <input class="form-control money-val" type="text" value="" name="pla_val_fx_lc" id="pla_val_fx_cl">
						</div>
					</div>

					<div class="form-group row">
						<label for="pla_val_fixo_ddd" class="col-md-4 col-form-label "> Valor para fixo DDD </label>
						<div class="col-md-8">
						   <input class="form-control money-val" type="text" value="" name="pla_val_fx_ddd" id="pla_val_fixo_ddd">
						</div>
					</div>

					<div class="form-group row">
						<label for="pla_val_mv_lc" class="col-md-4 col-form-label "> Valor para móvel local  </label>
						<div class="col-md-8">
						   <input class="form-control money-val" type="text" value="" name="pla_val_mv_lc" id="pla_val_mv_lc">
						</div>
					</div>

					<div class="form-group row">
						<label for="pla_val_mv_ddd" class="col-md-4 col-form-label "> Valor para móvel DDD </label>
						<div class="col-md-8">
						   <input class="form-control money-val" type="text" value="" name="pla_val_mv_ddd" id="pla_val_mv_ddd">
						</div>
					</div>

                    <div class="form-group row">
						<label for="pla_val_ddi" class="col-md-4 col-form-label "> Valor para DDI  </label>
						<div class="col-md-8">
						   <input class="form-control money-val" type="text" value="" name="pla_val_ddi" id="pla_val_ddi">
						</div>
					</div>

					<div class="form-group row">
						<label for="pla_val_ip" class="col-md-4 col-form-label "> Valor para IP  </label>
						<div class="col-md-8">
						   <input class="form-control money-val" type="text" value="" name="pla_val_ip" id="pla_val_ip">
						</div>
					</div>

					<div class="form-group row">
						<label for="pla_descricao" class="col-md-4 col-form-label"> Descrição  </label>
						<div class="col-md-8">
						   <textarea class="form-control" type="text" value="" name="pla_descricao" id="pla_descricao"> </textarea>
						</div>
					</div>

					<button class='btn btn-success btn-block'> Salvar </button>

	</div>

</div>


@push("scripts")
	<script type="text/javascript" src="/third_party/jquery/jquery.maskMoney.min.js"> </script>
	<script type="text/javascript">
		$(function(){
			$(".money-val").maskMoney({thousands:'',
										decimal:'.',
										allowZero:true,
										suffix: ' R$',
										affixesStay: false});
		});
	</script>	
@endpush