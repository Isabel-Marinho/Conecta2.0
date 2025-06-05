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
            $id = '72';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Novas Tecnologias em Ciência - Formação Continuada </h1>
            <br>
                <p class="conteudo">
                Uma das exigências do século XXI para o professor é a formação permanente.
                 Infelizmente, somente uma pequena parcela dos professores conseguem atingir este grau de excelência. Aliados a isso, a ministração de Ciências no ensino fundamental,
                  é realizado, em sua grande, maioria por Biólogos e em menor quantidade por Físicos e Químicos. Ambos profissionais não atendem as especificidades do ensino de Ciências. <br>
                  Portanto, os professores de Ciências no ensino fundamental enfrentam grandes limitações metodológicas e conceituais de formação em seu quotidiano. <br>
                  Aliado a isso, o município do Rio de Janeiro teve o pior resultado no Índice de Desenvolvimento da Educação Básica (IDEB) em 2022 da região sudeste. <br>
                  Diante do exposto, o objetivo geral do projeto é promover a formação continuada através da oferta de cursos teóricos e práticos de capacitação em ciências
                   (Química, Física e Biologia) na modalidade semipresencial, incentivando-os docentes do ensino fundamental do Rio de Janeiro a superarem suas dificuldades e, concomitantemente, garantir a melhoria da qualidade do ensino.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Formação continuada; Ensino de Ciências; Cursos; Eventos
            <br><br>
        Unidade Acadêmica: UERJ-ZO
            <br><br>
        Pesquisador Responsável: Alaide de Sá Barreto
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-4.png" /> </div>
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