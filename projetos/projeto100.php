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
            $id = '100';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Contabilidade Inclusiva </h1>
            <br>
                <p class="conteudo">
                O projeto Contabilidade Inclusiva tem como objetivo geral produzir e divulgar à sociedade, 
                conteúdo sobre Educação Financeira, Contabilidade e Finanças através de mídias digitais, 
                cursos, palestras e orientações. Assim, o projeto elenca a divulgação científica da área e o 
                desenvolvimento de conteúdos com linguagem clara e objetiva, “traduzindo” termos técnicos 
                para uma linguagem mais acessível, não só de leigos aos temas, como pessoas com deficiências 
                visuais e auditivas, uma vez que, são raros os conteúdos de finanças voltados a essas pessoas.<br><br> 
                Esse desenvolvimento contribuirá para o conhecimento dos alunos de ciências contábeis por 
                meio, não só de práticas contábeis, como no desenvolvimento da comunicação, no olhar do 
                próximo, no lugar do outro, tão importante nas ciências sociais. Assim, com o projeto, a 
                sociedade poderá ser beneficiada, pois, os conteúdos elaborados serão oferecidos via mídias 
                digitais, e em alguns casos presenciais, como no caso de cursos, oficinas, palestras e 
                eventos, possibilitando o desenvolvimento, principalmente de pessoas com deficiências visuais 
                e auditivas.

                </p>
               
            <p class="conteudo2">
        Palavas-chave: Contabilidade; Inclusão Social; Educação; Empreendedorismo
            <br><br>
        Unidade Acadêmica: Faculdade de Administração e Finanças - FAF
            <br><br>
        Pesquisador Responsável: Eduardo Felicissimo Lyrio
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