<!-- NAV INCLUDE -->
<script src="/javascript/includehtml.js"></script>

<html>
    <head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/estilos/header-footer.css" rel="stylesheet">
    <link href="/estilos/projeto.css" rel="stylesheet">
    <link href="/estilos/swiper-style.css" rel="stylesheet">
    <title>Capacitação</title>
    <link rel="icon" type="image/x-icon" href="/imagens/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    </head>
    
    <?php include('../projetos/header.php'); ?>
    <body>
    
        <?php 
        // Selecionando os projetos de capacitação //
            require ("../php/conexao.php");
            
            $capacitacao = "%".trim('capacitação')."%";

            $sth = $dbh->prepare("SELECT * FROM projetos
            WHERE temas LIKE :capacitacao ORDER BY visitas LIMIT 15");
            
            $sth->bindParam(':capacitacao', $capacitacao, PDO::PARAM_STR);
            $sth->execute();

            $resultado_em_alta = $sth->fetchAll(PDO::FETCH_ASSOC); 
        ?>
        
    <!-- Swiper -->
  <div class="swiper mySwiper">
      <h1 class="titulo-temas">Projetos de Capacitação</h1>
      <br><br>
    <div class="swiper-wrapper">
        <?php
    foreach($resultado_em_alta as $Result) {
            ?>
    
    <div class="swiper-slide">
        <a href="/projetos/projeto<?php echo $Result['id'];?>.php" id="link_projeto">
    <img class="img_fluid" src="/imagens/img-pjt/<?php echo $Result['id'];?>.png" />
    </a>
      </div>
    
    <?php } ?>
    
    </div>
  </div>


    
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script src="/javascript/swiper.js"></script>
        
        
    <!-- FOOTER -->
    <footer class="footer-temas">
    <?php include('../projetos/footer_pjt.php') ?>
    </footer>
     <!-- CONTATO WHATSAPP -->
    <a href="https://api.whatsapp.com/send?phone=5521968982605&text=Ol%C3%A1,%20queria%20uma%20informa%C3%A7%C3%A3o%20do%20CONECTA">
    <img id="contato" src="/imagens/contatowhats.png">
    </a>
    
    </body>
</html>