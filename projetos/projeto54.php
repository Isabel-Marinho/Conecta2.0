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
            $id = '54';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/hcV9kXsMYa8?si=lf0VO2scWdVQ8EX9?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Mapeamento de Oportunidades para Novos Negócios no Estado do Rio </h1>
            <br>
                <p class="conteudo">
               Apoio à projetos inovadores que incentivem a criação de empresas e produtos, como empreendedorismo e outras, de todos os cursos da instituição para maturação, alinhamento e desenvolvimento dos projetos e produtos melhores estruturados através de dinâmicas de Empreendedorismo e Gestão de Projetos e Gestão da Inovação.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: empreendedorismo; tecnologia; inovação
            <br><br>
        Unidade Acadêmica: Universidade da Zona Oeste – UERJ/UEZO
            <br><br>
        Pesquisador Responsável: Renata Angeli/Edmilson Monteiro de Souza
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-8.png" /> </div>
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