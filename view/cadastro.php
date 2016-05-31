<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ticket Happy - Cadastro</title>
	<link rel="shortcut icon" href="imagens/logo/favicon.ico" >
	
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    <link href="principal.css" rel="stylesheet">
	
</head>

<body>
<div id="wrapper">

    <!-- NAVBAR => BOOSTRAP -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			 
			  <a class="navbar-brand" href="home.html">
				<img alt="Brand" src="imagens/logo/2.png" class="img-responsive">
			  </a>
			</div>

			<!-- MENU -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="home.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-triangle-bottom"></span> Teatro</a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="teatro_musical.html">Musical</a></li>
					<li><a href="teatro_comedia.html">Comédia</a></li>
					<li><a href="teatro_infantil.html">Infantil</a></li>									
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-triangle-bottom"></span> Shows</a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="shows_nacional.html">Nacional</a></li>
					<li><a href="shows_internacional.html">Internacional</a></li>
				  </ul>
				</li>
				
				<li><a href="festivais.html"><span class="glyphicon glyphicon-triangle-right"></span>Festivais</a></li>
				<li><a href="orquestra_danca.html"><span class="glyphicon glyphicon-triangle-right"></span>Orquestra & Dança</a></li>
				<li><a href="exposicoes.html"><span class="glyphicon glyphicon-triangle-right"></span>Exposições</a></li>
				<li><a href="especiais.html"><span class="glyphicon glyphicon-triangle-right"></span>Especiais</a></li>
				
			  </ul>
			  
			   <!-- LOGIN -->	
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>
				
			  </ul>
			  
			  <!-- FORM => SEARCH -->
			  <form class="navbar-form navbar-right" role="search">
				<div class="form-group">				  
				  <input type="text" class="form-control cor_search" placeholder="Digite...">
				</div>				
				<button type="submit" class="btn btn-search"><span class="glyphicon glyphicon-search"></span></button>
			  </form>
			  
			 
			</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<!-- NAVBAR => BOOSTRAP -->
	
	<div class="div_breadcrumb">
		<!-- BREADCRUMB  --> 
		<ol class="breadcrumb">
			<li><a href="home.html">Home</a></li>
			<li class="active">Cadastro</li>				
		</ol>
		<!-- BREADCRUMB --> 
	</div>	
	
	<div id="content">
		<div style="clear: both"></div>
		
		<!-- MAIN -->
		<main id="largura_contato_form">
			<h2>Dados Pessoais</h2>
			
	<form method="post" action="/cadastro/inserir" class="form-horizontal">
				
			
		<div class="form-group">
			<label for="nome" class="col-sm-2 control-label color_label">*Nome Completo</label>
		        <div class="col-sm-9">
					  <input type="text" name="nome" id="nome" class="form-control" size="55" maxlength="50" placeholder="Nome Completo" required>
					</div>		
				</div>				
				
				<div class="form-group">
					<label for="cpf" class="col-sm-2 control-label color_label">*CPF</label>
					<div class="col-sm-3">
						<input type="text" name="cpf" id="cpf" class="form-control" placeholder="123.456.789-00">
					</div>	
						
					<label for="dt_nasc" class="col-sm-3 control-label color_label">*Data de Nascimento</label>
					<div class="col-sm-3">
						<input type="text" name="dt_nasc" id="dt_nasc" class="form-control" placeholder="00/00/0000">
					</div>						
				</div>					  			
				
				<div class="form-group">
					<label for="telefone" class="col-sm-2 control-label color_label">*Telefone</label>
					<div class="col-sm-3">
					  <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(00)1234-5678">
					</div>	

					<label for="celular" class="col-sm-3 control-label color_label">Celular</label>
					<div class="col-sm-3">
					  <input type="text" name="celular" id="celular" class="form-control" placeholder="(00)12345-6789">
					</div>
				</div>
						
				<div class="form-group">
				<label  class="col-sm-2 control-label color_label">*Sexo</label>
						<label class="radio-inline color_label"><input type="radio" name="sexo" id="f" value="f" checked>Feminino</label>					
						<label class="radio-inline color_label"><input type="radio" name="sexo" id="m" value="m">Masculino</label>
					</fieldset>
				</div>
				
				<h2>Dados de Acesso</h2>
				
				<div class="form-group">
					<label for="Email" class="col-sm-2 control-label color_label">*Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="Email" placeholder="email@exemplo.com.br" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="confirmaEmail" class="col-sm-2 control-label color_label">*Cofirmar Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="confirmaEmail" placeholder="email@exemplo.com.br" required>
					</div>
				</div>
				 
				<div class="form-group">
					<label for="senha" class="col-sm-2 control-label color_label">*Senha</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="senha" placeholder="Password" required>
					</div>
				
					<label for="confirmasenha" class="col-sm-2 control-label color_label">*Cofirmar Senha</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="confirmasenha" placeholder="Password" required>
					</div>
				</div>				
				
				
				<h2>Endereço de Contato</h2>				
				
				<div class="form-group">
					<label for="endereco" class="col-sm-2 control-label color_label">*Endereço</label>
					<div class="col-sm-10">
					  <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" required>
					</div>		
				</div>
				
				<div class="form-group">
						<label for="numero" class="col-sm-2 control-label color_label">*Número</label>
					<div class="col-sm-2">
					  <input type="text" name="numero" id="numero" class="form-control"  placeholder="Número" required>
					</div>	
					
					<label for="complemento" class="col-sm-2 control-label color_label">Compelmento</label>
					<div class="col-sm-6">
					  <input type="text" name="compelmento" id="compelmento" class="form-control" placeholder="Complemento" required>
					</div>	
				</div>
		  		
				<div class="form-group">
					<label for="bairro" class="col-sm-2 control-label color_label">*Bairro</label>
					<div class="col-sm-6">
					  <input type="text" name="bairro" id="bairro" class="form-control"  placeholder="Bairro" required>
					</div>	
				</div>
				
				<div class="form-group">
					<label for="cidade" class="col-sm-2 control-label color_label">*Cidade</label>
					<div class="col-sm-4">
					  <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required>
					</div>	

					<label for="nome" class="col-sm-2 control-label color_label">*Estado</label>					
					<div class="col-sm-2">
					<select class="form-control">
					  <option>AC</option>
					  <option>AL</option>
					  <option>AP</option>
					  <option>AM</option>
					  <option>BA</option>
					  <option>CE</option>
					  <option>DF</option>
					  <option>ES</option>
					  <option>GO</option>
					  <option>MA</option>
					  <option>MT</option>
					  <option>MS</option>
					  <option>MG</option>
					  <option>PA</option>
					  <option>PB</option>
					  <option>PR</option>
					  <option>PE</option>
					  <option>PI</option>
					  <option>RJ</option>
					  <option>RN</option>
					  <option>RS</option>
					  <option>RO</option>
					  <option>RR</option>
					  <option>SC</option>
					  <option>SP</option>
					  <option>SE</option>
					  <option>TO</option>					 
					</select>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label color_label">*CEP</label>
					<div class="col-sm-4">
					  <input type="text" name="cep" id="cep" class="form-control" maxlength="9"  pattern="[0-9]{5}-[0-9]{3}" placeholder="11111-111" required>					  
					</div>		
				</div>
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">						
					
						<!-- Small modal -->
						<button type="button" value="Enviar" id="enviar" class="btn btn-laranja" data-toggle="modal" data-target=".bs-example-modal-sm">Enviar</button>
							
						<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-sm">
							<div class="modal-content">
							
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								  <h4 class="modal-title" id="gridSystemModalLabel"><span class="glyphicon glyphicon-ok"></span> </h4>
								</div>
								
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row">
										<p>Mensagem enviada com sucesso!!!</p>							 
										</div>
									</div>
								</div>
							
							</div>
						  </div>
						</div>
						
					</div>				
					
				</div><!-- form-group -->

			</form>
			<br><br>
		
		</main>
		<!-- MAIN -->
		
		
		<div style="clear: both"></div>
	</div>
	
	
	<!-- FOOTER -->
	 <footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">

        <div class="row">
            <div class="col-sm-6 col-md-3">
				<div id="meta-3" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Serviços</h4>
					<ul>
						<li><a href="contato.html">Contato</a></li>
						<li><a href="#">Central de Vendas</a></li>
						<li><a href="#" title="">Vendas para Grupos</a></li>
						<li><a href="#" title="">Vendas pela Internet</a></li>
						<li><a href="#" title="">Vantagens do Sistema</a></li>						
					</ul>
				</div>            
			</div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              	<div id="recent-posts-3" class="widget widgetFooter widget_recent_entries"><h4 class="widgettitle">Formas de Pagamento</h4>	
					<div class="form-inline">				
						<div class="input-group">							
							<a href="#"><img src="imagens/icones/pagamento.png" alt="Formas de Pagamento" ></a>							
						</div>
						
				</div>
				</div>           
			</div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
				<div id="meta-4" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Certificados de Segurança</h4>		
					<div class="form-inline">				
						<div class="input-group">							
							<a href="#"><img src="imagens/icones/certificados.png" alt="Cerificados de Segurança"></a>							
						</div>
							
				</div>
				</div>           
			</div> <!-- end widget1 -->
			<!-- 4 -->
             <div class="col-sm-6 col-md-3">
				<div id="search-3" class="widget widgetFooter widget_search"><h4 class="widgettitle">Mídias Sociais</h4>
				<div class="form-inline">				
						<div class="input-group">							
							<a href="#"><img src="imagens/icones/1.jpg" alt="Imagem icone Facebook"></a>							
						</div>
						<div class="input-group">							
							<a href="#"><img src="imagens/icones/2.jpg" alt="Imagem icone Twitter"></a>								
						</div>	
						<div class="input-group">							
							<a href="#"><img src="imagens/icones/3.jpg" alt="Imagem icone Google +"></a>							
						</div>
						<div class="input-group">							
							<a href="#"><img src="imagens/icones/4.jpg" alt="Imagem icone Youtube"></a>								
						</div>	
				</div>
				</div>          
			</div> <!-- end 4 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

		<div id="sub-floor">
			<div class="container">
				<div class="row">
					<div class="col-md-4 copyright">
						tickethappy.com.br 2015 © 
					</div>	

					<div class="col-md-4 col-md-offset-4 attribution">
						Desenvolvido por:<a href="#"> DMR</a>	
					</div>

				</div> <!-- end .row -->
			</div>
		</div>

    </footer> <!-- end footer -->
	<!-- FOOTER -->

	
	
</div><!-- WRAPPER -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>