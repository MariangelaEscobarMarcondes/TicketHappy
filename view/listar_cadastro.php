
	<!-- NAVBAR => BOOSTRAP -->
	
	<div class="div_breadcrumb">
		<!-- BREADCRUMB  --> 
		<ol class="breadcrumb">
			<li><a href="/home/home">Home</a></li>
			<li class="active">Listar Cadastro</li>				
		</ol>
		<!-- BREADCRUMB --> 
	</div>	
	
	<div id="content">
		<div style="clear: both"></div>
		
		<!-- MAIN -->
		
		<!--<main id="largura_contato_form">-->
		<main id="largura_compra">
	
			<h1>Lista de Cadastro</h1>
			
			<div class="panel panel-default">
				<table class="table">
					<thead>
						<tr>
						<th style="width:05%">id</th> 
	  					<th style="width:25%">Nome</th>
	  					<th style="width:30%">Email</th>
	  					<th style="width:05%">Alterar</th>
	  					<th style="width:05%">Excluir</th>
	  					</tr>
	  				</thead>
	  				<tbody>
        			 <?php
                		foreach($dado as $cadastro){
                    		 echo "<tr>".
                    				 "<td>" . $cadastro->getId()      ."</td>".
                    				 "<td>" . $cadastro->getNome()    ."</td>".
                    				 "<td>" . $cadastro->getEmail()   ."</td>".
                    				 
                    				 "<td>" . "<a href='/cadastro/alterar/". $cadastro->getId() ."'>Alterar</a>"   ."</td>".
                    				 "<td>" . "<a href='/cadastro/deletar/". $cadastro->getId() ."'>Excluir</a>"   ."</td>".
                    		      "</tr>";
                		 }
           			 ?>
           			</tbody>
       			 </table>
			
			</div>
			
			<br><br>
			
			<div id="centro">
				<nav>
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			
		</main>
		<!-- MAIN -->
		

		
		<div style="clear: both"></div>
	</div>
	
	
		<!------------------------------------------------ FOOTER --------------------------------------------------------------->
