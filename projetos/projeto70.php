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
            $id = '70';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Geoprocessamento no Cadastro Territorial Multifinalitário </h1>
            <br>
                <p class="conteudo">
                O Laboratório de Fotogrametria e Sensoriamento Remoto é um Grupo de Pesquisa Certificado e uma Unidade de Desenvolvimento Tecnológico 
                na UERJ, realizando pesquisas inovadoras em geotecnologias.
                Um resumo das principais pesquisas e projetos pode ser acessado em <a href="www.lfsr.eng.uerj.br">www.lfsr.eng.uerj.br</a>.<br><br>
            No tocante a soluções ofertadas a municipalidades, enfatizamos as seguintes:<br><br>
            1) Apoio à realização de Cadastro Territorial Multifinalitário (CTM), mediante restituição fotogramétrica (aérea, satélite ou drone). 
            O CTM permite aos municípios corretamente identificar as parcelas e tributar imóveis de acordo com parâmetros como área construída, tipologia e outros dados oriundos da cartografia.
         <br><br>   2) Consultoria e cursos para prefeituras quanto à redação de editais e fiscalização de contratos referentes a geotecnologias. 
         <br><br> 3) Prevenção a deslizamentos mediante o uso do inovador algoritmo RioSlide, desenvolvido em parceria com a Universidade de Viena. 
         Busca calcular maior suscetibilidade a deslizamentos não somente baseado em declividade e solos, mas também no histórico de deslizamentos (inteligência artificial).
                </p>
               
            <p class="conteudo2">
        Palavas-chave: cadastro; fotogrametria; sensoriamento remoto; modelagem do terreno
            <br><br>
        Unidade Acadêmica: Faculdade de Engenharia
            <br><br>
        Pesquisador Responsável: Prof. Dr. Luiz Carlos Teixeira Coelho Filho
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