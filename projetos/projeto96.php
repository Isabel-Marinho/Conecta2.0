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
            $id = '96';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Programa Aquarela: adolescências, saúde, diversidades, sexualidades e afetos. </h1>
            <br>
                <p class="conteudo">
                O principal objetivo do programa Aquarela é atender à demanda de forma integral aos 
                adolescentes e jovens transexuais residentes no Estado do Rio de Janeiro e implementar 
                ações básicas de saúde nesse sentido; avaliar as dificuldades de adesão dos indivíduos 
                trans a serviços de atenção à saúde, aprimorar a atenção integral à saúde trans além de 
                empregar a promoção da saúde e a prevenção de agravos para a melhora da qualidade de vida e 
                dos indivíduos, o que abrirá um espaço para o desenvolvimento técnico multiplicador de equipes 
                multidisciplinares em saúde e potencialmente toda a comunidade universitária, gerando temas 
                para pós-graduação e desenvolvimento de técnicas e métodos de avaliação e acompanhamento destes 
                indivíduos, refletindo em conhecimentos que venham impactar positivamente a saúde da população. 
                Um outro grande investimento do programa versa sobre a capacitação de equipes de saúde da 
                atenção básica e da rede intersetorial da garantia de direitos dos adolescentes e jovens.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Sexualidade; Identidade de gênero; Adolescências; Atenção Primária
            <br><br>
        Unidade Acadêmica: Centro Biomédico
            <br><br>
        Pesquisador Responsável: Fernanda Graneiro Bastos
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