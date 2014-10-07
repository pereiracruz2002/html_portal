<?php include_once (dirname(__FILE__).'/header_promint.php');?>
    
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="blocoTituloPagina">
                        <div class="tituloPagina">Empresa/Incluir</div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="titulo">Incluir</div>
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
                                </div>
                               <div class="col-md-offset-4 hidden-xs hidden-sm">

                                </div>

                                
                                <div class="col-md-offset-4 hidden-xs hidden-sm">

                                </div>
                                
                            </div>
                        </div>
                     <hr />
                     <div class="col-md-12 col-xs-12 col-sm-12 padBottom10">
                         <div class="botoesRodape">
                        <div class="btnVoltar fl">Voltar</div>
                        <div class="btnIncluir fr">Incluir</div>
                        <div class="btnExcluir fr mostrar">Limpar</div>
        </div>
                    </div>
                    </form>
                </div>
                
            </div><!--row-->
            
<?php include_once (dirname(__FILE__).'/footer.php');?>