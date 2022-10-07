<?php
    $prd = isset($_GET['prd']) ? $_GET['prd'] : '';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <style type="text/css">
        .parallax {
        /* Coloque a imagem a ser usada como background */

        background-image: url("assets/images/banners/login.jpg");

        /* Defina uma altura para a visão que o usuário terá da imagem */
        min-height: 250px;

        /* defina o background como fixo e posicione a imagem */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }



.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #fff;
}


.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback{
    color: #ff606e;
}

.valid-feedback{
   color: #2acc80;
}
        
    </style>

    </head>
    <body>
   
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: white;">
                <li class="breadcrumb-item" style="font-family: padrao;"><a href="home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="font-family: padrao;">Login</li>
          </ol>
        </nav>

        <div class="content">        
            <div class="row">
                <div class="col-12" style="margin-bottom: 35px;">
                    <div class="parallax" style="-webkit-box-shadow: inset 5px 5px 11px 1px #000000; box-shadow: inset 5px 5px 11px 1px #000000;"></div>
                </div>
                <h1 class="page-header" style="margin-left: 25px;">Faça <em>Login</em></h1>
                <hr />
                
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="margin-top: 25px; margin-bottom: 25px;">
                        <div class="card">
                            <div class="content col-md-12" style="padding-left: 15px; padding-right: 15px; padding-bottom: 20px;">      
                                <form class="row g-3 requires-validation" novalidate  method="post" name="login" id="myform" enctype="multipart/form-data" action="assets/backend.php">

                                    <input type="hidden" name="id" value="login">
                                    <input type="hidden" name="id" value="login">
        <?php
            
            if(isset($_SESSION['msg'])){
                
                $erro = isset($_GET['erro'])?$_GET['erro']: "";;
                if($erro == 1){

        ?>
                                    
                                    
                                    <div class="row" style="margin: 15px 15px 15px 15px;">
                                      <div class="col-sm-2">
                                        <div class="card panel-danger">
                                          <div class="card-body">
                                            <img src="assets/images/seg.png" alt="segurança" class="img img-fluid" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-10">
                                        <div class="card panel-danger">
                                          <div class="card-body">
                                            <h5 class="card-title danger">Falha de Segurança!!!</h5>
                                            <p class="card-text danger">eMail ou senha não conferem. Tente novamente.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    
        <?php
            
                } else if($erro == 2){
        

        ?>
                                    <div class="col-md-12 rounded" style="margin-top: 15px; padding: 10px 10px 10px 10px; border: 1px solid red; font-size: 13px; color: red; font-weight: bold; background-color: lightpink;">
                                        eMail ou senha não podem ficar em branco. Preencha todos os campos.
                                    </div>
        <?php
            } 

            unset($_SESSION['msg']);
            
        }            
        ?>
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="email" style="color: #664805; font-weight: 400; font-size: 10pt;">Email<span style="color: #b00000; font-weight:bolder;">(*)</span></label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-letter mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->
                                                <input type="email" name="email" class="form-control" placeholder="Endereço de eMail"  style="font-size: 10pt;"  id="username" required>
                                                <div class="valid-feedback">
                                                   <span class="mobi-mbri mobi-mbri-protect mbr-iconfont mbr-iconfont-btn" style="margin-left: 15px;color: green;"></span> eMail validado!!!
                                                </div>
                                                <div class="invalid-feedback">
                                                    <span class="mobi-mbri mobi-mbri-sad-face mbr-iconfont mbr-iconfont-btn" style="margin-left: 15px; color: red;"></span> Informe um eMail válido
                                                </div>
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-4 -->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="senha"  style="color: #664805; font-weight: 400; font-size: 10pt;">Senha <span style="color: #b00000; font-weight:bolder;">(*)</span></label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-key mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->
                                                <input type="password" class="form-control" placeholder="Escolha uma Senha" name="password" style="font-size: 10pt;"   id="password" required>
                                                <div class="valid-feedback">
                                                   <span class="mobi-mbri mobi-mbri-protect mbr-iconfont mbr-iconfont-btn" style="margin-left: 15px;color: green;"></span> Senha OK!
                                                </div>
                                                <div class="invalid-feedback">
                                                    <span class="mobi-mbri mobi-mbri-sad-face mbr-iconfont mbr-iconfont-btn" style="margin-left: 15px; color: red;"></span> Informe a Senha
                                                </div>
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-4 -->
                                    <div class="col-md-2">
                                        <div class="form-group" style="margin-top: 20px;">                                        
                                            <button class="btn btn-danger" type="submit">Entrar</button>
                                        </div><!-- form-group -->
                                    </div><!-- col-md-4 -->
                                
                                </div><!-- row -->
                                </form>
                                
                                <div class="row" style="margin-top: 25px;">
                                <hr />
                                    <div class="col-md-10">
                                        <a href="esqueci-a-senha">esqueci a senha</a> | <a href="cadastro-de-usuario">cadastradar</a>
                                    </div><!-- col-md -->
                                </div><!-- row -->
                            </div><!-- content -->
                        </div><!-- card -->
                    </div><!-- col-md-8 -->

                </div><!-- row -->
            </div><!-- row -->
        </div><!-- contet -->
        <script type="text/javascript">
            (function () {
            'use strict'
            const forms = document.querySelectorAll('.requires-validation')
            Array.from(forms)
              .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                  form.classList.add('was-validated')
                }, false)
              })
            })()
        </script>
    </body>
</html>
