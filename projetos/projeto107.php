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
            $id = '107';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Pró-Reforma </h1>
            <br>
                <p class="conteudo">
                Pró-Reforma é um aplicativo web que apoia a especificação e quantificação técnica e o orçamento de produtos e serviços para obras de revestimento. 
                <br><br>
                No app, disponível em <a href="www.pro-reforma.com">www.pro-reforma.com</a>, é possível ter acesso a todo o portifólio de produtos e lojas. A solução tem hoje 1 bilhão de diferentes combinações completas de produtos e serviços para obras de revestimento de piso e parede, customizáveis pelo consumidor e é ferramenta útil para o planejamento de obras de reforma de programas habitacionais.
                <br><br>
                O Pró-Reforma também está disponível em versão white label com portfólio exclusivo de produtos e lojas determinado pelo contratante, sendo possível o desenvolvimento de versões limitadas a uma localidade com o objetivo do fomento do desenvolvimento regional. 
                <br><br>
                O Pró-Reforma contou com recursos de editais de fomento à inovação do CNPq, SENAI, FAPERJ e ABDI, para o desenvolvimento do sistema, que hoje contempla reformas de revestimento de piso e parede. Os próximos módulos já prototipados para desenvolvimento futuro são tetos, vedações, instalações hidráulicas e elétricas e esquadrias. A funcionalidade pró-carbono, em desenvolvimento, incluirá no aplicativo o cálculo da quantidade de carbono de cada solução, permitindo que o impacto ambiental seja levado em conta pelos usuários na seleção das soluções para suas reformas. 


                </p>
               
            <p class="conteudo2">
        Palavas-chave: Reforma; revestimento; custo
            <br><br>
        Unidade Acadêmica: Faculdade de Engenharia
            <br><br>
        Pesquisador Responsável: Flávia Schmidt de Andrade Lima
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