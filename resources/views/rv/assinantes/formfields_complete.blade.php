@push("header")
	<link rel="stylesheet" type="text/css" href="/third_party/bootstrap_switch/css/bootstrap-switch.min.css">
@endpush
 
<form method="POST" id="form-assinantes" action="#">
	@include("rv.assinantes.formfields.dados_basicos")
	@include("rv.assinantes.formfields.contato")
	@include("rv.assinantes.formfields.financeiro")
	@include("rv.assinantes.formfields.tarifacao")
	@include("rv.assinantes.formfields.facilidades")
	@include("rv.assinantes.formfields.dados_acesso")

	<button class='btn btn-success btn-block'> Salvar </button>
</form>


@push("scripts")
	<script type="text/javascript" src="/third_party/bootstrap_switch/js/bootstrap-switch.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$("input[type=checkbox]").not("[name=ass_tipo]").bootstrapSwitch();

			$("input[name=ass_tipo]").bootstrapSwitch({"offText":'Pessoa Jurídica',
													   "onText": 'Pessoa Física',
													   "onColor": 'primary',
													   "offColor": 'warning'})
									 
									 .on("switchChange.bootstrapSwitch", function(ev, state){
									 	 //se for pessoa física
									 	 if(state){
									 	 	$("#form-assinantes [data-type=fis]").show();
									 	 	$("#form-assinantes [data-type=jur]").hide();
									 	 	return;
									 	 }

									 	 $("#form-assinantes [data-type=fis]").hide();
									 	 $("#form-assinantes [data-type=jur]").show();
									 })

									 .trigger("switchChange.bootstrapSwitch");


		})
	</script>
@endpush