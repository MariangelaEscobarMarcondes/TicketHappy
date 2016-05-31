<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ticket Happy - Carrinho de Compras</title>
	<link rel="shortcut icon" href="imagens/logo/favicon.ico" >
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/principal.css" rel="stylesheet">
	
</head>
<body>
<div id="wrapper">

    <!----------------------- NAVBAR => BOOSTRAP --------------------------------------------------------->
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
	<!----------------------- NAVBAR => BOOSTRAP --------------------------------------------------------->
	
	<div class="div_breadcrumb">
		<!--------------------------- BREADCRUMB  --------------------------------------> 
		<ol class="breadcrumb">
			<li><a href="home.html">Home</a></li>
			<li><a href="login.html">Login</a></li>
			<li class="active">Carrinho de Compras</li>				
		</ol>
		<!--------------------------- BREADCRUMB --------------------------------------> 
	</div>	
	
	<div id="content">		
		
		<!------------------------------ MAIN --------------------------------------------->
		<main id="largura_compra">
										
			<form method="post" action="php/valida-dados.php" class="form-horizontal">
				<h2>Resumo da Compra</h2>
				
				<div class="entrega">
					<p class="entrega">1 Ingresso</p>
					<p class="entrega">Frete para Santos</p>
					<p class="entrega">Total a pagar : R$ 569,00</p>
				</div>
				<br>
				
				<h2>Formas de Pagamento</h2>				
				
				<div class="form-group"> <!-- Only required for left/right tabs -->
										
					<div class="tab-content">
								
						<div class="form-group">
							<br>
							
							<label for="num_cartao" class="col-sm-2 control-label color_label">Número do cartão de crédito</label>
							<div class="col-sm-4">
								<input type="text" name="num_cartao" id="num_cartao" class="form-control" placeholder="" required>
							</div>

							<label for="Validade" class="col-sm-1 control-label color_label">Validade</label>					
							<div class="col-sm-2">
								<select class="form-control">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
									<option>06</option>
									<option>07</option>
									<option>08</option>
									<option>09</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>					  				 
								</select>
							</div>					
									
							<div class="col-sm-2">
								<select class="form-control">
									<option>2015</option>
									<option>2016</option>
									<option>2017</option>
									<option>2018</option>
									<option>2019</option>
									<option>2020</option>
									<option>2021</option>
									<option>2022</option>
									<option>2023</option>
									<option>2024</option>
									<option>2025</option>					  				  				 
								</select>
							</div>					
						</div>				
				
						<div class="form-group">
							<label for="nome" class="col-sm-2 control-label color_label">Nome do tiular do cartão</label>
							<div class="col-sm-4">
								<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
							</div>	
						
							<label for="cod" class="col-sm-2 control-label color_label">Código de segurança</label>
							<div class="col-sm-3">
								<input type="text" name="cod" id="cod" class="form-control" placeholder="">
							</div>						
						</div>					  			
				
						<div class="form-group">
							<label for="parcelamento" class="col-sm-2 control-label color_label">Parcelamento</label>
							<div class="col-sm-2">
								<select class="form-control">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
									<option>06</option>
									<option>07</option>
									<option>08</option>
									<option>09</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>					  				 
									</select>
							</div>	

							<label for="parcelamento" class="col-sm-4 control-label color_label">Bandeiras</label>
							<div class="col-sm-3">
								<select class="form-control">
									<option>Visa</option>
									<option>Master Card</option>													  				 
								</select>
							</div>	
						</div>						
						
					</div>
				</div>
								
				<div class="form-group">
					<div class="col-sm-offset-2">	
														
						<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Finalizar Comprar</button>				
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-thumbs-up"></span>  Compra realizada com sucesso!!!</h4>
								  </div>
								  <div class="modal-body">
									<img src="imagens/cadeira1.jpg" alt="" class="img-responsive">
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-laranja" data-dismiss="modal">Close</button>					
								  </div>
								</div>
							</div>
						</div>								
					</div>
				</div>	
			</form>
			<!------------------------------- FORM--------------------------------------------->	
			<br><br>
		
		</main>
		<!------------------------------ MAIN --------------------------------------------->
		
	</div>
	
	
	<!----------------------------------------------- FOOTER -------------------------------------------------------------------->
		<!-- FOOTER -->
	 <footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">

        <div class="row">
            <div class="col-sm-6 col-md-3">
				<div id="meta-3" class="widget widgetFooter widget_meta"><a href="home.html" title="Link para Home"><h4 class="widgettitle">Home</h4></a>
					<ul>
						<li><a href="contato.html" title="Link para Contato">Contato</a></li>
						<li><a href="login.html" title="Link para Login">Login</a></li>
						<li><a href="cadastro.html" title="Link para Login">Cadastro</a></li>
					</ul>
				</div>            
			</div> <!-- end widget1 -->
			
			<div class="col-sm-6 col-md-3">
				<div id="meta-3" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Teatro</h4>
					<ul>						
						<li><a href="teatro_musical.html" title="Link para Musical">Musical</a></li>
						<li><a href="teatro_comedia.html" title="Link para Comédia">Comédia</a></li>
						<li><a href="teatro_infantil.html" title="Link para Infantil">Infantil</a></li>											
					</ul>
				</div>            
			</div> <!-- end widget1 -->
			
			<div class="col-sm-6 col-md-3">
				<div id="meta-3" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Shows</h4>
					<ul>
						<li><a href="shows_nacional.html.html" title="Link para Shows Nacionais">Nacional</a></li>
						<li><a href="shows_internacional.html" title="Link para Shows Internacionais">Internacional</a></li>																
					</ul>
				</div>            
			</div> <!-- end widget1 -->
			
				<div class="col-sm-6 col-md-3">
				<div id="meta-3" class="widget widgetFooter widget_meta"><a href="festivais.html" title="Link para Festivais"><h4 class="widgettitle">Festivais</h4></a>						
				</div> <br>
				<div id="meta-3" class="widget widgetFooter widget_meta"><a href="orquestra_danca.html" title="Link para Orquestra & Dança"><h4 class="widgettitle">Orquestra & Dança</h4></a>					
				</div> 	<br>
				<div id="meta-3" class="widget widgetFooter widget_meta"><a href="exposicoes.html" title="Link para Exposições"><h4 class="widgettitle">Exposições</h4></a>					
				</div> <br>
				<div id="meta-3" class="widget widgetFooter widget_meta"><a href="especiais.html" title="Link para Especiais"><h4 class="widgettitle">Especiais</h4></a>					
				</div> 	<br>			
			</div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              	<div id="recent-posts-3" class="widget widgetFooter widget_recent_entries"><h4 class="widgettitle">Formas de Pagamento</h4>	
					<div class="form-inline">				
						<div class="input-group">							
							<img src="imagens/icones/pagamento.png" alt="Formas de Pagamento" >						
						</div>
						
				</div>
				</div>           
			</div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
				<div id="meta-4" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Certificados de Segurança</h4>		
					<div class="form-inline">				
						<div class="input-group">							
							<img src="imagens/icones/certificados.png" alt="Cerificados de Segurança">						
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
		
	
	<!----------------------------------------------- FOOTER -------------------------------------------------------------------->

	
	
</div><!-- WRAPPER -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>