<?php
    require "conexao.php";
    
     $sth = $dbh->prepare("UPDATE projetos SET visitas=visitas+1 WHERE id=:id");
     $sth->bindParam(':id', $id, PDO::PARAM_STR);
     $sth->execute();
?>