<!-- NAV INCLUDE -->

<html>
    <head>  
    <meta charset="utf-8" />
    <link href="/estilos/header-footer.css" rel="stylesheet">
    <link href="/estilos/projeto.css" rel="stylesheet">
    <title>Conecta-Projetos</title>
    <link rel="icon" type="image/x-icon" href="/imagens/icon.png">
    </head>
    <?php include('header.php');
    $id = '0';
    require_once( '../php/contador.php' );
    ?>
    <body>
        <!-- VÍDEO -->
      		<iframe class="video" src="https://www.youtube.com/embed/6c0cYQQB3Fk?si=RP4xlL1m8-1RgbLB?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto">Consultoria para Gestão Ambiental de Obras Rodoviárias</h1>
            <ul class="conteudo-lista">
               <li>  Supervisão ambiental e capacitação de fiscais, apoio ao licenciamento ambiental no que se refere ao cumprimento de suas condicionantes ao meio ambiente e exigências dos órgãos ambientais; orientação aos fiscais de obras sobre aspectos ambientais, manejo;</li>
                <li> Sensibilização do trabalhador, conscientizando e estimulando quanto ao comportamento ambientalmente adequado;</li>
                <li> Informação socioambiental com produção de material informativo de apoio às ações voltadas à interação com a sociedade afetada pela obra.</li>
               </ul>
               <br>
       <p class="conteudo2">
        Palavas-chave: Gestão ambiental de obras rodoviárias; capacitação de fiscais ambientais; meio ambiente e rodovias.
            <br><br>
            Unidade Acadêmica: Faculdade de Engenharia (FEN)
            <br><br>
        Pesquisador Responsável: Josué Setta/ Rogério Feijó
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-15.png" /> </div>
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