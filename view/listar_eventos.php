
	<!-- NAVBAR => BOOSTRAP -->
	
	<div class="div_breadcrumb">
		<!-- BREADCRUMB  --> 
		<ol class="breadcrumb">
			<li><a href="/home/home">Home</a></li>
			<li class="active">Listar Evento</li>				
		</ol>
		<!-- BREADCRUMB --> 
	</div>	
	
	<div id="content">
		<div style="clear: both"></div>
		
		<!-- MAIN -->
		
		<!--<main id="largura_contato_form">-->
		<main id="largura_compra">
	
			<h1>Lista de Eventos</h1>
			
			<div class="panel panel-default">
				<table class="table">
					<thead>
						<tr>
						<th style="width:05%">id</th> 
	  					<th style="width:20%">Evento</th>
	  					<th style="width:25%">Categoria</th>
	  					<th style="width:05%">Alterar</th>
	  					<th style="width:05%">Excluir</th>
	  					</tr>
	  				</thead>
	  				<tbody>
        			 <?php
                		foreach($dado as $evento){
                    		 echo "<tr>".
                    				 "<td>" . $evento->getId()        ."</td>".
                    				 "<td>" . $evento->getEvento()    ."</td>".
                    				 "<td>" . $evento->getCategoria() ."</td>".
                    				 
                    				 "<td>" . "<a href='/evento/alterar/". $evento->getId() ."'>Alterar</a>"   ."</td>".
                    				 "<td>" . "<a href='/evento/deletar/". $evento->getId() ."'>Excluir</a>"   ."</td>".
                    		      "</tr>";
                		 }
           			 ?>
           			</tbody>
       			 </table>
			
			</div>
			
			<br><br>
		
			
		</main>
		<!-- MAIN -->
		

		
		<div style="clear: both"></div>
	</div>
	
	
		<!------------------------------------------------ FOOTER --------------------------------------------------------------->
