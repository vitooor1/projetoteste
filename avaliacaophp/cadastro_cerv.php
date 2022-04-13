<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js/validacao.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    body{
        margin:auto;
        display:table;
        background:#87CEFA;
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
<body>

<br><br><br><br><br>
<h3>Cadastro de Cervejas</h3>
<br>
<form class="formgroup" action="cadas_cerva.php" method="post">
Nome da Cerveja:<br>
<input type="text" name="nome" id="nome" class="form-control" />
<br/>
Tipo:<br>
<input type="text" name="tipo" id="tipo" class="form-control" />
<br/>
País:<br>
<input type="text" name="pais" id="pais" class="form-control" />
<br/>
Nota:<br/>
<select name="nota" id="nota" class="form-control" >
    <option value="">Nota</option>
    <option value="nota 1">nota 1</option>
    <option value="nota 2">nota 2</option>
    <option value="nota 3">nota 3 </option>
    <option value="nota 4">nota 4</option>
    <option value="nota 5">nota 5</option>
  
</select> 

  <br/>  
  Comentario da Cerveja:<br>
<textarea name="comentario" id="comentario" class="form-control"></textarea>

<br>
 <br/>
<br/><br/>

<input type="submit" value="Cadastrar Produto" class="btn btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-warning"/>
</form>
<?php include_once 'rodape.php'; ?>
</body>
</html>