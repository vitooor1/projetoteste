<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
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
<script>

var check = function () {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Senhas Iguais';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Senhas Diferentes';
  }
}

function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value=("");
        document.getElementById('bairro').value=("");
        document.getElementById('cidade').value=("");
        document.getElementById('uf').value=("");
        document.getElementById('ibge').value=("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);
        document.getElementById('ibge').value=(conteudo.ibge);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}
    
function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";
            document.getElementById('ibge').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};

</script>
<body class="text-center">   
<br><br><br>
    <div id="conteudo">
        <h3>Cadastro de usuário</h3>
        <br>
        <form action="cadas_user.php" method="post">
            Nome:<br>
            <input type="text" name="nome" id="nome" class="form-control"/>
            <br>
            Email:<br>
            <input type="text-area" name="email" id="email" class="form-control"/>
            <br>
            Senha:<br>
            <input name="password" id="password" type="password" onkeyup="check();" class="form-control"/>
           <br>
            Insirir senha novamente:<br>
            <input n="confirm_password" id="confirm_password" type="password" onkeyup="check();" class="form-control"/>
            <span id="message" style="color: blue;"></span>
            <br>
            Perfil do usuário.:<br>
            <select name="perfil" id="perfil" class="form-control">
                <option value="">Selecione</option>
                <option value="user">Usuário</option>
                <option value="adm">Administrador</option>
            </select>
            <br>
            <br>
            <h3>Endereço</h3>
            <hr>
            Cep:<br>
            <input type="text" name="cep" id="cep" class="form-control"
            onblur="pesquisacep(this.value);"/>
            <br>
            Rua:<br>
            <input type="text" name="rua" id="rua" class="form-control"/>
            <br>
            Bairro:<br>
            <input type="text" name="rua" id="bairro" class="form-control"/>
            <br>
            Cidade:<br>
            <input type="text" name="cidade" id="cidade" class="form-control"/>
            <br>
            UF:<br>
            <input type="text" name="uf" id="uf" class="form-control"/>
            <br>
            IBGE:<br>
            <input type="text" name="ibge" id="ibge" class="form-control"/>
            <br>
            <input type="submit" value="Cadastrar" class="btn btn-primary" />
            <input type="reset" value="Limpar Campos" class="btn btn-warning"/>
        </form>
        <?php include_once 'rodape.php'; ?>
</body> 
</html>