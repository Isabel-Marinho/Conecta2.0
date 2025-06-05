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
    <?php include('header.php');
    $id = '1';
    require_once( '../php/contador.php' );
    ?>
    <body>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/oGXKXimKHfk?si=L8I9XXQm9b_vxKaW?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Redução de Riscos e Desastres </h1>
            <br>
                <p class="conteudo">
                 Apoio Científico à Resposta de Desastres e Apoio a Gestão de Riscos de Desastres. Atendimento à emergências e demandas das esferas de Governo, parceiros acadêmicos, de pesquisa e outros órgãos relacionados à redução de risco de desastres.
                    <br><br>
                </p>

                <ul class="conteudo-lista">
               <li>   Atendimento à emergências </li>
                <li> Mapeamento de áreas de risco e desenvolvimento de novas técnicas de mapeamento; </li>
                <li> Capacitação da população; </li>
                <li> Treinamento de técnicos e desenvolvimento de sensores. </li>
                </ul>
                
               <br>
               
            <p class="conteudo2">
        Palavas-chave: Redução de riscos; desastres; áreas de risco, mapeamento de risco.
            <br><br>
        Unidade Acadêmica: Faculdade de Geologia (FGEL)
            <br><br>
        Pesquisador Responsável: Francisco Dourado 
            <br><br>
        Contato: (21) 99858-9876
            </p>
        </div>
        
         <!-- AGENDA 2030 -->
                <div class="agenda">
                    <div>
                        <img id="faixa-agenda-pjt" src="/imagens/faixa.png" />
                        <h1 class="titulo_agenda">Agenda 2030</h1>
                    </div>
                    <div class="container-img-agenda">
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-6.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div>
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