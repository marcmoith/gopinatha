<?php
/*
Esta página faz parte do site http://gopinatha.com.br
Todos os direitos reservados ©2022 Gopinatha Services
*/
/* 
    Criada em : 05 de Outubro de 2022
    Autor     : Webster Moitinho
*/

   if (isset($_SESSION['ultima_atividade']) && (time() - $_SESSION['ultima_atividade'] > 12000)) { 
   /* Se a ultima atividade está informada na sessão e a hora atual menos a hora
      da última atividade for maior que o tempo máximo em cada sessão (20 minutos)
    */
    session_unset();     // Elimina a $_SESSION  
    session_destroy();   // Destrói os dados sa sessão 
   }
   $_SESSION['ultima_atividade'] = time(); // atualiza a ultima atividade
   if(!isset($_SESSION['usuario'])){
   /* Se não foi informado o código do usuário na sessão */    
?>       
    <script type="text/javascript">window.location = "login&erro=expirou"</script> 
    <!-- manda pra página de login avisando que expirou a sessão-->
<?php
}
        
  $produto = filter_input(INPUT_GET, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT 
            usuarios.usuario_id, 
            usuarios.nome, 
            usuarios.sobrenome, 
            usuarios.email
            usuarios.empresa
            FROM usuarios
            WHERE usuarios.usuario_id = $usuario";
    $res = $PDO->query( $sql );
    $row = $res->fetchAll(PDO::FETCH_ASSOC);
    foreach ($row as $key => $linha) {

      $nome       = $linha["nome"];
      $sobrenome  = $linha["sobrenome"];
      $email      = $linha["email"];
      $empresa    = $linha["empresa"];
    }
    
    
    
    $sql1 = "SELECT 
            pags.url, 
            pags.title, 
            pags.description, 
            pags.vendavel
            FROM pags
            WHERE pags.vendavel='S'
            AND pags.url = '$url'";
    $res1 = $PDO->query( $sql1 );
    $row1 = $res1->fetchAll(PDO::FETCH_ASSOC);
    foreach ($row1 as $key => $linha1) {

      $title       = $linha1["title"];
      $description = $linha1["description"];
      $email      = $linha1["email"];
      $empresa    = $linha1["empresa"];
    }        
            
            
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "webmaster@gopinatha.com.br";
    $to = "$email";
    $subject = "Proposta Comercial " . $title;
      $message = 
      "Olá" . $nome." ".$sobrenome."
       Você está recebendo este e-mail porque manifestou interesse em nosso
       produto
      "
      ;
      $headers = "From:" . $from;
      mail($to,$subject,$message, $headers);
      echo "The email message was sent.";

        echo $id . "<br />" . $session . "<br />" . $usuario;
 
        