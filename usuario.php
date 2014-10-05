<?php include_once (dirname(__FILE__).'/header.php');?>
	
	        	<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="blocoTituloPagina">
                		<div class="tituloPagina">Usuário</div>
            		</div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="titulo">Filtro de Busca</div>
                    <form class="" role="form">
                        <div class="row ">
                            <div class=" col-md-12 col-xs-12 col-sm-12 formulario">
                                <div class="col-md-4 col-xs-12 col-sm-12">
                                  <div class="form-group">
                                    <label class="control-label titCampo" for="data_solicitacao">Nome usuário</label>
                                    <input type="text" name="nome_usuario" class="form-control cmp" id="" placeholder="Digite o texto aqui" value="">
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group">
                                        <label class="control-label titCampo" for="exampleInputEmail2">Status da Solicitação</label>
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
                                  
                                </div>
                                <div class="col-md-4 col-xs-12 col-sm-12">
                                  <div class="form-group">
                                    <div class="input-group">
                                        <label class="control-label titCampo" for="exampleInputEmail2">Grupo da Solicitação</label>
                                        <select data-placeholder="Selecione uma opção" class="chosen-select" style="width:250px;" tabindex="1">
                                            <option value=""></option>
                                            <option value="">Conteúdo</option>
                                            <option value="">Conteúdo</option>
                                            <option value="">Conteúdo</option>
                                            <option value="">Conteúdo</option>
                                            <option value="">Conteúdo</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="campo campoSemConta"> 
                                    <div class="btnFiltrar">Buscar</div>
                                  </div>
                                </div>
                                <div class="col-md-4 col-xs-12 col-sm-12">
                                  <div class="form-group">
                                    <div class="input-group">
                                        <label class="control-label titCampo block" for="exampleInputEmail2">Empresa</label>
                                        <select data-placeholder="Selecione uma opção" class="chosen-select" style="width:250px;" tabindex="1">
                                            <option value=""></option>
                                            <option value="">Conteúdo</option>
                                            <option value="">Conteúdo</option>
                                            <option value="">Conteúdo</option>
                                            <option value="">Conteúdo</option>
                                            <option value="">Conteúdo</option>
                                        </select>
                                    </div>
                                  </div>
                              </div>
                 
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12 padTop20">
                              <table class="tabela table-responsive col-md-12 col-xs-12 col-sm-12 " cellpadding="0" cellspacing="1" border="0"  style="margin:0px 0px 0px 0px;">
                                <tr class="titutloTabela-a">
                                  <td class="txtEsquerda">Nome</td>
                                  <td>Empresa</td>
                                  <td>Grupo</td>
                                  <td>Status(Não)</td>
                                </tr>
                                <tr class="conteudo-a linCam" id="linhaCampo1Sel" onclick="marcaLinha('#linhaCampo1', 1);">
                                  <td class="txtEsquerda"><input type="hidden" value="0" class="seleciona" id="linhaCampo1" />José da Silva</td>
                                  <td>ABN</td>
                                  <td>Administrador</td>
                                  <td>Ativo</td>
                                </tr>
                                <tr class="conteudo-b linCam" id="linhaCampo2Sel" onclick="marcaLinha('#linhaCampo2', 2);">
                                  <td class="txtEsquerda"><input type="hidden" value="0" class="seleciona" id="linhaCampo2" />José da Silva</td>
                                  <td>ABN</td>
                                  <td>Administrador</td>
                                  <td>Ativo</td>
                                </tr>
                                <tr class="conteudo-a linCam" id="linhaCampo3Sel" onclick="marcaLinha('#linhaCampo3', 2);">
                                  <td class="txtEsquerda"><input type="hidden" value="0" class="seleciona" id="linhaCampo3" />José da Silva</td>
                                  <td>ABN</td>
                                  <td>Administrador</td>
                                  <td>Ativo</td>
                                </tr>
                                <tr class="conteudo-b linCam" id="linhaCampo4Sel" onclick="marcaLinha('#linhaCampo4', 3);">
                                  <td class="txtEsquerda"><input type="hidden" value="0" class="seleciona" id="linhaCampo4" />José da Silva</td>
                                  <td>ABN</td>
                                  <td>Administrador</td>
                                  <td>Ativo</td>
                                </tr>
                              </table>
                            </div>
                             <div class="col-md-12 col-xs-12 col-sm-12">  
                              <div id="registros" class="pull-left">Foram encontrado 3024 registros</div>
                              <div id="paginacao" class="pull-right">
                                <div class="numeracao">5</div>
                                  <div class="numeracao">4</div>
                                  <div class="numeracao">3</div>
                                  <div class="numeracao">2</div>
                                  <div class="numeracao atual">1</div>
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