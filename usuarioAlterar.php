<?php include_once (dirname(__FILE__).'/header.php');?>
	
	        	<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="blocoTituloPagina">
                		<div class="tituloPagina">Usuário / Incluir</div>
            		</div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="titulo">Incluir</div>
                    <form class="" role="form">
                        <div class="row ">
                            <div class=" col-md-12 col-xs-12 col-sm-12 formulario">
                                <div class="col-md-4 col-xs-12 col-sm-12">
                                   <div class="form-group">
                                    <label class="control-label titCampo" for="exampleInputEmail2">Nome</label>
                                    <input type="text" name="nome" class="form-control cmp maxlength checarValidacao"  placeholder="Digite o texto aqui" value="">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label titCampo" for="exampleInputEmail2">Sobrenome</label>
                                    <input type="text" name="sobrenome" class="form-control cmp maxlength checarValidacao"  placeholder="Digite o texto aqui" value="">
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group">
                                         <label class="control-label titCampo block" for="exampleInputEmail2">Gênero</label>
                                        <select data-placeholder="Selecione uma opção" class="chosen-select" style="width:250px;" tabindex="1">
                                             <option value=""></option>
                                            <option value="">Feminino</option>
                                            <option value="">Masculino</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label titCampo" for="exampleInputEmail2">Email</label>
                                    <input type="text" validar="s" name="email" class="form-control cmp maxlength checarValidacao"  placeholder="Digite o texto aqui" value="">
                                  </div>
                                  
                                </div>
                                <div class="col-md-4 col-xs-12 col-sm-12">

                                  <div class="form-group">
                                    <div class="input-group">
                                         <label class="control-label titCampo block" for="exampleInputEmail2">Empresa</label>
                                        <select data-placeholder="Selecione uma opção aqui" class="chosen-select checarValidacao" style="width:250px;" tabindex="1">
                                            <option value=""></option>
                                            <option value="">Nome da empresa 1</option>
                                            <option value="">Nome da empresa 2</option>
                                            <option value="">Nome da empresa 3</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="form-group">
                                        <label class="control-label titCampo" for="exampleInputEmail2">Login de Acesso</label>
                                         <div class="btnResetar">Clique aqui para resetar a senha</div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label titCampo" for="exampleInputEmail2">Data de Expedição</label>
                                    <input type="text" name="data_expedicao" class="form-control checarValidacao" id="" placeholder="Digite o texto aqui">
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group">
                                         <label class="control-label titCampo block" for="exampleInputEmail2">Grupo</label>
                                        <select data-placeholder="Selecione uma opção aqui" class="chosen-select" style="width:250px;" tabindex="1">
                                             <option value=""></option>
                                            <option value="">Grupo 1</option>
                                            <option value="">Grupo 2</option>
                                        </select>
                                    </div>
                                  </div>
                                  
                                </div>
                                <div class="col-md-offset-4 hidden-xs hidden-sm">

                                </div>
                                <hr />
                               
                                    
                                <div class="col-md-offset-4 hidden-xs hidden-sm">
                                     
                                </div>
                            </div>
                        </div>
                     <hr />
                     <div class="col-md-12 col-xs-12 col-sm-12 padBottom10">
                        <div class="botoesRodape">
                          <div class="btnVoltar fl">Voltar</div>
                          <div class="btnExcluir fr mostrar">Limpar</div>
                          <div class="btnAlterar fr mostrar" onclick="validarFormulario();">Incluir</div>
                        </div>
                     </div>
        
        <div class="espacoFinal"></div>
                    </form>
	        	</div>
				
        	</div><!--row-->
        	
<?php include_once (dirname(__FILE__).'/footer.php');?>