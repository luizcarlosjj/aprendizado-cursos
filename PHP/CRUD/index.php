<?php
// conexão
include_once './php_action/db_connect.php';
//Header
include_once './includes/header.php';
//Mensagem
include_once 'includes/menssage.php';
?>

<div class="row">
	<div class=" m9 push-m3 blue-text text-darken-2">
		<h4 class="bold" style="text-align: center">Pedidos</h3>
		<table class="striped" >
			<thead>
				<tr>
					<th>Título do Pedido:</th>
					<th>Nome:</th>
					<th>Departamento:</th>
					<th>email:</th>
					<th>Telefone:</th>
					<th>Local:</th>
					<th>Data Inicial:</th>
					<th>Data Final:</th>
					<th>Hora Inicial:</th>
					<th>Hora Final:</th>
					<th>Descrição:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM clientes";
				$resultado = mysqli_query($connect, $sql);

				if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['titulodopedido']; ?></td>	
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['departamento']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['telefone']; ?></td>
					<td><?php echo $dados['local_']; ?></td>
					<td><?php echo $dados['datainicial']; ?></td>
					<td><?php echo $dados['datafinal']; ?></td>
					<td><?php echo $dados['horainicial']; ?></td>
					<td><?php echo $dados['horafinal']; ?></td>
					<td><?php echo $dados['descrição']; ?></td>
					
					<td> <a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"> <i class="material-icons">edit</i> </a> </td>
					
					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"> <i class="material-icons">delete</i> </a> </td>

					<td> <a href="selecionar.php?id=<?php echo $dados['id']; ?>" class="btn-floating black"> <i class="fas fa-print material-icons" style:="cursor: pointer;"></i>  </a> </td>
					
					<!-- Modal Structure -->
						<div id="modal<?php echo $dados['id']; ?>" class="modal">
							<div class="modal-content">
								<h4>Opa!</h4>
								<p>Tem certeza que deseja excluir esse cliente?</p>
							</div>
							<div class="modal-footer">
								
								<form action="./php_action/delete.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
									<button type="submit" name="btn-deletar" class="btn red"> Sim quero deletar!</button>
									<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
								</form>
							
							</div>
						</div>
         
				</tr>
				<?php 
					endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

				<?php  
					endif;
				?>
			</tbody>
		</table>
		<br>
		<a href="./adicionar.php" class="btn" >Adicionar Cliente</a>
	</div>
</div>


<?php
//Footer
include_once './includes/footer.php';
?>
		