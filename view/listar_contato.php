
	<!-- NAVBAR => BOOSTRAP -->
	
	<div class="div_breadcrumb">
		<!-- BREADCRUMB  --> 
		<ol class="breadcrumb">
			<li><a href="/home/home">Home</a></li>
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
			

			
		</main>
		<!-- MAIN -->
		

		
		<div style="clear: both"></div>
	</div>
	
	
		<!------------------------------------------------ FOOTER --------------------------------------------------------------->
