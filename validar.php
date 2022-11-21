<?php 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 123 && $usuario == 'marcelo'){
    header('Location: painel.php');
}else{
    header('Location: usuario-invalido.php');
}
?>