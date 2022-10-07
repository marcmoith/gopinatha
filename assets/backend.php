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
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo'); 
include_once('defines.php'); // <-- this include file MUST go first before any HTML/output
$PDO = new PDO( 'mysql:host=' . HOST . ';dbname=' . DB, USER, PASS );

$id           = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$usuario      = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$origem       = filter_input(INPUT_POST, 'origem', FILTER_SANITIZE_SPECIAL_CHARS); 
$id_prod      = filter_input(INPUT_POST, 'id_prod', FILTER_SANITIZE_SPECIAL_CHARS);
switch($id){

  case "estrelas":
      
    $estrela    = filter_input(INPUT_POST, 'estrela', FILTER_SANITIZE_SPECIAL_CHARS); 
    $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS); 
    $usuario    = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $id_prod    = filter_input(INPUT_POST, 'id_prod', FILTER_SANITIZE_SPECIAL_CHARS);

        if(!empty(filter_input(INPUT_POST, 'estrela', FILTER_SANITIZE_SPECIAL_CHARS))){
            
            $sql = "INSERT INTO avaliacoes(
                    id_prod, 
                    id_user, 
                    estrela,
                    comentario,
                    registro)
                    VALUES (
                    $id_prod, 
                    $usuario, 
                    $estrela,
                    '$comentario',
                    NOW())";

            // Salvar dados

            $res = $PDO->query( $sql );

            $_SESSION['msg'] = "<div class='alert alert-success'>Obrigado pela sua avaliação!</div>";
            header("Location: ../".$origem."#mensagem");
            
        } else {

            $_SESSION['msg'] = "É preciso selecionar ao menos uma estrela!";
            header("Location: ".$origem);
        }



       
  break;
    
  case "busca":

   $termo  = addslashes($_POST["termo"]);
   $termo = null ==!(filter_input(INPUT_POST, 'termo', FILTER_SANITIZE_SPECIAL_CHARS)) ? filter_input(INPUT_POST, 'termo', FILTER_SANITIZE_SPECIAL_CHARS) : is_null($termo);

   $sql = "SELECT 
            pags.id,
            pags.url
            FROM pags
            WHERE pags.title LIKE '%$termo%'";
    $res = $PDO->query( $sql );
    $row = $res->fetchAll(PDO::FETCH_ASSOC);
    foreach ($row as $key => $linha) {
        $url         = $linha["url"];
    }
    
?>    
    <script type="text/javascript">
  
      location.href='../<?php echo $url; ?>';
  
    </script> 
<?php

  break;  
  

  case "cadusu":

   $termo  = addslashes($_POST["termo"]);
       
  // verifica se foi enviado um arquivo
  if(isset($_FILES['img']['name']) && $_FILES['img']['error'] == 0) {
 
    $arquivo_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
    $nome = $_FILES[ 'img' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensÃ£o para minÃºsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensÃµes permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome Ãºnico para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaÃ§os e caracteres nÃ£o alfanumÃ©ricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = 'assets/images/usuarios/' . $novoNome;
 
        // tenta mover o arquivo para o destino
        if ( move_uploaded_file ( $arquivo_tmp, $destino ) ) {


        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';

    $tp                 = addslashes($_POST['tp']);
    $usuario	    	= addslashes($_POST['usuario']);
    $senha    	  	= addslashes(md5($_POST['password']));
    $email      	= addslashes($_POST['email']);
    $celular    	= addslashes($_POST['celular']);
    $fixo       	= addslashes($_POST['fixo']);
    $prenome     	= addslashes($_POST['fname']);
    $sobrenome   	= addslashes($_POST['lname']);
    $nespiritual   	= addslashes($_POST['ndevocional']);
    $diksaguru          = addslashes($_POST['diksaguru']);
    $cep        	= addslashes($_POST['cep']);
    $endereco   	= addslashes($_POST['rua']);
    $nr         	= addslashes($_POST['numero']);
    $bairro     	= addslashes($_POST['bairro']);
    $cidade     	= addslashes($_POST['cidade']);
    $uf         	= addslashes($_POST['uf']);
    $compl         	= addslashes($_POST['compl']);
    $pais         	= addslashes($_POST['pais']);
    $obs        	= addslashes($_POST['obs']);
    $imagem             = $novoNome;
    $facebook           = addslashes($_POST['facebook']);
    $twitter            = addslashes($_POST['twitter']);
    $instagram          = addslashes($_POST['instagram']);
    $tipo_endereco      = addslashes($_POST['tipo_endereco']);
    $tipo_pessoa        = addslashes($_POST['tipo_pessoa']);
    $meuip      	= $_SERVER['REMOTE_ADDR'];
    $fname              = mb_convert_case( $prenome , MB_CASE_TITLE , 'UTF-8' );
    $lname              = mb_convert_case( $sobrenome , MB_CASE_TITLE , 'UTF-8' );
    $ndevocional        = mb_convert_case( $nespiritual , MB_CASE_TITLE , 'UTF-8' );


  	$sql ="INSERT INTO `ps_usuarios` 
  			(`id_usuario`, 
  			`usuario`, 
  			`img`,
                        `senha`, 
  			`email`, 
  			`fname`, 
  			`lname`,
                        `ndevocional`,
                        `diksaguru`,
  			`celular`, 
  			`fixo`, 
  			`ip`, 
  			`cep`, 
  			`bairro`, 
  			`cidade`, 
  			`uf`, 
                        `pais`,
  			`rua`, 
  			`numero`,
                        `compl`,
                        `facebook`,
                        `twitter`,
                        `instagram`, 
  			`tipo_pessoa`, 
  			`tipo_endereco`, 
  			`obs`, 
  			`registro`) 
  		VALUES 
  			(NULL, 
  			'$usuario', 
  			'$imagem', 
                        '$senha', 
  			'$email', 
  			'$fname', 
  			'$lname',
                        '$ndevocional',
                        '$diksaguru',
  			'$celular', 
  			'$fixo', 
  			'$meuip', 
  			'$cep', 
  			'$bairro', 
  			'$cidade', 
  			'$uf', 
                        '$pais',
  			'$endereco', 
  			'$nr', 
                        '$compl',
                        '$facebook', 
                        '$twitter', 
                        '$instagram', 
  			'$tipo_pessoa', 
  			'$tipo_endereco', 
  			'$obs', 
  			current_timestamp())";
                        
                                 
    $prepara        = $PDO->prepare($sql);
    $prepara->execute();
    $count   = $prepara->rowCount();
    $last_id = $PDO->lastInsertId();
    echo $last_id;
    
    echo '<script type="text/javascript">window.location = "adm&status=ok&name='.$ndevocional.'&iddevoto='.$last_id.'"</script>';

	break;

        
        
	case "login":





    if(isset($_POST["email"]) && isset($_POST["password"])){
	
    $email		= addslashes($_POST["email"]);
    $pass 		= addslashes($_POST["password"]);
    $senha		= md5($pass);
	
    //Total de registros

    $sql = "SELECT COUNT(*) as t
            FROM usuarios
            WHERE usuarios.email='$email'
            AND usuarios.senha='$senha'";
    $res = $PDO->query( $sql );
    $row = $res->fetchAll(PDO::FETCH_ASSOC);
    foreach ($row as $key => $linha) {
        $count = $linha["t"];
        }    
    
    if($count >0){ // Se encontrou usuario e senha		

        $sql = "SELECT usuario_id,
            nivel_usuario
            usuarios
            WHERE usuarios.email='$email'";
        $res = $PDO->query( $sql );
        $row = $res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $key => $linha) {
            $usuario    = $linha["id_usuario"];
            $nivel      = $linha["nivel_usuario"];
            }
	
	$_SESSION["usuario"] 	= $usuario;
	$_SESSION["nivel"]	= $nivel;
        	
    } else {

            
        $_SESSION["msg"] = "Usuário e/ou Senha inválidos. Tente novamente!";
        header("Location: ../login&erro=1");
	
    }
                        
} else {
        header("Location: ../restrito");
    
}
	

    
    break;

    case "cadblog":
        
      
  // verifica se foi enviado um arquivo
  if(isset($_FILES['img']['name']) && $_FILES['img']['error'] == 0) {
 
    $arquivo_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
    $nome = $_FILES[ 'img' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensÃ£o para minÃºsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensÃµes permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome Ãºnico para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaÃ§os e caracteres nÃ£o alfanumÃ©ricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = 'assets/images/blog/' . $novoNome;
 
        // tenta mover o arquivo para o destino
        if ( move_uploaded_file ( $arquivo_tmp, $destino ) ) {


        }
        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';

    $titulo     	= addslashes($_POST['titulo']);
    $categoria          = addslashes($_POST['categoria']);
    $tags               = addslashes($_POST['tagg']);
    $artigo     	= addslashes($_POST['public']);
    $usuario	    	= addslashes($_POST['usuario']);
    $data         	= addslashes($_POST['data']);
    $imagem             = $novoNome;
    $url          	= addslashes($_POST['url']);
    $meuip      	= $_SERVER['REMOTE_ADDR'];

    $sql ="INSERT INTO `pags` 
  			(`id`, 
  			`title`, 
  			`categoria`,
                        `keywords`, 
  			`description`, 
  			`url`, 
  			`banner`,
                        `usuario`,
  			`registro`) 
  		VALUES 
  			(NULL, 
  			'$title', 
  			'$categoria', 
                        '$tags', 
  			'$artigo', 
  			'$url', 
  			'$imagem',
                        '$usuario',
  			'$data'";
                        
                                 
    $prepara        = $PDO->prepare($sql);
    $prepara->execute();
    $count   = $prepara->rowCount();
    
    if($count > 0){
        echo '<script type="text/javascript">window.location = "restrito"</script>';
    }
        break;
        
  case "proposta":

      
  if(!isset($_SESSION["usuario"])){

    echo 
    "
      <script type='text/javascript'>
        location.href='../login&erro=entrar';
      </script>
    "; 
      
  } else { 
    echo 
    "
      <script type='text/javascript'>
        location.href='../proposta&produto=".$id_prod."';
      </script>
    "; 


    }
    
  break;

  case "ctrl":

      
  if(!isset($_POST["usuario"])){

      echo "<script type='text/javascript'>
  
                location.href='../login&prd=ctrl';
  
            </script>"; 
      
  } else { 
      
  $usuario	    	= addslashes($_POST['usuario']);          
  
      echo $id . "<br />" . $session . "<br />" . $usuario;
  }
      break;
      
      
}

?>