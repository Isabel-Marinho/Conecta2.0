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
            $id = '49';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/CNQABkfFNf8?si=aox_8X5SrVUMsHQ7?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto">  Alerta de Risco em Comunidades de Difícil Acesso </h1>
            <br>
                <p class="conteudo">
               Modelo de pluviômetro de baixo custo, micro controlado, programado para emissão de alarme residencial com capacidade para enviar dados pluviométricos e climáticos via rede de telefonia gsm e/ou via internet aos órgãos governamentais e não governamentais.
                    <br>
                    Trata-se de equipamento adequado para funcionamento em comunidades isoladas e de difícil acesso, capaz de atuar independente de rede elétrica, fornecendo informações e dados capazes de favorecer em curto, médio e longo prazo, o desenvolvimento de projetos ambientais e minerais voltados para garantia da integridade física e patrimonial da população destas áreas, principalmente em decorrência de acidentes provocados por altos índices pluviométricos.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: águas pluviais; comunidades carentes; risco ambiental
            <br><br>
        Unidade Acadêmica: Instituto Politécnico do Rio de Janeiro (IPRJ)
            <br><br>
        Pesquisador Responsável: Damiano da Silva Militão
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-6.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-9.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div>
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