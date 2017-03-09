
<div class="panel panel-default panel-toggle">
    <div class="panel-heading" data-toggle="collapse" data-target="#body-configuracoes-gerais">
        <h3 class="panel-title">Configurações Gerais
          	<div class="collapse-icon pull-right">
        		<span class="glyphicon glyphicon-circle-arrow-down"> </span>
       		</div>
        </h3>
    </div>

    <div class="panel-body collapse" id="body-configuracoes-gerais">
	 
		<div class="form-group row">
			<label for="lin_callerid_externo" class="col-md-4 col-form-label"> CallerID Externo </label>
			<div class="col-md-8">
				<input class="form-control" type="text" value="" name="lin_callerid_externo" id="lin_callerid_externo">
			</div>
		</div>

		<div class="form-group row">
			<label for="lin_callerid_interno" class="col-md-4 col-form-label"> CallerID Interno </label>
			<div class="col-md-8">
				<input class="form-control" type="text" value="" name="lin_callerid_interno" id="lin_callerid_interno">
			</div>
		</div>

		<div class="form-group row">
			<label for="lin_envio_dtmf" class="col-md-4 col-form-label"> Envio de DTMF </label>
			<div class="col-md-8">
				<select class="form-control" value="" name="lin_envio_dtmf" id="lin_envio_dtmf">
                    <option value="auto">AUTO (Automático)</option>
                    <option value="rfc2833">RFC2833 (padrão)</option>
                    <option value="inband">INBAND (Apenas G711)</option>
                    <option value="info">INFO</option>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="lin_rig_falso" class="col-md-4 col-form-label"> Ring Falso </label>
			<div class="col-md-8">
				<input type="checkbox" name="lin_rig_falso" id="lin_rig_falso" >
			</div>
		</div>

		<div class="form-group row">
			<label for="lin_nat" class="col-md-4 col-form-label"> NAT </label>
			<div class="col-md-8">
				<input type="checkbox" name="lin_nat" id="lin_nat">
			</div>
		</div>

		<div class="form-group row">
			<label for="lin_audio_p2p" class="col-md-4 col-form-label"> Audio peer-to-peer </label>
			<div class="col-md-8">
				<input type="checkbox" name="lin_audio_p2p"  id="lin_audio_p2p">
			</div>
		</div>

    </div>

</div>