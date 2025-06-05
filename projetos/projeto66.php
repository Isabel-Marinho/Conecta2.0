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
            $id = '66';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Ossos Fortes </h1>
            <br>
                <p class="conteudo">
                O programa de prevenção de novas fraturas visa atender uma demanda importante e crescente dos pacientes portadores de osteoporose que necessitam de atendimento de alta complexidade.
                Esses pacientes devem apresentar fratura aos mínimos traumas em sítios osteoporóticos. 
                Visamos ampliar a prevenção secundária de fraturas em moradores do Estado do Rio de Janeiro. 
                O projeto envolve diversas áreas de atuação com multidisciplinaridade, promovendo assistência completa ao paciente com maior risco para fraturas. <br><br>
                Nossa meta é o tratamento individualizado para evitar novas fraturas, diminuindo a morbimortalidade e o custo relacionado a elas para o Sistema Único de Saúde, desde próteses a internações de longa permanência. 
                E assim, tornar nosso projeto referência no tratamento e prevenção de fraturas por fragilidade – Fracture Liaison Service (FLS) com representação no âmbito estadual. 
                Iniciativas educacionais foram desenvolvidas pelos profissionais da saúde com o objetivo de alertar sobre a importância do diagnóstico e tratamento desses pacientes, promovendo saúde e qualidade de vida.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Fratura; Refratura; Osteoporose; Fragilidade óssea
            <br><br>
        Unidade Acadêmica: Faculdade de Ciências Médicas
            <br><br>
        Pesquisador Responsável: Maria Caroline Alves Coelho
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