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
            $id = '74';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Curso de operação e localização por sistema GPS </h1>
            <br>
                <p class="conteudo">
                O curso envolve o uso de tecnologia espacial com base em satélites artificiais e GPS
                 destinados ao posicionamento sobre a superfície terrestre.<br>
                  Esta tecnologia permitirá a coleta de dados em atividade prática, visando a apoiar ações
                   acadêmicas e de profissionais em suas respectivas áreas de atuação, com destaque para 
                   Meio Ambiente, Saúde e Questões Urbanas e Sociais.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: GPS; posicionamento; geotecnologia;
            <br><br>
        Unidade Acadêmica: Faculdade de Geologia
            <br><br>
        Pesquisador Responsável: Marcelo dos Santos Salomão
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