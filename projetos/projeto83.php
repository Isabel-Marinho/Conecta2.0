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
            $id = '83';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Espaço Livre de Orientação em Sexualidade e Saúde - ELOSS </h1>
            <br>
                <p class="conteudo">
                O ELOSS tem como objetivo democratizar informações sobre sexualidade e práticas mais seguras para prevenção de Infecções Sexualmente Transmissíveis - ISTs/AIDS e 
                ampliar o acesso de adolescentes e profissionais à informação e aos materiais educativos sobre adolescência, sexualidade e saúde. <br><br>
                Nesse sentido, busca manter um acervo de materiais educativos voltados para a saúde do adolescente para a consulta e empréstimo de profissionais e de adolescentes; 
                ampliar o espaço para discussão e adequação de trabalhos, programas e projetos voltados para adolescentes; <br><br>
                capacitar através de cursos e oficinas profissionais e multiplicadores jovens sobre adolescência, sexualidade, saúde reprodutiva, bem como sobre o uso e avaliação de materiais educativos; 
                atendimento individual e em grupo de profissionais e adolescentes; desenvolver pesquisas junto aos usuários do ELOSS; <br><br>
                elaborar trabalhos para encontros científicos e participar de eventos comunitários; capacitar e supervisionar alunos universitários bolsistas para atendimento e treinamento.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Adolescência; Saúde do Adolescente; Sexualidade
            <br><br>
        Unidade Acadêmica: Núcleo de Estudos da Saúde do Adolescente
            <br><br>
        Pesquisador Responsável: Daniela Sobrino Dieguez
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-5.png" /> </div>
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