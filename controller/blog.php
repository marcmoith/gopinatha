<?php

$mes = isset($_GET['mes'])?$_GET['mes']: "%"; 
$ano = isset($_GET['ano'])?$_GET['ano']: "%";  

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties. 
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <style type="text/css">
        @font-face{
            font-family: padrao;
            src: url(assets/fonts/agencyr.ttf);
        }
        .breadcrumb-item a{ 
            color: #f7b70d;
        }
        .breadcrumb-item a:hover{ 
            color: #ca960c;
            font-size: 17px;
        }
        .parallax {
        /* Coloque a imagem a ser usada como background */

        background-image: url("assets/images/banners/blog.png");

        /* Defina uma altura para a visÃ£o que o usuÃ¡rio terÃ¡ da imagem */
        min-height: 250px;

        /* defina o background como fixo e posicione a imagem */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        
    </style>
    </head>
    <body>   
        <nav aria-label="breadcrumb" style="margin-left: 12px; margin-top: 16px;">
            <ol class="breadcrumb" style="background-color: white;">
            <li class="breadcrumb-item" style="font-family: padrao;"><a href="home">Home</a></li>
            <li class="breadcrumb-item" style="font-family: padrao;"><a href="#">Rede Vaishnava</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="font-family: padrao;">Blog</li>
          </ol>
        </nav>


        <div class="content">        
            <div class="row">
                <div class="col-12" style="margin-bottom: 35px;">
                    <div class="parallax" style="-webkit-box-shadow: inset 5px 5px 11px 1px #000000; box-shadow: inset 5px 5px 11px 1px #000000;"></div>
                </div>
                <h1 class="page-header" style="margin-left: 10px;">Blog</h1>
                <div class="box-01-total" style="margin-left:-250px; margin-top: -58px"> 
                    <div class="box-01">
                        <div class="conteudo">
                            <div class="linha">
                                <div class="barra" style="background-color: red;"></div>
                            </div> <!-- Linha -->
                        </div>
                    </div>
                </div>
                <main class="container" style="margin-bottom: 25px;">
                    <div class="row mb-2">
                     <?php
                     
                     $sql = "SELECT 
                            ps_blog.id_blog, 
                            ps_blog.titulo, 
                            ps_blog.categoria, 
                            ps_blog.foto, 
                            ps_blog.conteudo, 
                            ps_blog.usuario, 
                            ps_blog.registro, 
                            ps_categorias.cor,
                            ps_categorias.categoria
                            FROM ps_categorias 
                            INNER JOIN ps_blog ON ps_categorias.id_cat = ps_blog.categoria
                            WHERE ps_blog.categoria = 1
                            ORDER BY RAND()
                            LIMIT 0, 1";
                     $res = $PDO->query( $sql ); 
                     $row = $res->fetchAll(PDO::FETCH_ASSOC);
                     foreach ($row as $key => $linha) {
                     $id_blog    = $linha["id_blog"];
                     $titulo     = $linha["titulo"];
                     $conteudo   = $linha["conteudo"];
                     $foto       = $linha["foto"];
                     $categoria  = $linha["categoria"];
                     $cor        = $linha["cor"];
                     $registro   = strtotime($linha["registro"]);
                     
                     $data       = date('d M Y', $registro);
                     
                     function limita_caracteres($text, $limit=8)
                        {
                         $join = array();
                         $ArrayString = explode(" ", $text);

                            if ($limit > count($ArrayString)) {
                                $limit = count($ArrayString) / 2;   
                            }

                            foreach ($ArrayString as $key => $word) {
                                      $join[] = $word;
                                   if ($key == $limit) {
                                       break;
                                 }
                            }
                            //print_r($join);
                            return implode(" ", $join)."...";

                        }
                            ?>

                      <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                          <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 <?php echo $cor; ?>"><?php echo $categoria; ?></strong>
                            <h3 class="mb-0"><?php echo $titulo; ?></h3>
                            <div class="mb-1 text-muted"><?php echo $data; ?></div>
                            <p class="card-text mb-auto" style="margin-top: 8px;">
                            
                        <?php
                        echo limita_caracteres("$conteudo", 20);
                        ?>
                                
                            <br />
                            </p>
                            <a href="biografia.php?tp=blog&id=<?php echo $id_blog; ?>" class="btn btn-secondary btn-sm">Continue lendo</a>
                          </div>
                          <div class="col-auto d-none d-lg-block">
                            <img src="assets/images/blog/<?php echo $foto; ?>" class="bd-placeholder-img" width="200" height="250" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                          </div>
                        </div>
                      </div>
                    <?php
                     }
                                         
                     $sql = "SELECT 
                            ps_blog.id_blog,
                            ps_blog.titulo, 
                            ps_blog.categoria, 
                            ps_blog.foto, 
                            ps_blog.conteudo, 
                            ps_blog.usuario, 
                            ps_blog.registro, 
                            ps_categorias.cor,
                            ps_categorias.categoria
                            FROM ps_categorias 
                            INNER JOIN ps_blog ON ps_categorias.id_cat = ps_blog.categoria
                            WHERE ps_blog.categoria = 2
                            ORDER BY RAND()
                            LIMIT 0, 1";
                                                     $res = $PDO->query( $sql ); 
                     $row = $res->fetchAll(PDO::FETCH_ASSOC);
                     foreach ($row as $key => $linha) {
                     $id_blog    = $linha["id_blog"];
                     $titulo     = $linha["titulo"];
                     $conteudo   = $linha["conteudo"];
                     $foto       = $linha["foto"];
                     $categoria  = $linha["categoria"];
                     $cor        = $linha["cor"];
                     $registro   = strtotime($linha["registro"]);
                     
                     $data       = date('d M Y', $registro);
                     
                            ?>

                      <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                          <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 <?php echo $cor; ?>"><?php echo $categoria; ?></strong>
                            <h3 class="mb-0"><?php echo $titulo; ?></h3>
                            <div class="mb-1 text-muted"><?php echo $data; ?></div>
                            <p class="card-text mb-auto" style="margin-top: -25px;">
                            <p class="mb-auto"><?php echo limita_caracteres("$conteudo", 20); ?></p>
                            <br />
                            <a href="biografia.php?tp=blog&id=<?php echo $id_blog; ?>" class="btn btn-secondary btn-sm">Continue lendo...</a>
                          </div>
                          <div class="col-auto d-none d-lg-block">
                            <img src="assets/images/blog/<?php echo $foto; ?>" class="bd-placeholder-img" width="200" height="250" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                          </div>
                        </div>
                      </div>
                    </div>
                <?php
                     }
                    ?>
                    <div class="row g-5">
                      <div class="col-md-8">
                        <h3 class="pb-4 mb-4 fst-italic border-bottom">

                            Últimos artigos postados
                        </h3>
                          
<?php
            
                    $pags = 4;
                    $in = isset($_GET['in'])?$_GET['in']: "0";
                    $fin = $in+$pags;


                     $sql = "SELECT 
                            ps_blog.id_blog,
                            ps_blog.titulo, 
                            ps_blog.categoria, 
                            ps_blog.foto, 
                            ps_blog.conteudo, 
                            ps_blog.registro, 
                            ps_categorias.cor,
                            ps_categorias.categoria,
                            ps_blog.usuario, 
                            ps_usuarios.ndevocional
                            FROM ps_usuarios 
                            INNER JOIN ps_categorias 
                            INNER JOIN ps_blog ON ps_categorias.id_cat = ps_blog.categoria 
                            AND ps_usuarios.id_usuario = ps_blog.usuario
                            WHERE ps_blog.mes LIKE '$mes'
                            AND ps_blog.ano LIKE '$ano'
                            ORDER BY ps_blog.registro ASC
                            LIMIT $in, $fin";
                     $res = $PDO->query( $sql ); 
                     $row = $res->fetchAll(PDO::FETCH_ASSOC);
                     foreach ($row as $key => $linha) {
                     $id_blog    = $linha["id_blog"];
                     $titulo     = $linha["titulo"];
                     $conteudo   = $linha["conteudo"];
                     $foto       = $linha["foto"];
                     $ndevocional= $linha["ndevocional"];
                     $categoria  = $linha["categoria"];
                     $cor        = $linha["cor"];
                     $registro   = strtotime($linha["registro"]);
                     $usuario    = $linha["usuario"];
                     
                     $dia       = date('d', $registro);
                     $mes       = date('M', $registro);
                     $ano       = date('Y', $registro);
                     
switch (date("$mes")) {
    
        case "Jan":    $mes = "Jan";     break;
        case "Feb":    $mes = "Fev";   break;
        case "Mar":    $mes = "Mar";       break;
        case "Apr":    $mes = "Abr";       break;
        case "May":    $mes = "Mai";        break;
        case "Jun":    $mes = "Jun";       break;
        case "Jul":    $mes = "Jul";       break;
        case "Aug":    $mes = "Ago";      break;
        case "Sep":    $mes = "Set";    break;
        case "Oct":    $mes = "Out";     break;
        case "Nov":    $mes = "Nov";    break;
        case "Dec":    $mes = "Dez";    break; 
 }                     
                            ?>

                        <article class="blog-post">
                            <h2 class="blog-post-title"><a href="biografia.php?tp=blog&id=<?php echo $id_blog; ?>" style="color: #666666;"><?php echo $titulo ?></a></h2>
                          <form method="post" action="biografia" name="bio">
                              <input type="hidden" name="membro" value="<?php echo $usuario ?>">
                              <p class="blog-post-meta">
                                  <?php echo $data ?> <br />
                                  por <a href="#" onclick="document.bio.submit(); return false;"><?php echo $ndevocional; ?></a></p>
                          </form>
                          <p><?php echo limita_caracteres("$conteudo", 50); ?>
                              <br />
                          <p>
                            <a href="biografia.php?tp=blog&id=<?php echo $id_blog; ?>" type="button" class="btn btn-secondary btn-sm">Continue lendo</a>
                          </p>
                          <hr />
                        </article>
                     <?php
                     }
                     ?>
                          
                        <nav class="blog-pagination" aria-label="Pagination">
                        <?php
                        
                            if($in == 0){
                        
                        ?>
                            
                            <a class="btn btn-outline-secondary disabled" href=#"  aria-disabled="true"><?php echo $in; ?>Mais antigo</a>
                        
                        <?php
                        
                            } else {
                        
                        ?>
                            <a class="btn btn-outline-secondary" href="blog?&in=<?php echo $in - $pags; ?>">Mais antigo</a>
                        
                        <?php
                        
                            }
                            
                            
                        $sql = "SELECT 
                                Count(ps_blog.id_blog) AS qtd
                                FROM ps_blog";
                        $res = $PDO->query( $sql ); 
                        $row = $res->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($row as $key => $linha) {
                        $qtd    = $linha["qtd"];
                        $pgn    = $qtd / $pags;
                        }
                        
                            if($fin < $qtd){   // 0 + 4 < 2
                        ?>
                        
                            <a class="btn btn-outline-secondary" href="blog?&in=<?php echo $fin; ?>" tabindex="-1">Recente</a>
                                
                        <?php
                        
                            } else {
                                
                        ?>
                        
                            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Recente</a>
                                
                        <?php

                        
                            }
                        ?>
                            
                        </nav>

                      </div>

                      <div class="col-md-4">
                        <div class="position-sticky" style="top: 2rem;">
                            <div class="p-4 mb-3 rounded" style="background-color: #ec971f; -webkit-box-shadow: inset 1px 1px 15px 1px #000000; 
box-shadow: inset 1px 1px 15px 1px #000000;">
                            <h4 class="fst-italic">Sobre</h4>
                            <p class="mb-1">
                            Estes textos belíssimos foram cedidos graciosamente pelos seus autores e/ou 
                            representantes autorizados à divulgação da Filosofia e Consciência de Krishna,
                            a Suprema Personalidade de Deus.
                            </p>
                          </div>

                          <div class="p-4">
                            <h4 class="fst-italic">Arquivos</h4>
                            <ol class="list-unstyled mb-0">
<?php

                    $sql = "SELECT ps_blog.mes,
                     ps_blog.ano
                    FROM ps_usuarios 
                    INNER JOIN ps_blog ON ps_usuarios.id_usuario = ps_blog.usuario
                    GROUP BY ps_blog.ano, mes
                    ORDER BY ps_blog.registro";
                    $res = $PDO->query( $sql ); 
                    $row = $res->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($row as $key => $linha) {
                    $mes     = $linha["mes"];
                    $ano     = $linha["ano"];
                    
if($mes == "01"){ $m = "Janeiro"; }
if($mes == "02"){ $m = "Fevereiro"; }
if($mes == "03"){ $m = "Março"; }
if($mes == "04"){ $m = "Abril"; }
if($mes == "05"){ $m = "Maio"; }
if($mes == "06"){ $m = "Junho"; }
if($mes == "07"){ $m = "Julho"; }
if($mes == "08"){ $m = "Agosto"; }
if($mes == "09"){ $m = "Setembro"; }
if($mes == "10"){ $m = "Outubro"; }
if($mes == "11"){ $m = "Novembro"; }
if($mes == "12"){ $m = "Dezembro";}
                    
            
?>
                              <li><a href="blog?mes=<?php echo $mes; ?>&ano=<?php echo $ano; ?>"><?php 
                              
                              echo $m . " de " . $ano; ?></a></li>
<?php

                    }
?>
                            </ol>
                          </div>

                        </div>
                      </div>
                    </div>
                  </main>

            </div><!-- row -->
        </div><!--content -->
    
    
  </body>
</html>
