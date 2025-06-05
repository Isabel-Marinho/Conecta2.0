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
            $id = '50';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/_yiwmrpH73s?si=JgIo8ujngIZTLKSc?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Oficina de Plano de Negócios para Produtores Locais </h1>
            <br>
                <p class="conteudo">
               Apoio à criação de uma base sólida de conhecimento a ser disseminado para empreendedores acadêmicos (alunos, professores, pesquisadores e técnicos da UERJ e de outras universidades) e não acadêmicos (profissionais da iniciativa privada, funcionários públicos, empresários, empreendedores e demais pessoas) no estabelecimento de um negócio bem sucedido, sob o ponto de vista técnico e comercial, que viabilize a aplicação prática dos resultados das pesquisas acadêmicas. Uma das expectativas é apoiar a condução das ações referentes a implantação do novo negócio no que diz respeito a editais de financiamento, proteção intelectual, estabelecimento de parcerias, testes de mercado, dentre outras.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: empreendedorismo; negócios; propriedade intelectual
            <br><br>
        Unidade Acadêmica: Faculdade de Engenharia (FEN)
            <br><br>
        Pesquisador Responsável: André Ribeiro de Oliveira
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