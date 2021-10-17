<?php
//conexão
include_once './php_action/db_connect.php';
//Header
include_once './includes/header.php';
//Select
if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3 blue-text text-darken-2">


        <div class="col s12 ">
            <div class="col s4" id="logo">
                <img class="responsive-img" src="./src/fubog_logo.jpg" width="190" height="190"> </img>
            </div>

            <div>
                <h5 class="center-align" style="margin-top: 20;"><?php echo $dados['titulodopedido']; ?></h5>
            </div>
        </div>


        <div class="input-field col s12">
            <input type="text" disabled name="titulodopedido" value="<?php echo $dados['titulodopedido']; ?>">
            <label for="titulodopedido">Título do Pedido</label>
        </div>
        <div class="input-field col s1">
            <input type="text" disabled name="id" value="<?php echo $dados['id']; ?>">
            <label for="id">id</label>
        </div>
        <div class="input-field col s11">
            <input type="text" disabled name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
            <label for="nome">Nome</label>
        </div>
        <div class="input-field col s6">
            <input type="text" disabled name="departamento" id="departamento" value="<?php echo $dados['departamento']; ?>">
            <label for="departamento">departamento</label>
        </div>
        <div class="input-field col s6">
            <input type="text" disabled name="email" id="email" value="<?php echo $dados['email']; ?>">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
            <input type="text" disabled name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
            <label for="telefone">telefone</label>
        </div>
        <div class="input-field col s6">
            <input type="text" disabled name="local_" id="local_" value="<?php echo $dados['local_']; ?>">
            <label for="local_">local</label>
        </div>
        <div class="input-field col s6">
            <input type="text" disabled name="datainicial" id="datainicial" value="<?php echo $dados['datainicial']; ?>">
            <label for="datainicial">datainicial</label>
        </div>
        <div class="input-field col s6">
            <input type="text" disabled name="datafinal" id="datafinal" value="<?php echo $dados['datafinal']; ?>">
            <label for="datafinal">datafinal</label>
        </div>
        <div class="input-field col s6">
            <input type="text" disabled name="horainicial" id="horainicial" value="<?php echo $dados['horainicial']; ?>">
            <label for="horainicial">horainicial</label>
        </div>
        <div class="input-field col s6">
            <input type="text" disabled name="horafinal" id="horafinal" value="<?php echo $dados['horafinal']; ?>">
            <label for="horafinal">horafinal</label>
        </div>
        <div class="input-field col s12">
            <input type="text" disabled name="descrição" id="descrição" value="<?php echo $dados['descrição']; ?>">
            <label for="descrição">descrição</label>
        </div>

        <div class="col s12 valign-wrapper center-align">
            <a class="btn-floating blue pulse waves-effect waves-light "> <i name="btn-imprmir" onclick="window.print()" class="fas fa-print material-icons center-align"></i> </a>
        </div>
    </div>
</div>


<?php
//Footer
include_once './includes/footer.php';
?>