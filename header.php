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
    	<div class="container">
    		<div class="row">
				<div class="col-md-1">
				</div>
                    <div class="col-md-10 col-xs-12 col-sm-12">
        <div id="conteudo"> 
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#"><img src="imagens/logoFIS.png" class="img-responsive" /></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Página Inicial</a></li>
              <li><a href="#">Suporte</a></li>
              <li><a href="#">Contatos</a></li>
              <li><a href="#">F.A.C</a></li>
            </ul>
            <div id="topo" class="pull-right">
                <div class="menuTopo">
                    <div class="acesso">
                        <div id="login">
                            <div id="btnFechar" onclick="login('fechar');"><img src="javascript/jcarousel/btnFechar.png" width="14" height="14" /></div>
                            
                            <span class="formLabel">Login de usuário</span>
                            <input type="text" id="txtUsuario" class="textBox" placeholder="Digite o seu usuário" maxlength="20" />
                            
                            <span class="formLabel">Senha de acesso</span>
                            <input type="password" id="txtSenha" class="textBox" placeholder="Digite a sua senha" maxlength="20" />
                            
                            <div class="btnLogar">FAZER LOGIN</div>
                            
                            <div class="notice">Esqueceu a senha <b>Clique Aqui</b></div>
                            <div class="notice">Alterar a senha <b>Clique Aqui</b></div>
                        </div>
                        
                        
                        <!-- Nao está logado -- > 
                        <div class="btnAcessarPortal" onclick="login('mostrar');">Acessar o portal</div>
                        <div class="btnAcessoPortal">Quero ter acesso ao portal</div>
                        <!-- -->
                        
                        <!-- Está logado -->
                        <div class="btnSair">Sair</div>
                        <div class="btnLogado">Olá, <b>Gilberto Colombo</b> (<span class="dominio">Admin</span>)</div>
                        <!-- -->
                    </div>
                </div>
            </div>
            </div>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

                    <hr />
                </div>