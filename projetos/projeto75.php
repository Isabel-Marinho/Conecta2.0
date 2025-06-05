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
            $id = '75';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Meditação na Escola </h1>
            <br>
                <p class="conteudo">
                A meditação é utilizada educacionalmente em muitos países.
                 Pesquisas científicas comprovam que a prática da meditação durante a infância
                  possibilita autoconhecimento, autoestima, saúde física, mental e emocional, 
                 melhora no eu-social com maior respeito e resiliência à diversidade (reduzindo bullings),
                  promove paz interior, desperta conscientização sobre o ecossistema do planeta,
                   além de promover melhor rendimento escolar.<br> O ser humano que medita aprende a 
                   utilizar da mente supramental (ondas cerebrais Alphas), e assim filtra o excesso de
                    pensamentos desnecessários, trazendo saúde e protagonismo consciente para a vida,
                     proporcionando a utilização inteligente da coerência entre coração e cérebro -
                     fundamental para educar o ser humano. <br> Este projeto ensina várias técnicas simples 
                     de meditação para que os alunos possam escolher a que mais se adapta a eles.
                      São práticas breves meditativas que podem ser utilizadas a qualquer momento, 
                      inclusive antes das aulas regulares, para possibilitar foco e concentração; ou fora 
                      da escola, promovendo autonomia e equilíbrio emocional no cotidiano.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Meditação; Escola; Benefícios;
            <br><br>
        Unidade Acadêmica: Instituto de Educação Física e Desportos
            <br><br>
        Pesquisador Responsável: Maria Cristina Mello Marinho
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