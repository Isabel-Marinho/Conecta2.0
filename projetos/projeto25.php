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
    $id = '25';
    require_once( '../php/contador.php' );
    ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/HrVIB9MRFwE?si=vgI8Zb2hUKaxUw2M?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Solução em Terapia Vibratória Sistêmica </h1>
            <br>
                <p class="conteudo">
                 Intervenção clínica na qual a vibração mecânica, gerada pela plataforma vibratória é transmitida para o corpo de uma pessoa promovendo o exercício de vibração de corpo inteiro, podendo melhorar a força e a potência muscular, a densidade mineral óssea, o equilíbrio e a qualidade de vida e diminuir o nível de dor. 
                    <br>
                </p>

            <p class="conteudo2">
        Palavas-chave: Saúde, inovação, tecnológica para a saúde, parceria com a empresa
            <br><br>
        Unidade Acadêmica: Mestrado Profissional em Saúde, Medicina Laboratorial e Tecnologia Forense
            <br><br>
        Pesquisador Responsável: Mario Bernardo Filho e Danúbia da Cunha de Sá Caputo
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-9.png" /> </div>
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