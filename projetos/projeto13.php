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
    $id = '13';
    require_once( '../php/contador.php' );
    ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/Yhx79NVUuwY?si=wO4umQT9WfcIL1iT?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Contribuições do Observatório Socioambiental da Baía de Sepetiba </h1>
            <br>
                <p class="conteudo">
               Organização de uma plataforma que se constituirá em um acervo digital interativo, estruturando o observatório socioambiental da baía de Sepetiba, para o diagnóstico dos manguezais, a caracterização dos territórios, a economia, o perfil socioecônomico e cultural dos pescadores, a identificação dos conflitos urbano-industriais, as áreas de contenção, a análise dos estoques e os territórios pesqueiros.
                </p>
                    <br><br>
               
            <p class="conteudo2">
        Palavas-chave: socioambiental; pesca; manguezal
            <br><br>
        Unidade Acadêmica: Faculdade de Formação de Professores (FFP)
            <br><br>
        Pesquisador Responsável: Catia Antônia da Silva
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-8.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-9.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-10.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-14.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-15.png" /> </div>
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