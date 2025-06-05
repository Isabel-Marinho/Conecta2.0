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
            $id = '38';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Acolhendo quem Educa </h1>
            <br>
                <p class="conteudo">
               Desenvolvimento de um sistema de acolhimento aos profissionais da educação, com grupos de apoio como estratégia predominante, constituindo um espaço de escuta ativa; constituir uma intervenção preventiva à saúde mental; ampliar um campo de conhecimento nesse segmento através dessa pesquisa-intervenção com benefícios para a universidade e para a população e o segmento acolhido.
                    </p>
                   <br>
               
            <p class="conteudo2">
        Palavas-chave: Psicologia para os profissionais da educação; saúde mental do educador; tensões dos profissionais de educação
            <br><br>
        Unidade Acadêmica: Instituto de Psicologia (IP)
            <br><br>
        Pesquisador Responsável: Laura Quadros
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