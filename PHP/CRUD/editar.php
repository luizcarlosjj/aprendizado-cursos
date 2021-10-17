<?php
//conexão
include_once './php_action/db_connect.php';
//Header
include_once './includes/header.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Editar Cliente</h3>
		<form action="./php_action/update.php" method="POST">
        <input type="hidden" name ="id" value="<?php echo $dados['id'];?>">
        
            <div class="input-field col s12">
                <input type="text"  name ="titulodopedido" id="titulodopedido" value="<?php echo $dados['titulodopedido'];?>"> 
                <label for="titulodopedido">Título do Pedido</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="departamento" id="departamento" value="<?php echo $dados['departamento'];?>">
                <label for="departamento">departamento</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email'];?>">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone'];?>">
                <label for="telefone">telefone</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="local_" id="local_" value="<?php echo $dados['local_'];?>">
                <label for="local_">local</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="datainicial" id="datainicial" value="<?php echo $dados['datainicial'];?>">
                <label for="datainicial">datainicial</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="datafinal" id="datafinal" value="<?php echo $dados['datafinal'];?>">
                <label for="datafinal">datafinal</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="horainicial" id="horainicial" value="<?php echo $dados['horainicial'];?>">
                <label for="horainicial">horainicial</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="horafinal" id="horafinal" value="<?php echo $dados['horafinal'];?>">
                <label for="horafinal">horafinal</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="descrição" id="descrição" value="<?php echo $dados['descrição'];?>">
                <label for="descrição">descrição</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="index.php"  class="btn green">Lista de Clientes</a>
        </form>

	</div>
</div>


<?php
//Footer
include_once './includes/footer.php';
?>
		