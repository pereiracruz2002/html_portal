<?php include_once (dirname(__FILE__).'/header.php');?>
	
	        	<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="blocoTituloPagina">
                		<div class="tituloPagina">Parâmetros</div>
            		</div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="titulo">Buscar</div>
                    <form class="" role="form">
                        <div class="row ">
                            <div class=" col-md-12 col-xs-12 col-sm-12 formulario">
                                <div class="col-md-4 col-xs-12 col-sm-12">
                                  <div class="form-group">
                                    <div class="input-group">
                                         <label class="control-label titCampo" for="exampleInputEmail2">Pesquisar Campo</label>
                                        <select data-placeholder="Selecione uma opção" class="chosen-select" style="width:250px;" tabindex="1">
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
                                    <div class="input-group">
                                         <label class="control-label titCampo" for="exampleInputEmail2">Pesquisar Campo</label>
                                        <select data-placeholder="Selecione uma opção" class="chosen-select" style="width:250px;" tabindex="1">
                                            <option value=""></option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="btn pesquisar">Pesquisar</div>
                                </div>
                                <div class="col-md-4 col-xs-12 col-sm-12">

                                  <div class="form-group">
                                    <div class="input-group">
                                          <div class="checkbox">
                                              <label>
                                                <input type="checkbox"> Não listar Implantadas
                                              </label>
                                            </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group">
                                          <div class="checkbox">
                                              <label style="color:#666;font:Arial;">
                                                <input type="checkbox"> Não listar Implantadas
                                              </label>
                                            </div>
                                    </div>
                                  </div>
                                  
                                </div>
                                <div class="col-md-offset-4 hidden-xs hidden-sm">

                                </div>
                                
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12 padTop20">
                              <table class="tabela table-responsive col-md-12 col-xs-12 col-sm-12 " cellpadding="0" cellspacing="1" border="0"  style="margin:0px 0px 0px 0px;">
                                <tr class="titutloTabela-a">
                                  <td>RS</td>
                                    <td>Título</td>
                                    <td>Dt. Solicitação</td>
                                    <td>Dt. Fase</td>
                                    <td>Analista</td>
                                    <td>Fase</td>
                                    <td>Usuário</td>
                                    <td>Empresa</td>
                                    <td>N. Cliente</td>
                                    <td>N. Projeto FIS</td>
                                </tr>
                                <tr class="conteudo-a linCam" id="linhaCampo1Sel" onclick="marcaLinha('#linhaCampo1', 1);">
                                  <td><input type="hidden" value="0" class="seleciona" id="linhaCampo1" />34764</td>
                                    <td>Inclusão</td>
                                    <td>01/02/2014</td>
                                    <td>12/09/2014</td>
                                    <td>José</td>
                                    <td>Análise</td>
                                    <td>Mário</td>
                                    <td>CER</td>
                                    <td>1010</td>
                                    <td>123456</td>
                                </tr>
                                <tr class="conteudo-b linCam"  id="linhaCampo2Sel" onclick="marcaLinha('#linhaCampo2', 2);">
                                  <td><input type="hidden" value="0" class="seleciona" id="linhaCampo2" />34764</td>
                                    <td>Inclusão</td>
                                    <td>01/02/2014</td>
                                    <td>12/09/2014</td>
                                    <td>José</td>
                                    <td>Análise</td>
                                    <td>Mário</td>
                                    <td>CER</td>
                                    <td>1010</td>
                                    <td>123456</td>
                                </tr>
                              </table>
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