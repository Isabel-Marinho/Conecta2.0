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
            $id = '67';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Esporte e Lazer na Melhor Idade </h1>
            <br>
                <p class="conteudo">
                O objetivo do presente projeto é fomentar e viabilizar o acesso à práticas variadas de atividades físicas
                de Lazer e Esporte Lazer para o público da terceira idade. 
                Respeitando as características e necessidades das diferentes cidades considerando seus espaços e 
                equipamentos disponíveis para contribuir na melhoria da saúde, qualidade de vida e longevidade do
                público alvo.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Esporte; lazer; atividades físicas; idosos
            <br><br>
        Unidade Acadêmica: Instituto de Educação Física e Desportos
            <br><br>
        Pesquisador Responsável: Luciana de Souza Menezes
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-9.png" /> </div>
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