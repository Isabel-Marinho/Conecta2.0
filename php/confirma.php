<?php
require_once "teste-cadastramento-de-projetos.php";
?>

<html>
<body>
     <script>
        var teste = document.getElementById("cadastro1");
        teste.style.display = "none";
     </script>

    <!-- Confirmando os Dados Enviados -->
     <div class="confirma">
          <form method="get" action="">
            <label>Nome do Projeto: <?php echo $nome ?> </label><br>
            <label>Palavras Chave: <?php echo $pchave ?> </label><br>
            <label>Unidade Acadêmica: <?php echo $uacadem ?> </label><br>
            <label>Pesquisador: <?php echo $pesquisador ?> </label><br>

            <button type="submit" name="confirma">Confirmar</button>
            <button type="submit" name="cancela" formaction="/php/teste-cadastramento-de-projetos.php">Cancelar</button>

        </form>
    </div>


</body>
</html>

<?php
// Inserindo Dados no Banco //
if($_SERVER['REQUEST_METHOD'] == "GET"){

    $nome = $param_nome;
    $pchave = $param_pchave;
    $uacadem = $param_uacadem;
    $pesquisador = $param_pesquisador;

    $cad = $dbh->prepare("INSERT INTO `projetos` (`nome_proj`, `p_chave`, `u_academ`, `pesquisador`)
    VALUES (:nome, :pchave, :uacadem, :pesquisador)");
    $cad->bindParam(":nome", $nome, PDO::PARAM_STR);
    $cad->bindParam(":pchave", $pchave, PDO::PARAM_STR);
    $cad->bindParam(":uacadem", $uacadem, PDO::PARAM_STR);
    $cad->bindParam(":pesquisador", $pesquisador, PDO::PARAM_STR);

    if($cad->execute()){
        echo "Cadastramento de projeto concluído!";
    } else{
        echo "Cadastramento falhou, tente novamente mais tarde.";
    }
}
?>



