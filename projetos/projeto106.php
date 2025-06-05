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
            $id = '106';
            require_once( '../php/contador.php' );
            ?>
        <!-- PROJETO -->
        <div class="conteudo_proj">
            <h1 class="titulo_projeto"> Modelos preditivos para estimativa precisa e ágil do custo de construção em fase preliminar do desenvolvimento de projetos. </h1>
            <br>
                <p class="conteudo">
                Na fase preliminar do desenvolvimento de projetos de edificações, apesar do custo incorrido ser baixo, o comprometimento do custo final é muito alto. 
                Com as metodologias de estimativa de custo atualmente disponíveis, projetos pouco detalhados são responsáveis por estimativas com alto grau de imprecisão. 
                O Custo Unitário Geométrico (CUG) é um método inovador de predição dos custos de construção. Na ausência de um projeto de referência idêntico ao em desenvolvimento, 
                um modelo CUG permite enquadrar o empreendimento em uma amostra de projetos variados, graças ao uso da regressão linear múltipla no tratamento estatístico dos dados, 
                em uma transformação de dados em inteligência.
                <br><br> A modelagem CUG resulta estimativas precisas, ágeis e rastreáveis, que entregam redução do risco, competitividade e 
                poder de ação sobre o projeto na busca de uma solução que otimize a relação custo/receita. Um modelo CUG é entregue na forma de uma calculadora CUG, cujo inputs são 
                informações preliminares de um empreendimento e o output são seus custos de construção. 
                <br><br>
                Obs: O vídeo enviado é da época o projeto era vinculado à UFRJ, por ser residente da incubadora de empresas da COPPE. Caso haja interesse no projeto, podemos produzir um novo vídeo atualizando o vínculo que atualmente é com a UERJ.
                </p>
               
            <p class="conteudo2">
        Palavas-chave: custo; construção; predição
            <br><br>
        Unidade Acadêmica: Faculdade de Engenharia
            <br><br>
        Pesquisador Responsável: Flávia Schmidt de Andrade Lima
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