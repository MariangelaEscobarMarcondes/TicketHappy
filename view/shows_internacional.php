
		<!----------------------------------------- Header -------------------------------->
		<!----------------------- NAVBAR => BOOSTRAP --------------------------------------------------------->
		
	<div id="content">
	
		<div id="content_imagem_topo_principal">	
			<img src="https://ticket-happy-mariangela.c9users.io/imagens/topo/Internacional.jpg" alt="Pesquisa" width="100%">		
		</div>
			
	<main>
	<div style="clear: both"></div>
	
		<!--------------------------- breadcrumb --------------------------------------> 
		
			<ol class="breadcrumb">
				<li><a href="/home/home">Home</a></li>
				<li><a href="#">Shows</a></li>
				<li class="active">Internacional</li>		
			</ol>
			
			<p style="color:#FFFF99">Bem Vindo:  <?= $dado["nome"] ?></p>
			<p style="display:none">Id:     <?= $dado["id"] ?></p>
		
		<!------------------------------------------------------------------------------------>		
		
		<div class="row">		 
		  
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail sombra">
			  <img src="https://ticket-happy-mariangela.c9users.io/imagens/2-shows/internacional/2.jpg" alt="foto do cartaz do show Coldplay" class="img-responsive">
			  <div class="caption">
				<h3>Coldplay</h3>
				<p class="texto_centralizado">Estádio do Morumbi</p>
				<p class="texto_centralizado">São Paulo - SP</p>				
				<p>
					<a href="compra_coldplay.html" class="btn btn-laranja" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comprar</a> 
					<a href="/home/coldplay" class="btn btn-saiba-mais" role="button"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Saiba +</a>
				</p>
			  </div>
			</div>
		  </div>
		  
		   <div class="col-sm-6 col-md-4">
			<div class="thumbnail sombra">
			  <img src="https://ticket-happy-mariangela.c9users.io/imagens/2-shows/internacional/1.jpg" alt="foto do cartaz do show Elaiza" class="img-responsive">
			  <div class="caption">
				<h3>Elaiza</h3>
				<p class="texto_centralizado">Palácio do Anhembi</p>
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
			  <img src="https://ticket-happy-mariangela.c9users.io/imagens/2-shows/internacional/3.jpg" alt="foto do cartaz do show Julio Iglesias" class="img-responsive">
			  <div class="caption">
				<h3>Julio Iglesias</h3>
				<p class="texto_centralizado">Teatro Villa Lobos</p>
				<p class="texto_centralizado">Rio de Janeiro – RJ</p>				
				<p>
					<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
					<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
				</p>
			  </div>
			</div>
		  </div>
		  
		  
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail sombra">
			  <img src="https://ticket-happy-mariangela.c9users.io/imagens/2-shows/internacional/6.jpg" alt="foto do cartaz do show Black Eyed Peas" class="img-responsive">
			  <div class="caption">
				<h3>Black Eyed Peas</h3>
				<p class="texto_centralizado">Marina Park</p>
				<p class="texto_centralizado">Fortaleza - CE</p>	
				<p>
					<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
					<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
				</p>
			  </div>
			</div>
		  </div>
		  
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail sombra">
			  <img src="https://ticket-happy-mariangela.c9users.io/imagens/2-shows/internacional/5.jpg" alt="foto do cartaz do show Ed Sheeran" class="img-responsive">
			  <div class="caption">
				<h3>Ed Sheeran</h3>
				<p class="texto_centralizado">Espaço das Américas</p>
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
			  <img src="https://ticket-happy-mariangela.c9users.io/imagens/2-shows/internacional/4.jpg" alt="foto do cartaz do show Maroon 5" class="img-responsive">
			  <div class="caption">
				<h3>Maroom 5</h3>
				<p class="texto_centralizado">Expotrade Arena</p>
				<p class="texto_centralizado">Curitiba - PR</p>
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
							<img src="https://ticket-happy-mariangela.c9users.io/imagens/pagina_em_construcao.png" alt="" class="img-responsive">
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-laranja" data-dismiss="modal">Close</button>					
						  </div>
						</div>
					  </div>
					</div>
		  
		</div>
		
		
		
		
			
	</main>
	
	<!------------------------ ASIDE -------------------------------------->
		<aside>
				<h3>Destaques</h3>				

				<div class="hoverzoom">				
					<img src="https://ticket-happy-mariangela.c9users.io/imagens/aside/la_nouba.jpg" class="img-responsive" alt="">
					<div class="retina">						
						<a href="/home/laNouba">Saiba mais</a>
					</div>
				</div><br>
				
				<div class="hoverzoom">
					<img src="https://ticket-happy-mariangela.c9users.io/imagens/aside/rei-leao.jpg" class="img-responsive" alt="">
					<div class="retina">						
						<a href="/home/oReiLeao">Saiba mais</a>
					</div>
				</div><br>
				
				<div class="hoverzoom">
					<img src="https://ticket-happy-mariangela.c9users.io/imagens/aside/coldplay.jpg"  class="img-responsive" alt="">
					<div class="retina">						
						<a href="/home/coldplay">Saiba mais</a>
					</div>
				</div><br>						
								
			</aside>
	<!------------------------ ASIDE -------------------------------------->
	
	<div style="clear: both"></div>
	
	</div>
	
	<!----------------------------------------------- FOOTER -------------------------------------------------------------------->
