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
            $id = '111';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Sistemas de cultivo ecopedagogicos </h1>
            <br>
                <p class="conteudo">
                O projeto favorece o intercâmbio de conhecimento entre os professores do Ensino Fundamental e 
                instituição de ensino e pesquisa; e propõe o diálogo entre as diferentes disciplinas do 
                currículo básico, experienciando a transversalidade dos diferentes saberes no ambiente 
                escolar.<br><br> Em parceria com escolas do Município do Rio de Janeiro, o projeto abrange propostas 
                pedagógicas e ações multidisciplinares em prol do ensino, da sustentabilidade e bem estar. 
                Entre as ações, destaca-se sistemas de cultivo vegetal, a compostagem, a alimentação saudável, 
                embelezamento dos espaços e outras propostas extraclasse. O território escolar é o ponto de 
                partida para os processos de educação transformadora que sensibiliza, inquieta e muda as 
                atitudes individuais e do grupo.<br><br> A interação entre aluno-professor-funcionário é fomentada 
                para a construção da escola que queremos, a partir de ações que repercutem no cotidiano dos 
                envolvidos e são incorporadas na sociedade. O projeto observa os objetivos de desenvolvimento 
                sustentável como educação de qualidade, saúde e bem estar.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Hidroponia; Compostagem; Jardim ecopedagógico; artes visuais
            <br><br>
        Unidade Acadêmica: Faculdade de Ciência Biológicas e da Saúde (UERJ-ZO)
            <br><br>
        Pesquisador Responsável: Cristiane Pimentel Victório
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-2.png" /> </div>
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