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
            $id = '93';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Dispositivos de Regeneração Social: redes de cuidado em ação </h1>
            <br>
                <p class="conteudo">
                Os Dispositivos de Regeneração Social (DRS) são tecnologias desenvolvidas pelo laboratório 
                afeTAR, uma Unidade de Desenvolvimento Tecnológico (UDT) vinculada ao Instituto de Psicologia 
                da UERJ, as quais buscam promover o bem-estar de populações historicamente vulnerabilizadas, 
                sejam elas mulheres, pessoas negras, LGBTQIA+ e/ou pessoas com deficiência.<br>
                Atuamos conforme as demandas da sociedade civil, oferecendo serviços de atendimento 
                psicológico e de assessoria em projetos de letramento racial e anticapacitista com vistas à 
                ampliação da diversidade institucional e à inclusão social junto a organizações públicas e 
                privadas, centros de saúde e instituições educacionais. Apostamos na coletividade para a 
                transformação de realidades sociais desafiadoras e no poder do encontro para a articulação de 
                possibilidades de futuro geradas no presente.

                </p>
               
            <p class="conteudo2">
        Palavas-chave: Dispositivos de Regeneração Socia; Teoria Ator-Rede; Rede; Cuidado
            <br><br>
        Unidade Acadêmica: Instituto de Psicologia
            <br><br>
        Pesquisador Responsável: Alexandra Cleopatre Tsallis
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-5.png" /> </div>
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-10.png" /> </div>
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