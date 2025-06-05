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
            $id = '105';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Ações formativas e dialógicas do Núcleo de Estudos em Literatura Infantojuvenil da UERJ. </h1>
            <br>
                <p class="conteudo">
                O projeto tem por objetivo divulgar o conhecimento em torno de obras da literatura potencialmente destinadas a crianças e jovens, 
                tendo em vista a formação de um olhar crítico voltado ao livro (texto verbal, ilustrações, materialidade) e às estratégias de circulação e de mediação da leitura 
                literária, visando a capacitar professores, bibliotecários, pesquisadores, agentes culturais, artistas e demais pessoas interessadas na literatura infantojuvenil. 
                As ações preveem o oferecimento de cursos de atualização e de extensão, oportunizando o aperfeiçoamento de profissionais da área.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Literatura Infantojuvenil; Cursos; Teorias; Práticas
            <br><br>
        Unidade Acadêmica: Instituto de Aplicação Fernando Rodrigues da Silveira - CAp UERJ
            <br><br>
        Pesquisador Responsável: Márcia Cristina Alves dos Santos
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