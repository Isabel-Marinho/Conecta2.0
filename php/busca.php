
<?php
    require "conexao.php";
    
        if(!isset($_GET['busca'])){
        ?>
        <h3>Digite algo para pesquisar...</h3>
        <?php
    }
    else{
    $palavra = ($_GET['busca']);
    $busca = "%".trim($_GET['busca'])."%";
     
     
    
    $sth = $dbh->prepare("SELECT * FROM projetos
                        WHERE nome_proj LIKE :busca
                        OR pesquisador LIKE :busca
                        OR p_chave LIKE :busca
                        OR u_academ LIKE :busca
                        ORDER BY id ");
    $sth->bindParam(':busca', $busca, PDO::PARAM_STR);
    $sth->execute();
    
    $resultado_busca = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<!-- NAV INCLUDE -->
<script src="/javascript/includehtml.js"></script>

<html>
<head>
	<title>Resultado da busca</title>
	<link href="/estilos/busca.css" rel="stylesheet">
</head>
<body>
     <!-- NAV -->
        <div w3-include-html="/projetos/header.html"></div>
        
     <!-- BUSCA -->
 <div class="resultados">
    <h2 id="titulo_busca">Resultado da busca  por "<?php echo "$palavra" ?>"</h2>
    <?php
    if (count($resultado_busca)) {
    	foreach($resultado_busca as $Resultado) {
    ?>
    <div class="container-busca">
    <h3 class="busca_tab">
    <table>
        <tr>
            <th scope="row"> <?php echo $Resultado['nome_proj']; ?> </th>
            <td><?php echo "  ".$Resultado['p_chave']; ?> </td>
            <td><?php echo "  ".$Resultado['u_academ']; ?> </td>
            <td><?php echo "Pesquisadorª: "." ".$Resultado['pesquisador']; ?> </td>
        </tr>
    </table>    
    </h3>
    </div>
    <br>
    <?php
    } } else {
    ?>
    <h2 id="sem-resultados">Não foram encontrados resultados pelo termo buscado.</h2>
    <?php
    } 
    ?>
</div>
<!-- JS INCLUIR HTML -->
    <script>
    includeHTML();
    </script>
</body>
</html>