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
            $id = '99';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Canga Literária </h1>
            <br>
                <p class="conteudo">
                A contribuição da leitura para o bem-estar é conhecida há séculos, principalmente na superação de crises, como guerras e epidemias, tal qual ocorreu na pandemia de COVID-19. 
                No entanto, o tempo dedicado à leitura e à convivência humana parece cada vez mais escasso, ao mesmo tempo em que os problemas emocionais são cada vez mais frequentes. <br><br>
                O Canga literária visa, através da literatura e da interação humana em ambientes diversos, proporcionar espaços de convivência agradáveis e inclusivos, com escuta atenta e reflexões coletivas de situações variadas, 
                contribuindo para ampliar a visão de mundo dos participantes e potencializar a capacidade escuta atenta e empatia. Visa também colaborar para o entendimento das representações das doenças, do luto e do 
                sentido da vida na literatura e em outras artes, estimulando o encantamento com os estudos da medicina, o bem-estar dos estudantes e a percepção da relevância do cuidado humanizado. Afinal, como dizia Abel Salazar, 
                “o médico que só sabe de medicina, nem medicina sabe”.

                </p>
               
            <p class="conteudo2">
        Palavas-chave: Promoção da Saúde; Saúde; Medicina na literatura; Humanização
            <br><br>
        Unidade Acadêmica: Faculdade de Ciências Médicas (FCM) - Cabo Frio
            <br><br>
        Pesquisador Responsável: Mônica de Cássia Firmida
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