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
            $id = '92';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Arte Recicla: cultura, sustentabilidade e inclusão social </h1>
            <br>
                <p class="conteudo">
                O projeto aponta para a possibilidade de transformar em obras de arte resíduos sólidos como: papel, papelão, madeira, vidro, botões, plásticos, pet, metais, borracha, tecidos e outros bens descartáveis e não mais utilizáveis. 
                Agrega assim um conceito que vai além da reciclagem convencional, pois indica a criação de objetos que superam o mero valor econômico de matérias-primas, ampliando o conceito de sustentabilidade, 
                fomentando novo modelo de negócio e de geração de renda e também contribuindo para a inclusão social.<br>
                Trata-se de uma exposição e um ciclo de palestras/oficinas realizados com a participação de artesãos/expositores envolvendo não somente os profissionais interessados do setor mas também escolas municipais e estaduais do território fluminense, 
                a partir de parceria entre a universidade e os poderes municipais.

                </p>
               
            <p class="conteudo2">
        Palavas-chave: arte; cultura popular; reciclagem; sustentabilidade; inclusão social; 
            <br><br>
        Unidade Acadêmica: Pró-reitoria de Extensão e Cultura
            <br><br>
        Pesquisador Responsável: Ricardo Gomes Lima
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-12.png" /> </div>
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