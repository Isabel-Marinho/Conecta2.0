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
            $id = '80';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Centro de Atendimento à Saúde do Homem e Tratamento de Câncer de Próstata </h1>
            <br>
                <p class="conteudo">
                Operacionalização do Plano de Monitoramento celebrado entre a SES e UERJ,
                 visando a prestação de serviços estratégicos para a assistência integral 
                 da população fluminense, de janeiro a dezembro de 2022 conforme detalhamento abaixo.<br>
                  PROJETO ESTRATÉGICO ASSISTENCIAL -UROLOGIA – Centro de Atenção à Saúde do Homem e 
                  Centro de Tratamento de Pacientes com Câncer de Próstata.

                </p>
               
            <p class="conteudo2">
        Palavas-chave: câncer; próstata;
            <br><br>
        Unidade Acadêmica: Faculdade de Ciências Médicas
            <br><br>
        Pesquisador Responsável: Ronaldo Damião e João Luiz Schiavini
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