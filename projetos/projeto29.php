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
    $id = '29';
    require_once( '../php/contador.php' );
    ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/X-YZSC8Vm1Y?si=MVr9y_6w9-gx4I2F?rel=0&autoplay=1" title="Gestão Ambiental de Obras Rodoviárias Vídeo" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Cursos de Extensão e Atualização de Professores </h1>
            <br>
                <p class="conteudo">
                 Expertise para apoiar as prefeituras na capacitação e atualização continuada de seus professores, oferecendo projetos nas mais diversas áreas, como:
                 <br>
                </p>
                
                <ul class="conteudo-lista">
               <li>  Agenda 2030 na Escola; </li>
                <li> Religiosidade e o uso do ambiente como espaço sagrado; </li>
                <li> LGBTfobia; </li>
                <li> Guarda responsável de animais domésticos. </li>
                </ul>
                
                <br>

            <p class="conteudo2">
        Palavas-chave: Formação de professores; agenda 2030 na escola; LGBTfobia
            <br><br>
        Unidade Acadêmica: Faculdade de Formação de Professores – FFP/UERJ - Capacita
            <br><br>
        Pesquisador Responsável: Ana Maria Santiago
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-5.png" /> </div>
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