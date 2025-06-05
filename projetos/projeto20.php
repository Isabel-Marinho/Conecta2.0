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
    $id = '20';
    require_once( '../php/contador.php' );
    ?>¨
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/7lOxP7Ps1b0?si=n8miPFjmWnINGcKT?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto">Idosos em Movimento: Mantendo a Autonomia (IMMA)</h1>
            <br>
                <p class="conteudo">
                 Idosos em Movimento: Mantendo a Autonomia (IMMA) é um projeto de extensão universitária que oferece a prática de atividade física regular e orientada a pessoas com mais de 60 anos de idade, na UERJ. Além da prestação de serviço, o IMMA constitui-se em um campo de atuação pedagógica e científica aos estudantes de Educação Física bem como a alunos de Mestrado e Doutorado.
                    <br><br>
                    Através do Conecta RJ, oferecemos nossa expertise para:
                </p>
                
                <br>
                
                <ul class="conteudo-lista">
               <li>   Apoio ao desenvolvimento de projetos de atenção à pessoa idosa com ênfase em exercícios físicos tais como academias ao ar livre e aulas coletivas de ginástica, alongamento bem como outras modalidades de exercícios;</li>
                <li> Apoio à realização de avaliações físicas e funcionais de idosos com vistas a servirem de parâmetro para prescrição e readequação dos exercícios físicos realizados;</li>
                <li> Capacitação de equipe de trabalho para atuar com prescrição e orientação de exercícios para pessoas idosas. Essa capacitação poderá envolver cursos de curta duração ou especializações Lato Sensu, de formas teórica e prática, além de desenvolvimento de material didático de apoio ao pessoal.</li>
                </ul>
                
               <br>
               
            <p class="conteudo2">
        Palavras-chaves: Atividade Física para Idoso; Saúde da Pessoa Idosa; Atenção à Saúde do Idoso
            <br><br>
        Unidade Acadêmica: Instituto de Educação Física e Desportos (IEFD)
            <br><br>
        Pesquisador Responsável: Flávia Porto
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