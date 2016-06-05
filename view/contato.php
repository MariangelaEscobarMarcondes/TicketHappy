    <!-- header -->
	<!-- NAVBAR => BOOSTRAP -->
	
	<div class="div_breadcrumb">
		<!-- BREADCRUMB  --> 
		<ol class="breadcrumb">
			<li><a href="home.html">Home</a></li>
			<li class="active">Contato</li>				
		</ol>
		<!-- BREADCRUMB --> 
	</div>	
	
	<div id="content">
		<div style="clear: both"></div>
		
		<!-- MAIN -->
		<main id="largura_contato_form">
			<h1>Contato</h1>
			
			<form method="POST" action="/contato/inserir" class="form-horizontal">
			
				<div class="form-group">
					<label for="nomeCompleto" class="col-sm-2 control-label color_label">Nome Completo</label>
					<div class="col-sm-10">
					  <input type="text" value"<?= $dado["nomeCompleto"] ?>" name="nomeCompleto" id="nomeCompleto" class="form-control" size="55" maxlength="50" placeholder="Nome Completo">
					</div>		
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label color_label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com.br">
					</div>
				</div>
				 
				<div class="form-group">
					<label for="assunto" class="col-sm-2 control-label color_label">Assunto</label>
					<div class="col-sm-10">
					  <input type="text" name="assunto" id="assunto" class="form-control" size="55" maxlength="50" placeholder="Assunto">
					</div>		
				</div>
			
		  		<div class="form-group">
					<label for="mensagem" class="col-sm-2 control-label color_label">Mensagem</label>
					<div class="col-sm-10">
					  <textarea class="form-control" name="mensagem" id="mensagem" maxlength="200" rows="3"></textarea>
					</div>		
				</div>
				  
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">	
					
						<input type="submit" class="btn btn-laranja" name="Enviar"/>
						
					</div>				
					
				</div><!-- form-group -->

			</form>
			<br><br>
		
		</main>
		<!-- MAIN -->
		
		<aside id="aside_contato">
			<h2>Escritório:</h2>
			<p> Av. Bartolomeu de Gusmão Nº: 110</p>
			<p>Aparecida - Santos - SP</p>
			<p><span class="glyphicon glyphicon-earphone"></span>  (013) 3456- 1234</p>
			<p><span class="glyphicon glyphicon-envelope"></span>  tickethappy@tickethappy.com.br</p>
			
			
			<div>
			<p><span class="glyphicon glyphicon-map-marker"></span>  Localização</p>
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
			src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=FATEC+SANTOS+-+Rubens+Lara+-+Avenida+Bartolomeu+de+Gusm%C3%A3o+-+Aparecida,+Santos+-+SP&amp;aq=0&amp;oq=fatec+s&amp;sll=-23.967882,-46.328886&amp;sspn=0.183526,0.338173&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=-23.981234,-46.311543&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>
			<br /><small>
			<a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=FATEC+SANTOS+-+Rubens+Lara+-+Avenida+Bartolomeu+de+Gusm%C3%A3o+-+Aparecida,+Santos+-+SP&amp;aq=0&amp;oq=fatec+s&amp;sll=-23.967882,-46.328886&amp;sspn=0.183526,0.338173&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=-23.981234,-46.311543&amp;spn=0.006295,0.006295" 
			style="color:#FFFF99;text-align:left; padding: 2px; border-color: #fff;">Exibir mapa ampliado</a></small>
			</div>
			
		</aside>
		
		<div style="clear: both"></div>
	</div>
	
	
		<!------------------------------------------------ FOOTER --------------------------------------------------------------->
