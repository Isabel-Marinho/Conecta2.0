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
    $id = '9';
    require_once( '../php/contador.php' );
    ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/whFP5nRUszk?si=if6_6xOpe7qmqTgO?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Sentinela do Mar Fluminense </h1>
            <br>
                <p class="conteudo">
               Realização de medidas oceanográficas e de gases de efeito estufa in situ, espacializadas, utilizando as rotas dos navios comerciais na região costeira e oceânica fluminense.
                <br><br>
O uso de navios comerciais equipados com sensores autônomos para parâmetros ambientais é praticamente inédito no Brasil. A primeira linha de navegação foi iniciada em novembro/2022, em uma parceria da UERJ com a Alemanha (Instituto GEOMAR), e cobre a costa desde Santos (SP) até Manaus (AM), passando pelo porto de Itaguaí no estado do Rio de Janeiro.
                <br><br>
Os dados adquiridos, após o controle de qualidade, serão disponibilizados para a comunidade científica, iniciativa privada e terceiro setor, com o objetivo de melhorar o conhecimento sobre o oceano regional, a navegação, prover informações para tomadas de decisão e políticas públicas, e muito mais.
                </p>
                    <br><br>
               
            <p class="conteudo2">
        Palavas-chave: pesquisa, navegação, oceano
            <br><br>
        Unidade Acadêmica: Faculdade de Oceanografia
            <br><br>
        Pesquisador Responsável: Letícia Cotrim da Cunha
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-14.png" /> </div>
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