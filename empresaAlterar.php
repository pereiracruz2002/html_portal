<?php include_once (dirname(__FILE__).'/header_promint.php');?>
    
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="blocoTituloPagina">
                        <div class="tituloPagina">Empresa/Alterar</div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="titulo">Alterar</div>
                    <form class="" role="form">
                        <div class="row ">
                            <div class=" col-md-12 col-xs-12 col-sm-12 formulario">
                                <div class="col-md-4 col-xs-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label titCampo" for="exampleInputEmail2">Empresa</label>
                                        <input type="text" name="empresa" class="form-control cmp-b" id="" placeholder="Digite o texto aqui" value="">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label titCampo" for="exampleInputEmail2">Sigla</label>
                                        <input type="text" name="empresa" class="form-control cmp maxlength"  limit="empresaAlterarCmp2L" id="" placeholder="Digite o texto aqui" value="">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label titCampo" for="exampleInputEmail2">Corporação</label>
                                        <input type="text" name="empresa" class="form-control cmp maxlength"  limit="empresaAlterarCmp3L" id="" placeholder="Digite o texto aqui" value="">
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
                               <div class="col-md-offset-4 hidden-xs hidden-sm">

                                </div>

                                
                                <div class="col-md-offset-4 hidden-xs hidden-sm">

                                </div>
                                
                            </div>
                        </div>
                     <hr />
                     <div class="col-md-12 col-xs-12 col-sm-12 padBottom10">
                         <button type="submit" class="btn btn-default pull-left btnVoltar">Voltar</button>
                          <div onclick="abrirPopUp('.excluirEmpresa');" class="btnExcluir fr mostrar">Excluir</div>
                         <button type="submit" class="btn btn-default pull-right btnIncluir">Incluir</button>
                    </div>
                    </form>
                </div>
                
            </div><!--row-->
            
<?php include_once (dirname(__FILE__).'/footer.php');?>