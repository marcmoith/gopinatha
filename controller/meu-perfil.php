<style type="text/css">
body {
    margin: 0;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
        #user .facebook a:link{
            color: #ccc;
        }
        #user .facebook a:visited{
            color: green;
        }
        #user .facebook a:hover{
            color: #3b5998;
        }
        #user .facebook a:hover{
            color: #3b5998;
        }

        
        #user .instagram a:link{
            color: #ccc;
        }
        #user .instagram a:visited{
            color: green;
        }
        #user .instagram a:hover {
            color: rosybrown;
        }

        
        #user .twitter a:link{
            color: #ccc;
        }
        #user .twitter a:visited{
            color: green;
        }
        #user .twitter a:hover {
            color: #1d9bf0;
        }

        #user .linkedin a:link{
            color: #ccc;
        }        
        #user .linkedin a:visited{
            color: green;
        }
        #user .linkedin a:hover {
            color: #0a66c2;
        }        

        #user .youtube a:link{
            color: #ccc;
        }        
        #user .youtube a:visited{
            color: green;
        }
        #user .youtube a:hover {
            color: red;
        }        
        
        #user .whatsapp a:link{
            color: #ccc;
        }        
        #user .whatsapp a:visited{
            color: green;
        }
        #user .whatsapp a:hover {
            color: #0fc244;
        }        
        
        #user .reddit a:link{
            color: #ccc;
        }        
        #user .reddit a:visited{
            color: green;
        }
        #user .reddit a:hover{
            color: #ff4300;
        }        
        
        #user .mail a:link{
            color: #ccc;
        }        
        #user .mail a:visited{
            color: green;
        }
        #user .mail a:hover {
            color: darkred;
        }        

        
    </style>
<nav aria-label="breadcrumb" style="margin-left: 12px; margin-top: 16px;">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" style="font-family: padrao;"><a href="home" style="color: #005984">Home</a></li>
      <li class="breadcrumb-item" style="font-family: padrao;"><a href="produtos" style="color: #005984">Área Restrita</a></li>
      <li class="breadcrumb-item active" style="font-family: padrao;" aria-current="page">Meu Perfil</li>
  </ol>
</nav>
<?php                    
      if($usuario >0){
        
        $sql = "SELECT 
                usuarios.empresa, 
                usuarios.nome, 
                usuarios.sobrenome,
                usuarios.email,
                usuarios.info,
                usuarios.fixo, 
                usuarios.cel, 
                usuarios.img
                FROM usuarios
                WHERE usuario_id = $usuario";
        $res = $PDO->query( $sql );
        $row = $res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $key => $linha) {
        
            $nome      = $linha["nome"];
            $email = $linha["email"];
            $sobrenome = $linha["sobrenome"];
            $img       = $linha["img"];
            $fixo      = $linha["fixo"];
            $cel       = $linha["cel"];
            $info      = $linha["info"];
        } 
      } else {
        $_SESSION['msg'] = "A sua sessão, provavelmente expirou. Faça login novamente";
        header("Location: login&prd=".$pag);
      }  
?>                    
          
    <div class="container rounded" style="background-color: #fafafa; border: 1px solid #f2f2f2;">
        <div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12" style="margin: 10px 0px 10px 0px;">
        <div class="card h-100" style="border: 1px solid #f2f2f2;
             box-shadow: 1px 0px 3px 0px rgba(0,0,0,0.75);
            -webkit-box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.75);">
            <div class="card-body" style="background-color: #fafafa;">
                <div class="account-settings">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img style="border: 1px solid #c9c9c9;" src="assets/images/usuarios/<?php echo $img; ?>" alt="<?php echo $nome; ?> <?php echo $sobrenome; ?>">
                                        </div>
                                        <h5 class="user-name"><?php echo $nome; ?> <?php echo $sobrenome; ?></h5>
                                        <h6 class="user-email"><?php echo $email; ?></h6>
                                        <h6 class="user-email"><?php echo $cel; ?></h6>
                                        <div id="user">
                                            <span class="facebook"><a href="https://www.facebook.com/gopinatha.services/"  title="Facebook de <?php echo $nome;?>" class="rounded"><i class="socicon socicon-facebook mbr-iconfont mbr-iconfont-btn"></i></a></span>
                                            <span class="instagram"><a href="https://www.instagram.com/gopinatha.services/"  title="Instagram de <?php echo $nome;?>" class="rounded"><i class="socicon socicon-instagram mbr-iconfont mbr-iconfont-btn"></i></a></span>
                                            <span class="twitter"><a href="https://twitter.com/gopinatha.services" title="Twitter  de <?php echo $nome;?>" class="rounded"><i class="socicon socicon-twitter mbr-iconfont mbr-iconfont-btn"></i></a></span>
                                            <span class="linkedin"><a href="https://www.youtube.com/channel/UCw1MluWjIlWIcNPf8EPXx5A" title="Linkedin  de <?php echo $nome;?>" class="rounded"><i class="socicon socicon-linkedin mbr-iconfont mbr-iconfont-btn"></i></a></span>
                                            <span class="youtube"><a href="https://www.youtube.com/channel/UCw1MluWjIlWIcNPf8EPXx5A" title="Canal do Youtibe de <?php echo $nome;?>" class="rounded"><i class="socicon socicon-youtube mbr-iconfont mbr-iconfont-btn"></i></a></span>
                                        </div>

                                </div>
                                <div class="about rounded" style="border: 1px solid #c9c9c9; background-color: #fcfcfc;">
                                    <h5 class="text-warning" style="font-family: padrao; font-size: 14pt; margin-top: 15px; margin-bottom: -15px;">SOBRE MIM</h5>
                                        <p><?php echo $info; ?></p>
                                </div>
                        </div>
                </div>
        </div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" style="margin: 10px 0px 10px 0px;">
<div class="card h-100" style="border: 1px solid #f2f2f2;
             box-shadow: 1px 0px 3px 0px rgba(0,0,0,0.75);
            -webkit-box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.75);">
	<div class="card-body">
            <div class="row gutters" style="margin: 8px 0px 8px 0px;">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-warning" style="font-family: padrao; font-size: 14pt;">DADOS PESSOAIS</h6>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
                                    <form method="POST" action="assets/backend.php" enctype="multipart/form-data">
                                        <input type="hidden" name="pag" value="<?php echo $url; ?>">
                                        <input type="hidden" name="id" value="updt_usuario">
                                        <input type="hidden" name="user" value="<?php echo $usuario; ?>">
					<label for="fullName">Nome</label>
                                        <input type="text" class="form-control" id="fullName" name="fname" placeholder="Informe o seu primeiro nome" value="<?php echo $nome; ?>">
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="lastname">Sobrenome</label>
                                        <input type="text" class="form-control" id="lastname" name="lname" placeholder="Informe o seu sobrenome" value="<?php echo $sobrenome; ?>">
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="email">E-Mail</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe o seu eMail" value="<?php echo $email; ?>">
				</div>
			</div>
                    
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="phone">Telefone Fixo</label>
                                        <input type="tel" class="form-control" id="phone" name="fixo" placeholder="Informe o seu Telefone Fixo" value="<?php echo $fixo; ?>">
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="celp">Telefone Celular</label>
                                        <input type="tel" class="form-control" id="celp" name="cel" placeholder="Informe o seu Telefone Celular" value="<?php echo $cel; ?>">
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="phone">Telefone Fixo</label>
                                        <input type="tel" class="form-control" id="phone" name="fixo" placeholder="Informe o seu Telefone Fixo" value="<?php echo $fixo; ?>">
				</div>
			</div>
                </div>
<?php                    
                    
        $sql = "SELECT 
                enderecos.cep, 
                enderecos.logr, 
                enderecos.nr,
                enderecos.bairro,
                enderecos.compl,
                enderecos.cidade, 
                enderecos.uf
                FROM enderecos
                WHERE enderecos.id_pessoas = $usuario";
        $res = $PDO->query( $sql );
        $row = $res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $key => $linha) {
        
            $cep    = $linha["cep"];
            $logr   = $linha["logr"];
            $nr     = $linha["nr"];
            $compl  = $linha["compl"];
            $bairro = $linha["bairro"];
            $cidade = $linha["cidade"];
            $uf     = $linha["uf"];
        } 
?>                    
            
            
            
		<div class="row gutters" style="margin: 8px 0px 8px 0px;">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Endereço</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="Street">Logradouro</label>
                                        <input type="text" class="form-control" id="Street" name="logr" placeholder="Rua, Travessa Avenida..." value="<?php echo $logr; ?>">
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="nro">N&ordm;</label>
                                        <input type="text"  class="form-control" id="nro" name="nr" placeholder="Rua, Travessa Avenida..." value="<?php echo $nr; ?>">
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="cmpl">Complemento</label>
                                        <input type="text" class="form-control" id="cmpl" name="compl" placeholder="Andar, Apartamento, lote..." value="<?php echo $compl; ?>">
				</div>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="barrio">Bairro</label>
                                        <input type="text" class="form-control" id="barrio" name="bairro" placeholder="Bairro" value="<?php echo $bairro; ?>">
				</div>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="mun">Município</label>
                                        <input type="text" class="form-control" id="mun" name="cidade" placeholder="Município" value="<?php echo $cidade; ?>">
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
				<div class="form-group" style="margin: 8px 0px 8px 0px;">
					<label for="estado">Estado</label>
                                        <input type="text" class="form-control" id="estado" name="uf" placeholder="Unidade da Federação" value="<?php echo $uf; ?>">
				</div>
			</div>
                        <div class="form-floating col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <textarea class="form-control" placeholder="Conte-nos um pouco sobre você" id="floatingTextarea2" style="height: 100px;"></textarea>
                          <label for="floatingTextarea2" style="padding-left: 25px; font-size: 13px;"><?php echo $info; ?></label>
                        </div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right" style="margin: 8px 0px 8px 10px;">
					<button type="button" onclick="javascript: history.go(-1)" class="btn btn-danger">Cancela</button>
					<button type="submit" id="submit" class="btn btn-success">Atualiza</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>    
    
    
    
    
    <hr style="color: #60a3da; height: 6px; border: 1px solid darkblue; box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);" />
    <div class="row justify-content-center">
        <div class="col-6 rounded" style="background-color: #e4edfe; border: 1px solid #cecece; margin: 20px 0px 20px 0px; box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p class="text-primary">
                    Conquistar clientes &quot;jogando os preços lá embaixo&quot;, tem um efeito bumerangue: 
                    a própria empresa acabará sendo a vítima
                  </p>
                </blockquote>
                <figcaption class="blockquote-footer text-primary">
                  Peter Drucker <cite title="">(1909-2005)</cite>
                </figcaption>
            </figure>
        </div>
    </div>

    