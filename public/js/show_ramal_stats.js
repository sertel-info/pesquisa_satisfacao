function showRamalStats($el){

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

				$.plot($el, data[0], {
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
}
