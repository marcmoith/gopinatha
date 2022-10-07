<style>        
  .parallax {
  /* Coloca a imagem a ser usada como background */

    background-image: url("assets/images/banners/<?php echo $banner;?>");

    /* Defina uma altura para a visão que o usuário terá da imagem */
    min-height: 250px;

    /* defina o background como fixo e posicione a imagem */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }    
</style>

<nav id="bc" aria-label="breadcrumb" style="margin-left: 12px; margin-top: 16px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home">Home</a></li>
    <li class="breadcrumb-item"><a href="produtos">Produtos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gestão Avançada</li>
  </ol>
</nav>





<div class="quem-somos" style="padding: 10px 10px 10px 10px;">
  <div class="col-12" style="margin-bottom: 35px;">
    <div class="parallax" style="-webkit-box-shadow: inset 5px 5px 11px 1px #000000; box-shadow: inset 5px 5px 11px 1px #000000;"></div>
  </div><!-- col-12 -->
  <h1 class="page-header" style="margin-left: 10px;">Gestão Avançada</h1>
  <div class="box-01-total" style="margin-left:-450px; margin-top: -58px"> 
    <div class="box-01">
      <div class="conteudo">
        <div class="linha">
          <div class="barra" style="background-color: green;"></div>
        </div> <!-- Linha -->
      </div><!-- conteudo -->
    </div><!-- box-01 -->
  </div><!-- box-01-total -->
  <p class="justify-content caracteristicas">
        É possível que em uma determinada fase da existência de uma 
        companhia, ela deva se adequar a  nova gestão dos capitais, ajustando-a as 
        suas necessidades em particular. Somos especializados em auxiliar estas empresas em
        sua transição. Após a realização do <a href='diagnostico-organizacional'>Diagnóstico Organizacional</a>
        é definido o foco, ou combinação de focos de gestão, a estratégia, a tática e as formas
        de medição e divulgação dos resultados e índices entre os <em>stakeholders</em>.
  </p>
  <div class="container mt-5">
    <ul class="m-0 nav nav-fill nav-justified nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation"> 
        <a class="active nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true"> 
          Foco 
        </a> 
      </li>
      <li class="nav-item" role="presentation"> 
        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false"> 
          Estratégia 
        </a> 
      </li>
      <li class="nav-item" role="presentation"> 
        <a class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" role="tab" aria-controls="messages" aria-selected="false"> 
          Tática
        </a> 
      </li>
      <li class="nav-item" role="presentation"> 
        <a class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" role="tab" aria-controls="settings" aria-selected="false"> 
          Medição
        </a> 
      </li>
    </ul>
    <div class="border-grey bg-white p-3 tab-content">
      <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row" style="margin: 15px 0px 15px 0px;">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">Focos de Gestão</h2>
                <p class="card-text">
                  A Gestão pode estar focada em cinco elementos primários ou na combinação destes, 
                  que são:
                </p>
                <ul class="objetivos" style="list-style-type: none; margin-left: -25px;">
                  <li>
                    <a href="#" data-bs-toggle="modal" style="color: brown;" data-bs-target="#produto" title="A Gestão com foco no Produto é muito comum nas Concessionárias de Veículos">
                      <h3 style="font-size: 11pt;">Gestão com Foco no Produto</h3>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="modal" style="color: darkgoldenrod" data-bs-target="#processo" title="O gerenciamento de processos ainda é muito incipiente nas pequenas e médias empresas infelizmente, pois uma boa gestão de processos pode poupar esforços, recursos e problemas futuros.">
                      <h3 style="font-size: 11pt;">Gestão com Foco no Processo </h3>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#sistema">
                      <h3 style="font-size: 11pt;">Gestão com Foco no Sistema</h3>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="modal" style="color: darkgreen" data-bs-target="#negocio">
                      <h3 style="font-size: 11pt;">Gestão com Foco no Negócio</h3>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="modal" style="color: darkmagenta" data-bs-target="#sucessao">
                      <h3 style="font-size: 11pt;">Gestão com Foco na Sucessão</h3>
                    </a>
                  </li>
                </ul>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-sm-6 -->
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body" style="padding: 43px 0px 43px 0px;">
                <image>
                  <center>
                    <img src="assets/images/produtos/focogestao.png" class="img-fluid item img-thumbnail align-middle" width="86%" alt="Focos de Gestão" title="Focos de Gestao" />
                  </center>
                </image>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-sm-6 -->
        </div><!-- row -->
     </div><!-- tab-pane -->
     <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
       <div class="row" style="margin: 15px 0px 15px 0px;">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body" style="padding: 43px 0px 43px 0px;">
                <center>
                  <img src="assets/images/produtos/strategy.png" class="img-fluid item img-thumbnail align-middle" width="86%" />
                </center>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-sm-6 -->
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">Estratégia</h2>
                <p class="card-text">
                    O <a href='planejamento-estrategico'>Planejamento Estratégico</a> consiste em adequar os 
                    recursos disponíveis ou vindouros aos objetivos da empresa. Para tanto é preciso se utilizar
                    de Tecnologias e Metodologias apropriadas, além de promover a mudança de cultura das 
                    pessoas e da liderança, quando for o caso.
                    <h3>Preparação</h3>
                    Inicia-se realizando uma análise das oportunidades e ameaçaas, bem como dos pontos fortes e 
                    fraquezas, através de uma matriz SWOT - Strengths (Forças), Weaknesses (Fraquezas), 
                    Opportunities (Oportunidades), Threats (Ameaças). Em seguida é feita pesquisa no ambiente organizacional 
                    sobre a Identidade Institucional.
                    <h3 style="margin-top: 12px;">Objetivos</h3>
                    Estabelecer e divulgar a Missão (o que fazemos), a Visão (aonde queremos chegar) e os Valores (quais as 
                    condições inegociáveis), pelos quais serão pautados os objetivos organizacionais. 
                    Definir o Mapa Estratégico para então serem estabelecidas as metas estratégicas (métricas financeiras,
                    de vendas, de marketing, de recursos humanos, etc) a serem conquistadas para o cumprimento 
                    dos objetivos estratégicos.
                    <h3 style="margin-top: 12px;">Entregas</h3>
                    Em via de regra, o <a href='planejamento-estrategico'>Planejamento Estratégico</a> é o responsável
                    pela deflagração de outros projetos, que servirão de ferramenta para o atingimento dos objetivos
                    estabelecidos. Estes podem ser <a href='planejamento-orcamentario'>Budget</a>, <a href='planejamento-tributario'>
                    Planejamento Tributário</a>, <a href='gerenciamento-de-processos'>Mapeamento e Gerenciamento de Processos</a>,
                    <a href='sucessao-familiar'>Plano de Sucessão Familiar</a>, dentre outros.
                </p>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-sm-6 -->
        </div><!-- row -->
      </div><!-- tab-pane -->
      <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
        <div class="row" style="margin: 15px 0px 15px 0px;">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title">Tática</h2>
                Consiste no método para realizar com primazia um objetivo. É a materialização de uma estratégia definida,
                ou seja, é preciso ser assertivo nas táticas para atingir a estratégia escolhida. Por este motivo
                é preciso que se tenha um <a href="planejamento-tatico">Planejamento Tático de Gestão</a> bem definido 
                e alinhado ao <a href='planejamento-estrategico'>Planejamento Estratégico</a>.
                <h3 style="margin-top: 15px;">Aonde usar</h3>
                As Táticas são executadas no Ambiente Externo e são criadas para orientar os meios de 
                atingimento dos objetivos estratégicos. Podem ser Campanhas de Marketing, lançamento de 
                novos produtos, contratação de pessoal, aquisição de equipamentos, requerimento de patentes, etc.
                <h3 style="margin-topo: 15px;">Exemplo de uso</h3>
                Para fomentar as demandas no mercado as Táticas são alinhadas à realidade do consumidor 
                para atingir seus objetivos de forma direta, com efetividade e assertividade. 
                O resultado do Planejamento Estratégico determinou um aumento nas vendas na casa dos 20%. 
                Desta maneira, a equipe de Marketing diagnosticou que a Região B de sua cidade não possui distribuição 
                do seu produto ou equivalente na região. Informado da questão, o Gerente de Vendas, que faz 
                uma requisição de pessoal para equipe de campo na Região B, junto ao Recursos Humanos, depois 
                de confirmar o que fora negociado e projetado na elaboração das Premissas Orçamentárias daquele 
                exercícicio social.
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-sm-6 -->
.         <div class="col-sm-6">
            <div class="card">
              <div class="card-body" style="padding: 43px 0px 43px 0px;">
                <center>
                  <img src="assets/images/produtos/tatic.png" class="img-fluid item img-thumbnail align-middle" width="86%" />
                </center>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-sm-6 -->
        </div><!-- row -->
      </div><!-- tab-pane -->
      <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <div class="row" style="margin: 15px 0px 15px 0px;">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body" style="padding: 43px 0px 43px 0px;">
                <center>
                  <img src="assets/images/produtos/medicao.png" class="img-fluid item img-thumbnail align-middle" width="86%" />
                </center>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-sm-6 -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Medição</h2>
              <p class="card-text">
                Ter medições confiáveis e que apresentem resultados válidos é o primeiro passo para mensurar
                o resultado da Consultoria em Gestão Avanaçada, projetos da Controladoria em andamento e inclusive
                a execução do Planejamento Orçamentário. Para esse fim é usado o <em>Balanced Score Card</em> -     BSC
              </p>
              <h3 style="margin-top: 15px; margin-bottom: -5px;">Aferição</h3>
                <p class="card-text">
                  Uma medição de <em>baixa qualidade</em> pode induzir a Alta Administração à avaliações incorretas e,
                  consequentemente, a uma tomada de decisão equivocada, de forma que possa impactar diretamente
                  na execução do Plano Orçamentário e das Projeções de Fluxo de Caixa.
                </p>
                <h3 style="margin-top: 15px; margin-bottom: -5px;">Métodos de Medição</h3>
                <p class="card-text">
                  Seja qual for o investimento, é fundamental que sejam feitas medições sistemáticas para verificar 
                  o Retorno do Investimento (<i>Return Over Investment</i> - ROI).
                  A despeito da oferta de inúmeras soluções no mercado, especialmente voltadas para a melhoria da
                  qualidade das medições e geração de índices, algumas corporações optam por fazer 
                  <a href="desenvolvimento-de-aplicativos">customização de <em>software</em></a>, e outras ainda
                  preferem desenvolver suas aplicações internamente, criando sob a égido do Departamento de Tecnologia da 
                  Informação o Setor de Desenvolvimento de Soluções.
                </p>                            
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-sm-6 -->
        </div><!-- row -->
      </div><!-- tab-pane -->
    </div><!-- border-grey -->
  </div><!-- container -->
</div><!-- quem-somos -->                





                <a name="mensagem">
                    <?php 
                    
                    if(isset($_SESSION["msg"])){
                      echo $_SESSION["msg"]; 
                      unset($_SESSION["msg"]);
                    }
                    ?>
                </a>


<!-- rodapé -->    
        <div class="row justify-content-end"  style="margin-top: 25px; margin-bottom: -18px;">
            <div class="col-md-5">
                <form method="post" name="proposta" action="assets/backend.php">
                    <input type="hidden" name="id" value="proposta" />
                    <input type="hidden" name="user" value="<?php echo $usuario; ?>" />
                    <input type="hidden" name="origem" value="<?php echo $url; ?>" />
                    <input type="hidden" name="produto" value="<?php echo $id_prod; ?>" />
                    <input type="hidden" name="session" value="<?php echo $session; ?>" />
                    <button class="btn btn-primary" type="submit" style="margin-left: 12px; margin-bottom: 15px;">
                        Saiba mais
                    </button>
                </form>
            </div><!-- col-md-5 -->
            <div class="col-md-7">              
                <div class="estrelas">
                <?php
                    
                    $sql = "SELECT 
                            pags.url, 
                            pags.id,
                            COUNT(avaliacoes.id) AS qt, 
                            AVG(avaliacoes.estrela) AS estrelas
                            FROM pags 
                            INNER JOIN avaliacoes ON pags.id = avaliacoes.id_prod
                            WHERE pags.url = '$url'";
                    $res = $PDO->query( $sql );
                    $row = $res->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($row as $key => $linha) {
                         
                        $qt      = $linha["qt"];
                        $score   = number_format($linha["estrelas"],0,',','.');
                        $id_prod = $linha["id"];
                    }
                    
                    if(!isset($qt)){
                        $qtu = 0;
                        $star = 0;        
                    } else {
                        $qtu = $qt;
                        $star = $score;       
                            
                    }
                ?>
                    <a class="review-link" id="headingOne"  data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin-left: 10px;" href="#">
                        
                    <i class="fa fa-star" style="<?php if($star == 0){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>" ></i>
                    <i class="fa fa-star" style="<?php if($star <2){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                    <i class="fa fa-star" style="<?php if($star <3){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                    <i class="fa fa-star" style="<?php if($star <4){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                    <i class="fa fa-star" style="<?php if($star <5){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                    </a> 
                    <a class="review-link" id="headingOne"  data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin-left: 10px;" href="#">
                        <?php echo $qtu; ?>&nbsp;&nbsp;Avaliações
                    </a> | 
                    <a class="review-link"  data-bs-toggle="modal" data-bs-target="#votacao" href="#">
                        Avalie este artigo
                    </a>
                </div><!-- estrelas -->
            </div><!-- col-md-7 -->
        </div><!-- row -->
        <!-- conteúdo dos comentários -->
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#votacao">
            <div class="accordion-body" style="border-top: #ccc;">
                <?php
                    $sql = "SELECT 
                            avaliacoes.id_prod, 
                            usuarios.nome, 
                            usuarios.sobrenome, 
                            usuarios.img, 
                            avaliacoes.registro, 
                            avaliacoes.estrela, 
                            avaliacoes.comentario
                            FROM usuarios 
                            INNER JOIN avaliacoes ON usuarios.usuario_id = avaliacoes.id_user
                            WHERE avaliacoes.id_prod=$id_prod";
                    $res = $PDO->query( $sql );
                    $row = $res->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($row as $key => $linha) {
                    $nome       = $linha["nome"];
                    $sobrenome  = $linha["sobrenome"];
                    $img        = $linha["img"];
                    $estrela    = $linha["estrela"];
                    $comentario = $linha["comentario"];
                    $data       = $linha["registro"];
                                     
                ?>
                <div class="row align-items-start">
                  <div class="col-md-1">
                    <div class="card">
                      <div class="card-body">
                        <img class="img img-fluid thumbnail" src="assets/images/usuarios/<?php echo $img; ?>" />
                      </div><!-- card-body -->
                    </div><!-- card -->
                  </div><!-- col-md-1 -->
                  <div class="col-md-11">
                    <div class="card">
                      <div class="card-body">
                        <i class="fa fa-star" style="<?php if($estrela == 0){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>" ></i>
                        <i class="fa fa-star" style="<?php if($estrela <2){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                        <i class="fa fa-star" style="<?php if($estrela <3){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                        <i class="fa fa-star" style="<?php if($estrela <4){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                        <i class="fa fa-star" style="<?php if($estrela <5){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                        <p style="font-size: 1em;"><?php echo $comentario; ?></p>
                        <p>
                            <span style="font-weight: bold;"><?php echo $nome . " " . $sobrenome; ?><br />
                            <span style="font-size: 0.7em;"><?php echo $data; ?></span>
                        </p>
                      </div><!-- card-body -->  
                    </div><!-- card -->
                    <br />
                  </div><!-- col-md-11 -->
                </div><!-- row -->
                <?php
                    }
                ?>    
            </div>
        </div>
    <hr />
    <div class="text" style="margin-bottom: 35px;">
        Gostou do artigo? Por que não o compartilha nas suas redes sociais?
    </div>
    <div id="user" class="row">
        <div class="col-md-1 linkedin" style="width: 63px; margin-left: 10px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&sumary=&source=" target="_blank" title="Compartilhe no Linkedin"  onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;">
                <span class="socicon socicon-linkedin mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
            </a>
        </div>
        <div class="col-md-1 whatsapp" style="width: 63px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
            <a href="whatsapp://send?text=http://gopinatha.com.br/contabilidade-de-alto-desempenho">
                <span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt; font-weight: bolder;"></span>
            </a>
        </div>
        <div class="col-md-1 facebook" style="width: 63px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
            <a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Compartilhe no Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;">
                <span class="socicon socicon-facebook mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
            </a>
        </div>
        <div class="col-md-1 reddit" style="width: 63px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
            <a href="http://reddit.com/submit?url=&title="  title="Compartilhe no Reddit" target="_blank" onclick="window.open('http://reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;">
                <span class="socicon socicon-reddit mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
            </a>
        </div>
        <div class="col-md-1 twitter" style="width: 63px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
            <a href="https://twitter.com/intent/tweet?"  title="Compartilhe no Twitter" target="_blank" onclick="window.open('https://twitter.com/intent/tweet?text=%20Gostei%20desta%20publicação: ' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL)); return false;">
                <span class="socicon socicon-twitter mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
            </a>
        </div>
        <div class="col-md-1 mail" style="width: 63px; margin-right: 18px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
            <a href="mailto:?subject=&body=:%20"  title="Envie por e-Mail" target="_blank" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' + encodeURIComponent(document.URL)); return false;">
                <span class="socicon socicon-mailru mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
            </a>
        </div>    
    </div>
</div><!-- quem-somos -->
<hr style="color: #60a3da; height: 6px; border: 1px solid darkblue; box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);" />
<div class="row justify-content-center">
  <div class="col-sm-6 col-md-6 col-mg-6 rounded" style="background-color: #e4edfe; border: 1px solid #cecece; margin: 20px 0px 20px 0px; box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);">
    <figure class="text-center">
      <blockquote class="blockquote">
        <p class="text-primary">
          Para ter um negócio de sucesso, alguém, algum dia, teve que tomar
          uma atitude de coragem.
        </p>
      </blockquote>
      <figcaption class="blockquote-footer text-primary">
        Peter Drucker <cite title="">(1909-2005)</cite>
      </figcaption>
    </figure>
  </div><!-- col-sm-6 -->
</div><!-- row -->
    
    
  
    <!-- Modal -->
<div class="modal fade" id="votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Comente e avalie este artigo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="POST" action="assets/backend.php" enctype="multipart/form-data">
            <input type="hidden" name="origem" value="<?php echo $url; ?>">
            <input type="hidden" name="id" value="estrelas">
            <input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
            <input type="hidden" name="id_prod" value="<?php echo $id_prod; ?>">
                                                                        
            <div class="mb-3">
                <label for="comentario" class="form-label">Artigo sobre <?php echo $title; ?> (*)</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
            </div>                                                                                                                                    
            <div class="estrelas">
                Avalie este artigo &nbsp;(*) 
                <input type="radio" class="fa fa-star" id="vazio" name="estrela" value="" checked />
                <label for="estrela_um"><i class="fa"></i></label>
                <input type="radio" class="fa fa-star" id="estrela_um" name="estrela" value="1" />
                <label for="estrela_dois"><i class="fa"></i></label>
                <input type="radio" class="fa fa-star" id="estrela_dois" name="estrela" value="2" />
                <label for="estrela_tres"><i class="fa"></i></label>
                <input type="radio" class="fa fa-star" id="estrela_tres" name="estrela" value="3" />
                <label for="estrela_quatro"><i class="fa"></i></label>
                <input type="radio" class="fa fa-star" id="estrela_quatro" name="estrela" value="4" />
                <label for="estrela_cinco"><i class="fa"></i></label>
                <input type="radio" class="fa fa-star" id="estrela_cinco" name="estrela" value="5" />
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger  btn-sm" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success  btn-sm">Confirmar</button>
      </div>
          </form>
    </div>
  </div>
</div>        
<!-- Modal -->
<div class="modal fade" id="produto" tabindex="-1" aria-labelledby="produtoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="produto">Foco no Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        Gest&atilde;o que visa  principalmente desenvolver o pessoal e seus resultados, oferecendo 
        instru&ccedil;&otilde;es sistem&aacute;ticas atrav&eacute;s de treinamento. Desde os crit&eacute;rios 
        para compra de materiais auxiliares e de embalagem at&eacute; o tempo padr&atilde;o de entrega do produto/servi&ccedil;o 
        ao cliente deve estar pautado num padr&atilde;o de qualidade estabelecido. Este modelo foi desenvolvido 
        pelo engenheiro norte-americano Frederick Winslow Taylor (1856-1915), considerado o <em>Pai da Administra&ccedil;&atilde;o 
            Cient&iacute;fica</em> e culmina com a institui&ccedil;&atilde;o do Controle de Qualidade e inspetoria 
            atrav&eacute;s de Pesquisas de Satisfa&ccedil;&atilde;o do Cliente. A melhoria da qualidade do produto 
            &eacute; patente e se pode monitorar a aceita&ccedil;&atilde;o do produto/servi&ccedil;o e captar 
            sugest&otilde;es de melhoria.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>    
    


<!-- Modal -->
<div class="modal fade" id="processo" tabindex="-1" aria-labelledby="processoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pocesso">Foco no Processo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
          A gest&atilde;o focada no Processo busca determinar um fluxo de trabalho inteligente, minimizando 
          retrabalhos, reduzindo esfor&ccedil;os com o m&aacute;ximo aproveitamento dos recursos dispon&iacute;veis, 
          sejam eles financeiros, materiais, intelectuais ou humanos. Atrav&eacute;s de estudos estat&iacute;sticos,
          &eacute; poss&iacute;vel, por exemplo, realizar Sele&ccedil;&atilde;o de Pessoal a ser admitido no 
          prazo de seis meses, em fun&ccedil;&atilde;o do aumento das vendas, previsto no <a href="planejamento-orcamentario" target="_self"><em>budget</em></a>. 
          Esta t&eacute;cnica foi utilizada pela primeira vez por Walter Andrew Shewhart (1891-1967), f&iacute;sico, 
          engenheiro e estat&iacute;stico norte-americano conhecido como o <em>Pai do Controle Estat&iacute;sco de Qualidade</em> 
          para detectar falhas na produ&ccedil;&atilde;o e chegar assim &agrave;s poss&iacute;veis causas. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>    
    


<!-- Modal -->
<div class="modal fade" id="sistema" tabindex="-1" aria-labelledby="sistemaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sistema">Foco no Sistema</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
          Com o advento da inform&aacute;tica, n&atilde;o se pode pensar em gest&atilde;o sem levar em conta
          a Tecnologia da Informa&ccedil;&atilde;o. Um sistema de gest&atilde;o moderno e eficaz permite aumento 
          das vendas desvinculado do quadro de funcion&aacute;rios, ou seja, sem que se tenha de se fazer novas 
          contrata&ccedil;&otilde;es na &aacute;rea administrativa. Conforme o segmento econ&ocirc;mico, &eacute; 
          poss&iacute;vel que o empres&aacute;rio n&atilde;o esteja satisfeito com os produtos oferecidos no 
          mercado, e decida desenvolver um <a href="desenvolvimento-de-aplicativos">sistema pr&oacute;prio</a> que
          atenda &agrave;s suas necessidades. Isto pode ser feito atrav&eacute;s de <a href="desenvolvimento-de-aplicativos">
          customização de softwares</a> por encomenda ou atrav&eacute;s da cria&ccedil;&atilde;o de um Departamento 
          de Desenvolvimento de aplica&ccedil;&otilde;es dentro da pr&oacute;pria empresa, conforme a magnitude do 
          projeto.  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>    
    


<!-- Modal -->
<div class="modal fade" id="negocio" tabindex="-1" aria-labelledby="negocioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="negocio">Foco no Negócio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
          Neste modelo &eacute; utilizado o ciclo PDCA (<em>Plan</em> , <em>Do</em>, 
          <em>Check</em> e <em>Action</em>) e seu relacionamento com o MEG (Modelo de Excel&ecirc;ncia 
          de Gest&atilde;o), proporcionando elementos para o processo de melhoria 
          cont&iacute;nua. Consiste basicamente em planejar (<a href="planejamento-orcamentario"><em>budget</em></a>),
          executar conforme planejado, analisar as poss&iacute;veis distor&ccedil;&otilde;es e finalmente, 
          gerar uma a&ccedil;&atilde;o para corrigir distor&ccedil;&otilde;es de execu&ccedil;&atilde;o 
          ou de planejamento. Este modelo &eacute; portanto baseado em metas, que s&atilde;o dividas em dois 
          grandes grupos: &quot;Metas a se manter&quot; e &quot;Metas a  melhorar&quot;. Dentre as &quot;Metas 
          a se manter&quot;, podemos dar como exemplo o custo padr&atilde;o, tempo padr&atilde;o, qualidade 
          padr&atilde;o, etc. Um bom exemplo de &quot;Metas a melhorar&quot; seria <strong>reduzir as horas 
          ociosas da produ&ccedil;&atilde;o em 5%</strong>. Foi institu&iacute;do por Walter Shewhart 
          (1891-1967) na Bell Laboratories em 1930. por&eacute;m suas id&eacute;ias s&oacute; foram 
          propagadas no Jap&atilde;o do p&oacute;s-guerra por William Edwards Deming (1900-1993) quando 
          capacitou os t&eacute;cnicos da Uni&atilde;o Japonesa de Cientistas e Engenheiros.   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>    



<!-- Modal -->
<div class="modal fade" id="sucessao" tabindex="-1" aria-labelledby="sucessaoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sucessao">Foco na Sucessão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
          A causa das dissens&otilde;es nos processos de sucessão familiar s&atilde;o quase sempre de ordem 
          sentimental, e sob a forma de conflitos de interesse na pr&oacute;pria sucess&atilde;o ou no 
          estabelecimento da estrutura hier&aacute;rquica. Por&eacute;m isto se torna ainda mais caracter&iacute;stico 
          na sucess&atilde;o de empresas familiares - aquelas em que um ou mais membros da fam&iacute;lia
          exercem a maior parte do controle administrativo por serem propriet&aacute;rios da maior parte do Capital. 
          Conforme <a href="https://www.terra.com.br/noticias/dino/cerca-de-75-das-empresas-familiares-no-brasil-fecham-apos-serem-sucedidas-pelos-herdeiros,c3f1f53b3ae64159c76e8f07b7849c199efn5zf4.html">pesquisas realizadas</a> 
          em 2019 pela consultoria Price Waterhouse-Coopers - PWC, 75 das empresas familiares brasileiras fecham 
          após serem sucedidas pelos herdeiros, daí a necessidade do foco da gestão neste delicado período de sucessão. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>    
        