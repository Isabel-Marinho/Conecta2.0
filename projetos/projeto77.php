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
            $id = '77';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Expansão da Assistência Oncológica </h1>
            <br>
                <p class="conteudo">
                Expansão da Assistência Oncológica no Centro Universitário de Controle do 
                Câncer do Hospital Universitário Pedro Ernesto celebrado entre a SES e UERJ, 
                visando impulsionar e influenciar o atendimento oncológico no hospital como um todo 
                de janeiro a dezembro, conforme detalhamento abaixo.<br><br>
                • SUBPROJETO 1 – Expansão da teleterapia 
                e implementação da branquiterapia no Centro Universitário de Controle do Câncer do Hospital
                 Universitário Pedro Ernesto;<br><br>
                 • SUBPROJETO 2 – Expansão do atendimento em oncologia
                  clínica no Centro Universitário de Controle do Câncer do Hospital Universitário
                   Pedro Ernesto;<br><br>
                   • SUBPROJETO 3 – Expansão da Imagenologia no Centro Universitário de Controle
                    do Câncer do Hospital Universitário Pedro Ernesto; <br><br>
                    • SUBPROJETO 4 – Expansão da
                     medicina nuclear, diagnóstico avançado do câncer e registro hospitalar de câncer no
                      Centro Universitário de Controle do Câncer do Hospital Universitário Pedro Ernesto.

                </p>
               
            <p class="conteudo2">
        Palavas-chave: medicina nuclear; Câncer;
            <br><br>
        Unidade Acadêmica: Faculdade de Ciências Médicas
            <br><br>
        Pesquisador Responsável: Rodolfo Acatauassú Nunes
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