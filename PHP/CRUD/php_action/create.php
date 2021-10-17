<?php
session_start();
include_once './28-crud/php_action/db_connect.php';
//conexão
//Header
include_once './includes/header.php';

//conexão
include_once 'includes/menssage.php';
include_once '../php_action/db_connect.php';
include_once '../php_action/create.php ';


if(isset($_POST['btn-cadastrar'])):
    $titulo = mysqli_escape_string($connect, $_POST['titulodopedido']);
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


    $sql = "INSERT INTO clientes (titulodopedido, nome, departamento, email, telefone, local_, datainicial, datafinal, horainicial, horafinal, descrição ) VALUES ('$titulo', '$nome', '$departamento', '$email', '$telefone','$local_','$datainicial','$datafinal','$horainicial','$horafinal', '$descrição')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('Location: .../index.php');
    endif;
endif;