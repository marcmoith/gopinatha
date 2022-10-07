<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
<style>
    
    .estrelas input[type=radio]{
        display: none;
    }
    .estrelas label i.fa:before{
        content: '\f005';
        color: #fc0;
    }
    .estrelas input[type=radio]:checked ~ label i.fa:before{
        color: #CCC;
    }

    .estrelas span{
        font-size: 70%;
        vertical-align: top;
        content: "+";
        color: #999;
    }

    .estrelas input[type=radio]{
        display: none;
    }
    .estrelas label i.fa:before{
        content: '\f005';
        color: #fc0;
    }
    .estrelas input[type=radio]:checked ~ label i.fa:before{
        color: #CCC;
    }

</style>    
    
    
        <div class="row justify-content-end"  style="margin-top: 25px; margin-bottom: 25px;">
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
            </div>
            <div class="col-md-7"> 
                <div class="estrelas">
                <?php
                    
                    $sql = "SELECT 
                            pags.url, 
                            pags.id,
                            COUNT(avaliacoes.id_user) AS qt, 
                            AVG(avaliacoes.estrela) AS estrelas
                            FROM pags 
                            INNER JOIN avaliacoes ON pags.id = avaliacoes.id_prod
                            WHERE pags.url = '$url'
                            GROUP BY pags.url";
                    $res1 = $PDO->query( $sql );
                    $row1 = $res1->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($row1 as $key => $linha) {
                          
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
        </div><!-- rows -->

<!-- Comments -->
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body" style="border-top: #ccc;">
        <?php
        
        function data($data){
            return date("d/m/Y h:i", strtotime($data));
        }
        
                        $sql1 = "SELECT 
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
                            $stars      = number_format($linha["estrela"],0,',','.');
                             
                        }
        ?>             
            <div class="container">
                <div class="row align-items-start">
                  <div class="col-md-1">
                      <div class="card">
                          <div class="card-body">
                            <img src="assets/images/usuarios/<?php echo $img; ?>" class="img img-fluid thumbnail">
                          </div>
                      </div>
                  </div>
                  <div class="col-md-11">
                      <div class="card">
                          <div class="card-body">
                              <h3 style="font-size: 16px; font-weight: 600"><?php echo $nome; ?> <?php echo $sobrenome; ?></h3>
                              <h4 style="font-size: 12px; color: #666; font-style: italic;">Postado em <?php echo $registro; ?>hs</h4>
                              <?php echo $comentario; ?>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>    
    </div> 
<!-- Comments -->
    
<!-- Social Networks -->    
        <hr />
        <div class="text" style="margin-bottom: 35px;">
            Gostou do artigo? Por que não o compartilha nas suas redes sociais?
        </div>
        <div id="user" class="row">
            <div class="col-md-1 linkedin" style="width: 10px; margin-left: 10px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&sumary=&source=" target="_blank" title="Compartilhe no Linkedin"  onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;">
                    <span class="socicon socicon-linkedin mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
                </a>
            </div>
            <div class="col-md-1 whatsapp" style="width: 10px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
                <a href="whatsapp://send?text=http://gopinatha.com.br/gestao-avancada">
                    <span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt; font-weight: bolder;"></span>
                </a>
            </div>
            <div class="col-md-1 facebook" style="width: 10px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
                <a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Compartilhe no Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;">
                        <span class="socicon socicon-facebook mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
                </a>
            </div>
            <div class="col-md-1 reddit" style="width: 10px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
                <a href="http://reddit.com/submit?url=&title="  title="Compartilhe no Reddit" target="_blank" onclick="window.open('http://reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;">
                    <span class="socicon socicon-reddit mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
                </a>
            </div>
            <div class="col-md-1 twitter" style="width: 10px; margin-right: 19px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
                <a href="https://twitter.com/intent/tweet?"  title="Compartilhe no Twitter" target="_blank" onclick="window.open('https://twitter.com/intent/tweet?text=%20Gostei%20desta%20publicação: ' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL)); return false;">
                    <span class="socicon socicon-twitter mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
                </a>
            </div>
            <div class="col-md-1 mail" style="width: 10px; margin-right: 18px; margin-bottom: 15px; padding: 10px 10px 10px 10px; border: 1px solid #ccc;">
                <a href="mailto:?subject=&body=:%20"  title="Envie por e-Mail" target="_blank" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' + encodeURIComponent(document.URL)); return false;">
                    <span class="socicon socicon-mailru mbr-iconfont mbr-iconfont-btn" style="text-align: center; font-size: 30pt;"></span>
                </a>
            </div>    
        </div>
<!-- Social Networks -->

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
</div><!-- modal -->        
<!-- Modal -->        