
	<!----------------------- NAVBAR => BOOSTRAP --------------------------------------------------------->
	
	<!--------------------------- BREADCRUMB  --------------------------------------> 
			<div class="div_breadcrumb">		
				<ol class="breadcrumb">
					<li><a href="/home/home">Home</a></li>
					<li><a href="#">Shows</a></li>
					<li><a href="/home/nacional">Nacional</a></li>
					<li class="active">O Teatro Mágico</li>				
				</ol>		
			</div>
			
		<!--------------------------- BREADCRUMB -------------------------------------->
				
	<div id="content_imagem_fundo">
	
		<img class="img_fundo" src="https://ticket-happy-mariangela.c9users.io/imagens/2-shows/Nacional/o_teatro_magico/OTM.jpg" alt="Imagem de fundo da pagina O Rei Leão" width="100%">	
		
		<div id="main_content">					
		
			<div class="div_transparente">
				<p style="color:#000">Bem Vindo:  <?= $dado["nome"] ?></p>
				<p style="display:none">Id:     <?= $dado["id"] ?></p>
				
				<h2>O TEATRO MÁGICO</h2>
				
				<p class="texto_justificado">
				O Teatro Mágico (TM) é um grupo musical brasileiro formado em 2003 na cidade de Osasco,
				São Paulo, criado por Fernando Anitelli. OTM é um projeto que reúne elementos do circo, 
				do teatro, da poesia, da música, da literatura, da política e do cancioneiro popular 
				tornando possível a junção de diferentes segmentos artísticos numa mesma apresentação.
				A banda conseguiu um feito de reunir gerações familiares em torno de seus shows.</p> 
				
				<p class="texto_justificado">O Teatro Mágico2 foi criado por Fernando Anitelli, ator, músico e 
				compositor das canções do show. A equipe que o acompanha, foi formada em dezembro de 2003 por 
				amigos e artistas que acreditaram no projeto. Trabalha sem apoio de gravadoras ou campanhas 
				midiáticas. Foram os recordistas em público na Virada Cultural da Prefeitura de São Paulo nos anos 2007 e 2008</p>
				
				<p class="texto_justificado">Possui cinco álbuns de estúdio: Entrada para Raros, 
				O Segundo Ato, A Sociedade do Espetáculo, Recombinando Atos e, lançado em 2014, Grão 
				do Corpo. Além do DVD em Comemoração pelos 10 anos da banda</p>
				
				<table class="table table-condensed">
					<thead>
						<tr>
							<th>Músicos</th>							
						</tr>
					</thead>
					<tbody>							
						<tr>
						  <td class="">Fernando Anitelli ( Voz e Violão)</td>						  					  
						</tr>
						<tr>
						  <td class="">Ricardo Braga ( Percussão)</td>						 				  
						</tr>
						<tr>
						  <td class="">Rafael dos Santos ( Bateria)</td>						 				  
						</tr>
						<tr>
						  <td class="">Guilherme Ribeiro ( Teclados)</td>						  				  
						</tr>
						<tr>
						  <td class="">Sergio Carvalho ( Baixo)</td>						  				  
						</tr>
						<tr>
						  <td class="">Daniel Santiago ( Guitarra)</td>						  				  
						</tr>
					</tbody>
				</table>
			
				<h2>INFORMAÇÕES</h2>
				
				<p><strong><span class="glyphicon glyphicon-calendar"></span>  Data(s):</strong> 25 de Julho de 2015</p>
				<p><strong><span class="glyphicon glyphicon-time"></span>  Horário(s):</strong> 22:00HS</p>
				<p><strong><span class="glyphicon glyphicon-piggy-bank"></span>  Preço(s):</strong> Inteira	R$ 300,00 | Meia Entrada R$ 150,00</p>
				<p><strong><span class="glyphicon glyphicon-map-marker"></span>  Onde:</strong> Centro Cultural Banco do Brasil - Rio de Janeiro – RJ</p>
				
			</div>
			
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-laranja" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-facetime-video"></span>  Video</button>
			<a href="/compra/compraTeatroMagico" class="btn btn-laranja" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comprar</a>
			
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
	
	</div>
	
	
	
	
	
	
	<!----------------------------------------------- FOOTER -------------------------------------------------------------------->
