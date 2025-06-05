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
            $id = '88';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Observatório Socioambiental da Baía de Sepetiba </h1>
            <br>
                <p class="conteudo">
                O Projeto Observatório Socioambiental da Baía de Sepetiba visa articular uma plataforma,
                 que se constituirá em um acervo digital interativo, estruturando o observatório 
                 socioambiental da baía de Sepetiba. <br> Para isso, serão organizadas informações por
                  meio de levantamento de dados primários, através de pesquisa participativa com pescadores
                   e pescadoras e comunidades locais, e de dados secundários produzidos pela academia 
                   com os seguintes focos:<br> diagnóstico dos manguezais, caracterização dos territórios,
                    economia, perfil socioeconômico e cultural dos pescadores, identificação dos conflitos
                     urbanos-industriais, áreas de contenção, análise dos estoques e territórios pesqueiros.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Observatório; Educação ambiental crítica; monitoramento participativo; economia solidária
            <br><br>
        Unidade Acadêmica: Faculdade de Formação de Professores
            <br><br>
        Pesquisador Responsável: Catia Antonia da Silva
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-8.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-14.png" /> </div>
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