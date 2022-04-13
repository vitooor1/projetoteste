<?php
session_start();

// resgate de dados do formulário de cadastro
$nome = $_POST["nome"];
$login= $_POST["email"];
$senha = md5($_POST["senha"]); // "md5" faz com que a senha fique criptografada no banco de dados
$perfil = $_POST["perfil"];

// abrir a conexão com o banco
include_once 'conexao.php';

// montar a instrução para ir a o banco
$sql = "insert into usuarios values(NULL,'".$nome."','".$login."','".$senha."','".$perfil."')";

$result = mysqli_query($con,$sql);

if($result){
    //echo"Gravado com Sucesso!";
    $msg = "Gravado com sucesso!";
} else {
    //echo"Erro ao Gravar!";
    $msg = "Erro ao Gravar!";
}
// 5 fechar conexão com o banco
mysqli_close($con);
echo"<script> alert('".$msg."');
location.href='index.php';

</script>";
?>