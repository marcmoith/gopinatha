    <style type="text/css">
        .parallax {
        /* Coloque a imagem a ser usada como background */

        background-image: url("assets/images/banners/contabilidade.jpg");

        /* Defina uma altura para a visÃ£o que o usuÃ¡rio terÃ¡ da imagem */
        min-height: 250px;

        /* defina o background como fixo e posicione a imagem */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        

body {
    padding: 0;
    margin: 0;
}

.border-grey {
    border: 1px solid;
    border-end-start-radius: 6px;
    border-end-end-radius: 6px;
    border-top: none;
    border-color: #dee2e6
}

.active {
    background-color: white
}

#myTab {
    background-color: #f1f7fa;
}

    </style>
<nav aria-label="breadcrumb" style="margin-left: 12px; margin-top: 16px;">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" style="font-family: padrao;"><a href="home" style="color: #005984">Home</a></li>
      <li class="breadcrumb-item" style="font-family: padrao;"><a href="produtos" style="color: #005984">Produtos</a></li>
      <li class="breadcrumb-item active" aria-current="page"><h1 style="margin-top: 1px; font-family: padrao; font-size: 12pt; width: 230px;">Contabilidade de Alto Desempenho</h1></li>
  </ol>
</nav>
    
<div class="quem-somos" style="padding: 10px 10px 10px 10px;">
    <div class="col-12" style="margin-bottom: 35px;">
        <div class="parallax" style="-webkit-box-shadow: inset 5px 5px 11px 1px #000000; box-shadow: inset 5px 5px 11px 1px #000000;">            
        </div><!-- parallax -->
    </div><!-- col-12 -->
    <h1 class="page-header" style="margin-left: 10px;">Contabilidade de Alto Desempenho</h1>
    <div class="box-01-total" style="margin-left:-450px; margin-top: -58px"> 
        <div class="box-01">
            <div class="conteudo">
                <div class="linha">
                    <div class="barra" style="background-color: darkslateblue;">
                    </div><!-- barra -->
                </div> <!-- Linha -->
            </div><!-- conteudo -->
        </div><!-- box-01 -->
    </div><!-- box-01-total -->        
    <p class="justify-content caracteristicas">
        Até meados do século XX, no Brasil, a Contabilidade, para os Empresários, tinha aplicação fiscal apenas, 
        ou seja, só servia para apresentar aos órgãos fiscalizadores formulários que informassem 
        os detalhes das movimentações de mercadorias e serviços e do resultado econômico de uma 
        empresa, assim como a forma de cálculo de Tributos e Contribuições. Ficava a cargo do Departamento 
        de Finanças a elaboração de todos indicadores e relatórios de desempenho.
    </p>
    <p class="justify-content caracteristicas3">
        Porém esta prática mostrou-se ineficaz devido a complexidade de se explicar, a partir dos 
        registros do Departamento de Finanças, as origens e aplicações dos recursos financeiros, e 
        pela disparidade entre os relatórios financeiros e os da apuração dos tributos, por exemplo.
    </p>
</div><!-- quem-somos -->
<div class="box-01-total" style="margin-top: -60px;"> 
    <div class="box-01">
        <div class="img item img-fluid" style="margin-bottom: -8px; max-width: 300px;">
            <img class="img-fluid img img-thumbnail" src="assets/images/produtos/ctbhighperf.png" alt="Contabilidade de Alto Desempenho" title="Contabilidade de Alto Desempenho" /> 
        </div> <!-- Img -->
        <div class="conteudo quem-somos">
            <div class="texto">   
                <p class="justify-content caracteristicas">
                    Desta necessidade de consistência entre estas duas informações é que nasceu a Contabilidade de 
                    Alto Desempenho. Paulatinamente as grandes corporações foram buscando técnicas e tecnologias que 
                    permitissem o aumento exponencial do desempenho da contabilidade, passando a utilizar em suas reuniões 
                    de desempenho, não mais os relatórios financeiros, mas sim, relatórios com base na confiável escrituração 
                    contábil.
                </p>
                <p class="justify-content caracteristicas2">
                    Na Contabilidade de Alto Desempenho busca-se principalmente a validação e registro do fato 
                    contábil no menor prazo possível, proporcionando, não apenas um fechamento contábil devidamente conciliado 
                    entre o segundo e o quinto dia útil subsequente ao mês do fechamento, como também a posição em tempo real 
                    no decorrer do período observado.
                    Para tanto, é preciso adotar uma visão panorâmica do Contas a Pagar, Contas a Receber, Tesouraria, 
                    Estoques, Escrita Fiscal, Departamento de Pessoal, Investimentos e Ativo Permanente para conferir 
                    acurácia aos relatórios.
                </p>
                <p class="justify-content caracteristicas3">
                    Talvez o maior desafio da Contabilidade de Alto Desempenho seja exatamente a harmonização das 
                    informações entre as fontes e o aprimoramento das políticas de importância e urgência.
                </p>
                <p class="justify-content caracteristicas2">
                    Conte com nosso expertise para lhe auxiliar a melhorar a qualidade das informações e o desempenho 
                    das equipes através de métodos ágeis que pode resultar na distribuição de pequenas tarefas entre 
                    os setores.
                </p>
            </div><!-- texto -->
            
        </div> <!-- conteudo -->
    </div><!-- box-01 -->
</div><!-- box-01-total -->
    
    
    




    
    
    
    
    
    
    
    
    
    
<!-- rodapé -->    
        <div class="row justify-content-end"  style="margin-top: 25px; margin-bottom: -18px;">
            <div class="col-md-5">
                <form method="post" name="proposta" action="assets/backend.php">
                    <input type="hidden" name="id" value="gesava" />
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
                    
                    <i class="fa fa-star" style="<?php if($star == 0){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>" ></i>
                    <i class="fa fa-star" style="<?php if($star <2){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                    <i class="fa fa-star" style="<?php if($star <3){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                    <i class="fa fa-star" style="<?php if($star <4){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                    <i class="fa fa-star" style="<?php if($star <5){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                     
                    <a class="review-link" id="headingOne"  data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin-left: 10px;" href="#">
                        <?php echo $qtu; ?>&nbsp;&nbsp;Avaliações
                    </a> | 
                    <a class="review-link"  data-bs-toggle="modal" data-bs-target="#votacao" href="#">
                        Faça uma avaliação
                    </a>
                </div><!-- estrelas -->
            </div><!-- col-md-7 -->
        </div><!-- row -->
        <!-- conteúdo dos comentários -->
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#votacao">
            <div class="accordion-body" style="border-top: #ccc;">
            <?php

            function data($data){
                return date("d/m/Y h:i", strtotime($data));
            }

                $sql = "SELECT 
                        usuarios.img, 
                        usuarios.nome, 
                        usuarios.sobrenome, 
                        avaliacoes.estrela,
                        avaliacoes.registro, 
                        avaliacoes.comentario
                        FROM usuarios 
                        INNER JOIN avaliacoes ON usuarios.usuario_id = avaliacoes.id_user
                        WHERE avaliacoes.id_prod = $id_prod";
                $res = $PDO->query( $sql );
                $row = $res->fetchAll(PDO::FETCH_ASSOC);
                foreach ($row as $key => $linha) {

                    $img        = $linha["img"];
                    $nome       = $linha["nome"];
                    $sobrenome  = $linha["sobrenome"];
                    $comentario = $linha["comentario"];
                    $registro   = data('$linha["registro"]');
                    $star       = number_format($linha["estrela"],0,',','.');

            ?> 


                <div class="container" style="margin-bottom: 15px;">
                    <div class="row align-items-start">
                      <div class="col-md-1">
                          <div class="card">
                              <div class="card-body">
                                <img src="assets/images/usuarios/<?php echo $img; ?>" class="img img-fluid thumbnail">
                              </div><!-- card-body -->
                          </div><!-- card -->
                      </div><!-- col-md-1 -->
                      <div class="col-md-11">
                          <div class="card">
                              <div class="card-body">
                                  <h3 style="font-size: 16px; font-weight: 600"><?php echo $nome; ?> <?php echo $sobrenome; ?></h3>
                                  <h4 style="font-size: 12px; color: #666; font-style: italic;">Postado em <?php echo $registro; ?>hs</h4>
                                  <i class="fa fa-star" style="<?php if($star == 0){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>" ></i>
                                  <i class="fa fa-star" style="<?php if($star <2){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                                  <i class="fa fa-star" style="<?php if($star <3){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                                  <i class="fa fa-star" style="<?php if($star <4){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                                  <i class="fa fa-star" style="<?php if($star <5){ echo "color: #ccc"; } else { echo "color: #fc0"; } ?>"></i>
                                  <br />
                                  <?php echo $comentario; ?>

                              </div><!-- card-body -->
                          </div><!-- card -->
                      </div><!-- col-md-11 -->
                    </div><!-- row -->
                </div><!-- container -->

            <?php
            
            }
            
            ?>
        </div><!-- accordion-body -->    
    </div><!-- collapseOne --> 
  </div><!-- quem-somos -->
    
    
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
                <a href="whatsapp://send?text=http://gopinatha.com.br/gestao-avancada">
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
            <input type="hidden" name="pag" value="<?php echo $url; ?>">
            <input type="hidden" name="id" value="estrelas">
            <input type="hidden" name="user" value="<?php echo $usuario; ?>">
            <input type="hidden" name="id_prod" value="<?php echo $id_prod; ?>">
                                                                        
            <div class="mb-3">
                <label for="comentario" class="form-label">Artigo sobre <?php echo $title; ?> (*)</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
            </div>                                                                                                                                    
            <div class="estrelas">
                Avalie este artigo &nbsp;(*) 
                <input type="radio" id="vazio" name="estrela" value="" checked />
                <label for="estrela_um"><i class="fa"></i></label>
                <input type="radio" id="estrela_um" name="estrela" value="1" />
                <label for="estrela_dois"><i class="fa"></i></label>
                <input type="radio" id="estrela_dois" name="estrela" value="2" />
                <label for="estrela_tres"><i class="fa"></i></label>
                <input type="radio" id="estrela_tres" name="estrela" value="3" />
                <label for="estrela_quatro"><i class="fa"></i></label>
                <input type="radio" id="estrela_quatro" name="estrela" value="4" />
                <label for="estrela_cinco"><i class="fa"></i></label>
                <input type="radio" id="estrela_cinco" name="estrela" value="5" />
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
<!-- rodapé -->




    

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
    

    
    <script>
        !function(){"use strict";var u,e;function t(e){return void 0===this||Object.getPrototypeOf(this)!==t.prototype?new t(e):((u=this).version="3.3.1",u.tools=new r,u.isSupported()?(u.tools.extend(u.defaults,e||{}),y(u.defaults),u.store={elements:{},containers:[]},u.sequences={},u.history=[],u.uid=0,u.initialized=!1):"undefined"!=typeof console&&null!==console&&console.log("ScrollReveal is not supported in this browser."),u)}function y(e){if(e&&e.container){if("string"==typeof e.container)return window.document.documentElement.querySelector(e.container);if(u.tools.isNode(e.container))return e.container;console.log('ScrollReveal: invalid container "'+e.container+'" provided.'),console.log("ScrollReveal: falling back to default container.")}return u.defaults.container}function m(){return++u.uid}function p(e,t,n){t.container&&(t.container=n),e.config?e.config=u.tools.extendClone(e.config,t):e.config=u.tools.extendClone(u.defaults,t),"top"===e.config.origin||"bottom"===e.config.origin?e.config.axis="Y":e.config.axis="X"}function g(e){var t=window.getComputedStyle(e.domEl);e.styles||(e.styles={transition:{},transform:{},computed:{}},e.styles.inline=e.domEl.getAttribute("style")||"",e.styles.inline+="; visibility: visible; ",e.styles.computed.opacity=t.opacity,t.transition&&"all 0s ease 0s"!==t.transition?e.styles.computed.transition=t.transition+", ":e.styles.computed.transition=""),e.styles.transition.instant=n(e,0),e.styles.transition.delayed=n(e,e.config.delay),e.styles.transform.initial=" -webkit-transform:",e.styles.transform.target=" -webkit-transform:",i(e),e.styles.transform.initial+="transform:",e.styles.transform.target+="transform:",i(e)}function n(e,t){var n=e.config;return"-webkit-transition: "+e.styles.computed.transition+"-webkit-transform "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s, opacity "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s; transition: "+e.styles.computed.transition+"transform "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s, opacity "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s; "}function i(e){var t,n=e.config,i=e.styles.transform;t="top"===n.origin||"left"===n.origin?/^-/.test(n.distance)?n.distance.substr(1):"-"+n.distance:n.distance,parseInt(n.distance)&&(i.initial+=" translate"+n.axis+"("+t+")",i.target+=" translate"+n.axis+"(0)"),n.scale&&(i.initial+=" scale("+n.scale+")",i.target+=" scale(1)"),n.rotate.x&&(i.initial+=" rotateX("+n.rotate.x+"deg)",i.target+=" rotateX(0)"),n.rotate.y&&(i.initial+=" rotateY("+n.rotate.y+"deg)",i.target+=" rotateY(0)"),n.rotate.z&&(i.initial+=" rotateZ("+n.rotate.z+"deg)",i.target+=" rotateZ(0)"),i.initial+="; opacity: "+n.opacity+";",i.target+="; opacity: "+e.styles.computed.opacity+";"}function w(e){var t=e.config.container;t&&-1===u.store.containers.indexOf(t)&&u.store.containers.push(e.config.container),u.store.elements[e.id]=e}function v(){if(u.isSupported()){o();for(var e=0;e<u.store.containers.length;e++)u.store.containers[e].addEventListener("scroll",a),u.store.containers[e].addEventListener("resize",a);u.initialized||(window.addEventListener("scroll",a),window.addEventListener("resize",a),u.initialized=!0)}return u}function a(){e(o)}function o(){var i,o,n,r,s;u.tools.forOwn(u.sequences,function(e){s=u.sequences[e],n=!1;for(var t=0;t<s.elemIds.length;t++)r=s.elemIds[t],c(u.store.elements[r])&&!n&&(n=!0);s.active=n}),u.tools.forOwn(u.store.elements,function(e){var t,n;o=u.store.elements[e],n=(t=o).config.useDelay,i="always"===n||"onload"===n&&!u.initialized||"once"===n&&!t.seen,function(e){if(e.sequence){var t=u.sequences[e.sequence.id];return t.active&&!t.blocked&&!e.revealing&&!e.disabled}return c(e)&&!e.revealing&&!e.disabled}(o)?(o.config.beforeReveal(o.domEl),i?o.domEl.setAttribute("style",o.styles.inline+o.styles.transform.target+o.styles.transition.delayed):o.domEl.setAttribute("style",o.styles.inline+o.styles.transform.target+o.styles.transition.instant),l("reveal",o,i),o.revealing=!0,o.seen=!0,o.sequence&&function(e,t){var n=0,i=0,o=u.sequences[e.sequence.id];o.blocked=!0,t&&"onload"===e.config.useDelay&&(i=e.config.delay);e.sequence.timer&&(n=Math.abs(e.sequence.timer.started-new Date),window.clearTimeout(e.sequence.timer));e.sequence.timer={started:new Date},e.sequence.timer.clock=window.setTimeout(function(){o.blocked=!1,e.sequence.timer=null,a()},Math.abs(o.interval)+i-n)}(o,i)):function(e){if(e.sequence){var t=u.sequences[e.sequence.id];return!t.active&&e.config.reset&&e.revealing&&!e.disabled}return!c(e)&&e.config.reset&&e.revealing&&!e.disabled}(o)&&(o.config.beforeReset(o.domEl),o.domEl.setAttribute("style",o.styles.inline+o.styles.transform.initial+o.styles.transition.instant),l("reset",o),o.revealing=!1)})}function l(e,t,n){var i=0,o=0,r="after";switch(e){case"reveal":o=t.config.duration,n&&(o+=t.config.delay),r+="Reveal";break;case"reset":o=t.config.duration,r+="Reset"}t.timer&&(i=Math.abs(t.timer.started-new Date),window.clearTimeout(t.timer.clock)),t.timer={started:new Date},t.timer.clock=window.setTimeout(function(){t.config[r](t.domEl),t.timer=null},o-i)}function b(e){for(var t=0,n=0,i=e.offsetHeight,o=e.offsetWidth;isNaN(e.offsetTop)||(t+=e.offsetTop),isNaN(e.offsetLeft)||(n+=e.offsetLeft),e=e.offsetParent;);return{top:t,left:n,height:i,width:o}}function c(e){var t,n,i,o,r,s,a,l,c,d=b(e.domEl),f={width:(t=e.config.container).clientWidth,height:t.clientHeight},u=function(e){if(e&&e!==window.document.documentElement){var t=b(e);return{x:e.scrollLeft+t.left,y:e.scrollTop+t.top}}return{x:window.pageXOffset,y:window.pageYOffset}}(e.config.container),y=e.config.viewFactor,m=d.height,p=d.width,g=d.top,w=d.left;return n=g+m*y,i=w+p*y,o=g+m-m*y,r=w+p-p*y,s=u.y+e.config.viewOffset.top,a=u.x+e.config.viewOffset.left,l=u.y-e.config.viewOffset.bottom+f.height,c=u.x-e.config.viewOffset.right+f.width,n<l&&s<o&&a<i&&r<c||"fixed"===window.getComputedStyle(e.domEl).position}function r(){}t.prototype.defaults={origin:"bottom",distance:"20px",duration:500,delay:0,rotate:{x:0,y:0,z:0},opacity:0,scale:.9,easing:"cubic-bezier(0.6, 0.2, 0.1, 1)",container:window.document.documentElement,mobile:!0,reset:!1,useDelay:"always",viewFactor:.2,viewOffset:{top:0,right:0,bottom:0,left:0},beforeReveal:function(e){},afterReveal:function(e){},beforeReset:function(e){},afterReset:function(e){}},t.prototype.isSupported=function(){var e=document.documentElement.style;return"WebkitTransition"in e&&"WebkitTransform"in e||"transition"in e&&"transform"in e},t.prototype.reveal=function(e,t,n,i){var o,r,s,a,l,c,d;if(void 0!==t&&"number"==typeof t?(n=t,t={}):null==t&&(t={}),!(r=function(e,t){{if("string"==typeof e)return Array.prototype.slice.call(t.querySelectorAll(e));if(u.tools.isNode(e))return[e];if(u.tools.isNodeList(e))return Array.prototype.slice.call(e)}return[]}(e,o=y(t))).length)return console.log('ScrollReveal: reveal on "'+e+'" failed, no elements found.'),u;n&&"number"==typeof n&&(c=m(),l=u.sequences[c]={id:c,interval:n,elemIds:[],active:!1});for(var f=0;f<r.length;f++)(a=r[f].getAttribute("data-sr-id"))?s=u.store.elements[a]:(s={id:m(),domEl:r[f],seen:!1,revealing:!1}).domEl.setAttribute("data-sr-id",s.id),l&&(s.sequence={id:l.id,index:l.elemIds.length},l.elemIds.push(s.id)),p(s,t,o),g(s),w(s),u.tools.isMobile()&&!s.config.mobile||!u.isSupported()?(s.domEl.setAttribute("style",s.styles.inline),s.disabled=!0):s.revealing||s.domEl.setAttribute("style",s.styles.inline+s.styles.transform.initial);return!i&&u.isSupported()&&(d={target:e,config:t,interval:n},u.history.push(d),u.initTimeout&&window.clearTimeout(u.initTimeout),u.initTimeout=window.setTimeout(v,0)),u},t.prototype.sync=function(){if(u.history.length&&u.isSupported()){for(var e=0;e<u.history.length;e++){var t=u.history[e];u.reveal(t.target,t.config,t.interval,!0)}v()}else console.log("ScrollReveal: sync failed, no reveals found.");return u},r.prototype.isObject=function(e){return null!==e&&"object"==typeof e&&e.constructor===Object},r.prototype.isNode=function(e){return"object"==typeof window.Node?e instanceof window.Node:e&&"object"==typeof e&&"number"==typeof e.nodeType&&"string"==typeof e.nodeName},r.prototype.isNodeList=function(e){var t=Object.prototype.toString.call(e);return"object"==typeof window.NodeList?e instanceof window.NodeList:e&&"object"==typeof e&&/^\[object (HTMLCollection|NodeList|Object)\]$/.test(t)&&"number"==typeof e.length&&(0===e.length||this.isNode(e[0]))},r.prototype.forOwn=function(e,t){if(!this.isObject(e))throw new TypeError('Expected "object", but received "'+typeof e+'".');for(var n in e)e.hasOwnProperty(n)&&t(n)},r.prototype.extend=function(t,n){return this.forOwn(n,function(e){this.isObject(n[e])?(t[e]&&this.isObject(t[e])||(t[e]={}),this.extend(t[e],n[e])):t[e]=n[e]}.bind(this)),t},r.prototype.extendClone=function(e,t){return this.extend(this.extend({},e),t)},r.prototype.isMobile=function(){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)},e=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)},"function"==typeof define&&"object"==typeof define.amd&&define.amd?define(function(){return t}):"undefined"!=typeof module&&module.exports?module.exports=t:window.ScrollReveal=t}();
    </script>
    <script>
        (function($) {
            'use strict';
            window.sr = ScrollReveal();
            sr.reveal('.quem-somos .caracteristicas', {
                duration: 2000,
                origin: 'top',
                distance: '100px',
                viewFactor: 0.6,
                mobile: false
            }, 300);
            sr.reveal('.objetivos li', {
                duration: 3500,
                origin: 'bottom',
                distance: '280px',
                viewFactor: 0.6,
                mobile: false
            }, 300);
            sr.reveal('.box-01 .item', {
                duration: 2000,
                origin: 'right',
                distance: '1000px',
                viewFactor: 0.6,
                mobile: false
            }, 300);

        })();


var firstTabEl = document.querySelector('#myTab li:last-child a')
var firstTab = new bootstrap.Tab(firstTabEl)

firstTab.show()
    </script>

        