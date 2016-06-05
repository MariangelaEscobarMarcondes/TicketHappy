		<!----------------------------------------- Header -------------------------------->
		<!----------------------- NAVBAR => BOOSTRAP --------------------------------------------------------->
		
		<div id="content">
		
			<div id="content_imagem_topo_principal">	
				<img src="https://ticket-happy-mariangela.c9users.io/imagens/topo/orquestra_e_danca.jpg" alt="Pesquisa" width="100%">		
			</div>	
			
			
			<!----------------------------------- MAIN ---------------------------------------------------------->
			<main>
			
				<div style="clear: both"></div>
				
				<!--------------------------- breadcrumb --------------------------------------> 
				
					<ol class="breadcrumb">
						<li><a href="/home/home">Home</a></li>
						<li class="active">Orquestra e Dança</li>				
					</ol>
					
					<p style="color:#FFFF99">Bem Vindo:  <?= $dado["nome"] ?></p>
					<p style="display:none">Id:     <?= $dado["id"] ?></p>
				
				<!------------------------------------------------------------------------------------>		
				
				<div class="row">
			
				<div class="col-sm-6 col-md-4">
				<div class="thumbnail sombra">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/4-orquestra_danca/lago_dos_cisnes/3.jpg" alt="foto do cartaz do espetáculo de ballet O Lago dos Cisnes" class="img-responsive">
				  <div class="caption">
					<h3>O Lago dos Cisneis</h3>
					<p class="texto_centralizado">Centro Deborah Colker</p>
					<p class="texto_centralizado">Rio de Janeiro RJ</p>
					<p class="texto_centralizado">Ballet</p>
					<p>
						<a href="compra_lago.html" class="btn btn-laranja" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comprar</a> 
						<a href="lago_dos_cisnes.html" class="btn btn-saiba-mais" role="button"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Saiba +</a>
					</p>
				  </div>
				</div>
			  </div>
				
			  <div class="col-sm-6 col-md-4 ">
				<div class="thumbnail sombra">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/4-orquestra_danca/ballet_boushoi_gisele/2.jpg" alt="foto do cartaz  do espetáculo de ballet Giselle" class="img-responsive">
				  <div class="caption">
					<h3>Giselle</h3>
					<p class="texto_centralizado">Teatro municipal de São Paulo</p>
					<p class="texto_centralizado">São Paulo -SP</p>	
					<p class="texto_centralizado">Ballet</p>						
					<p>
						<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
						<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
					</p>
				  </div>
				</div>
			  </div>			  
			  
			   <div class="col-sm-6 col-md-4">
				<div class="thumbnail sombra">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/4-orquestra_danca/quebra_nozes/1.jpg" alt="foto do cartaz do espetáculo de ballet O Quebra Nozes" class="img-responsive">
				  <div class="caption">
					<h3>O Quebra Nozes</h3>
					<p class="texto_centralizado">Teatro UMC</p>
					<p class="texto_centralizado">São Paulo -SP</p>	
					<p class="texto_centralizado">Ballet</p>
					<p>
						<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
						<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
					</p>
				  </div>
				</div>
			  </div>			  
			  
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail sombra">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/4-orquestra_danca/2.jpg" alt="foto do cartaz do espetáculo da Orquestra Sinfônica de Brasília" class="img-responsive">
				  <div class="caption">
					<h3>Orquestra Sinfônica de Brasília</h3>
					<p class="texto_centralizado">Centro Cultural Júlio Prestes</p>
					<p class="texto_centralizado">São Paulo</p>					
					<p>
						<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
						<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
					</p>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail sombra">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/4-orquestra_danca/1.jpg" alt="foto do cartaz do espetáculo da OSESP" class="img-responsive">
				  <div class="caption">
					<h3>Orquestra Sinfônica do Estado de São Paulo</h3>
					<p class="texto_centralizado">Theatro Municipal de São Paulo</p>
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
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/4-orquestra_danca/3.jpg" alt="foto do cartaz do espetáculo da Orquestra Sinfônica da UNICAMP" class="img-responsive">
				  <div class="caption">
					<h3>Orquestra Sinfônica da UNICAMP</h3>
					<p class="texto_centralizado">Teatro Municipal do Rio de Janeiro</p>
					<p class="texto_centralizado">Rio de Janeiro -RJ</p>
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
			  
			</div><!-- ROW -->
				
			</main>
			<!------------------------ MAIN -------------------------------------->
			
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
		
		</div><!-- CONTENT -->
		
		<!----------------------------------------------- FOOTER -------------------------------------------------------------------->
