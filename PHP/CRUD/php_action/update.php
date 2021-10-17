<?php
//sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);
    $titulodopedido = mysqli_escape_string($connect, $_POST['titulodopedido']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $departamento = mysqli_escape_string($connect, $_POST['departamento']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $local_ = mysqli_escape_string($connect, $_POST['local_']);
    $datainicial = mysqli_escape_string($connect, $_POST['datainicial']);
    $datafinal = mysqli_escape_string($connect, $_POST['datafinal']);
    $horainicial = mysqli_escape_string($connect, $_POST['horainicial']);
    $horafinal = mysqli_escape_string($connect, $_POST['horafinal']);
    $descrição = mysqli_escape_string($connect, $_POST['descrição']);

    $sql = "UPDATE clientes SET titulodopedido='$titulodopedido' nome = '$nome' ,  departamento = '$departamento', email = '$email', telefone = '$telefone', local_ = '$local_', datainicial = '$datainicial', datafinal = '$datafinal', horainicial = '$horainicial',  horafinal = '$horafinal',  descrição = '$descrição'  WHERE id = '$id' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: .../index.php');
    endif;
endif;