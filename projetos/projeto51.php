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
            $id = '51';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/9Zu7jZvkrJA?si=LytUwMCH1VykYEMT?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Incubadora de Empresas Sul Fluminense da UERJ </h1>
            <br>
                <p class="conteudo">
               Criar pontes entre o mercado e mundo acadêmico, projetos inovadores e investidores, ideias inspiradoras e realidade da ação com o objetivo de conectar empreendedor e empresa de forma adequada para desenvolver negócios, com foco principal no fomento da integração do ecossistema empreendedor Sul Fluminense promovendo parcerias, educação e tecnologia pela conexão de pessoas, ideias e empresas, e, ainda, do desenvolvimento regional.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: empreendedorismo; tecnologia; desenvolvimento
            <br><br>
        Unidade Acadêmica: Faculdade de Tecnologia de Resende (FAT)
            <br><br>
        Pesquisador Responsável: Bernardo Bastos da Fonseca
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-4.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-8.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-9.png" /> </div>
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