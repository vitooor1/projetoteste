
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link href="signin.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 <title>Painel</title>
</head>
<style>
 body{
        margin:auto;
        display:table;
        background:Blue;
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
    
    </body>
    </html>
    
    <?php 
    session_start();
    
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Painel</title>
    </head>

<body class="text-center">
<br><br><br><br>
    <h3> Painel de Controle </h3>
    <br>
    <?php
    echo"Seja bem vindo(a) ".$_SESSION["nome"];
    echo"<h4>Menu</h4>";
    
    if($_SESSION["nome"] == "adm"){
        include_once 'menu_adm.php';
    }else{
        include_once 'menu_user.php';
    }
    ?>
<?php include_once 'rodape.php'; ?>
</body>
</html>