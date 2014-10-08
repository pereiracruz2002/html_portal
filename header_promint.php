<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>.: Promint :.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="javascript/jquery-1.8.2.min.js"></script>

         <script src="javascript/select/chosen.jquery.js" type="text/javascript"></script>
        <script src="javascript/select/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
        <script src="javascript/scripts.js"></script>
        <script src="javascript/jcarousel/jquery.jcarousel.min.js"></script>

             

        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="style/inicio_promint.css" type="text/css" />
        <link rel="stylesheet" href="javascript/jcarousel/skin.css" type="text/css" />

              <link rel="stylesheet" href="javascript/select/docsupport/prism.css">
        <link rel="stylesheet" href="javascript/select/chosen.css">
    </head>
    <body>
       <div class="container">
        <div class="row">
           <div class="col-md-1 col-xs-1 hidden-xs"></div>
            <div class="col-md-10 col-xs-12 col-sm-12">
              <div id="conteudo" class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 hidden-xs">
                  <div class="col-md-3 col-xs-2 col-sm-2" id="logo">
                    <a href="index.html" title="Curso de Bootstrap">
                      <img src="imagens/promint.jpg" alt="" class="img-responsive" />
                    </a>
                  </div>

                  

                    <div class="col-md-9  col-sm-9">
                      <div class="row">
                        <div class="col-md-12  col-sm-12">
                          <!--<div class="acesso">
                           <div class="btnAcessarPortal" onclick="login('mostrar');">Acessar o portal</div>
                           <div class="btnAcessoPortal">Quero ter acesso ao portal</div>    
                          </div> -->
                          <form class="navbar-form pull-right hidden-xs" role="search">
                            <div class="form-group">
                              <label for="inputEmail3" class="control-label">Acesso ao Painel:</label>
                              <select class="form-control">
                                <option>--Selecione--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              <label for="inputEmail3" class="control-label">Busca:</label>
                              <input type="text" class="form-control" placeholder="Digite a palavra...">
                            </div>
                            <button type="submit" class="btn btn-default">Ok</button>
                          </form>  
                        </div>
                        <div class="col-md-12 col-md-12">
                        <div class="navbar navbar-default" role="navigation">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                          <span class="sr-only">Navegação</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <div id="topo" class="collapse navbar-collapse navbar-ex1-collapse paddingTop10">
                        <ul class="nav navbar-nav menuTopo pull-right">
                          <li class="active menu"><a href="#">Início</a></li>
                          <li class="menu"><a href="#">Sobre a Promint Brasil</a></li>
                          <li class="menu"><a href="#">Consultoria</a></li>
                          <li class="menu"><a href="#">Négocios e serviços</a></li>
                          <li class="menu"><a href="#">Carreiras</a></li>
                          <li class="menu"><a href="#">Notícias</a></li>
                          <li class="menu"><a href="#">Fale conosco</a></li>
                        </ul>
                      </div><!--final navbar-collapse -->
                    </div><!--final da navbar-->
                        </div>
                      </div>
                    </div>
                    
                </div>
                <div class="col-xs-12hidden-md hidden-md hidden-lg hidden-sm">
                  <a href="index.html" title="Curso de Bootstrap" class="pull-left">
                      <img src="imagens/promint.jpg" alt="" class="img-responsive" />
                  </a>
                </div>
                 <div class="col-xs-12  hidden-md hidden-lg hidden-sm hidden-lg">
                     <!--<div class="acesso">
                        <div class="btnAcessarPortal pull-left" onclick="login('mostrar');">Acessar o portal</div>
                        <div class="btnAcessoPortal pull-right">Quero ter acesso ao portal</div>
                     </div>-->
                     <form class="navbar-form pull-right hidden-xs" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Digite a palavra...">
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                      </form>
                 </div>
                
                 <div class="col-xs-12  hidden-md hidden-lg hidden-sm hidden-lg">
                    <form class="navbar-form pull-right hidden-xs" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Digite a palavra...">
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                      </form>
                 </div>
                 <div class="col-xs-12  hidden-md hidden-lg hidden-sm hidden-lg">
                    <div class="navbar navbar-default" role="navigation">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                          <span class="sr-only">Navegação</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <div id="topo" class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav menuTopo">
                          <li class="active menu"><a href="#">Início</a></li>
                          <li class="menu"><a href="#">Sobre a Promint Brasil</a></li>
                          <li class="menu"><a href="#">Consultoria</a></li>
                          <li class="menu"><a href="#">Négocios e serviços</a></li>
                          <li class="menu"><a href="#">Carreiras</a></li>
                          <li class="menu"><a href="#">Notícias</a></li>
                          <li class="menu"><a href="#">Fale conosco</a></li>
                        </ul>
                      </div><!--final navbar-collapse -->
                    </div><!--final da navbar-->
                  </div><!--final da coluna-->
                <div class="row">