<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ticket Happy - Listar Contato</title>
	<link rel="shortcut icon" href="imagens/logo/favicon.ico" >
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<style>
    	<?php include 'static/css/principal.css'; ?>
	</style>
	
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
			<li class="active">Listar Contato</li>				
		</ol>
		<!-- BREADCRUMB --> 
	</div>	
	
	<div id="content">
		<div style="clear: both"></div>
		
		<!-- MAIN -->
		
		<!--<main id="largura_contato_form">-->
		<main id="largura_compra">
	
			<h1>Lista de Contatos</h1>
			
			<div class="panel panel-default">
				<table class="table">
					<thead>
						<tr>
						<th style="width:05%">id</th> 
	  					<th style="width:20%">Nome Completo</th>
	  					<th style="width:25%">Email</th>
	  					<th style="width:25%">Assunto</th>
	  					<th style="width:05%">Alterar</th>
	  					<th style="width:05%">Excluir</th>
	  					</tr>
	  				</thead>
	  				<tbody>
        			 <?php
                		foreach($dado as $contato){
                    		 echo "<tr>".
                    				 "<td>" . $contato->getId()           ."</td>".
                    				 "<td>" . $contato->getNomeCompleto() ."</td>".
                    				 "<td>" . $contato->getEmail()        ."</td>".
                    				 "<td>" . $contato->getAssunto()      ."</td>".
                    				 
                    				 "<td>" . "<a href='/contato/alterar/". $contato->getId() ."'>Alterar</a>"   ."</td>".
                    				 "<td>" . "<a href='/contato/deletar/". $contato->getId() ."'>Excluir</a>"   ."</td>".
                    		      "</tr>";
                		 }
           			 ?>
           			</tbody>
       			 </table>
			
			</div>
			
			<br><br>
			
			<div id="centro">
				<nav>
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			
		</main>
		<!-- MAIN -->
		

		
		<div style="clear: both"></div>
	</div>
	
	
		<!------------------------------------------------ FOOTER --------------------------------------------------------------->
		
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
    
	<!---------------------------------------------- FOOTER ------------------------------------------------------------------------>
		

	
	
</div><!-- WRAPPER -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
         <?php include 'static/js/bootstrap.min.js'; ?>
    </script>
    
</body>
</html>