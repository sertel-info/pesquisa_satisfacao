@extends("base.base")

@push("headers")
  <link rel="stylesheet" type="text/css" href="/third_party/bs_datepicker/css/bootstrap-datetimepicker.min.css">
  <style>
  /* basic positioning */
.legend { list-style: none; display:inline-block; margin-left:0; padding:0;  font-size:small; }
//.legend li { float:left; margin-right: 10px; }
.legend span { border: 1px solid #ccc; float: left; width: 12px; height: 12px; margin: 2px; }
.legend p { float: left;}

  </style> 
@endpush

@section("content")
	  <div class='row'>
      <div class="panel panel-warning div-txt-center">
          <div class="panel-heading" >Filtros</div>
          <div class="panel-body ramal-toggle-stats">
              @include("respostas.form_filtros")
          </div>
      </div> 

    </div>
    <br>
   
    <div id="ramais-container">
    @foreach($ramais as $ramal)
      <div class="panel panel-default div-txt-center" data-id="{{$ramal}}">
          <div class="panel-heading" data-toggle="collapse" data-target="#wrapper_{{$ramal}}"><h2>{{$ramal}}</h2></div>
          <div class="panel-body collapse ramal-toggle-stats" id="wrapper_{{$ramal}}">
            <div class="col-md-4">
              <h2>Pergunta 1</h2>
              <div class='graph-wrapper' id="{{$ramal}}_um" style="height:200px"></div>
              <ul class="legend">
			  </ul>
            </div>
            <div class="col-md-4">
              <h2>Pergunta 2</h2>
              <div class='graph-wrapper' id="{{$ramal}}_dois" style="height:200px"></div>
              <ul class="legend">
			  </ul>
            </div>
            <div class="col-md-4">
              <h2>Avaliação</h2>
              <div class='graph-wrapper' id="{{$ramal}}_tres" style="height:200px"></div>
              <ul class="legend">
			  </ul>
            </div>
          </div>
      </div>  
    @endforeach
    </div>
@endsection


@push("scripts")
 <script type="text/javascript" src="/third_party/bs_datepicker/moment.min.js"></script>
 <script type="text/javascript" src="/third_party/bs_datepicker/js/locale/pt-br.js"></script>
 <script type="text/javascript" src="/third_party/bs_datepicker/js/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript" src="/third_party/jquery.flot.min.js"></script>
 <script type="text/javascript" src="/third_party/jquery.flot.pie.min.js"></script>
 

 <script type="text/javascript">
    
     function showRamalStats($wrapper, data_inicio, data_final){
        $wrapper.parent().append("<div class='loading-wrapper'><img src='/ajax-loader.gif'/></div>");

        var ramal = $el.parent().attr("data-id");

        $.get("{{route('estatisticas.get.graphs')}}", {ramal:ramal, data_inicio:data_inicio, data_final:data_final}, function(response){
              $wrapper.parent().find('.loading-wrapper').remove();
 
              var perguntas = JSON.parse(response);
              var data = [
                      [
                        {label: "não", color: "#FF0000", data: perguntas.um.resp_um},
                        {label: "sim", color: "#009900", data: perguntas.um.resp_dois},
                      ],
                      [
                        {label: "sim", color: "#009900", data: perguntas.dois.resp_um},
                        {label: "não", color: "#FF0000", data: perguntas.dois.resp_dois},
                      ],
                      [
                        {label: 1, color: "#FF0000", data: perguntas.tres.resp_um},
                        {label: 2, color: "#660000", data: perguntas.tres.resp_dois},
                        {label: 3, color: "#e6e600", data: perguntas.tres.resp_tres},
                        {label: 4, color: "#006699", data: perguntas.tres.resp_quatro},
                        {label: 5, color: "#009900", data: perguntas.tres.resp_cinco}
                      ] 
              ];
              
			  var perg_containers = ["#"+ramal+"_um", "#"+ramal+"_dois", "#"+ramal+"_tres"];
			  
			  for(var i=0; i<perg_containers.length; i++){
					$container = $wrapper.find(perg_containers[i]);
					var plot = $.plot($container, data[i], {
						  series: {
							  pie: {
									show: true,
								    label: {formatter: function(label, series){
												var percent = Math.round(series.percent);
												return '<div style="font-size:x-small;text-align:center;padding:2px;color:'+series.color+';">'+percent+'% ('+series.data[0][1]+')</div>';
											}
										
										}
							  }
						  },
						  
						  legend: {
							  show: false,
							   
						  },
						  grid:{
							hoverable:true
						  }
					 });
					 
					 for(var j =0; j<data[i].length; j++){
						var curr_data = data[i][j];
						$(perg_containers[i]).parent()
											 .find(".legend")
											 .append($('<li><span style="background-color:'+curr_data.color+'"></span> <p>'+curr_data.label+'</p> </li>'));
					 }

			  }
				
              });
     }


     $(function(){

        $(".ramal-toggle-stats").on("show.bs.collapse", function(){
          $el = $(this);
          if($el.children().children().not('h2').is(":empty")){
              showRamalStats($el,
                             $('input[name=data-inicio]').val(),
                             $('input[name=data-final]').val());
          } 
        });

     });
 </script>
@endpush
