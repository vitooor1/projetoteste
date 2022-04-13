<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu do Administrador</title>
</head>
<style>
body{
 background-color: #87CEFA;
}
.container{
    text-align:center;
}
</style>
<body>
<?php
include_once 'topo.php';
?>
<a href="cadastro_cerv.php">Cadastrar Cerveja </a>
<br/>
<a href="cadastro_user.php">Novo Usuario </a>
<br/>
<a href="consulta_adm.php">Consulta Cerveja</a>
<br/>
<a href="sair.php">Sair</a>
<br/>
</body>
</html>