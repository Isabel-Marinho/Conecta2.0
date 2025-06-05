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
            $id = '95';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Observatório de Políticas Públicas para Adolescência </h1>
            <br>
                <p class="conteudo">
                O Observatório de Políticas Públicas para o Jovem Adolescente da UERJ representa uma 
                estratégia da Universidade do Estado do Rio de Janeiro no fortalecimento das políticas 
                públicas direcionadas à adolescência. Este observatório é uma plataforma interdisciplinar 
                que reúne dados, informações, oportunidades e eventos atualizados relacionados a políticas 
                públicas para jovens adolescentes, podendo atuar em áreas, como questões raciais, de gênero, 
                mercado de trabalho, cultura, religião, mídias sociais, arte, esporte, direito à cidade, 
                política de educação e violência. O observatório oferece serviços de apoio às prefeituras 
                para a implementação ações como: capacitação, assessoria, consultoria e projetos especiais.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: Políticas Públicas; Primeiro emprego; Trabalho digno; Adolescência
            <br><br>
        Unidade Acadêmica: Instituto de Educação Física e Desportos
            <br><br>
        Pesquisador Responsável: Tatiane Alves
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