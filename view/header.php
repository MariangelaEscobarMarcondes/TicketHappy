<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ticket Happy - Home</title>
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
					<img alt="Brand" src="imagens/logo/2.png" class="img_logo">
				  </a>
				</div>

				<!-- MENU -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav teste2">
						<li><a href="/home/home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-triangle-bottom"></span> Teatro</a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="/home/musical">Musical</a></li>
							<li><a href="/home/comedia">Comédia</a></li>
							<li><a href="/home/infantil">Infantil</a></li>										
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-triangle-bottom"></span> Shows</a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="/home/nacional">Nacional</a></li>
							<li><a href="/home/internacional">Internacional</a></li>
						  </ul>
						</li>
						
						<li><a href="/home/festivais"><span class="glyphicon glyphicon-triangle-right"></span>Festivais</a></li>
						<li><a href="/home/orquestraEdanca"><span class="glyphicon glyphicon-triangle-right"></span>Orquestra & Dança</a></li>
						<li><a href="/home/exposicoes"><span class="glyphicon glyphicon-triangle-right"></span>Exposições</a></li>
						<li><a href="/home/especiais"><span class="glyphicon glyphicon-triangle-right"></span>Especiais</a></li>
						
					</ul>
				  
				   <!-- LOGIN -->	
				  <ul class="nav navbar-nav navbar-right teste2">
					<li><a href="/login/formulario"><span class="glyphicon glyphicon-user"></span> Login</a></li>					
				  </ul>
				  
				  <!-- FORM => SEARCH -->
				  <form class="navbar-form navbar-right teste" role="search">
					<div class="form-group">				  
					  <input type="text" class="form-control cor_search" placeholder="Digite...">
					</div>				
					<button type="submit" class="btn btn-search"><span class="glyphicon glyphicon-search"></span></button>
				  </form>
				  
				 
				</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<!-- NAVBAR => BOOSTRAP -->