<?php
//buscar o id 
$id = $_GET["id"];
//instrução de apagar no banco de dados
$sql = "delete from produto where idproduto =".$id;
//chamar a conexão
include_once 'conexao.php';

if(mysqli_query($con,$sql)){
    // mostrar que o produto foi excluído com sucesso
    $msg = "Produto Excluido com Sucesso!";
}else{
   //mostrar que deu erro ao excluir
    $msg = "Erro ao Excluir....";
}
mysqli_close($con);
echo"<script>
alert('".$msg."');
location.href='consulta_adm.php';

</script>"; 

?>