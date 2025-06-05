<!-- NAV INCLUDE -->
<script src="/javascript/includehtml.js"></script>

<html>
    <head>  
    <meta charset="utf-8" />
    <link href="/estilos/header-footer.css" rel="stylesheet">
    <link href="/estilos/projeto.css" rel="stylesheet">
    <title>Conecta-Projetos</title>
    <link rel="icon" type="image/x-icon" href="/imagens/icon.png">
    </head>
    <body>
         <?php include('header.php');
            $id = '65';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/xDLcf1XbU_Q?si=ZAU8QPtIcjsXdBQW?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Comunicando Diversidade nas Cidades </h1>
            <br>
                <p class="conteudo">
               Analisa como a gestão da <b>diversidade</b> é representada nos conteúdos de comunicação e nas políticas internas de algumas marcas cariocas. 
               <br><br>
               Diversidade - Termo que vem sendo bastante utilizado no meio corporativo para designar as políticas de integração institucional entre os diferentes grupos presentes numa empresa (LGBT+, mulheres, pessoas negras, portadores de necessidades especiais etc).
                </p>
               
            <p class="conteudo2">
        Palavas-chave: comunicação; diversidade; políticas de integração
            <br><br>
        Unidade Acadêmica: Faculdade de Comunicação Social
            <br><br>
        Pesquisador Responsável: Ricardo Freitas
            <br><br>
        Contato: (21) 96898-2605
            </p>
            
        </div>
        
        <!-- AGENDA 2030 -->
                <div class="agenda">
                    <div>
                        <img id="faixa-agenda-pjt" src="/imagens/faixa.png" />
                        <h1 class="titulo_agenda">Agenda 2030</h1>
                    </div>
                    <div class="container-img-agenda">
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-5.png" /> </div> 
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-10.png" /> </div> 
                    </div>
                </div>
                
    <!-- FOOTER -->
    <footer>
    <?php include('footer_pjt.php') ?>
    </footer>
     <!-- CONTATO WHATSAPP -->
    <a href="https://api.whatsapp.com/send?phone=5521968982605&text=Ol%C3%A1,%20queria%20uma%20informa%C3%A7%C3%A3o%20do%20CONECTA">
    <img id="contato" src="/imagens/contatowhats.png">
    </a>
    
    </body>
</html>