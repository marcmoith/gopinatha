<?php
   session_start();
   setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
   date_default_timezone_set('America/Sao_Paulo'); 
   include_once('assets/defines.php'); // <-- this include file MUST go first before any HTML/output
   $PDO = new PDO( 'mysql:host=' . HOST . ';dbname=' . DB, USER, PASS );
   $url = isset($_GET['page']) ? $_GET['page'] : 'home';
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
        $id             = $linha["id"];
        $title          = $linha["title"];
        $keywords       = $linha["keywords"];
        $banner         = $linha["banner"];
        $tema           = $linha["tema"];
        $description    = $linha["description"];
        $content        = $linha["content"];
        $short        = $linha["short"];
    }

    
    
?>
    
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>"> 
  <meta name="author" content="Webster Marcelo Moitinho" />
  <meta name="copyright" content="Copyright &copy;2021 - Gopinatha Services" />
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
    <style>
        
        body{
            background-color: #efefef;
            overflow-x:hidden
        }
        a{text-decoration:none}
        .navbar-nav li > a{
            margin-right: 18px;
        }
        .mydropdowncss:hover .dropdown-menu {
            display: block;
            margin-top: 0; 
         }
        .navbar-nav li > a:hover{
            background-color: #eed9fb;
            color: red;
            border-radius: 8px;
        }    
        .navbar-nav li.active > a{
            background-color: #eed9fb !important;
            color: #000000;
        }

        .ui-menu-item{
            padding: 5px;
            background-color: #eed9fb;
          }
        .erro404{
            text-align: left; margin-top: -10px;
          }  
        .erro404 a{
            text-decoration:none;
            color: #666666;
          }
        .erro404 a:hover{
            color: chocolate;
          }
          
    .linha-total{background:#60a3da; border-bottom: 1px solid #327abd; box-shadow: 0px 9px 20px -12px rgba(0,0,0,0.75); -webkit-box-shadow: 0px 9px 20px -12px rgba(0,0,0,0.75); -moz-box-shadow: 0px 9px 20px -12px rgba(0,0,0,0.75);}
    .linha-total .linha{display:flex;flex-wrap:wrap;justify-content:space-around;width:1200px;margin:0 auto}
        @media only screen and (min-width: 1281px){
        .linha .item{color:#fff;font:16px calibri;padding:10px 0;text-align:center}
        .linha .item a{color:inherit;font:inherit; text-decoration: none}
        .linha .item a:hover{color:#406b93;font-family:Arial; text-decoration: none;}
        .linha .item *{color:#fff;font-size:24px;vertical-align:middle}
        .logo{width: 70%; margin: 10px 80px 5px 10px;}
        .box-02{width:1280px;}
        .box-02 .item{margin:20px 25px 0px -65px; width:300px; padding:15px 15px;}
    }
    
    @media only screen and (max-width: 1280px){
        .linha .item{color:#fff;font:16px calibri;padding:10px 0;text-align:center}
        .linha .item a{color:inherit;font:inherit; text-decoration: none}
        .linha .item a:hover{color:#406b93;font-family:Arial; text-decoration: none;}
        .linha .item *{color:#fff;font-size:24px;vertical-align:middle}
        .logo{width: 70%; margin: 10px 80px 5px 10px;}
    }
    
    @media only screen and (max-width:1024px){
        .linha .item{color:#fff;font:16px calibri;padding:10px 0;text-align:center}
        .linha .item a{color:inherit;font:inherit; text-decoration: none}
        .linha .item a:hover{color:#406b93;font-family:Arial; text-decoration: none;}
        .linha .item *{color:#fff;font-size:24px;vertical-align:middle}
        .logo{width: 50%; margin: 10px 50px 5px 10px;}
    }
    
    @media only screen and (max-width: 768px){
        .linha .item{display: none;}
        .linha-total{height: 10px;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
        #myFooter {text-align: center;}

    }
    
    @media only screen and (max-width: 740px){
        .linha .item{display: none;}
        .linha-total{height: 10px;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
    }
    
    @media only screen and (max-width: 667px){
        .linha-total{ width: 100%; height: 10px;}
        .linha .item{display: none;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
        .mapa iframe {display: none;}
        .mapa img {display: block;}
    }
    
    @media only screen and (max-width:600px){
        .linha-total{ width: 100%; height: 10px;}
        .linha .item{display: none;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
        .mapa iframe {display: none;}
        .mapa img {display: block;}
    }
    
    @media only screen and (max-width:480px){    
        .linha-total{ width: 100%; height: 10px;}
        .linha .item{display: none;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
        .mapa iframe {display: none;}
        .mapa img {display: block;}
    }
    
    @media only screen and (max-width: 414px){
        .linha-total{ width: 100%; height: 10px;}
        .linha .item{display: none;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
        .mapa iframe {display: none;}
        .mapa img {display: block;}
    }
    
    @media only screen and (max-width: 411px){
        .linha-total{ width: 100%; height: 10px;}
        .linha .item{display: none;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
        .mapa iframe {display: none;}
        .mapa img {display: block;}
    }
    
    @media only screen and (max-width: 375px){
        .linha-total{ width: 100%; height: 10px;}
        .linha .item{display: none;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
        .mapa iframe {display: none;}
        .mapa img {display: block;}
    }
    
    @media only screen and (max-width: 360px){
        .linha-total{ width: 100%; height: 10px;}
        .linha .item{display: none;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
        .mapa iframe {display: none;}
        .mapa img {display: block;}
        .prabhupada {display: block;}
    }
    
    @media only screen and (max-width: 320px){
        .linha-total{ width: 100%; height: 10px;}
        .linha .item{display: none;}
        .logo{width: 50%; margin: 10px 0px 5px 10px;}
        .mapa iframe {display: none;}
        .mapa img {display: block;}
    }
      
        @keyframes titulo {
        100%{height:100%}
        }
        p{font:17px/24px calibri;color:#333;margin:20px 0;padding:0 10px;text-align:justify}
        
        
        #myFooter {
            border-top: 2px double #406c90;
            background-color: #c8e1f6;
            color: #595959;
            padding-top: 30px;
        }
        #myFooter .footer-copyright {
            background-color: #1b1d4b;
            padding-top: 3px;
            padding-bottom: 3px;
            text-align: center;
            margin-bottom: 10px;
        }

        #myFooter .row {
            margin-bottom: 60px;
        }

        #myFooter .navbar-brand {
            margin-top: 45px;
            height: 65px;
        }

        #myFooter .footer-copyright p {
            margin: 10px;
            color: #ccc;
        }

        #myFooter ul {
            list-style-type: none;
            padding-left: 0;
            line-height: 1.7;
        }

        #myFooter h5 {
            font-size: 18px;
            color: #535463;
            font-weight: bold;
            margin-top: 30px;
        }

        #myFooter h2 a{
            font-size: 50px;
            text-align: center;
            color: #fff;
        }

        #myFooter a {
            color: #606676;
            text-decoration: none;
        }

        #myFooter a:hover,
        #myFooter a:focus {
            text-decoration: none;
            color: red;
            font-weight: 600;
            font-size: 11pt;
        }

        #myFooter .social-networks {
            text-align: center;
            padding-top: 30px;
            padding-bottom: 16px;
        }

        #myFooter .social-networks a {
            font-size: 32px;
            color: #f9f9f9;
            padding: 10px;
            transition: 0.2s;
        }

        #myFooter .social-networks a:hover {
            text-decoration: none;
        }

        #myFooter .facebook:hover {
            color: #1877f2;
        }

        #myFooter .instagram:hover {
            color: darkred;
        }

        #myFooter .twitter:hover {
            color: darkblue;
        }

        #myFooter .youtube:hover {
            color: red;
        }
        #myFooter .btn {
            color: 4043b7;
            background-color: #6164ce;
            border-radius: 20px;
            border: 1px solid #7b7ca1;
            width: 150px;
            display: block;
            margin: 0 auto;
            margin-top: 10px;
            line-height: 25px;
        }
        #myFooter .btn:hover {
            color: white;
            background-color: #ffb900;
        }


        
        
        .box-01{width:1100px;margin:auto;display:flex;flex-wrap:wrap;justify-content:space-around;padding:10px;transition:all .5s;align-items:center}
        .box-01 > div{margin:40px 0}
        .box-01 .conteudo{width:580px}
        .box-01 .conteudo .titulo{font:45px calibri;color:#4D4EDA}
        .box-01 .conteudo .titulo::first-line{color:#32338e}
        .box-01 .conteudo .linha{height:4px;background:#eee;width:100%;margin:20px 0 0;position:relative;box-shadow:-1px -1px 2px 0 #fff inset}
        .box-01 .conteudo .linha .barra{width:80px;transition:all linear .8s .55s;height:100%;background:#4D4EDA;position:relative}
        .box-01-total:hover .conteudo .linha .barra{width:100%;transition:all linear .5s}
        .box-01 .conteudo .texto{font:20px/25px calibri;text-shadow:0 0 1px #eee;color:#999;margin:20px 0}
        .box-01 .conteudo .entrar{padding:20px 70px;background:chocolate;color:#fff;font:20px calibri;border-radius: 8px; display:table;transition:all .5s}
        .box-01:hover .conteudo .entrar{transform:scale(1.1);transition:all .5s}
        .box-01 .img{overflow:hidden;box-shadow:0 0 8px 0 #fff inset;display:flex;align-items:center;position:relative}
        .box-01 .img .info{position:absolute;top:0;left:0;width:100%;height:100%;text-align:center;z-index:2;background:rgba(50,51,142,0.5);font:23px calibri;text-transform:uppercase;color:#fff;text-shadow:0 0 33px #000;display:flex;flex-direction:column;justify-content:center;opacity:1;transition:all linear .5s;transform:translateX(-100%)}
        .box-01 .img img{width:100%;height:auto;min-height:100%;z-index:-1}
        .box-02-total{background-color: #f7b70d; border: 1px solid #8b6809; min-height: 450px;}
        .box-02{width:1050px;margin:0 auto;display:flex;flex-wrap:wrap;justify-content:space-around}
        .box-02 .item{margin:20px 0;width:311px;box-sizing:border-box;border:2px solid rgba(0,0,0,0.2);padding:15px 10px;text-align:center}
        .box-02 .item:hover{background:rgba(255,255,255,0.4)}
        .box-02 .item .img{width:100%;height:230px;overflow:hidden}
        .box-02 .item .titulo{font-family: padrao; font-size:25px;color:#281e02;margin-top: 8px; margin-bottom: 0px;}
        .box-02 .item .conteudo{font:18px/30px calibri;color:black ;margin-top: 8px; margin-bottom: 0px;min-height:160px; line-height: 22px;}

        .social-row {
          text-align: center;
        }
        .social-row .soc-item {
            display: inline-block;
            text-align: center;
            border-radius: 50px;
            margin-right: 0.6rem;
            margin-bottom: 1rem;
            padding: 0.5rem;
            border: 2px solid #f7b302;
            transition: all 0.3s;
        }
        social-row .soc-item .mbr-iconfont {
            transition: all 0.3s;
            display: flex;
            justify-content: center;
            align-content: center;
            color: #f7b302;
            font-size: 2rem;

        }
        .soc-item:hover {
            background-color: #f7b302;
            
        }
        .card-wrap .image-wrap .img-fluid{
            width: 80%; 
            height: auto; 
            margin: 25px 0px 25px 0px; 
            border-radius: 120px; 
            box-shadow: 10px 10px 11px 0px rgba(0,0,0,0.75);
            -webkit-box-shadow: 10px 10px 11px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 11px 0px rgba(0,0,0,0.75);
        }
        .social-row .soc-item:hover .mbr-iconfont {
            color: #702202;
        }
    @media only screen and (min-width: 1281px){
        .logo{width: 70%; margin: 10px 80px 5px 10px;}
    }
    @media only screen and (max-width: 1280px){
        .logo{width: 70%; margin: 10px 80px 5px 10px;}
    }

    @media only screen and (max-width:1200px) {
        .logo{width: 70%; margin: 10px 80px 5px 10px;}
        *{box-sizing:border-box;max-width:100%}
        #wowslider-container1{display:none!important}
        .rodape div{width:100%;margin:20px 0;text-align:center}
        .menu-rodape li{width:100%}
    }
    @media only screen and (min-width:800px) {
        .navbar-light{
            box-shadow: -1px 11px 23px -3px rgba(0,0,0,0.75); 
            -webkit-box-shadow: -1px 11px 23px -3px rgba(0,0,0,0.75); 
            -moz-box-shadow: -1px 22px 23px -3px rgba(0,0,0,0.75);
        }

    @media only screen and (max-width:600px){
        .mapa iframe {display: none;}
        .mapa img {display: block;}
        .logo{width: 50%; margin: 10px 50px 5px 10px;}
        
}
@font-face {
  font-family: "padrao";
  src: url("assets/fonts/agencyr.ttf") format("truetype");
  font-weight:normal;
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

    .estrelas span{
        font-size: 70%;
        vertical-align: top;
        content: "+";
        color: #999;
    }

    </style> 

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
<?php
   $sql = "SELECT 
            pags.id,
            pags.title
            FROM pags";
    $res = $PDO->query( $sql );
    $row = $res->fetchAll(PDO::FETCH_ASSOC);
    foreach ($row as $key => $linha) {
        $titulo    = $linha["title"];
        
        echo '"' . utf8_decode($titulo) . '",';
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
            <div class="item"><a href="#"><i class="mbrib-mobile mbr-iconfont mbr-iconfont-btn"></i>&nbsp; (11) 98455-7978</a></div> <!-- Item -->
            <div class="item"><a href="mailto:webmaster@gopinatha.com.br"><i class="mbrib-letter mbr-iconfont mbr-iconfont-btn"></i>&nbsp; webmaster@gopinatha.com.br</a></div> <!-- Item -->
            
<?php

    if(isset($_SESSION["id_usuario"])){
        
        $sql = "SELECT 
                usuarios.usuario_id, 
                usuarios.nome, 
                usuarios.sobrenome, 
                usuarios.img, 
                usuarios.nivel_usuario
                FROM usuarios
                WHERE usuario_id = 13";
        $res = $PDO->query( $sql );
        $row = $res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $key => $linha) {
        
            $nome      = $linha["nome"];
            $sobrenome = $linha["sobrenome"];
            $img       = $linha["img"];
        }
?>
            
            <div class="row item justify-content-end">
                <a href="meu-perfil">
                    <img src="assets/images/usuarios/<?php echo $img; ?>" class="img img-fluid img-thumbnail" alt="<?php echo $nome . " " . $sobrenome; ?>" title="<?php echo $nome . " " . $sobrenome; ?>" width="30" />
                </a>
            </div> <!-- Item -->
<?php

    }
    
?>    
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
              <a class="nav-link" href="quem-somos" <?php if($url != "quem-somos"){ ?> style="color: #0a53be;"<?php } ?>>Quem Somos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" <?php 
            if(
                    $url == "home" ||
                    $url == "404" ||
                    $url == "login" ||
                    $url == "quem-somos" ||
                    $url == "contato"){ ?> style="color: #0a53be;"<?php } ?> id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produtos
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #aad4f3;">
                <li><a class="dropdown-item" href="gestao-avancada" <?php if($url == "gestao-avancada"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><?php echo utf8_decode("GestÃ£o AvanÃ§ada"); ?></a></li>
                <li><a class="dropdown-item" href="controles" <?php if($url == "controles"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Controles</a></li>
                <li><a class="dropdown-item" href="contabilidade" <?php if($url == "contabilidade"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Contabilidade</a></li>
                <li><a class="dropdown-item" href="tributos" <?php if($url == "tributos"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Tributos</a></li>
                <li><a class="dropdown-item" href="assessoria" <?php if($url == "assessoria"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Assessoria</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="treinamento" <?php if($url == "treinamento"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>>Treinamento</a></li>
                <li><a class="dropdown-item" href="coach" <?php if($url == "coach"){ ?> style="color: red; background-color: #dce9fc; border-top: 1px solid #fff; border-left: 1px solid #fff; border-right: 1px solid #8ab9fe; border-bottom: 1px solid #8ab9fe;"<?php } ?>><em>Coaching</em></a></li>
                <li><hr class="dropdown-divider"></li>
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
            if($url != "home"){
          ?>
          <form class="d-flex" id="busca" method="post" action="assets/backend.php">
            <input type="hidden" name="id" value="busca">  
            <input class="form-control  me-1" name="termo" id="tags" type="search" placeholder="Digite..." aria-label="Search" style="width: 250px;">
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
</body>
</html>
