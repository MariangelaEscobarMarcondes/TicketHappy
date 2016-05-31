<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ticket Happy - Especiais</title>
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
		
		<div id="content">
		
			<div id="content_imagem_topo_principal">	
				<img src="imagens/topo/Especiais.jpg" alt="Pesquisa" width="100%">		
			</div>	
			
			
			<!----------------------------------- MAIN ---------------------------------------------------------->
			<main>
			
				<div style="clear: both"></div>
				
				<!--------------------------- breadcrumb --------------------------------------> 
				
					<ol class="breadcrumb">
						<li><a href="home.html">Home</a></li>					
						<li class="active">Especiais</li>		
					</ol>
				
				<!------------------------------------------------------------------------------------>		
				
				<div class="row">
			
			  <div class="col-sm-6 col-md-4 ">
				<div class="thumbnail sombra">
				  <img src="imagens/6-especiais/Cirque_du_soleil_LaNouba/1.jpg" alt="foto do cartaz do Cirque Du Soleil com o espetáculo La Nouba" class="img-responsive">
				  <div class="caption">
					<h3>Cirque Du soleil - La Nouba</h3>
					<p class="texto_centralizado">Ginásio Nilson Nelson</p>
					<p class="texto_centralizado">Brasilia</p>					
					<p>
						<a href="compra_la_nouba.html" class="btn btn-laranja" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comprar</a> 
						<a href="la_nouba.html" class="btn btn-saiba-mais" role="button"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Saiba +</a>
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail sombra">
				  <img src="imagens/6-especiais/holiday_on_ice/2.jpg" alt="foto do cartaz do Holiday on Ice com o espetáculo Passion" class="img-responsive">
				  <div class="caption">
					<h3>Holiday on ice</h3>
					<p class="texto_centralizado">Ginásio do Maracanã</p>
					<p class="texto_centralizado">Rio de Janeiro -RJ</p>					
					<p>
						<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
						<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
					</p>
				  </div>
				</div>
			  </div>
			  
			   <div class="col-sm-6 col-md-4">
				<div class="thumbnail sombra">
				  <img src="imagens/6-especiais/frozen/3.jpg" alt="foto do cartaz do espetáculo Disney on ice Frozen" class="img-responsive">
				  <div class="caption">
					<h3>Disney on ice Frozen</h3>
					<p class="texto_centralizado">Ginasio do Ibirapuera</p>
					<p class="texto_centralizado">São Paulo - SP</p>					
					<p>
						<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
						<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
					</p>
				  </div>
				</div>
			  </div>
			  
			  
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail sombra">
				  <img src="imagens/6-especiais/4.jpg" alt="foto do cartaz do Blue Man Group" class="img-responsive">
				  <div class="caption">
					<h3>Blue Man Group</h3>
					<p class="texto_centralizado">Teatro Polytheama</p>
					<p class="texto_centralizado">Jundiai - SP</p>					
					<p>
						<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
						<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail sombra">
				  <img src="imagens/6-especiais/5.jpg" alt="foto do cartaz do Cirque Du Soleil com o espetáculo Michael Jackson One" class="img-responsive">
				  <div class="caption">
					<h3>Michael Jackson - One</h3>
					<p class="texto_centralizado">Estação Atibaia</p>
					<p class="texto_centralizado">Atibaia -SP</p>
					<p>
						<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
						<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
					</p>
				  </div>
				</div>
			  </div>
			  
			   <div class="col-sm-6 col-md-4">
				<div class="thumbnail sombra">
				  <img src="imagens/6-especiais/6.jpg" alt="foto do cartaz da festa de peão de Barretos" class="img-responsive">
				  <div class="caption">
					<h3>Barretos</h3>
					<p class="texto_centralizado">Parque do Peão</p>
					<p class="texto_centralizado">Barretos - SP</p>
					<p>
						<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
						<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
					</p>
				  </div>
				</div>
			  </div>
			  
			  <!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-wrench"></span>  Ops...</h4>
						  </div>
						  <div class="modal-body">
							<img src="imagens/pagina_em_construcao.png" alt="" class="img-responsive">
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-laranja" data-dismiss="modal">Close</button>					
						  </div>
						</div>
					  </div>
					</div>
			  
			</div><!-- ROW -->
				
			</main>
			<!------------------------ MAIN -------------------------------------->
			
			<!------------------------ ASIDE -------------------------------------->
			<aside>
				<h3>Destaques</h3>				

				<div class="hoverzoom">
					<img src="imagens/aside/la_nouba.jpg" class="img-responsive" alt="">
					<div class="retina">						
						<a href="la_nouba.html">Saiba mais</a>
					</div>
				</div><br>
				
				<div class="hoverzoom">
					<img src="imagens/aside/rei-leao.jpg" alt="">
					<div class="retina">						
						<a href="o_rei_leao.html">Saiba mais</a>
					</div>
				</div><br>
				
				<div class="hoverzoom">
					<img src="imagens/aside/coldplay.jpg" alt="">
					<div class="retina">						
						<a href="Coldplay.html">Saiba mais</a>
					</div>
				</div><br>						
								
			</aside>
			<!------------------------ ASIDE -------------------------------------->
			
			<div style="clear: both"></div>
		
		</div><!-- CONTENT -->
		
		<!----------------------------------------------- FOOTER -------------------------------------------------------------------->
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
			<!------------ 4 ----------------->
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
	<!----------------------------------------------- FOOTER -------------------------------------------------------------------->
		
	
	</div><!-- WRAPPER -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
</body>

</html>