<!-- NAV INCLUDE -->

<!-- HTML -->
<html>
    <head>
                <!-- Google tag (gtag.js) -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=G-DB5FQZ80Q9"></script>
                <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                
                gtag('config', 'G-DB5FQZ80Q9');
                </script>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/estilos/principal.css" rel="stylesheet">
        <link href="/estilos/header-footer.css" rel="stylesheet">
        <link href="/estilos/main-responsive.css" rel="stylesheet">
        <title>Conecta</title>
        <link rel="icon" type="image/x-icon" href="/imagens/icon.png">
        <link href="/estilos/busca.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/74c129185d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    
    <body>
        <!-- LOADING -->
    
    <?php include('header.php') ?>
                    <!-- NAV -->
                    <script src="/javascript/scroll.js"></script>
                    
                    <!-- MENU -->
                    
                    <ul class="dropdown">
                                                        <a href="/temas/recursos.php"><li class="tabs tab1">CAPTAÇÃO DE RECURSOS</li></a>
                                                        <a href="https://heyzine.com/flip-book/5ecb606dec.html"><li class="tabs">DOSSIÊ CONECTA</li></a>
                                                        <a href="/temas/indicadores.php"><li class="tabs">INDICADORES MUNICIPAIS</li></a>
                                                        <a href="mailto:plataformaconectarj@gmail.com"><li class="tabs">CONTATO</li></a>
                    </ul>
                    <div class="fundomenu"></div>
                    <script>
                    var timer;
                    var click;
                            $(".openMenu").click(function() {
                                click++;
                                $(".menuall").toggleClass("navOpen");
                                timer = setTimeout(function () {
                                $(".dropdown").toggleClass("open");
                            }, 100);
                                $(".menuall").toggleClass("open");
                                $(".fundomenu").toggleClass("open");
                                $(this).toggleClass("open");
                            });
                    </script>

                    <!-- BANNER -->
            <div class="menuall">
                        <div class="banner-img" id="img-banner"></div>
                        <div class="banner">
                    <div class="bemvindo">
                        <img class="logo_banner" src="/imagens/logoconecta.png"/>
                    <p id="welcome">Bem vindos à plataforma que coloca a Universidade na palma da sua mão.</p>
                    </div>
                    </div>
                    
                    <!-- Busca -->
                    <form method="get" action="" class="busca">
                        <input type="text" name="busca" value="<?php if(isset($_GET['busca'])) echo ($_GET['busca']);?>"        
                        maxlength="30" class="txtBusca" placeholder="Buscar projeto..." />
                        <button class="btnBusca" value="Buscar">
                        <i class="fas fa-search"></i>
                        </button>
                    </form>
                    
                    <!-- PHP -->
            <?php
                require "conexao.php";
                
                // Guardando a Busca //
                if(isset($_GET['busca']))
                $busca = "%".trim($_GET['busca'])."%";
                
                
                $sth = $dbh->prepare("SELECT * FROM projetos
                                    WHERE nome_proj LIKE :busca
                                    OR pesquisador LIKE :busca
                                    OR p_chave LIKE :busca
                                    OR u_academ LIKE :busca
                                    ORDER BY id ");
                $sth->bindParam(':busca', $busca, PDO::PARAM_STR);
                $sth->execute();
                
                $resultado_busca = $sth->fetchAll(PDO::FETCH_ASSOC);
                ?>
                    <?php 
                            if (empty($_GET['busca'])){
                                ?>

                        <!-- PÓS-BANNER -->
                    <div class="pos-banner">
                            <div class="container-gestao">
                                <div class="col-md-12">
                                    <h2>SOLUÇÕES PARA A GESTÃO MUNICIPAL EM UM SÓ LUGAR</h2>
                                </div>
                                <div class="col-md-3">
                                    <a href="/temas/capacitacao.php" style="text-decoration: none; color: white;">
                                    <img class="col-img" src="/imagens/capacitacao.png">
                                    <h3 class="h3-col">Capacitação</h3>
                                    <p class="resumo-col">
                                    Cursos de Atualização, Extensão, Graduação e Pós-Graduação.
                                    </p>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/temas/projetos.php" style="text-decoration: none; color: white;">
                                    <img class="col-img" src="/imagens/projetos.png"><img>
                                    <h3 class="h3-col">Projetos</h3>
                                    <p class="resumo-col">
                                    Expertise interdisciplinar e multidisciplinar para soluções inovadoras em políticas públicas.
                                    </p>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/temas/serviços.php" style="text-decoration: none; color: white;">
                                    <img class="col-img" src="/imagens/solucoes.png"><img>
                                    <h3 class="h3-col">Serviços</h3>
                                    <p class="resumo-col">
                                    Assessoria e consultoria para programas especiais e identificação de oportunidades.
                                    </p>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/temas/diagnosticos.php" style="text-decoration: none; color: white;">
                                    <img class="col-img" src="/imagens/produtos.png"><img>
                                    <h3 class="h3-col">Diagnósticos</h3>
                                    <p class="resumo-col">
                                    Estudos especializados para desenvolvimento de vocações locais.
                                    </p>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/temas/planos.php" style="text-decoration: none; color: white;">
                                    <img class="col-img" src="/imagens/projetos-especiais.png"><img>
                                    <h3 class="h3-col">Planos de Ação</h3>
                                    <p class="resumo-col">
                                    Apoio a equipes locais para proposição de ações para melhoria e inovação nos serviços.
                                    </p>
                                    </a>
                                </div>
                            </div>
                    </div>


                    <!-- PROJETOS -->

                            <div class="sliders">
                            <section id="secao1">
                                    <div class="container">
                                        <div class="row">
                                            <div class="areas">
                                                <h5 class="titulo_area"> DESENVOLVIMENTO ECONÔMICO E SOCIAL </h5>
                                            </div>
                                            <div class="linha"></div>
                                            <button class="seta-esquerda" id="cor-seta-5"><img src="/imagens/arrow1.png" alt=""></button>
                                            <button class="seta-direita" id="cor-seta-5"><img src="/imagens/arrow1.png" alt=""></button>
                                        
                                                    <div class="areas_lista">
                                                        
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto95.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/95.png" />
                                                            <div class="projeto_info">
                                                                <p> A plataforma interdisciplinar reúne dados, informações, oportunidades e eventos atualizados relacionados a políticas públicas para adolescentes.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto61.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/61.png" />
                                                            <div class="projeto_info">
                                                                <p> Promoção dos direitos de adolescentes em situação de vulnerabilidade social por meio da oferta de curso de formação.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto104.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/104.png" />
                                                            <div class="projeto_info">
                                                                <p> Projeto de pesquisa de um modelo disruptivo de desenvolvimento local socialmente inclusivo e regenerativo do meio ambiente.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto100.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/100.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto tem como objetivo divulgar à sociedade conteúdo sobre Educação Financeira, Contabilidade e Finanças através de mídias digitais, cursos, palestras e orientações.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto97.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/97.png" />
                                                            <div class="projeto_info">
                                                                <p> Curso de extensão a profissionais da educação básica pública, para aplicar com seus estudantes o sentimento de pertencimento por meio de atividades pedagógicas.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto94.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/94.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto implementa uma gestão da inovação de base científica nas áreas da saúde e correlatas e estruturar a spin off acadêmica na UERJ.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto93.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/93.png" />
                                                            <div class="projeto_info">
                                                                <p> Oferece serviços de atendimento psicológico e de assessoria em projetos de letramento racial e anti-capacitista com vistas à ampliação da diversidade institucional e à inclusão social. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto87.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/87.png" />
                                                            <div class="projeto_info">
                                                                <p> Promover a integração dos alunos, professores, profissionais e demais interessados com ações de ensino, extensão e pesquisas relacionadas à área de logística. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto71.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/71.png" />
                                                            <div class="projeto_info">
                                                                <p> Serviços voltados aos programas de integridade da administração pública como: assessoria técnica em análise, auditoria e verificação de conformidade. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto52.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/52.png" />
                                                            <div class="projeto_info">
                                                                <p> Apoio aos municípios em temas variados como as questões de gênero e de vulnerabilidade social, além do que se refere ao Estatuto da Cidade. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto53.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/53.png" />
                                                            <div class="projeto_info">
                                                                <p> Atendimento às demandas socioeducativas de moradores das periferias e desenvolvimento de ações formativas com educadores sociais.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto54.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/54.png" />
                                                            <div class="projeto_info">
                                                                <p> Apoio à projetos inovadores que incentivem a criação de empresas e produtos, como empreendedorismo e outroas.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto55.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/55.png" />
                                                            <div class="projeto_info">
                                                                <p> Consultoria para produção da moradia e da provisão de infraestrutura no Rio de Janeiro contemporâneo.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto56.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/56.png" />
                                                            <div class="projeto_info">
                                                                <p> Consultoria para análise do trabalho a partir do processo de reestruturação econômica.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto57.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/57.png" />
                                                            <div class="projeto_info">
                                                                <p> Consultoria para apoiar política de habitação, considerando a transformação arquitetônica e habitações de interesse social em comunidades carentes.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto58.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/58.png" />
                                                            <div class="projeto_info">
                                                                <p> Desenvolvimento de soluções baseadas em Processamento de Linguagem Natural e Machine Learning para problemas de dados não estruturados.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto59.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/59.png" />
                                                            <div class="projeto_info">
                                                                <p> Investiga grupos de indivíduos, comunidades e organizações, relacionando-os às suas realidades sociais e seus problemas</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto60.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/60.png" />
                                                            <div class="projeto_info">
                                                                <p> Plataforma digital desenvolvida para aproximar pessoas com consciência ambiental e catadores de materiais recicláveis.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto62.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/62.png" />
                                                            <div class="projeto_info">
                                                                <p> Apoio ao municípios para implantação de guardas municipais.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto63.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/63.png" />
                                                            <div class="projeto_info">
                                                                <p> Identificação de novas oportunidades de desenvolvimento de mercado.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto64.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/64.png" />
                                                            <div class="projeto_info">
                                                                <p> Desenvolvimento de análise da vulnerabilidade feminina em relação a violência doméstica durante o período de quarentena do Covid-19.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto65.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/65.png" />
                                                            <div class="projeto_info">
                                                                <p> Analisa como a gestão da diversidade é representada nos conteúdos de comunicação e nas políticas internas de algumas marcas cariocas.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                            </section> 
                            <section id="secao2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="areas">
                                                <h5 class="titulo_area"> EDUCAÇÃO, CULTURA E SEUS DESAFIOS </h5>
                                            </div>
                                            <div class="linha"></div>
                                            <button class="seta-esquerda" id="cor-seta-3"><img src="/imagens/arrow1.png" alt=""></button>
                                            <button class="seta-direita" id="cor-seta-3"><img src="/imagens/arrow1.png" alt=""></button>
                                        
                                                <div class="areas_lista">
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto112.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/112.png" />
                                                            <div class="projeto_info">
                                                                <p> Capacitação de professores e demais profissionais da escola para o reconhecimento e atendimento de pessoas com o TEA e ou DI. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto105.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/105.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto tem por objetivo oferecer cursos para o aperfeiçoamento de profissionais da área a fim de transmitirem um olhar crítico em torno de obras infantojuvenis. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto103.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/103.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto tem como objetivo promover oficinas e visitas-circuito com diferentes grupos fazendo uma aproximação ao olhar arqueológico a partir das coisas. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto99.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/99.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto visa, através da literatura, proporcionar espaços com escuta atenta e reflexões coletivas de situações variadas, contribuindo para ampliar a visão de mundo dos participantes. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto96.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/96.png" />
                                                            <div class="projeto_info">
                                                                <p> O objetivo do programa é atender à demanda de forma integral aos jovens transexuais e implementar ações básicas de saúde nesse sentido. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto92.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/92.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto aponta para a possibilidade de transformar em obras de arte resíduos sólidos descartáveis e não mais utilizáveis, ampliando o conceito de sustentabilidade. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto91.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/91.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto visa à valorização e divulgação da cultura popular, numa publicação e realização de uma exposição do patrimônio imaterial do território pesquisado. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto78.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/78.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto consiste na criação de museus virtuais para entidades esportivas bem como uma carreta itinerante com exposição imersiva e interativa do esporte. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto72.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/72.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto promove a formação continuada através de cursos de capacitação em ciências a docentes do ensino fundamental, garantindo a melhoria da qualidade do ensino.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto73.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/73.png" />
                                                            <div class="projeto_info">
                                                                <p> Promoção de políticas públicas para desenvolver competências socioemocionais em alunos do ensino médio visando prevenir ambientes negativos na educação.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto75.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/75.png" />
                                                            <div class="projeto_info">
                                                                <p> Este projeto ensina várias técnicas simples de meditação aos alunos promovendo autonomia e equilíbrio emocional no cotidiano, além de possibilitar foco e concentração.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto27.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/27.png" />
                                                            <div class="projeto_info">
                                                                <p> Assessoria e consultoria para programas de Educação, fonoaudiologia clínica e Educação Especial.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto28.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/28.png" />
                                                            <div class="projeto_info">
                                                                <p> Realização de cursos para profissionais de educação básica da rede municipal sobre as relações étnico-raciais do Brasil.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto29.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/29.png" />
                                                            <div class="projeto_info">
                                                                <p> Expertise para apoiar as prefeituras na capacitação e atualização continuada de seus professores.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto30.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/30.png" />
                                                            <div class="projeto_info">
                                                                <p> Formação de novos leitores/críticos a partir de uma produção de literatura para a infância sobre a temática do meio ambiente. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto31.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/31.png" />
                                                            <div class="projeto_info">
                                                                <p> Apoio ao combate à evasão escolar através da capacitação para montagem de espaços para prática esportiva orientada.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto32.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/32.png" />
                                                            <div class="projeto_info">
                                                                <p> Assessoria para Educação Inclusiva com foco na dimensão dos processos educacionais e psicossociais.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto33.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/33.png" />
                                                            <div class="projeto_info">
                                                                <p> Consultoria e assessoria para políticas de inclusão de jovens com deficiência intelectual por meio de propostas pedagógicas.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto34.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/34.png" />
                                                            <div class="projeto_info">
                                                                <p>  Desenvolvimento de parcerias em educação especial na perspectiva da Educação Inclusiva por meio do Atendimento Educacional Especializado (AEE).</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto35.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/35.png" />
                                                            <div class="projeto_info">
                                                                <p> Apoio pedagógico aos municípios para a realização de eventos escolares envolvendo a matemática de forma lúdica.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto36.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/36.png" />
                                                            <div class="projeto_info">
                                                                <p> Desenvolvimento de ferramentas para novas formas de avaliação na educação básica, para além das provas tradicionais.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto37.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/37.png" />
                                                            <div class="projeto_info">
                                                                <p> Programas especiais e cursos voltados para a Educação de Jovens e Adultos.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto38.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/38.png" />
                                                            <div class="projeto_info">
                                                                <p> Desenvolvimento de um sistema de acolhimento aos profissionais da educação, com grupos de apoio como estratégia predominante.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto39.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/39.png" />
                                                            <div class="projeto_info">
                                                                <p> Clínica Psicológica em contextos escolares voltados para a prevenção, posvenção e luto em casos de suicídio ou morte por COVID-19.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto40.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/40.png" />
                                                            <div class="projeto_info">
                                                                <p> Apoio para a realização de cursos, oficinas, jornadas e rodas de conversa sobre a temática das drogas. </p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="projeto">
                                                            <a href="/projetos/projeto41.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/41.png" />
                                                            <div class="projeto_info">
                                                                <p>  Desenvolvimento de ações de apoio a políticas locais voltadas para o feminismo negro, mulheres negras e etc.</p>
                                                            </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                </section> 
                            <section id="secao3">
                                <div class="container">
                                    <div class="row">
                                        <div class="areas">
                                            <h5 class="titulo_area"> INFRAESTRUTURA E POLÍTICAS PÚBLICAS PARA O MEIO AMBIENTE </h5>
                                        </div>
                                            <div class="linha"></div>
                                        <button class="seta-esquerda" id="cor-seta-1"><img src="/imagens/arrow1.png" alt=""></button>
                                        <button class="seta-direita" id="cor-seta-1"><img src="/imagens/arrow1.png" alt=""></button>
                                        
                                                <div class="areas_lista">
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto111.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/111.png" />
                                                        <div class="projeto_info">
                                                            <p> O projeto propõe o diálogo entre as diferentes disciplinas do currículo básico, experienciando a transversalidade dos diferentes saberes no ambiente escolar. </p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto88.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/88.png" />
                                                        <div class="projeto_info">
                                                            <p> O Projeto visa articular uma plataforma com foco no diagnóstico dos manguezais, perfil socioeconômico e cultural dos pescadores, identificação dos conflitos urbanos-industriais e muito mais. </p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto68.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/68.png" />
                                                        <div class="projeto_info">
                                                            <p> São objetivos do programa a difusão, a sensibilização e a capacitação da sociedade para as questões ambientais. </p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto0.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/0.png" />
                                                        <div class="projeto_info">
                                                            <p> Supervisão ambiental e capacitação de fiscais, apoio ao licenciamento ambiental no que se refere ao cumprimento de suas condicionantes ao meio ambiente. </p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto1.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/1.png" />
                                                            <div class="projeto_info">
                                                                <p> Atendimento à emergências e demandas das esferas de Governo, parceiros acadêmicos, de pesquisa e outros órgãos relacionados à redução de risco de desastres.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto2.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/2.png" />
                                                            <div class="projeto_info">
                                                                <p> Projetos ambientais marinhos, terrestres e serviços tecnológicos urbanos.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto3.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/3.png" />
                                                            <div class="projeto_info">
                                                                <p> Monitoramento de mudanças climáticas observando seu potencial impacto para os ecossistemas costeiros.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto4.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/4.png" />
                                                            <div class="projeto_info">
                                                                <p> Produção de materiais e atividades de educação na perspectiva crítica.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto5.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/5.png" />
                                                            <div class="projeto_info">
                                                                <p> Apoio às cidades na avaliação dos impactos ambientais das indústrias e desenvolvimento de técnicas de tratamento visando a minimização desses impactos.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto6.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/6.png" />
                                                            <div class="projeto_info">
                                                                <p> O projeto desenvolve tecnologias compensatórias dos efeitos das chuvas e suas inundações em áreas urbanas.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto7.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/7.png" />
                                                            <div class="projeto_info">
                                                                <p> Assessoria para detectação de contaminação pela presença de plástico na água e suas consequências.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto8.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/8.png" />
                                                            <div class="projeto_info">
                                                                <p> Desenvolvimento e emprego de metodologias e sistemas de identificação aplicados nos problemas que se relacionam à Biodiversidade.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto9.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/9.png" />
                                                            <div class="projeto_info">
                                                                <p> Realização de medidas "in situ" espacializadas nas rotas dos navios na costa fluminense e disponibilização dos dados para a comunidade científica e privada.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto10.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/10.png" />
                                                            <div class="projeto_info">
                                                                <p> Desenvolvimento e testagem de novos compósitos para aplicações na purificação de água, polimento de efluentes e remediação de matrizes aquosas em áreas contaminadas.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto11.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/11.png" />
                                                            <div class="projeto_info">
                                                                <p> Desenvolvimento de novas tecnologias voltadas à sustentabilidade, com o objetivo de viabilizar e estimular atitudes de responsabilidade socioambiental.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto12.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/12.png" />
                                                            <div class="projeto_info">
                                                                <p> Apoio aos municípios no monitoramento e suporte à gestão ambiental marinha; Suporte e monitoramento em áreas de maricultura.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto13.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/13.png" />
                                                            <div class="projeto_info">
                                                                <p> Organização de uma plataforma que se constituirá em um acervo digital interativo, estruturando o observatório socioambiental da baía de Sepetiba.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto14.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/14.png" />
                                                            <div class="projeto_info">
                                                                <p> Apoio para políticas públicas de meio ambiente com técnicas de monitoramento da poluição e  de metais pesados.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    <div class="projeto">
                                                            <a href="/projetos/projeto15.php" id="link_projeto">
                                                            <img class="img_fluid" src="/imagens/img-pjt/15.png" />
                                                            <div class="projeto_info">
                                                                <p> Onde se define as regiões mais indicadas para a execução de reflorestamento, obras de recarga artificial da água subterrânea e etc.</p>
                                                            </div>
                                                            </a>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                    </div>
                                </div>
                            </section>
                            <section id="secao4">
                                <div class="container">
                                    <div class="row">
                                        <div class="areas">
                                            <h5 class="titulo_area"> SAÚDE, CIÊNCIAS DO ESPORTE E SUAS INTERFACES </h5>
                                        </div>
                                            <div class="linha"></div>
                                        <button class="seta-esquerda" id="cor-seta-2"><img src="/imagens/arrow1.png" alt=""></button>
                                        <button class="seta-direita" id="cor-seta-2"><img src="/imagens/arrow1.png" alt=""></button>
                                        
                                                <div class="areas_lista">
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto80.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/80.png" />
                                                        <div class="projeto_info">
                                                            <p> Plano de Monitoramento visando a prestação de serviços estratégicos para o tratamento de pacientes com câncer de próstata.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto17.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/17.png" />
                                                        <div class="projeto_info">
                                                            <p> É uma  unidade de ensino, pesquisa  e inovação tecnológica com foco no uso das tecnologias digitais aplicadas à saúde intitulado como ‘Saúde Digital’. </p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto83.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/83.png" />
                                                        <div class="projeto_info">
                                                            <p> Promove cursos e oficinas sobre sexualidade e práticas mais seguras para prevenção de Infecções Sexualmente Transmissíveis - ISTs/AIDS</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto113.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/113.png" />
                                                        <div class="projeto_info">
                                                            <p> Promove cursos de atualização para profissionais com o objetivo assegurar o acesso dos jovens à educação sexual.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto110.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/110.png" />
                                                        <div class="projeto_info">
                                                            <p> Canal de comunicação para discussão, estudos, planejamentos, desenvolvimento e execução de atividades em ciência, tecnologia, inovação e mais.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto109.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/109.png" />
                                                        <div class="projeto_info">
                                                            <p> O projeto é voltado para o desenvolvimento do Futebol Feminino, visando à avaliação, planejamento e controle da preparação de atletas durante o processo de treinamento e competição.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto108.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/108.png" />
                                                        <div class="projeto_info">
                                                            <p> Este projeto visa a implementação de um programa de capacitação abrangente para a equipe de enfermagem, com o objetivo de aprimorar o processo de doação de órgãos e transplantes.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto102.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/102.png" />
                                                        <div class="projeto_info">
                                                            <p> O projeto tem como objetivo realizar a triagem dos pacientes com indicação para a cirurgia da coluna vertebral e acompanhar ambulatorialmente os casos operados.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto101.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/101.png" />
                                                        <div class="projeto_info">
                                                            <p> O projeto tem como objetivo auxiliar na formação de neurologistas especializados no tratamento da doença de Parkinson e muito mais.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto98.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/98.png" />
                                                        <div class="projeto_info">
                                                            <p> Visa capacitar profissionais de saúde no manejo da obesidade na adolescência através da promoção de hábitos alimentares saudáveis.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto90.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/90.png" />
                                                        <div class="projeto_info">
                                                            <p> Curso projetado para oferecer uma visão abrangente entre transexualidade e saúde e capacitar profissionais a oferecer cuidados completos e respeitosos a pessoas transexuais.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto89.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/89.png" />
                                                        <div class="projeto_info">
                                                            <p> A presente proposta apoia a formulação de políticas públicas para o enfrentamento da violência de gênero, reconhecendo os efeitos da identidade de gênero e orientação sexual sobre a mortalidade.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto83.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/83.png" />
                                                        <div class="projeto_info">
                                                            <p> Promove cursos de atualização para profissionais com o objetivo assegurar o acesso dos jovens à educação sexual.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto85.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/85.png" />
                                                        <div class="projeto_info">
                                                            <p> O Núcleo oferece uma série de especialidades médicas para a comunidade com o objetivo principal de prestar atenção integral à saúde dos adolescentes.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto84.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/84.png" />
                                                        <div class="projeto_info">
                                                            <p> Plano de Monitoramento visando a prestação de serviços estratégicos para o tratamento de pacientes com problemas cardiovasculares.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto82.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/82.png" />
                                                        <div class="projeto_info">
                                                            <p> Análise comparativa dos modelos de contratação de prestadores de serviços de Saúde no Estado do Rio de Janeiro.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto81.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/81.png" />
                                                        <div class="projeto_info">
                                                            <p> Plano de Monitoramento visando a prestação de serviços estratégicos para o atendimento de pacientes com cardiopatias congênitas.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto79.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/79.png" />
                                                        <div class="projeto_info">
                                                            <p> Plano de Monitoramento visando a prestação de serviços estratégicos para o atendimento multidisciplinar de pacientes com dor crônica.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto66.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/66.png" />
                                                        <div class="projeto_info">
                                                            <p> O programa de prevenção de novas fraturas visa atender a demanda dos pacientes portadores de osteoporose que necessitam de atendimento de alta complexidade.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto67.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/67.png" />
                                                        <div class="projeto_info">
                                                            <p> O projeto fomenta e viabiliza o acesso a práticas variadas de atividades físicas de Lazer e Esporte para o público da terceira idade.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto69.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/69.png" />
                                                        <div class="projeto_info">
                                                            <p> O projeto tem como objetivo fomentar e viabilizar a iniciação esportiva voltada para escolinhas de Ginástica para crianças e jovens de 6 a 16 anos.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto76.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/76.png" />
                                                        <div class="projeto_info">
                                                            <p> Plano de Monitoramento visando a prestação de serviços estratégicos de diagnósticos e tratamento das disfunções miccionais.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto77.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/77.png" />
                                                        <div class="projeto_info">
                                                            <p> Expansão da Assistência do Hospital Universitário Pedro Ernesto que visa impulsionar e influenciar o atendimento oncológico.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto16.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/16.png" />
                                                        <div class="projeto_info">
                                                            <p> Promoção do acolhimento de pacientes com Síndrome de Down e de seus familiares de forma multidisciplinar.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto18.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/18.png" />
                                                        <div class="projeto_info">
                                                            <p> Promoção da saúde, alimentação, nutrição e construção de estratégias de intervenção no âmbito da Nutrição e Educação em Saúde Coletiva.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto19.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/19.png" />
                                                        <div class="projeto_info">
                                                            <p> Capacitação de professores e demais profissionais da escola para o reconhecimento de situações de temas transversais.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto20.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/20.png" />
                                                        <div class="projeto_info">
                                                            <p>É um projeto de extensão universitária que oferece a prática de atividade física regular e orientada a pessoas com mais de 60 anos de idade, na UERJ.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto21.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/21.png" />
                                                        <div class="projeto_info">
                                                            <p> Leva residentes na área de saúde para prestar atendimento ao interior do Estado.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto22.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/22.png" />
                                                        <div class="projeto_info">
                                                            <p> Assistência à crianças com excesso de peso e desenvolvimento de protocolos em obesidade infantil para profissionais de saúde da atenção primária e secundária. </p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto23.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/23.png" />
                                                        <div class="projeto_info">
                                                            <p> Capacitação de profissionais de saúde para o manejo do aleitamento materno em unidades básicas ou em hospitais.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto24.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/24.png" />
                                                        <div class="projeto_info">
                                                            <p> Orientação sobre questões de saúde e cuidado da criança, maternidade e parentalidade, por meio de textos e fotos explicativas.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto25.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/25.png" />
                                                        <div class="projeto_info">
                                                            <p> Intervenção clínica na qual a vibração mecânica é transmitida para o corpo de uma pessoa promovendo o exercício de vibração de corpo inteiro.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto26.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/26.png" />
                                                        <div class="projeto_info">
                                                            <p> Promoção para o desenvolvimento de tecnologias que possam motivar mudanças de comportamento nos itens da alimentação e nutrição.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            </section> 
                            <section id="secao5">
                                <div class="container">
                                    <div class="row">
                                        <div class="areas">
                                            <h5 class="titulo_area"> SOLUÇÕES EM ENGENHARIAS </h5>
                                        </div>
                                            <div class="linha"></div>
                                        <button class="seta-esquerda" id="cor-seta-4"><img src="/imagens/arrow1.png" alt=""></button>
                                        <button class="seta-direita" id="cor-seta-4"><img src="/imagens/arrow1.png" alt=""></button>
                                    
                                                <div class="areas_lista">
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto107.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/107.png" />
                                                        <div class="projeto_info">
                                                            <p> Pró-Reforma é um aplicativo web que apoia a especificação e quantificação técnica e o orçamento de produtos e serviços para obras de revestimento.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto106.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/106.png" />
                                                        <div class="projeto_info">
                                                            <p> O projeto busca estimativas precisas, ágeis e rastreáveis, que entregam redução do risco, na busca de uma solução que otimize a relação custo/receita.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto70.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/70.png" />
                                                        <div class="projeto_info">
                                                            <p> Pesquisas em geotecnologias para apoio à realização de Cadastro Territorial Multifinalitário, prevenção a deslizamentos e consultoria e cursos para prefeituras</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto74.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/74.png" />
                                                        <div class="projeto_info">
                                                            <p> O curso permitirá a coleta de dados com base em satélites artificiais e GPS em atividade prática, visando apoiar ações acadêmicas e profissionais.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto42.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/42.png" />
                                                        <div class="projeto_info">
                                                            <p> Solução a partir de engenharia de produção e de processos para melhoria da saúde pública (SUS).</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto43.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/43.png" />
                                                        <div class="projeto_info">
                                                            <p> Geração, difusão e inserção de tecnologia, contribuindo para o desenvolvimento de ações estruturantes junto aos principais setores econômicos.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto44.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/44.png" />
                                                        <div class="projeto_info">
                                                            <p>  Aplicação de tecnologias com uso intensivo de Inteligência Artificial e Internet das Coisas (IoT).</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto45.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/45.png" />
                                                        <div class="projeto_info">
                                                            <p> Tecnologia resultante da inovação disruptiva com baixo custo de implantação. </p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto46.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/46.png" />
                                                        <div class="projeto_info">
                                                            <p> Assessoria para avaliação do nível de segurança hídrica do abastecimento metropolitano do Rio de Janeiro.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto47.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/47.png" />
                                                        <div class="projeto_info">
                                                            <p> Assessoria, pesquisas, cursos, projetos e consultorias no uso de Sistemas de Informações Geográficas e etc.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto48.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/48.png" />
                                                        <div class="projeto_info">
                                                            <p> Monitoramento da qualidade das águas urbanas visando múltiplos usos dos recursos hídricos.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto49.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/49.png" />
                                                        <div class="projeto_info">
                                                            <p> Modelo de pluviômetro de baixo custo, micro controlado, programado para emissão de alarme residencial.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto50.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/50.png" />
                                                        <div class="projeto_info">
                                                            <p> Apoio à criação de uma base sólida de conhecimento a ser disseminado para empreendedores acadêmicos e não acadêmicos.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                    <div class="projeto">
                                                        <a href="/projetos/projeto51.php" id="link_projeto">
                                                        <img class="img_fluid" src="/imagens/img-pjt/51.png" />
                                                        <div class="projeto_info">
                                                            <p> Criar pontes entre o mercado e mundo acadêmico, projetos inovadores e investidores, ideias inspiradoras e realidade da ação.</p>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            </section> 
                                
                            </div>




                            <?php

                                    // Utilizando o resultado em condições // 

                                }elseif(count($resultado_busca) >= 1){
                                                    ?>
                                                    <style type="text/css">
                                                            .sliders{
                                                                display:none
                                                            }
                                                            .faperj{
                                                                    top: 2200 !important;
                                                            }
                                                            .ceed{
                                                                top: 2200 !important;
                                                            }
                                                                                                                                                                /* RESPONSIVE */
                                                            @media only screen and (max-width: 768px) {
                                                                .faperj{
                                                                position: absolute;
                                                                top: 2800 !important;
                                                            }
                                                            .ceed{
                                                                position: absolute;
                                                                top: 2800 !important;
                                                            }
                                                            }
                                                    </style> 
                                                    <section id="resultado-busca">
                                                    <div class="container">
                                                    <div class="row">   
                                                    <div class="areas">
                                                <h5 class="titulo_area"> RESULTADOS: </h5>
                                            </div>
                                            <div class="linha"></div>
                                            <button class="seta-esquerda" id="cor-seta-busca"><img src="/imagens/arrow1.png" alt=""></button>
                                            <button class="seta-direita" id="cor-seta-busca"><img src="/imagens/arrow1.png" alt=""></button>
                                            
                                                    <div class="areas_lista">        

                                                                                <?php foreach($resultado_busca as $Resultado) {
                                                                                            ?>

                                                                                <div class="projeto">
                                                                                <a href="/projetos/projeto<?php echo $Resultado['id'];?>.php" id="link_projeto">
                                                                                <img class="img_fluid" src="/imagens/img-pjt/<?php echo $Resultado['id'];?>.png" />
                                                                                </a>
                                                                                </div>
                                                                                
                                                
                                    <?php             
                                } ?>

                            </div>  
                            </div>
                            </div>  
                            </section>

                            <?php 
                            }else{
                            ?>
                            <style type="text/css">
                                .sliders{
                                    display:none
                                }
                            </style>
                            <h2 id="sem-resultados">Não foram encontrados resultados pelo termo buscado.</h2>
                            <?php
                            } 
                            ?>
                    
                    <!-- UP -->    
                        <div>
                            <a href="#img-banner" id="subir">
                                <img id="img-up" src="/imagens/arrow1.png">
                            </a>
                        </div>    

                        <script src="/javascript/up.js"></script>
                    <!-- FOOTER -->
                    <?php include('footer.php') ?>
                    <!-- CONTATO WHATSAPP -->
                    <a href="https://api.whatsapp.com/send?phone=5521968982605&text=Ol%C3%A1,%20queria%20uma%20informa%C3%A7%C3%A3o%20do%20CONECTA">
                    <img id="contato" src="/imagens/contatowhats.png">
                    </a>
            </div>
                    <!-- JS SLIDERS -->
                    <script src="/javascript/carrossel.js"></script>
                    <!-- JS BOOTSTRAP -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

                    <script src="/javascript/header-transparent.js"></script>
    
        <!-- FECHANDO DIV TUDO -->
    </body>
</html>
