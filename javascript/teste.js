<!-- NAV INCLUDE -->
<script src="/javascript/includehtml.js"></script>

<!-- HTML -->
<html>
    <head>
        <meta charset="utf-8" />
        <link href="/estilos/principal.css" rel="stylesheet">
        <title>Conecta</title>
        <link rel="icon" type="image/x-icon" href="/imagens/icon.png">
        <link href="/estilos/busca.css" rel="stylesheet">
    </head>
    
    <body>
        <!-- NAV -->
        <div w3-include-html="header.html"></div>
        <!-- BANNER -->
        <div class="banner">
        <div class="bemvindo">
        <h1 id="welcome">Bem vindos ao CONECTA, 
        a plataforma que coloca a Universidade na palma da sua mão.
        Navegue e fale conosco!</h1>
        </div>
        
         <!-- Busca -->
        <form method="get" action="" class="busca">
            <input type="text" name="busca" value="<?php if(isset($_GET['busca'])) echo ($_GET['busca']); ?>" maxlength="30" id="txtBusca" placeholder="Buscar..." />
       <button type="submit" id="btnBusca" value="Buscar">
            <img src="/imagens/search.png" id="imgBusca" alt="Buscar"/>
        </button>
        </form>
        
        </div>
        
        <!-- PHP -->
<?php
    require "conexao.php";
    
    // Guardando a Busca //
    $palavra = ($_GET['busca']);
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
                if (empty($palavra)){
                    ?>
                
            <!-- PROJETOS -->
                <div class="sliders">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="areas">
                                    <h5 class="titulo_area"> CIDADES INTELIGENTES E MEIO AMBIENTE </h5>
                                </div>
                                <button class="seta-esquerda" id="cor-seta-1"><img src="/imagens/arrow1.png" alt=""></button>
                                <button class="seta-direita" id="cor-seta-1"><img src="/imagens/arrow1.png" alt=""></button>
                                
                                        <div class="areas_lista">
                                            
                                            <div class="projeto">
                                                <a href="/projetos/projeto00.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/00.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto01.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/01.png" />
                                                    <div class="projeto_info">
                                                        <p> Atendimento à emergências e demandas das esferas de Governo, parceiros acadêmicos, de pesquisa e outros órgãos relacionados à redução de risco de desastres.</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto02.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/02.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto03.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/03.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto04.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/04.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto05.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/05.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto06.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/06.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto07.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/07.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto08.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/08.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto09.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/09.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto10.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/10.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto11.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/11.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto12.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/12.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto13.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/13.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto14.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/14.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            <div class="projeto">
                                                    <a href="/projetos/projeto15.html" id="link_projeto">
                                                    <img class="img_fluid" src="/imagens/img-pjt/15.png" />
                                                    <div class="projeto_info">
                                                        <p>Resumo do Projeto</p>
                                                    </div>
                                                    </a>
                                            </div>
                                            
                                        </div>
                                        
                                        
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="areas">
                                    <h5 class="titulo_area"> SAÚDE E SUAS INTERFACES </h5>
                                </div>
                                <button class="seta-esquerda" id="cor-seta-2"><img src="/imagens/arrow1.png" alt=""></button>
                                <button class="seta-direita" id="cor-seta-2"><img src="/imagens/arrow1.png" alt=""></button>
                                
                                        <div class="areas_lista">
                                             <div class="projeto">
                                                <a href="/projetos/projeto16.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/16.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto17.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/17.png" />
                                                <div class="projeto_info">
                                                    <p> É uma  unidade de ensino, pesquisa  e inovação tecnológica com foco no uso das tecnologias digitais aplicadas à saúde intitulado como ‘Saúde Digital’. </p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto18.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/18.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto19.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/19.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto20.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/20.png" />
                                                <div class="projeto_info">
                                                    <p>É um projeto de extensão universitária que oferece a prática de atividade física regular e orientada a pessoas com mais de 60 anos de idade, na UERJ.</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto21.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/21.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto22.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/22.png" />
                                                <div class="projeto_info">
                                                    <p> Assistência à crianças com excesso de peso e desenvolvimento de protocolos em obesidade infantil para profissionais de saúde da atenção primária e secundária. </p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto23.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/23.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto24.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/24.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto25.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/25.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto26.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/26.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                 </div>
                            </div>
                    </section> 
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="areas">
                                    <h5 class="titulo_area"> DESAFIOS DA EDUCAÇÃO </h5>
                                </div>
                                <button class="seta-esquerda" id="cor-seta-3"><img src="/imagens/arrow1.png" alt=""></button>
                                <button class="seta-direita" id="cor-seta-3"><img src="/imagens/arrow1.png" alt=""></button>
                            
                                        <div class="areas_lista">
                                             <div class="projeto">
                                                <a href="/projetos/projeto27.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/27.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto28.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/28.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto29.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/29.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto30.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/30.png" />
                                                <div class="projeto_info">
                                                    <p> Formação de novos leitores/críticos a partir de uma produção de literatura para a infância sobre a temática do meio ambiente. </p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto31.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/31.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto32.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/32.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto33.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/33.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto34.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/34.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto35.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/35.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto36.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/36.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto37.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/37.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto38.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/38.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto39.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/39.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto40.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/40.png" />
                                                <div class="projeto_info">
                                                    <p> Apoio para a realização de cursos, oficinas, jornadas e rodas de conversa sobre a temática das drogas. </p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto41.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/41.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                 </div>
                            </div>
                    </section> 
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="areas">
                                    <h5 class="titulo_area"> SOLUÇÕES EM ENGENHARIAS </h5>
                                </div>
                                <button class="seta-esquerda" id="cor-seta-4"><img src="/imagens/arrow1.png" alt=""></button>
                                <button class="seta-direita" id="cor-seta-4"><img src="/imagens/arrow1.png" alt=""></button>
                            
                                        <div class="areas_lista">
                                             <div class="projeto">
                                                <a href="/projetos/projeto42.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/42.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto43.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/43.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto44.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/44.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto45.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/45.png" />
                                                <div class="projeto_info">
                                                    <p> Tecnologia resultante da inovação disruptiva com baixo custo de implantação. </p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto46.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/46.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto47.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/47.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto48.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/48.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto49.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/49.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto50.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/50.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto51.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/51.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                 </div>
                            </div>
                    </section> 
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="areas">
                                    <h5 class="titulo_area"> QUESTÕES URBANAS E SOCIAIS </h5>
                                </div>
                                <button class="seta-esquerda" id="cor-seta-5"><img src="/imagens/arrow1.png" alt=""></button>
                                <button class="seta-direita" id="cor-seta-5"><img src="/imagens/arrow1.png" alt=""></button>
                            
                                        <div class="areas_lista">
                                             <div class="projeto">
                                                <a href="/projetos/projeto52.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/52.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto53.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/53.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto54.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/54.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto55.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/55.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto56.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/56.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto57.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/57.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto58.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/58.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto59.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/59.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto60.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/60.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto61.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/61.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto62.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/62.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto63.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/63.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto64.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/64.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
                                                </div>
                                                </a>
                                            </div>
                                            <div class="projeto">
                                                <a href="/projetos/projeto65.html" id="link_projeto">
                                                <img class="img_fluid" src="/imagens/img-pjt/65.png" />
                                                <div class="projeto_info">
                                                    <p>Resumo do Projeto</p>
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
                    </style>
                    <?php foreach($resultado_busca as $Resultado) {
                        ?>
                            <div class="container-busca">
        <h3 class="busca_tab">
        <table>
            <tr>
                <th scope="row"> <?php echo $Resultado['nome_proj']; ?> </th>
                <td><?php echo "  ".$Resultado['p_chave']; ?> </td>
                <td><?php echo "  ".$Resultado['u_academ']; ?> </td>
                <td><?php echo "Pesquisadorª: "." ".$Resultado['pesquisador']; ?> </td>
            </tr>
        </table>    
        </h3>
        </div>
        <?php } }else{
            
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
        
    <!-- FOOTER -->
    <div w3-include-html="footer.html"></div>
    <!-- CONTATO WHATSAPP -->
    <a href="https://api.whatsapp.com/send?phone=5521968982605&text=Ol%C3%A1,%20queria%20uma%20informa%C3%A7%C3%A3o%20do%20CONECTA">
    <img id="contato" src="/imagens/contatowhats.png">
    </a>
    <!-- JS SLIDERS -->
    <script src="/javascript/carrossel.js"></script>
    <!-- JS INCLUIR HTML -->
    <script>
    includeHTML();
    </script>
    <script src="/javascript/header-transparent.js"></script>
    </body>
</html>
