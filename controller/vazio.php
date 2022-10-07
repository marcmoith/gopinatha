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
    <li class="breadcrumb-item active" aria-current="page"><span style="color: red;">TITULO</span></li>
  </ol>
</nav>
    









<div class="quem-somos" style="padding: 10px 10px 10px 10px;">
  <div class="col-12" style="margin-bottom: 35px;">
    <div class="parallax" style="-webkit-box-shadow: inset 5px 5px 11px 1px #000000; box-shadow: inset 5px 5px 11px 1px #000000;"></div>
  </div><!-- col-12 -->
  <h1 class="page-header" style="margin-left: 10px;"><span style="color: red;">TITULO</span></h1>
  <div class="box-01-total" style="margin-left:-450px; margin-top: -58px"> 
    <div class="box-01">
      <div class="conteudo">
        <div class="linha">
          <div class="barra" style="background-color: red;"></div>
        </div> <!-- Linha -->
      </div><!-- conteudo -->
    </div><!-- box-01 -->
  </div><!-- box-01-total -->
  <h2 class="caracteristicas"cla style="margin-left: 10px;">Introdução</h2>
  <p class="justify-content caracteristicas1">
    <span style="color: red;">TEXTO</span>
  </p>
  <p class="justify-content caracteristicas2">
    <span style="color: red;">TEXTO</span>
  </p>
  <p class="justify-content caracteristicas3">
    <span style="color: red;">TEXTO</span>  
  </p>
  <div class="box-01-total" style="margin-top: -60px;"> 
    <div class="box-01">
      <div class="img item img-fluid caracteristicas4" style="max-width: 300px; margin-left: 100px;">
        <img class="img-fluid img img-thumbnail" src="assets/images/produtos/ctrl.png" alt="Controladoria" title="Controladoria" /> 
      </div> <!-- Img -->
      <div class="conteudo quem-somos caracteristicas5">
        <div class='texto caracteristicas6'>
          <h2 style="margin-left: 10px; color: #323232;">Aspectos Conceituais</h2> 
          <i  style="margin-left: 10px; margin-top: -5px;">(o que é)</i>
          <p class="justify-content">
            <span style="color: red;">TEXTO</span>  
          </p>
        </div>
        <div class='texto caracteristicas7'>
          <h2 style="margin-left: 10px; color: #323232;">Aspectos Procedimentais</h2> 
          <i  style="margin-left: 10px; margin-top: -5px;">(como funciona)</i>
          <p class="justify-content">
            <span style="color: red;">TEXTO</span>  
          </p>
        </div><!-- texto --><!-- box-01 -->
      </div><!-- conteudo -->
    </div><!-- box-01 -->
  </div><!-- box-01-total -->

  <div class="quem-somos caracteristicas7" style="margin-top: -40px;"> 
    <div class="col-12" style="margin-bottom: 35px;">
      <div class='texto caracteristicas8'> 
        <h2 style="margin-left: 10px; color: #323232;">Aspectos Organizacionais</h2> 
        <i>(como se materializa nas organizações)</i>
        <p class="justify-content">
          <span style="color: red;">TEXTO</span>  
        </p>
        <p class="justify-content">
          <span style="color: red;">TEXTO</span>  
        </p>                
        <ul style='font-size: 13pt; color: #292929;'>
          <li><span style="color: red;">TEXTO</span></li>
          <li><span style="color: red;">TEXTO</span></li>
          <li><span style="color: red;">TEXTO</span></li>
          <li><span style="color: red;">TEXTO</span></li>
        </ul>
      </div><!-- texto -->
      <div class='texto caracteristicas9'>    
        <p class="justify-content">
          <span style="color: red;">TEXTO</span>  
        </p>
        <p class="justify-content">
          <span style="color: red;">TEXTO</span>  
        </p>
      </div><!-- texto -->
      <div class='texto caracteristicas10'>                    
        <p class="justify-content">
          <span style="color: red;">TEXTO</span>  
        </p>
      </div><!-- texto -->
      <div class='texto caracteristicas11'>                    
        <p class="justify-content">
          <span style="color: red;">TEXTO</span>  
        </p>
        <ol style='list-style-type: upper-roman;'>
          <li><span style="color: red;">TEXTO</span></li>
          <li><span style="color: red;">TEXTO</span></li>
          <li><span style="color: red;">TEXTO</span></li>
          <li><span style="color: red;">TEXTO</span></li>
          <li><span style="color: red;">TEXTO</span></li>
          <li><span style="color: red;">TEXTO</span></li>
        </ol>
      </div><!-- texto -->
      <div class='texto caracteristicas12'>                    
        <p class="justify-content">
          <span style="color: red;">TEXTO</span>  
        </p>
        <p class="justify-content">
          <span style="color: red;">TEXTO</span>  
        </p>
      </div><!-- texto -->
    </div> <!-- col-12 -->
  </div><!-- quem-somos -->
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
                    Para realizar grandes conquistas, devemos não apenas agir, mas também sonhar; 
                    não apenas planejar, mas também acreditar.
                  </p>
                </blockquote>
                <figcaption class="blockquote-footer text-primary">
                  Anatole France <cite title="Source Title">(1844-1924)</cite>
                </figcaption>
            </figure>
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
<!-- rodapé -->
