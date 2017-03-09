@push("header")
	<link rel="stylesheet" type="text/css" href="/third_party/bootstrap_switch/css/bootstrap-switch.min.css">
@endpush
   
<form method="POST" action="#">
	@include("rv.linhas.formfields.dados_basicos")
	@include("rv.linhas.formfields.autenticacao")
	@include("rv.linhas.formfields.codecs")
	@include("rv.linhas.formfields.configuracoes_gerais")
	@include("rv.linhas.formfields.facilidades")
	@include("rv.linhas.formfields.permissoes")
	{-- @TODO @REMOVER O ARQUIVO rv.linhas.formfields.tarifacao @@--}
 
	<button class='btn btn-success btn-block'> Salvar </button>
</form>

@push("scripts")
	<script type="text/javascript" src="/third_party/bootstrap_switch/js/bootstrap-switch.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$("input[type=checkbox]").not("[name=lin_status]").bootstrapSwitch();

			$("input[name=lin_status]").bootstrapSwitch({"onText": "Ativo", "offText": "Inativo"});

			$("#lin_cadeado_pessoal, #lin_caixa_postal, #lin_siga_me")
						.on("switchChange.bootstrapSwitch", function(){
							$(this).parents('.form-group:first')
								   .find(".row.collapse")
								   .collapse("toggle");
						});

		})
	</script>
@endpush