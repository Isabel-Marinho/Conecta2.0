<?php
    require "conexao.php";
    ?>

<?php
// Cadastramento //
if($_SERVER['REQUEST_METHOD'] == "POST"){
    

// Verificando os dados recebidos //

        if(empty(trim($_POST["nome"]))){
                echo "Por favor coloque um nome no projeto.";
         }elseif(!preg_match('/^[a-zA-ZÀ-Úà-ú0-9_\s]+$/', trim($_POST["nome"]))){
              $error = "O nome do projeto pode conter apenas letras, números e hífens.";
         }elseif(empty(trim($_POST["p-chave"]))){
              $error = "Por favor coloque palavras chaves no projeto.";
         }elseif(!preg_match('/^[a-zA-ZÀ-Úà-ú_\s]+$/', trim($_POST["p-chave"]))){
              $error = "As palavras chaves devem conter apenas letras e hífens.";
         }elseif(empty(trim($_POST["u-academ"]))){
              $error = "Por favor coloque uma unidade acadêmica.";
         }elseif(!preg_match('/^[a-zA-ZÀ-Úà-ú()_\s]+$/', trim($_POST["u-academ"]))){
              $error = "A unidade acadêmica deve conter apenas letras, parênteses e hífens.";
         }elseif(empty(trim($_POST["pesquisador"]))){
              $error = "Por favor coloque um pesquisador.";
         }elseif(!preg_match('/^[a-zA-ZÀ-Úà-ú\s]+$/', trim($_POST["pesquisador"]))){
              $error = "O pesquisador deve conter apenas letras.";}
         else{

            $param_nome = trim($_POST["nome"]);
            $param_pchave = trim($_POST["p-chave"]);
            $param_uacadem = trim($_POST["u-academ"]);
            $param_pesquisador = trim($_POST["pesquisador"]);
            
            $sql_nome = "SELECT nome_proj FROM projetos WHERE nome_proj LIKE :nome";

            $stmt = $dbh->prepare($sql_nome);
            $stmt->bindParam(':nome', $param_nome, PDO::PARAM_STR);
            if($stmt->execute()){
            
            $stmt_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(count($stmt_arr) == 1){
              $error = "Já existe um projeto com esse nome.";
          } else{
               include "confirma.php";
          }
       } else{
              echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
          }
         }
        }
?>

<html>
<head>
    <link href="/estilos/cadastramento.css">
</head>
<body>
        <div id="cadastro1">
            <form method="POST" action="<?php if(isset($confirma))
            echo $confirma;?>">
                <label>Nome do Projeto: </label><input type="text" name="nome" id="nome" ><br>
                <label>Palavras Chave: </label><input type="text" name="p-chave" id="pchave" ><br>
                <label>Unidade Acadêmica: </label><input type="text" name="u-academ" id="uacadem" ><br>
                <label>Pesquisador: </label><input type="text" name="pesquisador" id="pesq" ><br>
                <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
            </form>
            <span class="erro"><?php if(isset($error))
            echo $error;?></span>
        </div>

        </body>
</html>





