<div class="panel panel-default panel-toggle">
    <div class="panel-heading" data-toggle="collapse" data-target="#body-facilidades">
        <h3 class="panel-title">Facilidades e Funcionalidades
          	<div class="collapse-icon pull-right">
        		<span class="glyphicon glyphicon-circle-arrow-down"> </span>
       		</div>
        </h3>
    </div>

    <div class="panel-body collapse" id="body-facilidades">
                    <div class="form-group row">
						
						<div class='col-md-6'>
							<center>
								<label for="lin_transferencia" id="transferencia" class=""> Transferencia </label><br>
								<input type="checkbox" name="lin_transferencia" id="transferencia" >
							</center>
						</div>

						<div class='col-md-6'>
							<center>
								<label for="lin_reproduzir_erros" class=""> Reproduzir Erros  </label><br>
								<input type="checkbox" name="lin_reproduzir_erros" id="lin_reproduzir_erros">
							</center>
						</div>

						
					</div>
					
					<div class="form-group row">
						<div class='col-md-6'>
								<center>
									<label for="lin_gravacao" class=""> Gravação  </label><br>
									<input type="checkbox" name="lin_gravacao" id="lin_gravacao" id="lin_gravacao">
								</center>
						</div>
						
						<div class='col-md-6'>
							<center>
								<label for="lin_chamada_video" class=""> Chamada de Vídeo </label><br>
								<input type="checkbox" name="lin_chamada_video" id="lin_chamada_video">
							</center>
						</div>

					</div>

					<div class="form-group row">
					
						<div class='col-md-6 form-group'>
							<center>
								<label for="lin_cadeado_pessoal" class=""> Cadeado pessoal </label><br>
								<input type="checkbox" name="lin_cadeado_pessoal" id="lin_cadeado_pessoal">
								<div class='row collapse' id='cadeado_pin_wrapper' style="margin-top:10px">
									<label for="lin_cadeado_pin"> PIN </label><br>
									<input type="text" name="lin_cadeado_pin" id="lin_cadeado_pin"/>
								</div>
							</center>
						</div>

						<div class='col-md-6 form-group'>
								
								<center>
									<label for="lin_caixa_postal" class=""> Caixa Postal </label><br>
									<input type="checkbox" name="lin_caixa_postal" id="lin_caixa_postal">
									<div class='row collapse adt_opt_wrapper' style="margin-top:10px">
										<label for="lin_cx_postal_pw"> Senha de acesso </label><br>
										<input type="text" name="lin_cx_postal_pw" id="lin_cx_postal_pw"/>
									</div>
								</center>

						</div>

						<div class='col-md-6 form-group'>
								<center>
									<label for="lin_siga_me" class=""> Siga-me </label> <br>
									<input type="checkbox" name="lin_siga_me" id="lin_siga_me">
									<div class='row collapse' id="siga_me_num_wrapper" style="margin-top:10px">
										<label for="lin_siga_me_num"> Número Siga-me </label><br>
										<input type="text" name="lin_siga_me_num" id="lin_siga_me_num"/>
									</div>
								</center>
						</div>

					</div>

					<div class="form-group row" style="margin-top:30px">
						<label for="lin_funcionalidade" class='col-md-4 col-form-label'> Funcionalidade </label>
						<div class='col-md-7'>
							<select class="form-control" name="lin_funcionalidade" id="lin_funcionalidade">
								<option value="linha_ip"> LINHA IP </option>
								<option value="porta_voz"> PORTAL DE VOZ </option>
								<option value="callingguard"> CALLINGGUARD </option>
							</select>
						</div>
					</div>				

	</div>

</div>
