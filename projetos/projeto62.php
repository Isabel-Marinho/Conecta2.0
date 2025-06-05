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
            $id = '62';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/D8PcEtQuOv4?si=AUtxOa7ZeB0B8I5j?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Política de Segurança: Formação e Mediação da Guarda Municipal </h1>
            <br>
                <p class="conteudo">
               Apoio ao municípios para implantação de guardas municipais: desde a formulação do edital de seleção até a capacitação e treinamento dos concursados. 
               <br>
               Desenvolve ações possíveis para enfrentamento de questões relacionadas à dependência química, bem como as suas implicações no cenário de criminalidade vivenciado no cotidiano da sociedade brasileira, sobretudo entre os jovens.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: segurança pública, guarda-municipal, violência
            <br><br>
        Unidade Acadêmica: Pró-Reitoria de Extensão e cultura - PR3
            <br><br>
        Pesquisador Responsável: Oswaldo Munteal Filho
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