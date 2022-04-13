<?php
include_once 'conexao.php';
//incluir
$nome = $_POST["nome"];
$login= $_POST["login"];
$senha= md5($_POST["senha"]);
$perfil = $_POST["perfil"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$ibge = $_POST["ibge"];
//gravar
$sql ="INSERT INTO usuario VALUES (null,'$nome','$login','$senha','$perfil','$cep','$rua','$bairro','$cidade','$uf',$ibge)";
$result = mysqli_query($con,$sql);
if($result){$msg ="Gravado com sucesso!";
}else{
$msg = "Erro ao Gravar";
}
mysqli_close($con);
echo"<script>
alert('".$msg."');
location.href='index.php';
</script>";
include_once 'rodape.php';
?>
