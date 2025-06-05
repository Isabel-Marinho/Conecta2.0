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
            $id = '90';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Curso de Formação em Saúde Integral de Pessoas Trans e Travestis: Cuidado e Acolhimento na Prática </h1>
            <br>
                <p class="conteudo">
                <b>Curso 1 </b>- "Introdução à Transexualidade e Saúde": Este curso de 12 horas oferece uma visão abrangente sobre a interseção entre transexualidade e saúde.
                    Explorando conceitos essenciais como identidade de gênero, disforia de gênero e diversidade de gênero, os participantes adquirem uma compreensão básica dos desafios enfrentados por pessoas transexuais. 
                    A ênfase está na sensibilidade e inclusão no campo da saúde.
                <br><br>
                <b>Curso 2 </b>- "Atendimento Integral à Saúde de Pessoas Trans e Travestis": Com uma carga horária de 32 horas, este curso é projetado para capacitar profissionais de saúde a oferecer cuidados completos e respeitosos a pessoas transexuais. 
                    Aborda estratégias para um acolhimento sensível, escuta ativa, acesso a serviços de saúde adequados e foco nas necessidades de saúde mental e modificações corporais. 
                    As boas práticas no atendimento, com foco no bem-estar físico e emocional, também são abordadas.
                <br><br>
                <b>Curso 3 </b>- "Consultoria e Suporte Técnico para o Atendimento em Saúde para Pessoas Trans e Travestis": Este curso flexível, com duração mínima de 40 horas e possibilidade de ampliação, opera na forma de supervisão,
                    permitindo que os interessados desenvolvam tópicos sob a orientação da equipe. Além disso, os cursos podem ser adaptados para atender às necessidades dos participantes,
                    incorporando palestras, estudos de caso, debates e atividades práticas. A inclusão de palestrantes especializados e pessoas transexuais como convidados enriquece a experiência de aprendizado.
                
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Transexualidade; Saúde Trans; Acolhimento; Atendimento Integral; Capacitação; Educação em Saúde; Diversidade de Gênero; Direitos LGBTQIAP+
            <br><br>
        Unidade Acadêmica: UDA de Endocrinologia e Metabologia
            <br><br>
        Pesquisador Responsável: Carolina Bastos da Cunha
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