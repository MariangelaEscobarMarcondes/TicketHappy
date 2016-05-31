<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ticket Happy - Login de usuário</title><!---->
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
	
	<!-- BREADCRUMB  --> 
	<div class="div_breadcrumb">		
		<ol class="breadcrumb">
			<li><a href="home.html">Home</a></li>
			<li class="active">Cadastro de Eventos</li>				
		</ol>		
	</div>
	<!-- BREADCRUMB --> 
	
	<div id="content">
		<div style="clear: both"></div>	
		<!-- MAIN -->
		<main id="largura_contato_form">	
			
			<h1>Cadastro de Eventos</h1>
			
				
			<form action="/evento/inserir" method="POST" class="form-horizontal">
				
				<div class="form-group">
					<label for="evento" class="col-sm-2 control-label color_label">Evento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="evento" name="evento" placeholder="Nome do Evento">
					</div>
				</div>
				
				<div class="form-group">
					<label for="local" class="col-sm-2 control-label color_label">Local</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="local" name="local" placeholder="Nome do Local (Teatro, Ginasio ...)">
					</div>
				</div>
				
				<div class="form-group">
					<label for="cidade" class="col-sm-2 control-label color_label">Cidade</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da Cidade do Evento">
					</div>
				</div>
				
				<div class="form-group">	
					<label for="categoria" class="col-sm-2 control-label color_label">Categoria</label>					
					<div class="col-sm-10">
						<select name="categoria" class="form-control">
							<option value="musical">Teatro - Musical</option>
							<option value="comedia">Teatro - Comédia</option>
							<option value="infantil">Teatro - Infantil</option>
							<option value="nacional">Show - Nacional</option>
							<option value="internacional">Show - Internacional</option>
							<option value="festivais">Festivais</option>
							<option value="orquestraEdanca">Orquestra & Dança</option>
							<option value="exposicoes">Exposições</option>
							<option value="especiais">Especiais</option>					  				 
						</select>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="texto" class="col-sm-2 control-label color_label">Texto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="texto" name="texto" placeholder="Nome do Evento">
					</div>
				</div>
				
				<div class="form-group">
					<label for="data" class="col-sm-2 control-label color_label">Data</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="data" name="data" placeholder="Data do evento">
					</div>
				</div>
				
				<div class="form-group">
					<label for="horario" class="col-sm-2 control-label color_label">Horario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="horario" name="horario" placeholder="Horario do evento">
					</div>
				</div>
				
				<div class="form-group">
					<label for="preco" class="col-sm-2 control-label color_label">Preço</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="preco" name="preco" placeholder="Preço do evento">
					</div>
				</div>
				
				<div class="form-group">
					<label for="onde" class="col-sm-2 control-label color_label">Onde</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="onde" name="onde" placeholder="Onde acontera o evento">
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="imagem" class="col-sm-2 control-label color_label">Imagem</label>
					<div class="col-sm-10">
						<input type="file" class="form-control filestyle" data-buttonName="btn btn-laranja" id="imagem" name="imagem">
					</div>
				</div>
				
				<div class="form-group">
					<label for="imagemFundo" class="col-sm-2 control-label color_label">Imagem de fundo</label>
					<div class="col-sm-10">
						<input type="file" class="form-control filestyle" data-buttonName="btn btn-laranja" id="imagemFundo" name="imagemFundo">
					</div>
				</div>
													
				
				<div class="form-group">
					
					<div class="col-sm-offset-2 col-sm-10">			
					
						<!-- Small modal -->
						<button type="button" value="Comprar" id="comprar" class="btn btn-laranja" data-toggle="modal" data-target=".bs-example-modal-sm">Enviar</button>
						 <input type="submit" value="OK"/>
						<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"  aria-hidden="true">
						  <div class="modal-dialog modal-sm">
							<div class="modal-content">							
								<div class="modal-header">								 
								  <a href="home.html"><span aria-hidden="true" class="glyphicon glyphicon-remove"></span></a>								 
								</div>								
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row">
										<p><span class="glyphicon glyphicon-ok"></span>  Logado com sucesso !!!</p>							 
										</div>
									</div>
								</div>
							
							</div>
						  </div>
						</div>
						
					</div>
				</div>
				
			</form>
			
			<br><br><br><br>
		</main>
		<!-- MAIN -->
		
		<!-- ASIDE -->
		<div id="aside_contato">
			<img src="imagens/login.png" alt="" class="img_login img-responsive">			
		</div>
		<!-- ASIDE -->
		
		<div style="clear: both"></div>		
	
	</div><!-- CONTENT -->
		

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
							<a href="#"><img src="imagens/icones/pagamento.png" alt="Formas de Pagamento"></a>							
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


</div><!--Wrapper -->
    

    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
	
  </body>
</html>
