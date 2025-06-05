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
    $id = '21';
    require_once( '../php/contador.php' );
    ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/v81kldQEtxM?si=5ENKXu6xbjdG3nyT?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Medicina Familiar e Comunidade </h1>
            <br>
                <p class="conteudo">
                 A Faculdade de Ciências Médicas (FCM) da UERJ  está levando residentes na área de saúde para prestar atendimento ao interior do Estado. Atualmente, o projeto possui uma parceria com a prefeitura municipal do Rio de Janeiro, que procura atender áreas distantes do município, como também há uma parceria com a Secretaria Estadual de Saúde (SEAS/RJ), no qual o projeto atende a cinco municípios do Interior do Estado, que são eles: Armação dos Búzios, Maricá, Mesquita, Três-rios e Itaboraí. 
                    <br>
                </p>
                
               
            <p class="conteudo2">
        Palavas-chave: Medicina de família; medicina no interior; residência médica no interior.
            <br><br>
        Unidade Acadêmica: Faculdade de Ciências Médicas (FCM)
            <br><br>
        Pesquisador Responsável: Maria Inez Padula Anderson
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-3.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-10.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-17.png" /> </div>
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