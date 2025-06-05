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
            $id = '110';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Núcleo de Estudos em Ciência e Segurança dos Alimentos - NECSA-INU-UERJ</h1>
            <br>
                <p class="conteudo">
                O NECSA foi criado em 2010 e está vinculado ao Grupo de Pesquisa do CNPq Ciência e Segurança 
                dos Alimentos/INU-UERJ, que possui 2 linhas de pesquisa:<br><br>
                1) Ciência, Tecnologia & Inovação em Alimentos e Bebidas/INU-UERJ e <br><br>
                2) Vigilância Sanitária em Alimentos e Bebidas/INU-UERJ. Congrega uma cooperação técnica Fiocruz/UERJ e 
                4 projetos UERJ de ensino, pesquisa e extensão: GT-TECA/UERJ; IMVISA; STARTUP-INOVANUTRI JR.; MUSAINUERJ e SABIC. <br><br>
                É uma associação plural multi e interdisciplinar entre professores, pesquisadores, técnicos e estudantes e está localizado na sala 12.002-D do INU-UERJ, com ambientação dinâmica híbrida para discussão, estudos, 
                planejamentos, desenvolvimento e execução de atividades em ciência, tecnologia, inovação & vigilância sanitária em alimentos, bebidas e nutrição. Tem como eixo central compartilhar conhecimentos, 
                vivências e práticas e apresentar-se como um canal de comunicação com a sociedade do RJ, onde se propõe buscar caminhos que possam atender algumas questões das áreas focais do NECSA em ensino, extensão, pesquisa, trabalho e renda.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Alimentos; Bebidas; Inovação; Vigilância Sanitária
            <br><br>
        Unidade Acadêmica: Instituto de Nutrição
            <br><br>
        Pesquisador Responsável: Hilda Duval Barros
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-2.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-3.png" /> </div>
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