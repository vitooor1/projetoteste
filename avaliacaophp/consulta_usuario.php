<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
</style>
<br><br><br><br>

<?php

echo"<h1 class='text-center'>Consultar Cerveja</h1><br>";

include_once 'conexao.php';

$sql = "select * from produto ORDER BY nome ASC";

$rs = mysqli_query($con,$sql);

?>

   
    <table class="table" width="100%" border="1">
    <thead class="table-dark">
<tr>
    <th>Nome</th>
    <th>Tipo</th>
    <th>País</th>
    <th>Nota</th>
    <th>Comentário</th>

<tr>               
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
</tr>
<?php          } ?>
<?php 

mysqli_close($con); ?>
</table>
</style>
<body class="text-center">
 <?php include_once 'rodape.php'; ?>
        </body>
        </body>