<?php include_once (dirname(__FILE__).'/header_promint.php');?>
	
	        	<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="blocoTituloPagina">
                		<div class="tituloPagina">Incluir uma nova requisição</div>
            		</div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="titulo">Incluir</div>
                    <form class="" role="form">
                        <div class="row ">
                            <div class=" col-md-12 col-xs-12 col-sm-12 formulario">
                                <div class="col-md-4 col-xs-12 col-sm-12">
                                  <div class="form-group">
                                    <label class="control-label titCampo" for="data_solicitacao">Data de solicitação</label>
                                    <input type="text" name="data_solicitacao" class="form-control cmp" id="exampleInputEmail2" placeholder="Data Solicitação" value="01/09/2014 15:29" disabled>
                                  </div>
                                   <div class="form-group">
                                    <label class="control-label titCampo" for="exampleInputEmail2">Número do projeto FIS</label>
                                    <input type="text" name="numero_projeto_fis" class="form-control cmp num maxlength" limit="empresaAlterarCmp1L"  placeholder="Digite o texto aqui" value="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label titCampo" for="exampleInputEmail2">Número do cliente</label>
                                    <input type="text" name="numero_cliente" class="form-control cmp num maxlength" limit="empresaAlterarCmp3L"  placeholder="Digite o texto aqui" value="">
                                  </div>
                                   <div class="form-group">
                                    <label class="control-label titCampo" for="exampleInputEmail2">Empresa</label>
                                    <input type="text" name="empresa" class="form-control cmp-b" id="" placeholder="Digite o texto aqui" value="Fidelity" disabled>
                                  </div>
                                  
                                </div>
                                <div class="col-md-4 col-xs-12 col-sm-12">

                                  <div class="form-group">
                                    <div class="input-group">
                                         <label class="control-label titCampo" for="exampleInputEmail2">Tipo de solicitação</label>
                                        <select data-placeholder="Digite o texto aqui" class="chosen-select" style="width:250px;" tabindex="1">
                                            <option value=""></option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="form-group">
                                        <label class="control-label titCampo" for="exampleInputEmail2">Título da solicitação</label>
                                        <input type="text" name="empresa" class="form-control cmp maxlength" limit="empresaAlterarCmp2L" id="" placeholder="Digite o texto aqui">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group">
                                         <label class="control-label titCampo" for="exampleInputEmail2">Interação</label>
                                        <select data-placeholder="Digite o texto aqui" class="chosen-select" style="width:250px;" tabindex="1">
                                            <option value=""></option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label titCampo" for="exampleInputEmail2">Empresa</label>
                                    <input type="text" name="empresa" class="form-control cmp-b" id="" placeholder="José da Silva">
                                  </div>
                                </div>
                                <div class="col-md-offset-4 hidden-xs hidden-sm">

                                </div>
                                <div class="col-md-8 col-xs-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label titCampo" for="exampleInputEmail2">Descrição da solicitação</label>
                                         <textarea placeholder="Digite o texto aqui" class="cmp-a maxlength" limit="empresaAlterarCmp4L" maxsize="5000" style="width:100%;"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-offset-4 hidden-xs hidden-sm">
                                     
                                </div>
                            </div>
                        </div>
                     <hr />
                     <div class="col-md-12 col-xs-12 col-sm-12 padBottom10">
                         <button type="submit" class="btn btn-default pull-left btnVoltar">Voltar</button>
                         <button type="submit" class="btn btn-default pull-right btnIncluir">Incluir</button>
                    </div>
                    </form>
	        	</div>
				
        	</div><!--row-->
        	
<?php include_once (dirname(__FILE__).'/footer.php');?>