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
            $id = '68';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Ecoeduca - Programa de Educação Ambiental</h1>
            <br>
                <p class="conteudo">
                O Ecoeduca é um programa de Educação Ambiental realizado pela UDT LaSQPol 
                (Laboratório de Sustentabilidade e Química de polímeros) desde 2019, em Nova Friburgo/RJ.
                 São objetivos do programa a difusão, a sensibilização e a capacitação da sociedade para 
                 as questões ambientais. Os instrumentos utilizados no programa são o oferecimento de cursos
                  de extensão para educadores e para o público em geral, assim como a realização de atividades
                   dentro das escolas e instituições.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: educação ambiental; atividades pedagógicas; meio ambiente; sustentabilidade
            <br><br>
        Unidade Acadêmica: Instituto Politécnico
            <br><br>
        Pesquisador Responsável: Ana Moreira
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-12.png" /> </div> 
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