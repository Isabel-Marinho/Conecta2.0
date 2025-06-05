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
            $id = '40';
            require_once( '../php/contador.php' );
            ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/iXts2XHBN1A?si=TeDPTEAY-wuc8L_Q?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Educação para Prevenção ao Uso de Drogas </h1>
            <br>
                <p class="conteudo">
                 O Grupo de Pesquisa Educação e Drogas-GPED/UERJ realiza ações de ensino, pesquisa e extensão há quase
uma década no estado do Rio de Janeiro. Já realizou ações nos municípios do Rio de Janeiro, Angra dos Reis, Silva
Jardim, Saquarema, São Gonçalo e Duque de Caxias. Tem realizado cursos de extensão presenciais para educadores e,
na modalidade de ensino a distância, em parceria com a Fundação CECIERJ. Para estudantes, temos o Projeto Droga,
Educação e Saúde na EJA (DESEJA) e o Projeto Educação Popular em Ciências (PEPCiências). Para a Formação de
Professores de Nível Médio (antigo Curso Normal), oferece, no formato remoto, o curso “Materiais Educativos sobre
drogas: leitura, seleção e produção”. 
    <br>
Além disso, o GPED realiza jornadas, podcasts, colóquios, seminários, encontros
que contam com especialistas da área da pesquisa, do ensino e da sociedade civil organizada que participam dos
debates sobre álcool, medicamentos e outras drogas. Essas ações e iniciativas são negociadas com as secretarias
municipais interessadas.
                    <br><br>
                </p>

            <p class="conteudo2">
        Palavras-Chave: Drogas nas escolas; Formação de professores; Materiais educativos; Redução de Danos.
            <br><br>
        Unidade Acadêmica: Faculdade de Educação (EDU)
            <br><br>
        Pesquisador Responsável: Maria de Lourdes da Silva
            <br><br>
        Contato: educacaosobredrogas@gmail.com
            </p>
            
        </div>
        
        <div class="galeria">
            <h1> Galeria </h1>
            <img class="img_galeria" src="/imagens/galeria-projts/img1-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img2-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img3-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img4-pjt40.png ">
            <br>
            <img class="img_galeria" src="/imagens/galeria-projts/img5-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img6-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img7-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img8-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img9-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img10-pjt40.png ">
            <br>
            <img class="img_galeria" src="/imagens/galeria-projts/img11-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img12-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img13-pjt40.png ">
            <img class="img_galeria" src="/imagens/galeria-projts/img19-pjt40.png ">
        </div>
        
        <!-- AGENDA 2030 -->
                <div class="agenda"
                style="margin-top: 20px">
                    <div>
                        <img id="faixa-agenda-pjt" src="/imagens/faixa.png" />
                        <h1 class="titulo_agenda">Agenda 2030</h1>
                    </div>
                    <div class="container-img-agenda">
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