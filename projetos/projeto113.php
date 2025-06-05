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
            $id = '113';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Programa de Orientação em Sexualidade, Prevenção de IST/Aids e Distribuição de Preservativos - PROSS </h1>
            <br>
                <p class="conteudo">
                O PROSS tem como objetivo assegurar o acesso de adolescentes e jovens às informações e orientações sobre saúde e sexualidades, ampliar ações de prevenção das Infecções Sexualmente Transmissíveis (IST) e 
                distribuição de preservativos internos e externos. Assim como contribuir para a formação de jovens do ensino médio e superior, e profissionais da rede intersetorial.
                <br><br>
                Busca, portanto, promover cursos e/ou seminários de atualização para profissionais da rede intersetorial sobre a temática; <br>
                informar e orientar adolescentes e jovens sobre os temas transversais de saúde e sexualidade; <br>
                contribuir para a formação profissional de jovens universitários da graduação e pós-graduação da UERJ; <br>
                bem como desenvolver pesquisas junto ao público-alvo do programa, visando articular teoria e prática. <br>
                Na orientação individual e/ou em grupo serão abordados temas relacionados à adolescência, educação em saúde, sexualidades, identidade de gênero, orientação sexual, violência, gravidez, métodos contraceptivos, ISTs/ AIDS, saúde sexual e reprodutiva, entre outros.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Adolescências; Juventudes; Educação em saúde; Sexualidades
            <br><br>
        Unidade Acadêmica: Núcleo de Estudos da Saúde do Adolescente
            <br><br>
        Pesquisador Responsável: Viviane de Queiroz
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-5.png" /> </div>
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