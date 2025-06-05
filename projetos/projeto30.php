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
            $id = '30';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/cPM-xyGK98s?si=C2LtM0ZGxOvOAOKs?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto">Educação Ambiental Infantil</h1>
            <br>
                <p class="conteudo">
                “Não pergunte quem você vai ser quando crescer, mas quem você quer ser”.
                <br><br>
             Formação de novos leitores/críticos a partir de uma produção de literatura para a infância sobre a temática do meio ambiente. É a partir dessa fase do desenvolvimento que devemos romper com paradigmas de nossas atitudes comportamentais com nosso planeta e a sociedade. Pode ser aplicado na área de educação fundamental, capacitando professores para o desenvolvimento de atividades lúdicas no primeiro segmento. A proposta visa a manutenção de um diálogo e a experimentação.
                    </p>
                   <br><br>
                    
            <p class="conteudo2">
        Palavas-chave: Educação Infantil; Meio Ambiente; Capacitação de Professores
            <br><br>
        Unidade Acadêmica: Instituto de Biologia Roberto Alcantara Gomes (IBRAG)
            <br><br>
        Pesquisador Responsável: Israel Felzenszwalb
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-6.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-10.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div>
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