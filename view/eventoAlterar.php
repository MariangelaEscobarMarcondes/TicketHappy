
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
			
			<h1>Alterar de Evento</h1>
			
				
			<form action="/evento/update" method="POST" class="form-horizontal">
			    
			    <input type="text" style="display:none" value="<?= $dado["id"] ?>" name="id" id="id" class="form-control" size="10" maxlength="10" placeholder="id">
				
				<div class="form-group">
					<label for="evento" class="col-sm-2 control-label color_label">Nome do Evento</label>
					<div class="col-sm-10">
						<input type="text" value="<?= $dado["evento"] ?>" class="form-control" id="evento" name="evento" placeholder="Nome do Evento">
					</div>
				</div>
				
				<div class="form-group">	
					<label for="categoria" class="col-sm-2 control-label color_label">Categoria</label>					
					<div class="col-sm-10">
						<select name="categoria" class="form-control">
							<option value="musical"         <?php echo ($dado["categoria"] == musical)?"selected":"";?>>Teatro - Musical</option>
							<option value="comedia"         <?php echo ($dado["categoria"] == comedia)?"selected":"";?>>Teatro - Comédia</option>
							<option value="infantil"        <?php echo ($dado["categoria"] == infantil)?"selected":"";?>>Teatro - Infantil</option>
							<option value="nacional"        <?php echo ($dado["categoria"] == nacional)?"selected":"";?>>Show - Nacional</option>
							<option value="internacional"   <?php echo ($dado["categoria"] == internacional)?"selected":"";?>>Show - Internacional</option>
							<option value="festivais"       <?php echo ($dado["categoria"] == festivais)?"selected":"";?>>Festivais</option>
							<option value="orquestraEdanca" <?php echo ($dado["categoria"] == orquestraEdanca)?"selected":"";?>>Orquestra & Dança</option>
							<option value="exposicoes"      <?php echo ($dado["categoria"] == exposicoes)?"selected":"";?>>Exposições</option>
							<option value="especiais"       <?php echo ($dado["categoria"] == especiais)?"selected":"";?>>Especiais</option>					  				 
						</select>
					</div>
				</div>
			
			
				<div class="form-group">
					<label for="valor" class="col-sm-2 control-label color_label">Valor Ingresso</label>
					<div class="col-sm-10">
						<input type="text" value="<?= $dado["valor"] ?>" class="form-control" id="valor" name="valor" placeholder="R$ 00,00">
					</div>
				</div>
				
				<div class="form-group">
					<label for="quantidade" class="col-sm-2 control-label color_label">Quantidade de Ingresso</label>
					<div class="col-sm-10">
						<input type="text" value="<?= $dado["quantidade"] ?>" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade total de ingressos">
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
			<img src="imagens/login.png" alt="" class="img_login img-responsive">			
		</div>
		<!-- ASIDE -->
		
		<div style="clear: both"></div>		
	
	</div><!-- CONTENT -->
		

	<!-- FOOTER -->
