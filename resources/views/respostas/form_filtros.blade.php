<form id="filtra-ramal" action="#">
  <div class='row'>
    <div class='col-md-4'>
      <input type="text" name="num-ramal" placeholder="RAMAL" class='form-control input-lg'/>
    </div>
      <div class='col-md-4'>
          <div class="form-group">
              <div class='input-group date'>
                <input type="text" class='form-control input-lg' name="data-inicio" placeholder="DATA INÍCIO"/>
                <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
          </div>
      </div>
      <div class='col-md-4'>
          <div class="form-group">
              <div class='input-group date'>
                  <input type='text' class="form-control input-lg" name='data-final' placeholder="DATA FINAL" />
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
          </div>
      </div>
  </div>
  <input type="submit" class='btn btn-default btn-block' style='' value="Filtrar"/>
</form>


@push("scripts")
  <script type="text/javascript">
     
  
     $(function(){
        $("input[name=data-inicio], input[name=data-final").datetimepicker();

        $('#filtra-ramal').on("submit", function(ev){
            ev.preventDefault();
            var valor = $('input[name=num-ramal]').val(),
                panels = $('#ramais-container .panel-body');
            
            panels.collapse('hide')
                  .find(".graph-wrapper")
                  .empty()

            if(valor == ''){
                $("#ramais-container .panel").show();
                return;
            }

            $("#ramais-container .panel").show().not("[data-id="+valor+"]").hide();
        });
     })
  </script>
@endpush