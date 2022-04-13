<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cervejaria</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/validacao.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
</style>
</head>
<body>
    
</body>
</html>

<?php

// resgate de dados da URL
$id = base64_decode($_GET["id"]);

// montar a instrução para selecionar o registro na base de dados
$sql = "select * from produto where idproduto=".$id;

// abrir a conexão com o banco
include_once 'conexao.php';

//executar
$rs =mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    $reg = mysqli_fetch_array($rs);
}
?>
<br><br><br><br>
<body class="text-center">
<h3>Atualizar Cerveja</h3>
<br><br>

<form action="atualizar.php" method="post">
Nome:<br>
<input type="text" value="<?php echo $reg["nome"]; ?>" name="nome" id="nome" class="form-control">
<br>
Tipo:<br>
<input type="text" value="<?php echo $reg["tipo"]; ?>" name="tipo" id="tipo" class="form-control">
<br>
País:<br>
<input type="text" value="<?php echo $reg["pais"]; ?>" name="pais" id="pais" class="form-control">
<br>
Nota:<br>
<select name="nota" id="nota" class="form-control">
    <option value="<?php echo $reg["nota"]; ?>"><?php echo $reg["nota"]; ?></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<br>
Comentario:<br>
<textarea name="comentario" id="comentario"  class="form-control" value="<?php echo $reg["comentario"]; ?>"><?php echo $reg["comentario"]; ?></textarea>
<br>
<input type="hidden" name="id" value="<?php echo $reg["idproduto"]; ?>">
<input type="submit" value="Atualizar" class="btn btn-primary">
<input type="reset" value="Limpar" class="btn btn-danger">
</form>
<?php include_once 'rodape.php'; ?>
</body>