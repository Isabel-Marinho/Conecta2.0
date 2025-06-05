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
            $id = '112';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Formação de Profissionais da escola para a inclusão de pessoas com Transtorno do Espectro Autista (TEA) e Deficiência Intelectual (DI) </h1>
            <br>
                <p class="conteudo">
                Capacitação de professores e demais profissionais da escola para o reconhecimento e atendimento de crianças, adolescentes e adultos com o TEA e ou DI, com o intuito de 
                proporcioná-los um ambiente acolhedor, uma educação de qualidade, inclusiva e um bom desenvolvimento integral.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Autismo; Transtorno do Desenvolvimento Intelectual; Esporte; Saúde
            <br><br>
        Unidade Acadêmica: Instituto de Educação Física e Desportos
            <br><br>
        Pesquisador Responsável: Jomilto Praxedes
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