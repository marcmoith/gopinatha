<style type="text/css">
body {
    margin: 0;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}    </style>
<nav aria-label="breadcrumb" style="margin-left: 12px; margin-top: 16px;">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" style="font-family: padrao;"><a href="home" style="color: #005984">Home</a></li>
      <li class="breadcrumb-item" style="font-family: padrao;"><a href="produtos" style="color: #005984">Sobre Nós</a></li>
      <li class="breadcrumb-item active" aria-current="page"><h1 style="font-family: padrao; font-size: 12pt; width: 300px;">Trabalhe Conosco</h1></li>
  </ol>
</nav>
<?php                    
      if($usuario >0){
        
        $sql = "SELECT 
                usuarios.empresa, 
                usuarios.nome, 
                usuarios.sobrenome,
                usuarios.email,
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
        } 
      } else {
        $_SESSION['msg'] = "A sua sessão, provavelmente expirou. Faça login novamente";
        header("Location: login&prd=".$pag);
      }  
?>                    
          
    <div class="container rounded mt-5 mb-5" style="border: 1px solid #dadada; background-color: #fcfcfc;">
        <div class="row">
            <div class="col-md-3 border-rwaight">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" style="box-shadow: 2px 1px 8px -1px rgba(0,0,0,0.75); -webkit-box-shadow: 2px 1px 8px -1px rgba(0,0,0,0.75); -moz-box-shadow: 2px 1px 8px -1px rgba(0,0,0,0.75); margin-bottom: 8px;" width="150px" src="assets/images/usuarios/<?php echo $img; ?>">
                    <span class="fs-3 font-weight-bold"><a href="#" class="link-secondary"><?php echo $nome; ?></a></span>
                    <span class="fs-6 text-danger"><span class="mbri-lock mbr-iconfont mbr-iconfont-btn text-danger" style="font-size: 12px; color: #666; font-weight: bolder;"></span> <?php echo $email; ?></span>
                    <span> </span>
                </div>
            </div>
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Meu perfil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nome</label><div class="form-floating"><input name="fname" type="text" style="padding-bottom: 30px; color: #ccc; font-size: 19px; font-style: italic;" class="form-control" placeholder="Primeiro Nome" value="<?php echo $nome; ?>"></div></div>
                        <div class="col-md-6"><label class="labels">Sobrenome</label><div class="form-floating"><input name="lname" type="text"  style="padding-bottom: 30px; color: #ccc; font-size: 19px; font-style: italic;" class="form-control" value="<?php echo $sobrenome; ?>" placeholder="Sobrenome"></div></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md"><label class="labels">Telefone Fixo</label><div class="form-floating"><input name="fixo" type="text" style="padding-bottom: 30px; color: #ccc; font-size: 19px; font-style: italic;" class="form-control " placeholder="Informe o Número do Telefone Fixo" value="<?php echo $fixo; ?>"></div></div>
                        <div class="col-md"><label class="labels">Celular</label><div class="form-floating"><input name="cel" type="text"  style="padding-bottom: 30px; color: #ccc; font-size: 19px; font-style: italic;" class="form-control" placeholder="Informe o Telefone Celular" value="<?php echo $cel; ?>"></div></div>
                    </div>
<?php                    
                    
        $sql = "SELECT 
                enderecos.cep, 
                enderecos.logr, 
                enderecos.nr,
                enderecos.bairro,
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
            $bairro = $linha["bairro"];
            $cidade = $linha["cidade"];
            $uf     = $linha["uf"];
        } 
?>                    
                    
                    <div class="row mt-3">
                        <div class="col-md-4"><label class="labels">CEP</label><div class="form-floating"><input name="cep" type="number"  style="padding-bottom: 30px; color: #ccc; font-size: 16px; font-style: italic;" class="form-control" placeholder="Informe o CEP" value="<?php echo $cep; ?>"></div></div>
                        <div class="col-md-6"><label class="labels">Logradouro</label><div class="form-floating"><input name="logr" type="text"  style="padding-bottom: 30px; color: #ccc; font-size: 13px; font-style: italic;" class="form-control" placeholder="Endereço" value="<?php echo $logr; ?>"></div></div>
                        <div class="col-md-2"><label class="labels">N&ordm;</label><div class="form-floating"><input name="nr" type="text"  style="padding-bottom: 30px; color: #ccc; font-size: 13px; font-style: italic;" class="form-control" placeholder="N&ordm;" value="<?php echo $nr; ?>"></div></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-5"><label class="labels">Bairro</label><div class="form-floating"><input name="bairro" type="text"  style="padding-bottom: 30px; color: #ccc; font-size: 13px; font-style: italic;" class="form-control" placeholder="Bairro" value="<?php echo $bairro; ?>"></div></div>
                        <div class="col-md-5"><label class="labels">Município</label><div class="form-floating"><input name="cidade" type="text"  style="padding-bottom: 30px; color: #ccc; font-size: 13px; font-style: italic;" class="form-control" placeholder="Cidade" value="<?php echo $cidade; ?>"></div></div>
                        <div class="col-md-2"><label class="labels">UF</label><div class="form-floating"><input name="uf" type="text"  style="padding-bottom: 30px; color: #ccc; font-size: 13px; font-style: italic;" class="form-control" placeholder="Estado" value="<?php echo $uf; ?>"></div></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Salvar Alterações</button></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
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
                    A solução de problemas só restaura a normalidade. As oportunidades significam 
                    explorar novos caminhos
                  </p>
                </blockquote>
                <figcaption class="blockquote-footer text-primary">
                  Peter Drucker <cite title="">(1909-2005)</cite>
                </figcaption>
            </figure>
        </div>
    </div>

    