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
            $id = '98';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Curso de capacitação PIQVIDA </h1>
            <br>
                <p class="conteudo">
                A presente proposta visa capacitar profissionais de saúde no manejo da obesidade na adolescência utilizando estratégias inovadoras de redução de peso, através da promoção de 
                hábitos alimentares saudáveis; prática de atividade física, e estímulo à ampliação do universo de conhecimento informacional e cultural, considerando que a obesidade é uma 
                doença crônica, de etiologia complexa e multifatorial. A capacitação terá como base uma metodologia participativa, visando estabelecer habilidades que permitirão a equipe de 
                saúde implementar recursos para melhorar a qualidade de vida dos adolescentes.<br><br> Os temas serão trabalhados em oficinas, através de apresentação expositivas, apoiadas por recursos de 
                multimídia, dinâmica de grupo e conteúdos práticos, com a perspectiva de trabalhar a temática de forma ampla e criativa, utilizando os recursos inovadores. 
                O material didático funcionará como guia para o profissional de saúde, a fim de facilitar a condução do processo terapêutico e a consolidação das informações transmitidas aos profissionais. 
                O conteúdo abordado terá orientações sobre atividades físicas, nutricionais, sociais e clínicas. O conteúdo será mesclado com referência na literatura específica, origem autoral da equipe interdisciplinar.

                </p>
               
            <p class="conteudo2">
        Palavas-chave: Doença crônica não transmissível; Equipe interdisciplinar; Obesidade; Saúde do adolescnte e do jovem
            <br><br>
        Unidade Acadêmica: Núcleo de Estudos da Saúde do Adolescente
            <br><br>
        Pesquisador Responsável: Denise Tavares Giannini
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