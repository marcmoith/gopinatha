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
        <link rel="stylesheet" href="assets/css/mobirise-icons2/mobirise2.css">
        <link rel="stylesheet" href="assets/css/mobirise-icons/mobirise2.css">
        
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
        
    </style>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
            <script>
                function limpa_formulario_cep() {
                        //Limpa valores do formulário de cep.
                        document.getElementById('rua').value=("");
                        document.getElementById('bairro').value=("");
                        document.getElementById('cidade').value=("");
                        document.getElementById('uf').value=("");
                        document.getElementById('ibge').value=("");
                }

                function meu_callback(conteudo) {
                    if (!("erro" in conteudo)) {
                        //Atualiza os campos com os valores.
                        document.getElementById('rua').value=(conteudo.logradouro);
                        document.getElementById('bairro').value=(conteudo.bairro);
                        document.getElementById('cidade').value=(conteudo.localidade);
                        document.getElementById('uf').value=(conteudo.uf);
                        document.getElementById('ibge').value=(conteudo.ibge);
                    } //end if.
                    else {
                        //CEP não Encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                }

                function pesquisacep(valor) {

                    //Nova variável "cep" somente com dígitos.
                    var cep = valor.replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if(validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            document.getElementById('rua').value="...";
                            document.getElementById('bairro').value="...";
                            document.getElementById('cidade').value="...";
                            document.getElementById('uf').value="...";
                            document.getElementById('ibge').value="...";

                            //Cria um elemento javascript.
                            var script = document.createElement('script');

                            //Sincroniza com o callback.
                            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                            //Insere script no documento e carrega o conteúdo.
                            document.body.appendChild(script);

                            document.cliente.numero.focus();

                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulario_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulario_cep();
                    }
                };

            </script>
    <style type="text/css">
.box_termo {
    
    padding:10px;
    width:300px;
    text-align: justify;;
    height:auto;
    overflow:hidden;
    }
.box {
	-webkit-box-shadow: 6px 6px 10px #999; 
	   -moz-box-shadow: 6px 6px 10px #999;
	        box-shadow: 6px 6px 10px #999;	
}
.input_box {
    float:left;
    margin:0 5px 0 0;
    padding:0;
    }

.texto_box {
    font-size:12px;
    font-weight:bold;
    margin: 0;
    padding: 0;
    }

</style>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript">

    function checkname()
    {
     var name=document.getElementById( "email" ).value;

     if(name.length >5)
     {
          $.ajax({
              type: 'post',
              url: 'checkdata.php',
              data: {
               email:email,
              },
              success: function (response) {
                   $( '#name_status' ).html(response);
                   if(response=="OK")   
                   {
                    return true;    
                   }
                   else
                   {
                    return false;   
                   }
              }
          });
     }
     else
     {
      $( '#name_status' ).html("");
      return false;
     }

    }

    function checkall()
    {
     var namehtml=document.getElementById("name_status").innerText;
     alert(namehtml);

     if(namehtml=="OK")
     {
      return true;
     }
     else
     {
      return false;
     }
    }

    </script>
    <script type="text/javascript" src="assets/js/jquery.mask.min.js"/></script>
    <script src="https://kit.fontawesome.com/ee898830cc.js" crossorigin="anonymous"></script>


    </head>
    <body>
   <?php
   
   
   ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: white;">
            <li class="breadcrumb-item" style="font-family: padrao;"><a href="home">Home</a></li>
            <li class="breadcrumb-item" style="font-family: padrao;"><a href="login">Login</a></li>
            <li class="breadcrumb-item" style="font-family: padrao;"><a href="adm">Administração</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="font-family: padrao;">Cadastro de Usuário</li>
          </ol>
        </nav>

        <div class="content">        
            <div class="row">
                <h1 class="page-header">Cadastro de Usuário</h1>
                <hr />
                
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="margin-top: 25px;">
                        <div class="card" style="margin-top:  -15px;">
                            <div class="content" style="padding-top: 25px; padding-left: 15px; padding-right: 15px;">                           
                                <form method="post" name="cliente" id="myform" enctype="multipart/form-data" action="assets/backend.php">
                                    <input type="hidden" name="id" value="cadusu">
                                <div class="row">
                                    <div class="col-md-12" style="color:#a47712; font-size: 14pt;">
                                        Preencha com o máximo de informações possível para que possamos proporcionar a você uma experiência incrível!
                                        <br />Senha: pimpao 
                                        <br />MD5  : <?php echo md5("pimpao"); ?>
                                        <hr />
                                        <div class="clearfix"></div>
                                    </div><!-- col-md-12 -->                                         
                                </div><!-- row -->
                                <div class="row">
                                    <div class="col-md-12" style="color:#a47712; font-size: 12pt;">
                                        Os campos marcados com <span style="color: #b00000; font-weight:bolder;">(*)</span> são obrigatórios!<br />
                                        <div class="clearfix"></div>
                                    </div><!-- col-md-12 -->                                         
                                </div><!-- row -->
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email"  style="color: #664805; font-weight: 400; font-size: 10pt;">Email<span style="color: #b00000; font-weight:bolder;">(*)</span></label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-letter mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Endereço de eMail"  style="font-size: 10pt;" required="required">
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
                                                <input type="password" class="form-control" placeholder="Escolha uma Senha" name="password" style="font-size: 10pt;" id="password" required="required">
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="senha"  style="color: #664805; font-weight: 400; font-size: 10pt;">Confirmar a Senha <span style="color: #b00000; font-weight:bolder;">(*)</span></label>
                                            <input type="password" class="form-control" placeholder="Repita a Senha" name="password_again" id="password_again" required="required" style="border-radius: 6px; border: 1px solid #8c6d1c; font-size: 10pt;">
                                        </div><!-- form-group -->
                                    </div><!-- col-md-4 -->
                                </div><!-- row -->
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="celular"  style="color: #664805; font-weight: 400; font-size: 10pt;">Celular<span style="color: #b00000; font-weight:bolder;">(*)</span></label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-mobile-2 mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->
                                                <input type="tel" name="celular" id="celular"  class="form-control" placeholder="Informe o seu celular" required="required" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{4,5}"  style="font-size: 10pt;" />
                                                <script type="text/javascript">$("#celular").mask("(00) 00000-0009");</script>
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-4 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fixo"  style="color: #664805; font-weight: 400; font-size: 10pt;">Telefone fixo</label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-phone mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->              
                                                <input type="tel" name="fixo" id="fixo"  class="form-control" placeholder="Informe a linha fixa" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"  style="font-size: 10pt;" />
                                                <script type="text/javascript">$("#fixo").mask("(00) 0000-0009");</script>
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-4 -->
                                </div><!-- row -->
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname"  style="color: #664805; font-weight: 400; font-size: 10pt;">Primeiro Nome <span style="color: #b00000; font-weight:bolder;">(*)</span></label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-user mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->              
                                                <input type="text" class="form-control" placeholder="Prenome" name="fname"  required="required"   style="font-size: 10pt;" >
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lname"  style="color: #664805; font-weight: 400; font-size: 10pt;">Sobrenome <span style="color: #b00000; font-weight:bolder;">(*)</span></label>
                                            <input type="text" class="form-control" placeholder="Sobrenome" name="lname" required="required" style="border-radius: 6px; border: 1px solid #8c6d1c; font-size: 10pt;">
                                        </div><!-- form-group -->
                                    </div><!-- col-md-6 -->
                                </div><!-- row -->
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ndevocional"  style="color: #664805; font-weight: 400; font-size: 10pt;">Nome Espiritual</label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-cloud mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->              
                                                <input type="text" class="form-control" placeholder="Nome Espiritual" name="ndevocional"   style="font-size: 10pt;" >
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="diksaguru"  style="color: #664805; font-weight: 400; font-size: 10pt;">Mestre Espiritual </label>    
                                            <select class="form-control" name="diksaguru" style="color: #664805; font-family: Arial; font-size: 10pt;">
                                                <option value="" selected="selected">Selecione o mestre</option>
                                                <?php
                                                
                                                $sql = "SELECT 
                                                        ps_diksaguru.id_guru, 
                                                        ps_diksaguru.guru
                                                        FROM ps_diksaguru
                                                        ORDER BY ps_diksaguru.guru";
                                                $res = $PDO->query($sql);
                                                $row = $res->fetchAll(PDO::FETCH_ASSOC);
                                                foreach ($row as $key => $linha) {
                                                    
                                                    $id     = $linha["id_guru"];
                                                    $guru   = $linha["guru"];
                                                ?>
                                                <option value="<?php echo $id; ?>"><?php echo $guru; ?></option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div><!-- form-group -->
                                    </div><!-- col-md-6 -->
                                </div><!-- row -->
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="cep"  style="color: #664805; font-weight: 400; font-size: 10pt;">CEP / ZIP <span style="color: #b00000; font-weight:bolder;">(*)</span></label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-map-pin mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->
                                                <input name="cep" type="number" id="cep"  class="form-control" value="" size="10" maxlength="9"
                                                               onblur="pesquisacep(this.value);" required="required"  style="font-size: 10pt;"  />
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-sm-3 -->
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="rua"  style="color: #664805; font-weight: 400; font-size: 10pt;">Endereço Residencial</label>
                                            <input name="rua" class="form-control"  type="text" id="rua" size="30" style="border-radius: 6px; border: 1px solid #8c6d1c;  background-color: #d2be91; font-size: 12pt;" />
                                            <input name="tipo_endereco" type="hidden" value="1">
                                        </div><!-- form-group -->
                                    </div><!-- col-sm-2 -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="numero" style="color: #664805; font-size: 13pt;">N&ordm;</label>
                                            <div class="input-group">
                                                <input name="numero" class="form-control"  type="number" id="numero" size="12" style="border-radius: 0px 6px 6px 0px; border: 1px solid #8c6d1c; font-size: 10pt; margin-left:  0px; margin-right:  0px;" />
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-sm-2 -->

                                </div><!-- row -->

                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="compl"  style="color: #664805; font-weight: 400; font-size: 10pt;">Complemento</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-flag mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>                                                
                                                </div><!-- input-group-prepend -->
                                                    <input type="text" class="form-control" name="compl" id="compl" size="30"  style="border-radius: 6px; border: 1px solid #8c6d1c; font-size: 12pt;"/>
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-sm-3 -->                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="bairro"  style="color: #664805; font-weight: 400; font-size: 10pt;">Bairro</label>
                                            <input type="text" class="form-control" name="bairro" id="bairro" size="30"  style="border-radius: 6px; border: 1px solid #8c6d1c; background-color: #d2be91; font-size: 12pt;"/>
                                        </div><!-- form-group -->
                                    </div><!-- col-sm-3 -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cidade"  style="color: #664805; font-weight: 400; font-size: 10pt;">Município</label>
                                            <input type="text" class="form-control" name="cidade" id="cidade" size="40"  style="border-radius: 6px; border: 1px solid #8c6d1c;  background-color: #d2be91; font-size: 12pt;" />
                                        </div><!-- form-group -->
                                    </div><!-- col-md-4 -->
                                
                                </div><!-- row -->
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <label for="uf"  style="color: #664805; font-weight: 400; font-size: 10pt;">Estado</label>
                                            <input type="text" class="form-control" name="uf" id="uf" size="2" style="border-radius: 6px; border: 1px solid #8c6d1c; background-color: #d2be91; font-size: 12pt;" />
                                        </div><!-- form-group -->
                                    </div><!-- col-sm-2 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pais"  style="color: #664805; font-weight: 400; font-size: 10pt;">País</label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="mobi-mbri mobi-mbri-globe-2 mbr-iconfont mbr-iconfont-btn"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->              
                                                <input type="text" class="form-control" placeholder="País" name="pais"   style="font-size: 13pt;" value="Brasil" >
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-6 -->

                                </div><!-- row -->
                                <input name="ibge" type="hidden" id="ibge" size="8" />
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-12">
                                        <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c; margin-bottom: 25px; margin-top: 25px;">
                                            <div class="input-group-prepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                <span class="input-group-text justify-content" style="background-color: #f6b401; border-left:  1px solid #f6b401; color: #785600; font-size: 10pt; padding-right:  18px;">
                                                    &nbsp; Fale-nos um pouco <br />sobre sua história no <br />Movimento Hare Krsna</span>
                                            </div><!-- input-group-prepend -->
                                            <textarea class="form-control" name="obs" aria-label="Com textarea" style="font-size: 10pt;"></textarea>
                                        </div><!-- input-group -->
                                    </div><!-- col-md-12 -->
                                </div><!-- row -->

                                    <script src="assets/js/jquery-1.11.1.min.js"></script>
                                    <script src="assets/js/jquery.validate.min.js"></script>
                                    <script src="assets/js/additional-methods.min.js"></script>
                                    <script>
                                    // just for the demos, avoids form submit
                                    jQuery.validator.setDefaults({
                                      debug: false,
                                      success: "valid"
                                    });
                                    $( "#myform" ).validate({
                                      rules: {
                                        password: "required",
                                        password_again: {
                                          equalTo: "#password"
                                        }
                                      }
                                    });
                                    $( "#myform" ).validate({
                                      rules: {
                                        email: {
                                          required: true,
                                          email: true
                                        }
                                      }
                                    });
                                    $( "#myform" ).validate({
                                      rules: {
                                        celular: {
                                          required: true,
                                          celular: true
                                        }
                                      }
                                    });
                                    $( "#myform" ).validate({
                                      rules: {
                                        fixo: {
                                          required: false,
                                          fixo: true
                                        }
                                      }
                                    });

                                    </script>                                
                                
                            </div><!-- content -->
                        </div><!-- card -->
                    </div><!-- col-md-8 -->
                    <div class="col-md-4" style="margin-top: 25px;">
                        <div class="card card-user">
                            <div class="content" style="border-radius: 8px; padding: 0px 15px 15px 15px;">
                                <div class="author" style="margin-top: -48px;">
                                    <center>
                                        <a href="#">
                                            <img class="avatar border-gray" id="img" src="assets/images/usuarios/user.png" alt="Usuário" width="150" style="border-radius: 50%; margin-top: 15px; margin-bottom: -15px; box-shadow: 0px 10px 14px 0px rgba(0,0,0,0.75);-webkit-box-shadow: 0px 10px 14px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 10px 14px 0px rgba(0,0,0,0.75);" />
                                        <br />
                                        </a>
                                    </center>
                                </div><!-- author --><br />
                                <hr />
                                <label for="img" style="color: #664805; font-weight: 400; font-size: 10pt;">Alterar a imagem do perfil</label>
                                    <input class="form-control" type="file" name="img" id="upload" style="font-size: 11pt;" />
                                <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
                                <script>
                                    $(function(){
                                        $('#upload').change(function(){
                                            const file = $(this)[0].files[0]
                                            const fileReader = new FileReader()
                                            fileReader.onloadend = function(){
                                                $('#img').attr('src', fileReader.result)
                                            }
                                            fileReader.readAsDataURL(file) 
                                        })
                                    })
                                </script>
                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="facebook" style="color: #664805; font-weight: 400; font-size: 10pt;">Facebook</label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->              
                                                   <input type="text" class="form-control" style="font-size: 10pt;" placeholder="https://www.facebook.com/seu.nome/" name="facebook">
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-6 -->
                                </div><!-- row -->

                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="twitter" style="color: #664805; font-weight: 400; font-size: 10pt;">Twitter</label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="socicon-twitter  socicon mbr-iconfont mbr-iconfont-social"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>
                                                    </span>
                                                </div><!-- input-group-prepend -->              
                                                   <input type="text" class="form-control" style="font-size: 10pt;" placeholder="https://twitter.com/seunome" name="twitter">
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-6 -->
                                </div><!-- row -->

                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="instagram" style="color: #664805; font-weight: 400; font-size: 10pt;">Instagram</label>
                                            <div class="input-group" style="border-radius: 6px; border: 1px solid #8c6d1c;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend" style="border-radius: 5px 0px 0px 5px; background-color: #f6b401;">
                                                        <span class="socicon-instagram  socicon mbr-iconfont mbr-iconfont-social"  style="font-size: 17pt; color: #785600; font-weight: bolder;"></span>                                                    
                                                </div><!-- input-group-prepend -->              
                                                   <input type="text" class="form-control" style="font-size: 10pt;" placeholder="https://www.instagram.com/seunome/" name="instagram">
                                            </div><!-- input-group -->
                                        </div><!-- form-group -->
                                    </div><!-- col-md-6 -->
                                </div><!-- row -->
                                <!-- Default unchecked -->
                                <div class="custom-control custom-checkbox">
                                    <p><a href="#"  style="color: #664805; font-weight: 400; font-size: 10pt;">Leia os nossos</a> <a href="index.php?id=polpriv" style="color: #664805;  font-size: 13px; font-weight: bold;">Termos e Condições</a></p>
                                    <input type="checkbox" class="custom-control-input" required="required" checked="checked">
                                    <label class="custom-control-label" for="termo"  style="color: #664805; font-weight: 400; font-size: 10pt;">Eu li, entendi e concordo com estas regras e condições.</label>
                                </div>
                                <br />
                                <hr />
                                <br />

                                <div class="row" style="margin-top: 25px;">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-danger btn-fill pull-right" style="font-size: 13pt;">Confirmar</button>
                                        <div class="clearfix"></div>
                                    </div><!-- col-md-5 -->                                                             
                                </div><!-- row -->

                            </div><!--  content -->
                            </form>
                        </div><!-- card-user -->
                    </div><!-- col-md-4 -->
                
                    
                </div><!-- row -->
            </div><!-- row -->
        </div><!-- contet -->
        
                    <script src="assets/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="assets/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>                


    </body>
</html>
