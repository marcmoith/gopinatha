<?php
/*
Esta página faz parte do site http://gopinatha.com.br
Todos os direitos reservados ©2022 Gopinatha Services
*/
/* 
    Criada em : 05 de Outubro de 2022
    Autor     : Webster Moitinho
*/

   session_start();
   $_SESSION["usuario"] = 13;
   setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
   date_default_timezone_set('America/Sao_Paulo'); 
   $usuario     = isset($_SESSION["usuario"]) ? $_SESSION["usuario"]:0;
   include_once('assets/defines.php'); // <-- this include file MUST go first before any HTML/output
   $PDO = new PDO( 'mysql:host=' . HOST . ';dbname=' . DB, USER, PASS );
   $url = null ==!(filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS)) ? filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS) : 'home';
   if (isset($_SESSION['ultima_atividade']) && (time() - $_SESSION['ultima_atividade'] > 12000)) { // 20 minutos atrÃ¡s
     session_unset();     // unset $_SESSION  
     session_destroy();   // destruindo session data 
   }
   $_SESSION['ultima_atividade'] = time(); // update da ultima atividade
   if(!isset($_SESSION['usuario'])){
    
   } else {
    $sql = "SELECT 
            usuarios.empresa, 
            usuarios.nome, 
            usuarios.sobrenome, 
            usuarios.img
            FROM usuarios
            WHERE usuario_id = $usuario";
    $res = $PDO->query( $sql );
    $row = $res->fetchAll(PDO::FETCH_ASSOC);
    foreach ($row as $key => $linha) {
     
      $nome      = $linha["nome"];
      $sobrenome = $linha["sobrenome"];
      $img       = $linha["img"];
    }
  }
   $sql = "SELECT 
            pags.id,
            pags.title,
            pags.keywords,
            pags.tema,
            pags.banner,
            pags.short,
            pags.description,
            pags.content
            FROM pags
            WHERE pags.url = '$url'";
    $res = $PDO->query( $sql );
    $row = $res->fetchAll(PDO::FETCH_ASSOC);
    foreach ($row as $key => $linha) {
        $id_prod        = $linha["id"];
        $title          = $linha["title"];
        $keywords       = utf8_encode($linha["keywords"]);
        $banner         = $linha["banner"];
        $tema           = $linha["tema"];
        $description    = utf8_encode($linha["description"]);
        $content        = utf8_encode($linha["content"]);
        $short          = utf8_encode($linha["short"]);
    }
   
?>
    
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
  <meta charset="iso-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo utf8_decode("$description"); ?>">
  <meta name="keywords" content="<?php echo utf8_decode("$keywords"); ?>"> 
  <meta name="author" content="Webster Marcelo Moitinho" />
  <meta name="copyright" content="Copyright &copy;2022 - Gopinatha Services" />
  <meta name="audience" content="all" />
  <meta name="expires" content="never" />
  <meta name="robots" content="index,follow" />
  <meta name="revisit" content="after 10 days" />
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:url" content="http://gopinatha.com.br/<?php echo $url; ?>/" />
  <meta name="msapplication-TileImage" content="/assets/images/icone.png">
  <meta name="theme-color" content="#ffffff">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="assets/images/icone.png" type="image/x-icon">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/css/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/css/mobirise-icons-bold/mobirise-icons-bold.css">  
  <link rel="stylesheet" href="assets/css/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
  <link rel="stylesheet" href="assets/css/principalstyle.css.">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
<?php
   $sql = "SELECT 
            pags.title
            FROM pags";
    $res = $PDO->query( $sql );
    $row = $res->fetchAll(PDO::FETCH_ASSOC);
    foreach ($row as $key => $linhas) {
        $titulo    = $linhas["title"];
        
        echo '"' . $titulo . '",';
    }
?>
      ""
    ];
    $( "#tags" ).autocomplete({
      source: availableTags, // palavras encontradas
      minLength: 3, // quantidade mÃ­nima de caracteres para busca
      autoFocus: true, // traz o primeiro item da pesquisa selecionado
      appendTo: '#busca'
    });
  } );
  </script>
</head>
<body>
<section class="container">
  <div class="linha-total">
    <div class="linha">
      <!-- Item -->  
      <div class="item"><a href="tel:+5511984557978"><i class="mbrib-mobile mbr-iconfont mbr-iconfont-btn"></i>&nbsp; (11) 98455-7978</a></div> <!-- Item -->
      <div class="item"><a href="mailto:webmaster@gopinatha.com.br"><i class="mbrib-letter mbr-iconfont mbr-iconfont-btn"></i>&nbsp; webmaster@gopinatha.com.br</a></div> 
    </div> <!-- linha -->
  </div> <!-- Linha Total -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border: 1px solid #e8e8e8; box-shadow: 0px 9px 20px -12px rgba(0,0,0,0.75); -webkit-box-shadow: 0px 9px 20px -12px rgba(0,0,0,0.75); -moz-box-shadow: 0px 9px 20px -12px rgba(0,0,0,0.75);">
    <div class="container">
      <a class="navbar-brand" href="home">
        <img class="logo" src="assets/images/logo.png" alt="Logomarca da Gopinatha" title="Gopinatha Services"  style="width: 13rem;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="home" <?php if($url != "home"){ ?> style="color: #0a53be;"<?php } ?>>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="quem-somos" <?php if($url != "quem-somos"){ ?> style="color: #0a53be;"<?php } ?>>Sobre</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" <?php 
            if(
              $url == "home" ||
              $url == "404" ||
              $url == "login" ||
              $url == "quem-somos" ||
              $url == "contato"){ ?> style="color: #0a53be;"<?php } ?> 
              id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produtos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #aad4f3;">
              <li style="font-weight: bold; margin-left: 8px; color: darkblue">Técnicas de Gestão</li>
              <li><a class="dropdown-item" href="gestao-avancada" <?php if($url == "gestao-avancada"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Gestão Avançada</a></li>
              <li><a class="dropdown-item" href="controladoria" <?php if($url == "controladoria"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Implantação da Controladoria</a></li>
              <li><a class="dropdown-item" href="contabilidade-de-alto-desempenho" <?php if($url == "contabilidade-de-alto-desempenho"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Contabilidade de Alto Desempenho</a></li>
              <li><a class="dropdown-item" href="planejamento-estrategico" <?php if($url == "planejamento-estrategico"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("Planejamento EstratÃ©gico"); ?></a></li>
              <li><a class="dropdown-item" href="planejamento-orcamentario" <?php if($url == "planejamento-orcamentario"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("Planejamento OrÃ§amentÃ¡rio"); ?></a></li>
              <li><a class="dropdown-item" href="planejamento-tributario" <?php if($url == "planejamento-tributario"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("Planejamento TributÃ¡rio"); ?></a></li>
              <li><a class="dropdown-item" href="processos-de-gestao" <?php if($url == "processos-de-gestao"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Processos de Negócio</a></li>
              <li><a class="dropdown-item" href="auditoria-interna" <?php if($url == "auditoria-interna"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("Auditoria Interna"); ?></a></li>
              <li><a class="dropdown-item" href="inventario-de-ativos" <?php if($url == "inventario-de-ativos"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("InventÃ¡rio de Ativos"); ?></a></li>
              <li><a class="dropdown-item" href="inventario-de-estoques" <?php if($url == "inventario-de-estoques"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("InventÃ¡rio de Estoques"); ?></a></li>
              <li><a class="dropdown-item" href="assessoria" <?php if($url == "assessoria"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("Assessoria Fisco-ContÃ¡bil-Administrativa"); ?></a></li>
              <li><hr class="dropdown-divider"></li>
              <li style="font-weight: bold; margin-left: 8px; color: darkblue">Capacitação</li>
              <li><a class="dropdown-item" href="treinamento-gestao" <?php if($url == "treinamento-gestao"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("Treinamento em GestÃ£o"); ?></a></li>
              <li><a class="dropdown-item" href="treinamento-alta-gestao" <?php if($url == "treinamento-alta-gestao"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("Treinamento para a Alta GestÃ£o"); ?></a></li>
              <li><a class="dropdown-item" href="coach" <?php if($url == "coach"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><em>Coaching</em> Individual</a></li>
              <li><hr class="dropdown-divider"></li>
              <li style="font-weight: bold; margin-left: 8px; color: darkblue">Ferramentas de Gestão</li>
              <li><a class="dropdown-item" href="identidade-visual" <?php if($url == "identidade-visual"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Identidade Visual</a></li>
              <li><a class="dropdown-item" href="criacao-de-web-sites" <?php if($url == "criacao-de-web-sites"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("CriaÃ§Ã£o de Websites"); ?></a></li>
              <li><a class="dropdown-item" href="desenvolvimento-de-aplicativos" <?php if($url == "desenvolvimento-de-aplicativos"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Desenvolvimento de Aplicativos</a></li>
            </ul> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato" <?php if($url != "contato"){ ?> style="color: #0a53be;"<?php } ?> tabindex="-1" aria-disabled="false" style="color: #0a53be;">Contato</a>
          </li>
        </ul>
<?php 

    if($url == "home"){
        echo "";
    } else {


?>
            <form class="d-flex" id="busca" method="post" action="assets/backend.php">
                <input type="hidden" name="id" value="busca">  
              <input class="form-control me-1" name="termo" id="tags" type="search" placeholder="Digite..." aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">Busca</button>
            </form>          
<?php
    
    }
    
?>    
      </div>
    </div>
  </nav>

<div class="container" style="border: 1px solid #bbbbbb; background-color: white; width: 99%;">
<?php

function apiError()
{
  require_once 'api/nonexistent_service.php';
  exit;
}

// Defines that the page to be loaded passed the index 
define('INDEX_LOAD', 1);

/* 
      Captures data and parameters for routing   
      PARS_URLS is a array that contains the parameters received in the friendly url
      You must treat them according to your needs on each page/service
    */

define('PARS_URL', array_filter(explode('/', $url)));
$routeFile = '';

// routes the web request or api

// Api router
if (PARS_URL[0] == 'api') {
  define('ISAPICALL', true);
  define('ISWEBCALL', false);
  $routeFile  = 'api/';

  if (count(PARS_URL) > 2) {
    $apiVersion = PARS_URL[1];
    $apiApp     = PARS_URL[2];
    define('CONTROLLER', $apiApp);
    $routeFile .=  $apiVersion . '/' . CONTROLLER . '.php';
  } else {
    apiError();
  }
}

// Web routing   
$routeWeb = 'controller/' .  PARS_URL[0] . '.php';

if (file_exists($routeWeb)) {
  define('ISAPICALL', false);
  define('ISWEBCALL', true);
  define('CONTROLLER', PARS_URL[0]);
  $routeFile = $routeWeb;
}

if (strlen($routeFile) > 0) {
  // Load App
  if (!file_exists($routeFile)) {
    if (ISAPICALL) {
      apiError();
    } else {
      $routeFile = 'controller/404.php';
    }
  }

  // Load Page/Service
  require_once $routeFile;
} else {

?>    
  <script type="text/javascript">
  
    location.href='404';
  
  </script> 
<?php
    
    
}


?>
    
<section>
        <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href='home'>
                        <img class="img-fluid" src="assets/images/logovert.png" alt="Logomarca da Gopinatha" title="Gopinatha Services" style="text-shadow: 1px 1px 2px black; margin: 15px 15px 0 25px; width: 140px;" />
                    </a>
                    <br />
                </div>
                <div class="col-sm-2">
                    <h5>Início</h5>
                    <ul>
                        <li><a href="home" title="Página inicial da Gopinatha">Home</a></li>
                        <li><a href="cadastro-de-usuario" title="Cadastre-se">Cadastre-se</a></li>
                        <li><a href="login" title="Faça Login">Faça Login</a></li>
                        <li><a href="politica-de-privacidade" title="Política de Privacidade da Gopinatha">Privacidade</a></li>
                        <li><a href="termos-de-utilizacao" title="Regras e Termos de utilização do site da Gopinatha">Termos de Utilização</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre-nós</h5>
                    <ul>
                        <li><a href="quem-somos" title="Quem somos">Informações</a></li>
                        <li><a href="trabalhe-conosco" title="Trabalhe conosco">Trabalhe Conosco</a></li>
                        <li><a href="modalidade-de-trabalho" title="De que forma a Gopinatha executa as suas funções nas empresas">Metodologia</a></li>
                        <li><a href="contato" title="Entre em contato com a Gopinatha">Contato</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Serviços</h5>
                    <ul>
                        <li><a href="assessoria" title="Serviços de Assessoria Empresarial">Assessoria</a></li>
                        <li><a href="consultoria" title="Serviços de Consultoria Administrativa">Consultoria</a></li>
                        <li><a href="desenvolvimento-de-aplicativos" title="Desenvolvimento de Aplicativos">Aplicativos</a></li>
                        <li><a href="criacao-de-web-sites" title="Criação de Web Sites">Criação de Web Sites</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <p>Ingresse em nossas redes sociais</p>
                        <a href="https://www.facebook.com/gopinatha.services/"  title="Facebook da Gopinatha" class="facebook rounded btn-info"><span class="socicon socicon-facebook mbr-iconfont mbr-iconfont-btn"></span></a>
                        <a href="https://www.instagram.com/gopinatha.services/"  title="Instagram da Gopinatha" class="instagram rounded btn-info"><span class="socicon socicon-instagram mbr-iconfont mbr-iconfont-btn"></span></a>
                        <a href="https://twitter.com/gopinatha.services" class="twitter rounded btn-info" title="Twitter da Gopinatha"><span class="socicon socicon-twitter mbr-iconfont mbr-iconfont-btn"></span></a>
                        <a href="https://www.youtube.com/channel/UCw1MluWjIlWIcNPf8EPXx5A" title="Canal no Youtube da Gopinatha" class="youtube rounded btn-info"><span class="socicon socicon-youtube mbr-iconfont mbr-iconfont-btn"></span></a>
                    </div>
                    <a href="contato" title="Entre em contato com a Gopinatha">
                        <button type="button" class="btn btn-success">Contato</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p style="text-align: center">
                <a href="http://gopinatha.com.br" title="Conheça a Gopinatha">
                    &copy;2022 Copyright - Gopinatha Services
                </a>
            </p>
        </div><!-- footer-copyright -->
    </footer>  
</section>
</div><!-- container -->
</section>
<script src="assets/js/bootstrap.min.js"></script>        
<script src="assets/js/animation.js"></script>     

</body>
</html>
