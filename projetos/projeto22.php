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
    $id = '22';
    require_once( '../php/contador.php' );
    ?>  
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/4kF-yERvQo0?si=5unIY9zQwcMSAOoL?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Obesidade Infantil</h1>
            <br>
                <p class="conteudo">
                 Assistência à crianças com excesso de peso e desenvolvimento de protocolos em obesidade infantil para profissionais de saúde da atenção primária e secundária; Educação continuada para profissionais de saúde, prevenção, promoção de saúde, diagnóstico, tratamento, EAD e cursos presenciais.
                    <br><br>
                </p>

            <p class="conteudo2">
        Palavas-chave: Obesidade infantil; Criança; Educação continuada em saúde
            <br><br>
        Unidade Acadêmica: Faculdade de Ciências Médicas (FCM)
            <br><br>
        Pesquisador Responsável: Isabel Rey Madeira
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-4.png" /> </div>
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