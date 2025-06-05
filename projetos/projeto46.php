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
            $id = '46';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/D4bakw0WI34?si=JBZR8Dc2m1EYUJN7?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Segurança Hídrica e Desafios do Abastecimento de Agua Potável </h1>
            <br>
                <p class="conteudo">
                Assessoria para avaliação do nível de segurança hídrica do abastecimento metropolitano do Rio de Janeiro, em termos de garantia do provimento de quantidade e qualidade de água bruta para o Sistema Guandu, face às pressões crescentes de estressores climáticos e não-climáticos sobre os seus mananciais de abastecimento.
                    <br>
                </p>
               
            <p class="conteudo2">
        Palavas-chave: segurança hídrica; abastecimento; clima
            <br><br>
        Unidade Acadêmica: Faculdade de Engenharia Departamento de Engenharia Sanitária (FEN)
            <br><br>
        Pesquisador Responsável: Rosa Maria Formiga Johnsson
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-13.png" /> </div>
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