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
            $id = '58';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/r7EvwKmSwvg?si=GwXisuVh3e_Aj1XK?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Desenvolvimento de Soluções Digitais para Segurança Pública </h1>
            <br>
                <p class="conteudo">
               Desenvolvimento de soluções baseadas em Processamento de Linguagem Natural e Machine Learning para problemas de dados não estruturados (textos), mais especificamente textos em português coloquial e popular oriundo de denúncias (DD) e redes sociais.
               <br>
               Apesar das soluções propostas terem motivação na Segurança Pública, elas podem ser adaptadas para outras áreas que precisem extrair conhecimento e informação de campos textuais, através de técnicas de processamento de linguagem natural, tais com o formulário de prontuários médicos, peças jurídicas de todas as áreas do direito, entre outros.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Segurança pública; Disque Denúncia; linguagem
            <br><br>
        Unidade Acadêmica: Faculdade de Engenharia (FEN)
            <br><br>
        Pesquisador Responsável: Karla Tereza Figueiredo
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-9.png" /> </div> 
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-16.png" /> </div> 
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