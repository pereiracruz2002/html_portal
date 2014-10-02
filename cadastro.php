<?php include_once (dirname(__FILE__).'/header.php');?>
	<div class="col-md-10 col-xs-10 col-sm-10">
		<div id="conteudo">	
			<div class="row">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div id="topo" class="navbar navbar-default">
		        		<div class="logo">
		        			<img src="imagens/logoFIS.png" class="img-responsive" />
		        		</div>
		        		<div class="collapse navbar-collapse navbar-ex1-collapse pull-left">
				            <ul class="nav navbar-nav">
				              <li class="active"><a href="index.html">Página Inicial</a></li>
				              <li><a href="#">Suporte</a></li>
				              <li><a href="#">Contatos</a></li>
				              <li><a href="#">F.A.C</a></li>
				            </ul>
          				</div><!--/.nav-collapse -->
	      
			            <!--<div class="menuTopo">
			            	<div class="menu">Página Inicial</div>
			                <div class="menu">Suporte</div>
			                <div class="menu">Contato</div>     
			                <div class="menu">F.A.C.</div>
			            </div>-->

			            <div class="pull-right margin-left: 15px;">
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
	        		</div><!--topo-->
	        	</div>
	        	<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="blocoTituloPagina">
                		<div class="tituloPagina">Cadastro</div>
            		</div>
            		<div class="col-md-6 col-xs-6 col-sm-6">
						<div class="icoHome3"></div>
            		</div>
            		<div class="col-md-6 col-xs-6 col-sm-6">
						<div class="icoHome4"></div>
            		</div>
	        	</div>
				<div class="col-md-12 col-xs-12 col-sm-12">
	        		<div id="rodape">
	                	<div class="sombraTopoRodape"><img src="imagens/sombraRodape.png" class="img-responsive" /></div>
		                 Termos de usdo deste portal e política de privacidade | <span class="link">Contate-nos</span><br />
		            	 Todos os direitos reservados 2014 <b>Promint</b>. Inc. <b>Resolução mínima 1024x768</b>
	            		</div>
	            	</div>
        	</div><!--row-->
		</div><!--conteudo-->
	</div>

</div>