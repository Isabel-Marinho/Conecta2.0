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
    $id = '10';
    require_once( '../php/contador.php' );
    ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/YFZ5ihGYELA?si=HLQGEbkGhp7Ph2oR?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Tecnologias Avançadas para o tratamento de águas contaminadas </h1>
            <br>
                <p class="conteudo">
               Desenvolvimento e testagem de novos compósitos para aplicações na purificação de água, no polimento de efluentes e na remediação de matrizes aquosas em áreas contaminadas, disponibilizando novos materiais eficientes e economicamente viáveis, prontos para scaling-up, assim como novos materiais eficientes do ponto de vista técnico, mesmo que os custos atuais de produção requeiram algum tempo para sua viabilização econômica em escala industrial.
                </p>
                    <br><br>
               
            <p class="conteudo2">
        Palavas-chave: água; poluição; tecnologia
            <br><br>
        Unidade Acadêmica: Faculdade de Engenharia Departamento de Engenharia Sanitária e Meio Ambiente (FEN)
            <br><br>
        Pesquisador Responsável: Marcia Marques Gomes
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-7.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-14.png" /> </div>
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