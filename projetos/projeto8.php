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
    $id = '8';
    require_once( '../php/contador.php' );
    ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/eYum0sXkL8E?si=dah5L0w6MBh6dSns?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Pareceres Jurídicos para a Proteção da Biodiversidade </h1>
            <br>
                <p class="conteudo">
               Desenvolvimento e emprego de metodologias e sistemas de identificação baseados em análises consideradas padrão-ouro da Biologia Molecular Forense, mas aplicadas nos problemas que se relacionam à Biodiversidade tais como o tráfico de animais, a identificação de espécies ameaçadas, dentre outros.
                </p>
                    <br><br>
               
            <p class="conteudo2">
        Palavas-chave: Biodiversidade; Justiça; Biologia; Parecer jurídico
            <br><br>
        Unidade Acadêmica: IBRAG / Mestrado Profissional em Saúde, Medicina Laboratorial e Tecnologia Forense.
            <br><br>
        Pesquisador Responsável: Cesar R. L. Amaral
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-15.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-16.png" /> </div>
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