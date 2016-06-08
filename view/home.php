
	<!----------------------------------------- Header -------------------------------->	
		<div id="content">
			
			<!-- CAROUSEL => BOOSTRAP -->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
			  <!-- Indicators = bolinhas-->
			 
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>
			  </ol>
			  

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			  
				<div class="item active">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/carousel/1-coldplay.jpg" alt="...">
				  <div class="carousel-caption">					
				  </div>
				</div>
				
				<div class="item">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/carousel/5-La_Nouba.jpg" alt="...">
				  <div class="carousel-caption"> 						
				  </div>
				</div>
				
				<div class="item">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/carousel/2-Rei_Leao.jpg" alt="...">
				  <div class="carousel-caption"> 					
				  </div>
				</div>
				
				<div class="item">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/carousel/4-mudanca_de_habito.jpg" alt="...">
				  <div class="carousel-caption"> 					
				  </div>
				</div>
				
				<div class="item">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/carousel/6-O_teatro_magico.jpg" alt="...">
				  <div class="carousel-caption"> 					
				  </div>
				</div>
				
				<div class="item">
				  <img src="https://ticket-happy-mariangela.c9users.io/imagens/carousel/3-Bolshoi.jpg" alt="...">
				  <div class="carousel-caption"> 					
				  </div>
				</div>
				
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			<!-- CAROUSEL => BOOSTRAP -->
			
			<!-- MAIN -->
			<main>
			
				<div style="clear: both"></div>
				
				<!-- breadcrumb --> 
				<ol class="breadcrumb">
					<li class="active">Home</li>				
				</ol>
					<p style="color:#FFFF99">Bem Vindo:  <?= $dado["nome"] ?></p>
					<p style="display:none">Id:     <?= $dado["id"] ?></p>
				<!-- breadcrumb -->		
				
				<div class="row">
					  <div class="col-sm-6 col-md-4">
						<div class="thumbnail sombra">
						  <img src="https://ticket-happy-mariangela.c9users.io/imagens/2-shows/Nacional/4.jpg" alt="foto do cartaz do espetáculo O Teatro Mágico" class="img-responsive">
						  <div class="caption">
							<h3>O Teatro Mágico</h3>
							<p class="texto_centralizado">Centro Cultural Banco do Brasil</p>
							<p class="texto_centralizado">Rio de Janeiro – RJ</p>	
							<p class="texto_centralizado">Show Nacional</p>	
							<p>
								<a href="/compra/compraTeatroMagico" class="btn btn-laranja" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comprar</a>
								<a href="/home/teatroMagico" class="btn btn-saiba-mais" role="button"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Saiba +</a>
							</p>
						  </div>
						</div>
					  </div>					
				  
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail sombra">
						  <img src="https://ticket-happy-mariangela.c9users.io/imagens/4-orquestra_danca/lago_dos_cisnes/3.jpg" alt="foto do cartaz do espetáculo de ballet O Lago dos Cisnes" class="img-responsive">
						  <div class="caption">
							<h3>O Lago dos Cisnes</h3>
							<p class="texto_centralizado">Centro Deborah Colker</p>
							<p class="texto_centralizado">Rio de Janeiro RJ</p>		
							<p class="texto_centralizado">Ballet</p>								
							<p>
								<a href="compra_lago.html" class="btn btn-laranja" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comprar</a> 
								<a href="/home/ladoDosCisnes" class="btn btn-saiba-mais" role="button"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Saiba +</a>
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
							<p class="texto_centralizado">Show Internacional</p>	
							<p>								
								<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
								<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
							</p>
						  </div>
						</div>
					</div>
					  
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail sombra">
						  <img src="https://ticket-happy-mariangela.c9users.io/imagens/6-especiais/4.jpg" alt="foto do cartaz do Blue Man Group" class="img-responsive">
						  <div class="caption">
							<h3>Blue Man Group</h3>
							<p class="texto_centralizado">Teatro Polytheama</p>
							<p class="texto_centralizado">Jundiai - SP</p>	
							<p class="texto_centralizado">Especiais</p>	
							<p>
								<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
								<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
							</p>
						  </div>
						</div>
					</div>
				  
					<div class="col-sm-6 col-md-4 ">
						<div class="thumbnail sombra">
						  <img src="https://ticket-happy-mariangela.c9users.io/imagens/5-exposicoes/Castelo/1.jpg" alt="foto do cartaz da exposição do Castelo Rá-Tim-Bum" class="img-responsive">
						  <div class="caption">
							<h3>Castelo Rá-tim-bum</h3>
							<p class="texto_centralizado">MIS</p>
							<p class="texto_centralizado">São Paulo -SP</p>	
							<p class="texto_centralizado">Exposições</p>	
							<p>								
								<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-shopping-cart"></span>  Comprar</button>
								<button type="button" class="btn btn-saiba-mais" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span>  Saiba +</button>
							</p>
						  </div>
						</div>
					</div>					
					
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail sombra">
						  <img src="https://ticket-happy-mariangela.c9users.io/imagens/1-teatro/Infantil/6.jpg" alt="foto do cartaz da peça Shrek o musical" class="img-responsive">
						  <div class="caption">
							<h3>Shrek - O Musical</h3>
							<p class="texto_centralizado">Teatro Sesiminas</p>
							<p class="texto_centralizado">Belo Horizonte - MG</p>
							<p class="texto_centralizado">Teatro Infantil</p>	
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
			<!-- MAIN -->
			
			<!-- ASIDE -->
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
			<!-- ASIDE -->
			
			<div style="clear: both"></div>
		
		</div><!-- CONTENT -->

<!--------------------------------------- FOOTER ----------------------------------------------------->
<!-- Mari: eu criei um arquivo footer.php para salvar o footer e nao precisar fica em todas as paginas-->
<!-- assim fica mais facil fazer a manutencao, tentei fazer como o menu mas baguncou tudo -->