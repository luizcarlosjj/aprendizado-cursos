<?php
session_start();
//Header
include_once './includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="bold" style="text-align: center;">Novo Pedido</h3>
		<form action="./php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="titulodopedido" id="titulodopedido">
                <label for="titulodopedido">Título do Pedido</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="departamento" id="departamento">
                <label for="departamento">Departamento</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="local_" id="local_">
                <label for="local_">Local</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="datainicial" id="datainicial">
                <label for="datainicial">Data inicial</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="datafinal" id="datafinal">
                <label for="datafinal">Data final</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="horainicial" id="horainicial">
                <label for="horainicial">Hora inicial</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="horafinal" id="horafinal">
                <label for="horafinal">Hora final</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="descrição" id="descrição">
                <label for="descrição">Descrição</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="index.php"  class="btn green">Lista de Clientes</a>
        </form>

	</div>
</div>


<?php
//Footer
include_once './includes/footer.php';
?>
		