<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cervejaria</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
<body class="text-center">
<div class="container">
 <br><br><br>
<h3>Área de Login da Cervejaria</h3>
<form action="login.php" method="post">
Login:<br>
<input type="text" name="email" placeholder="ex:luciano123" class="form-control"/></br> 
Senha:<br>
<input type="password" name="senha" id="senha" class="form-control"/><br/>
<br>
<input type="submit" value"email" class="btn btn-primary"/>
<input type="reset" value="Limpar" class="btn btn-primary"/>
<br><br>
<input type="checkbox" onclick="mostrarOcultarSenha()"> Mostrar Senha
<script type="text/javascript" src="script.js"></script>
</br></br>
<p>Ainda não fez seu cadastro?</p>
<p><a href="cadastro_user.php">Cadastre-se já!<a></p>
</form>

<?php 
if(isset($_GET["msg"])){
echo $_GET["msg"];
}
?>
</div>

<?php include_once 'rodape.php'; ?>
</body>
</html>

