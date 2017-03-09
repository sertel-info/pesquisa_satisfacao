@extends("base.base")

@push("headers")
@endpush

@section("content")


<div class='col-md-4'>
	<div class="div-txt-center"><h2> Pergunta 1</h2></div>
	<div id='pergunta-1-container' style="height:200px"></div>
</div>
<div class='col-md-4'>
	<div class="div-txt-center"><h2> Pergunta 2</h2></div>
	<div id='pergunta-2-container' style="height:200px"></div>
</div>
<div class='col-md-4'>
	<div class="div-txt-center"><h2> Pergunta 3</h2></div>
	<div id='pergunta-3-container' style="height:200px"></div>
</div>

@endsection

@push("scripts")
	<script type="text/javascript" src="/third_party/jquery.flot.min.js"></script>
	<script type="text/javascript" src="/third_party/jquery.flot.pie.min.js"></script>
	<script type="text/javascript">
		function labelFormatter(label,series){
			return "<div class='pie-chart-label'><span>"+label+"<br>("+Math.round(series.percent)+"%)</span></div>";
		}

		$(function(){
			
			$.get("{{route('estatisticas.get.graphs')}}", {}, function(response){
				var perguntas = JSON.parse(response);
				
				var data = [
								[
									{label: "resposta 1", color: "#00ABBD", data: perguntas.um[0].resp_um},
									{label: "resposta 2", color: "#132241", data: perguntas.um[0].resp_dois},
								],
								[
									{label: "resposta 1", color: "#00ABBD", data: perguntas.dois[0].resp_um},
									{label: "resposta 2", color: "#132241", data: perguntas.dois[0].resp_dois},
								],
								[
									{label: "resposta 1", color: "#00ABBD", data: perguntas.tres[0].resp_um},
									{label: "resposta 2", color: "#132241", data: perguntas.tres[0].resp_dois},
									{label: "resposta 3", color: "#ffb366", data: perguntas.tres[0].resp_tres},
									{label: "resposta 4", color: "#ff4dc4", data: perguntas.tres[0].resp_quatro},
									{label: "resposta 5", color: "#4dffc3", data: perguntas.tres[0].resp_cinco}
								]	
				];

				$.plot('#pergunta-1-container', data[0], {
				    series: {
				        pie: {
					            show: true,
					           
					        }
				    },
				    legend: {
				        show: false
				    },
				    grid:{
				    	hoverable:true
				    }
				});

				$.plot('#pergunta-2-container', data[1], {
				    series: {
				        pie: {
					            show: true,
					        }
				    },
				    legend: {
				        show: false
				    },
				    grid:{
				    	hoverable:true
				    }
				});

				$.plot('#pergunta-3-container', data[2], {
				    series: {
				        pie: {
					            show: true,
					        }
				    },
				    legend: {
				        show: false
				    },
				    grid:{
				    	hoverable:true
				    }
				});

				});

			
		})
	</script>
@endpush
