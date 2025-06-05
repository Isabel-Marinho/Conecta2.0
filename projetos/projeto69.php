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
            $id = '69';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Iniciação esportiva à Ginástica </h1>
            <br>
                <p class="conteudo">
                O presente projeto tem como objetivo fomentar e viabilizar a iniciação esportiva voltada
                 para escolinhas de Ginástica para crianças e jovens de 6 a 16 anos.<br>
                  O referido projeto pode propiciar, para além da iniciação esportiva e aprendizados
                   técnicos das modalidades gímnicas, também a socialização e desenvolvimento do 
                   estilo de vida ativo. Respeitando características e necessidades das diferentes cidades 
                   e considerando seus espaços e equipamento disponíveis pode-se elaborar projetos das 
                   diferentes ginásticas.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Iniciação esportiva; Ginástica Rítmica; Ginástica Artística
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