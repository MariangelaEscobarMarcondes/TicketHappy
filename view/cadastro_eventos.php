
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
					<label for="evento" class="col-sm-2 control-label color_label">Nome do Evento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="evento" name="evento" placeholder="Nome do Evento">
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
					<label for="valor" class="col-sm-2 control-label color_label">Valor Ingresso</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="valor" name="valor" placeholder="R$ 00,00">
					</div>
				</div>
				
				<div class="form-group">
					<label for="quantidade" class="col-sm-2 control-label color_label">Quantidade de Ingresso</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade total de ingressos">
					</div>
				</div>
				
			
				<div class="form-group">
					
					<div class="col-sm-offset-2 col-sm-10">			
					
						 <input type="submit" id="enviar" class="btn btn-laranja" value="Enviar"/>
				
					</div>
				</div>
				
			</form>
			
			<br><br><br><br>
		</main>
		<!-- MAIN -->
		
		<!-- ASIDE -->
		<div id="aside_contato">
				
		</div>
		<!-- ASIDE -->
		
		<div style="clear: both"></div>		
	
	</div><!-- CONTENT -->
		

	<!-- FOOTER -->
