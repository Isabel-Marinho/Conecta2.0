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
            $id = '94';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> CONECTA U+Proposta de Serviços Inovadores no MAIDAI </h1>
            <br>
                <p class="conteudo">
                O projeto veio com a parceria de pesquisadores das áreas de ciências sociais e da saúde e engenharias, induzida pelo Programa de Mestrado e 
                Doutorado Acadêmico para Inovação – MAIDAI da UERJ, proposto pelo CNPq em 2020, baseada no marco legal de C,T&I. <br><br>
                Os objetivos são:<br> 1. conectar atores do ecossistema de inovação da UERJ para transferirem tecnologia da universidade para o mercado, oferecendo serviços inovadores de gestão da inovação, de base científica e <br><br>
                2. estruturar empresa spin off acadêmica, usando o modelo das UDTs do LabEEL AfeTAR e ONI, que irão prover serviços inovadores de alta tecnologia aos sistemas público e
                privado de saúde e criar banco de dados específico, para futuras pesquisas.<br><br> A metodologia abrange: pesquisa teórica e implantação de infraestrutura de spin off, 
                para a gestão e de serviços clínicos, coleta, análise e divulgação de dados científicos e tecnológicos identificados na prestação de serviços. 
                Espera-se propor e implementar um processo de gestão da inovação de base científica nas áreas da saúde e correlatas e estruturar a spin off acadêmica na UERJ.

                </p>
               
            <p class="conteudo2">
        Palavas-chave: inovação; spin off; helice triplice; MAIDAI
            <br><br>
        Unidade Acadêmica: Faculdade de Administração e Finanças
            <br><br>
        Pesquisador Responsável: Branca Regina Cantisano dos Santos E Silva
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
                           <div> <img class="img-agenda" src="/imagens/agenda-img/agenda-9.png" /> </div>
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