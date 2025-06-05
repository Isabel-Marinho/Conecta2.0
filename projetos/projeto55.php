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
            $id = '55';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/4gx4t49ACYM?si=EjGDNy1f2x6Tmhu5?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Consultoria para Produção de Moradia e Habitação Popular </h1>
            <br>
                <p class="conteudo">
               Consultoria para produção da moradia e da provisão de infraestrutura no Rio de Janeiro contemporâneo, considerando a moradia a partir de diversas escalas de análise, desde a construção e produção do espaço da casa, de estruturas de domesticidade e sensações de pertencimento até às políticas públicas de habitação e a provisão de infraestrutura urbana.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Etnografia e infraestrutura urbana; políticas públicas de habitação no Rio de Janeiro; múltiplas dimensões da moradia em áreas urbanas.
            <br><br>
        Unidade Acadêmica: Instituto de Estudos Sociais e Políticos (IESP)
            <br><br>
        Pesquisador Responsável: Mariana Cavalcanti
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-9.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-10.png" /> </div>
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