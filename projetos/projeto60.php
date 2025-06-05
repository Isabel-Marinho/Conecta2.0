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
            $id = '60';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/AoR1ef-HFP4?si=dh8hUyQuUnu37Qbs?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Cataki: O Aplicativo da Reciclagem </h1>
            <br>
                <p class="conteudo">
               Plataforma digital desenvolvida para aproximar pessoas com consciência ambiental e catadores de materiais recicláveis. O serviço apresenta pessoas que recolhem qualquer tipo de material, como lixo, alumínio, metal, baterias, produtos eletrônicos, móveis, entulhos e outros.  Disponível de forma gratuita para celulares iPhone (iOS) e Android, a ferramenta mapeia as áreas de atuação e oferece o contato dos catadores mais próximos da localização atual do usuário. Pelo app, é possível consultar biografia, foto de perfil, telefone de contato e o tipo de material que o profissional recolhe.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: lixo; reciclagem; tecnologia; meio-ambiente
            <br><br>
        Unidade Acadêmica: Instituto de Ciências Sociais (ICS)
            <br><br>
        Pesquisador Responsável: Maria Raquel Passos Lima
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div> 
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