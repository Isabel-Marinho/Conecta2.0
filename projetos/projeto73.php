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
            $id = '73';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Competências Socioemocionais contra a Violência Escolar </h1>
            <br>
                <p class="conteudo">
                Apesar de repertoriada a relevância das relações interpessoais no processo de ensino
                 e aprendizagem, as escolas não têm atribuído às habilidades socioemocionais seu devido 
                 protagonismo.
                  O construto tem sido relacionado à qualidade do ajustamento social e 
                 emocional de crianças e adolescentes, contribuindo tanto para a promoção quanto para 
                 a avaliação do nível do bem-estar ao longo da vida.
                  Ademais, o desenvolvimento interpessoal e emocional pode contribuir para inibir a violência escolar, que se constitui em grave 
                  problema público.<br><br>
                   A escola tem a função de educar e proteger, mas pode se constituir em espaço de violação
                    de direitos. O projeto tem por objetivo compreender as relações entre o nível
                    socioeconômico do aluno, competências socioemocionais e violência escolar em estudantes
                    do ensino médio;<br> Supondo que alunos com mais competências socioemocionais 
                    serão menos propensos a violência escolar justificando a ampliação de políticas públicas
                    que incentivem a aquisição destas competências de forma a evitar ambientes de 
                    degradantes no sistema educacional.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: competências socioemocionais; estudantes; escola; violência
            <br><br>
        Unidade Acadêmica: Instituto de Psicologia
            <br><br>
        Pesquisador Responsável: Adriana Benevides Soares
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