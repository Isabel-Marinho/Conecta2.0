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
            $id = '85';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Núcleo de Estudos de Saúde do Adolescente (NESA) </h1>
            <br>
                <p class="conteudo">
                O Núcleo de Estudos de Saúde do Adolescente (NESA) é uma instituição voltada para a promoção da atenção integral à saúde de adolescentes
                e jovens com o objetivo principal de prestar atenção integral à saúde de adolescentes na faixa etária entre 12 e 18 anos de idade, e que abrange três áreas: <br><br>
                    A Primária, voltada para a promoção de saúde e prevenção de doenças nas populações mais vulneráveis; <br>
                    a Secundária, cujo objetivo é o diagnóstico, o tratamento e a reabilitação dos principais problemas de saúde que acometem os adolescentes; <br>
                    e a Terciária, que oferece internação hospitalar para jovens com quadros clínicos e cirúrgicos. <br><br>
                Todo esse trabalho também está voltado para o ensino, a pesquisa e a extensão, com a participação dos alunos de várias disciplinas da universidade.
                O Núcleo oferece uma série de especialidades médicas para a comunidade, como Clínica Médica, Cardiologia, Urologia, Ginecologia, etc. 


                </p>
               
            <p class="conteudo2">
        Palavas-chave: adolescente; saúde; ensino; jovens
            <br><br>
        Unidade Acadêmica: Faculdade de Ciências Médicas
            <br><br>
        Pesquisador Responsável: José Augusto Messias
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-10.png" /> </div>
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