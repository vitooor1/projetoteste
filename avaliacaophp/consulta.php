<?php
    echo"
    <script>
    function excluir(id){
        if(confirm('deseja realmente excluir este produto?')){
        location.href='excluir.php?id'+id;
        }
    }
    </script>";
    include_once 'topo.php';
    echo"<h1>Consultar Produto</h1>";
    include_once 'conexao.php';   
    $sql = "select * from produto ORDER BY nome ASC";    
    $rs = mysqli_query($con,$sql);    
    if(mysqli_num_rows($rs) > 0){
        ?>
        <table table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Exclusão</th>
                <th>Editar</th>
            <tr>               
        <?php        
        while($linha = mysqli_fetch_array($rs)){
            ?>
            <tr>
                <td><?php echo $linha["Nome"]; ?></td>
                <td><?php echo $linha["Estoque"]; ?></td>
                <td><?php echo $linha["Valor"]; ?></td>
                <td><?php echo $linha["Categoria"]; ?></td>
                <td>
                <a href="editar.php?id=<?php echo base64_encode($linha["idproduto"]); ?>">
                Editar
                </a>
                </td>
                <!-- CHAMA A EXCLUSÃO-->
                <!-- iremos codificar id na URL -->
                <td>
                        <a href="#" onclick="excluir(<?php echo($linha["idproduto"]); ?>)" >
                        
                        Excluir
                        </a></td>
        </tr>
        <?php          } ?>
        </table>
        <?php
    }else{
        echo"não existe produto cadastrado";    }
    mysqli_close($con);
    ?>
 