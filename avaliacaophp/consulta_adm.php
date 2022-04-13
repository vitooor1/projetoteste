<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Cervejaria</title>
</head>
<body>
    
</body>
</html>
<body>
<?php include_once 'topo.php' ?>

<style>

  body{
        margin:auto;
        display:table;
        background:SkyBlue;
        text-align:center;
    }
    #container{
        margin:auto;
        width:960px;
        float:left;
    }
    #topo{
        width:960px;
        float:left;
        height:20px;
        padding:10px;

    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
tr {
    background-color:LightBlue;
}
</style>
<br><br><br><br>
<?php

echo"<h1>Consultar Cerveja</h1>";

include_once 'conexao.php';

$sql = "select * from produto ORDER BY nome ASC";

$rs = mysqli_query($con,$sql);

?>
  <br>
   <table class="table" width="100%" border="1">
                <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>País</th>
                    <th>Nota</th>
                    <th>Comentário</th>
                    <th>Editar</th>
                    <th>Exclusão</th>
                </tr>
                </thead>       
<?php        
while($linha = mysqli_fetch_array($rs)){
?>

<tr>
    <td><?php echo $linha["nome"]; ?></td>
    <td><?php echo $linha["tipo"]; ?></td>
    <td><?php echo $linha["pais"]; ?></td>
    <td><?php echo $linha["nota"]; ?></td>
    <td><?php echo $linha["comentario"]; ?></td>
    <td>
    <a href="editar.php?id=<?php echo base64_encode($linha["idproduto"]); ?>">editar
    </a>
    </td>

    <td>
        <a href="#" onclick="excluir(<?php echo($linha["idproduto"]); ?>)">excluir
    </a>
    </td>
</tr>
<?php          } ?>
<?php 

mysqli_close($con); ?>
</table>
</style>
    <script>
    function excluir(id){
        if(confirm('deseja realmente excluir este produto?')){;
        location.href='excluir.php?id='+id;
    }
    }
    </script>
    