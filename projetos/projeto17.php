<!-- NAV INCLUDE -->
<script src="/javascript/includehtml.js"></script>

<html>
    <head>  
    <meta charset="utf-8" />
    <link href="/estilos/header-footer.css" rel="stylesheet">
    <link href="/estilos/projeto.css" rel="stylesheet">
    <title>Conecta-Projetos</title>
    <link rel="icon" type="image/x-icon" href="/imagens/icon.png">
    <style>
        a{
      text-decoration: none;
      color: blue;
        }
        .conteudo{
            font-size: 25px;
        }
    </style>
    </head>
    <body>
        <?php include('header.php');
    $id = '17';
    require_once( '../php/contador.php' );
    ?>
        <!-- VÍDEO -->
        <iframe class="video" src="https://www.youtube.com/embed/10OoJXhtcqM?si=uLIgmIcbF-JCVC0H?rel=0&autoplay=1" title="Telessaúde UERJ" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
        allowfullscreen></iframe>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Telessaúde UERJ </h1>
            <br>
                <p class="conteudo">
                 Com vinte anos de experiência, o Telessaúde UERJ é uma  unidade de ensino, pesquisa  e inovação tecnológica com foco no uso das tecnologias digitais aplicadas à saúde intitulado como ‘Saúde Digital’. Dentre as atividades extensionistas destaca-se  (I) o  desenvolvimento e a oferta de sistemas de registro eletrônico em saúde, versão web e aplicativo, para assistência remota nas modalidades teleconsulta, teleinterconsulta, teleconsultoria e telediagnóstico e  (II) atividades de  qualificação e formação em saúde desenvolvendo, organizando e ofertando  cursos à distância e materiais instrucionais em saúde. O Programa de Extensão Telemedicina e Telessaúde UERJ, com acesso disponível em <a href="https://www.telessaude.uerj.br/mestrado/programa-de-extensao-telemedicina-e-telessaude/">https://www.telessaude.uerj.br/mestrado/programa-de-extensao-telemedicina-e-telessaude/</a>,  desenvolve projetos específicos que tem relação com os municípios do estado do Rio de Janeiro, com os demais estados brasileiros e com países de língua portuguesa. Na formação de  pessoal altamente qualificado para atuar na saúde digital, o curso stricto sensu Mestrado Profissional em Telemedicina e Telessaúde, com acesso disponível em <a href="https://www.telessaude.uerj.br/mestrado/">https://www.telessaude.uerj.br/mestrado/</a>, utiliza metodologia à distância inclusiva. Ademais, na interface saúde escolar, o subprojeto ‘Telessaúde nas Escolas’, disponível em <a href="https://www.telessaude.uerj.br/escola/">https://www.telessaude.uerj.br/escola/</a>, são disponibilizados matérias educativos e instrucionais para crianças, jovens, equipe escolar e comunidades.
                    <br>
                </p>

            <p class="conteudo2">
        Palavras-chave: telessaúde; saúde digital; inovação tecnológica; educação à distância
            <br><br>
        Unidade Acadêmica: Faculdade de Ciências Médicas
            <br><br>
        Pesquisador responsável: Alexandra Monteiro
            <br><br>
        Site: <a href="https://www.telessaude.uerj.br/site/">Telessaúde</a>
            <br><br>
        Contato: (21) 96898-2605  <br>
        faleconosco@telessaude.uerj.br
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