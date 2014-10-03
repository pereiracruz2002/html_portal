<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>.: Promint :.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="javascript/jquery-1.8.2.min.js"></script>
        <script src="javascript/scripts.js"></script>
        <script src="javascript/jcarousel/jquery.jcarousel.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="style/inicio.css" type="text/css" />
        <link rel="stylesheet" href="javascript/jcarousel/skin.css" type="text/css" />
    </head>
    <body>
         <!-- Modal -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Título do Modal</h4>
        </div>
        <div class="modal-body">
          Conteúdo do Modal
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar</button>
        </div>
      </div><!-- final do modal-content -->
    </div><!-- final do modal-dialog -->
    </div>
    <!--fim do Modal-->

    <div class="container">
      <div class="row" style="margin-top: 10px;">
        <div class="col-md-5" id="logo">
          <a href="index.html" title="Curso de Bootstrap">
            <img src="img/logo-bootstrap.gif" alt="Curso de Bootstrap" class="img-responsive">
          </a>
        </div>
        <div class="col-md-7 text-right" id="modal-login" style="margin-top: 20px;">
          
          <a href="#" class="btn btn-danger" rel="popouver" data-placement="bottom" data-toggle="popover" title="" data-content="Descrição do Popouver completa aqui..." data-original-title="Título do Popouver">Clique para abrir o popouver</a>
          
          <a href="#myModal" role="button" class="btn btn-info" data-toggle="modal">Abrir uma Caixa Modal</a>
      </div>
    </div>

      <div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Inicial</a></li>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Portifólio</a></li>
                <li><a href="#">Contatos</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu DropDown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="inscricao1.html">Inscrição</a></li>
                    <li><a href="abas.html">Conteúdo com Abas</a></li>
                    <li><a href="blog.html">Nosso Blog</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form pull-right hidden-xs" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Digite a palavra...">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </div><!--final navbar-collapse -->
          </div><!--final da navbar-->
        </div><!--final da coluna-->
      </div><!--final da linha-->
          <!-- jQuery direto do local -->
    <script src="javascript/jquery-1.10.2.js"></script>
    
    <!-- jQuery direto do CDN (somente online) -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascript/bootstrap.js"></script>
    </body>
</html>