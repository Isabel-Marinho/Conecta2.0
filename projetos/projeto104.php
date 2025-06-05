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
            $id = '104';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> ADUBA </h1>
            <br>
                <p class="conteudo">
                ADUBA promove um choque de sustentabilidade (ambiental e social) onde chega. Era projeto de pesquisa de um modelo disruptivo de desenvolvimento local socialmente inclusivo e regenerativo do meio ambiente, 
                ou seja, uma solução para municípios pequenos e sem pujança econômica poderem se desenvolver gerando riqueza e fixando-a localmente e distribuindo-a melhor. 
                ADUBA tornou-se projeto de extensão com piloto em Duas Barras - RJ.<br><br>
                Em 1 ano iniciamos coleta seletiva e compostamos 1 tonelada de resíduos orgânicos. Com nosso adubo, iniciamos horta comunitária agroecológica pedagógica. Fizemos já 8 edições do Sábado na ADUBA, 
                onde capacitamos em Permacultura e Economia Solidária (os pilares da ADUBA) e promovemos saúde com aula de yoga grátis, música local, e uma feira de produtos locais com pegada ADUBA (sem lixo e com produtos saudáveis 
                feitos por gente simples).<br><br>
                Pagamos bolsas em DB$ (nossa moeda social) para pessoas em vulnerabilidade que atuam (e aprendem) no projeto gastarem na feira. ADUBA pode revolucionar um município carente.
                ADUBA é incubadora de negócios de impacto sócio-ambiental (NIS) pelo edital Faperj 18/2021, participou do Pesquisa Inovadora (InovUERJ) e do Catalisa ICT (Sebrae) e acaba de ser selecionada no Dia de 
                Doar e no Conecta Startup Brasil, que conta com bolsas CNPq.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Desenvolvimento Sustentável; Inclusão Social; Choque de Sustentabilidade; Moeda Social
            <br><br>
        Unidade Acadêmica: Faculdade de Ciências Econômicas
            <br><br>
        Pesquisador Responsável: Rafael Pinho Senra de Morais
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-12.png" /> </div>
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