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
            $id = '86';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Biópsia líquida de urina para detecção do câncer de próstata </h1>
            <br>
                <p class="conteudo">
                No Brasil, o câncer de próstata é um problema de saúde pública relevante, 
                correspondendo a cerca de 30% dos diagnósticos de câncer em homens.
                A detecção precoce aumenta as chances de sobrevivência do paciente, sendo assim,
                 é indicado que homens acima dos 50 anos realizem regularmente exames de rastreamento 
                 para o câncer de próstata. Entre os teste de rastreio estão o exame de toque retal 
                 e um exame de sangue para dosar o antígeno prostático específico (PSA). <br><br>
                 Porém, esses exames não são específicos para o câncer de próstata e o médico pode
                  ficar com dúvidas em relação a necessidade de o paciente realizar uma biópsia.
                  Dessa forma, em torno de 70% das biópsias realizadas na próstata são desnecessárias, 
                  e poderiam ser evitadas com o uso de exames mais específicos para esse câncer. 
                  Diante disso, o objetivo do nosso projeto é desenvolver um exame de urina para detectar 
                  o câncer de próstata, que ajude os médicos a identificar os pacientes que realmente 
                  necessitam da biópsia, evitando biópsias desnecessárias e reduzindo os custos médicos.

                </p>
               
            <p class="conteudo2">
        Palavas-chave: diagnóstico; urina; câncer de próstata
            <br><br>
        Unidade Acadêmica: UFRJ
            <br><br>
        Pesquisador Responsável: Maria Beatriz dos Santos Mota
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