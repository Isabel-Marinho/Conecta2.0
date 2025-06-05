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
            $id = '78';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> eMuseu do Esporte - museus virtuais e carreta itinerante </h1>
            <br>
                <p class="conteudo">
                O “eMuseu do Esporte” consiste na criação de museus virtuais para entidades
                 esportivas bem como uma carreta itinerante com exposição imersiva e interativa do esporte. 
                 O projeto itinera por cidades do RJ utiliza o esporte como ferramenta para fomento à cultura,
                  sustentabilidade, educação e já alcançou mais de 1 milhão em alcance de pessoas nas mídias.<br>
                   O eMuseu já possui 30 museus disponíveis gratuitamente no seu portal <a href="www.emuseudoesporte.com.br"> www.emuseudoesporte.com.br</a>
                    e já rodou 25 cidades do RJ, MG e ES. <br><br>
                   Matéria da carreta na Globo:
                   <a href="https://www.youtube.com/watch?v=OLj7N6tMJDs">https://www.youtube.com/watch?v=OLj7N6tMJDs.</a> <br>
                     <br>Como legado, há contratação de mão de obra local dos monitores do projeto,
                      acessibilidade para pessoas com deficiência auditiva e visual, autismo e físicas,
                       sendo para todas as idades, raça e gênero, classes sociais, contemplando 12 das 17 ODSs.
                        Capacitamos professores e monitores das cidades com foco na sustentabilidade.
                         Criamos cartilhas as quais ensinam a criação de materiais esportivos por meio de materiais 
                         recicláveis.<br><br> Vídeo de apresentação: <a href="https://www.youtube.com/watch?v=f58jQ6j0tyE">https://www.youtube.com/watch?v=f58jQ6j0tyE</a>.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Inovação e empreendedorismo; tecnologia; esporte; educação
            <br><br>
        Unidade Acadêmica: Instituto de Matemática e Estatística - IME
            <br><br>
        Pesquisador Responsável: Bianca Gama Pena
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-11.png" /> </div>
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