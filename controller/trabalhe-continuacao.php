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
    </style>

    </head>
    <body>
   
        <nav aria-label="breadcrumb" style="margin-left: 12px; margin-top: 16px;">
            <ol class="breadcrumb" style="background-color: white;">
            <li class="breadcrumb-item" style="font-family: padrao;"><a href="home">Home</a></li>
            <li class="breadcrumb-item" style="font-family: padrao;"><a href="#">Rede Vaishnava</a></li>
            <li class="breadcrumb-item" style="font-family: padrao;"><a href="trabalhe">Trabalhe conosco</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="font-family: padrao;">Trabalhe conosco (continuação)</li>
          </ol>
        </nav>

        <div class="content">        
            <div class="row">
                <div class="col-12" style="margin-bottom: 35px;">
                    <div class="parallax" style="-webkit-box-shadow: inset 5px 5px 11px 1px #000000; box-shadow: inset 5px 5px 11px 1px #000000;"></div>
                </div>
                <h1 class="page-header" style="margin-left: 20px;">Trabalhe conosco</h1>

                <div class="box-01-total" style="margin-left:-245px; margin-top: -58px"> 
                    <div class="box-01">
                        <div class="conteudo">
                            <div class="linha">
                                <div class="barra" style="background-color: darkred;"></div>
                            </div> <!-- Linha -->
                        </div>
                    </div>
                </div>                        
                <div class="row justify-content-center" style="margin-left: 15px; margin-bottom: 15px;">

                    Um dos objetivos primários do Instituto Padi Seva é o de auxiliar 
                    os devotos os devotos que se encontram em condição de vulnerabilidade
                    social, que estiveram afastados por muito tempo de suas atividade laborais
                    ou que desejam reingressar no mercado de trabalho. Desta maneira, ocasionalmente, 
                    podemos abrir vagas em nossas oficinas para ensinar um ou outro ofício a estas pessoas.
                    Estas aulas serão absolutamente gratuitas e poderão ser acompanhadas de estágio supervisionado
                    remunerado ou não.
                    <h3 style="margin-top: 25px;">Cadastre-se</h3>
                    <div class="row">
                        <div class="content" style="margin-top: 15px;">
                            
                            
                            
                            <form class="row g-3 needs-validation" novalidate>
                              <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Prenome</label>
                                <input type="text" class="form-control" id="validationCustom01" value="" required placeholder="Primeiro nome">
                                <div class="valid-feedback">
                                  Correto!
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required placeholder="Sobrenome">
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Senha</label>
                                <div class="input-group has-validation">
                                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                                  <input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                  <div class="invalid-feedback">
                                    Informe a senha.
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <label for="validationCustom03a" class="form-label">CEP</label>
                                <input type="number" class="form-control" id="validationCustom03a" required placeholder="00000000"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Informe o CEP do endereço primeiro.
                                </div>
                              </div><!-- col-md-2 -->
                              <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Logradouro</label>
                                <input type="text" class="form-control" id="validationCustom03" required  placeholder="Rua, Avenida, Travessa..."  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Endereço não encontrado.
                                </div>
                              </div>
                              <div class="col-md-1">
                                  <label for="validationCustom04" class="form-label" style="margin-left: 15px;">N&ordm;</label>
                                  <input type="text" class="form-control" id="validationCustom03a" required=""  style="width: 100%;">
                                  <div class="invalid-feedback">
                                    Qual o número?
                                  </div>
                              </div>
                              <div class="col-md-2">
                                <label for="validationCustom05" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="validationCustom05" style="width: 100%;">
                                <input type="hidden" name="bairro">
                              </div>
                              <div class="col-md-2">
                                <label for="validationCustom05" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="validationCustom05" style="width: 100%;">
                                <div class="invalid-feedback">
                                  Município não informado.
                                </div>
                              </div>
                              <div class="col-md-1">
                                <label for="validationCustom05" class="form-label">UF</label>
                                <input type="text" class="form-control" id="validationCustom05"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-4          ">
                                <label for="validationCustom05" class="form-label">e-Mail</label>
                                <input type="email" class="form-control" id="validationCustom05"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Nome Devocional</label>
                                <input type="text" class="form-control" id="validationCustom05"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Mestre Espiritual</label>
                                <input type="text" class="form-control" id="validationCustom05"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-2">
                                <label for="validationCustom05" class="form-label">Telefone Fixo</label>
                                <input type="text" class="form-control" id="validationCustom05"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-2">
                                <label for="validationCustom05" class="form-label">Telefone Celular</label>
                                <input type="text" class="form-control" id="validationCustom05"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="validationCustom05"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="validationCustom05"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                              <div class="col-md-2">
                                <label for="validationCustom05" class="form-label">Twitter</label>
                                <input type="text" class="form-control" id="validationCustom05"  style="width: 100%;">
                                <div class="invalid-feedback">
                                  Please provide a valid zip.
                                </div>
                              </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                  <label class="form-check-label" for="invalidCheck">
                                      Li e concordo com os <a href="#">Termos e Condições</a>
                                  </label>
                                  <div class="invalid-feedback">
                                    You must agree before submitting.
                                  </div>
                                </div>
                              </div>
                        <div class="col-12" style="margin-top: 15px;">
                            <hr />
                                <button class="btn btn-primary" type="submit">Próximo</button>
                              </div>
                            </form>                            
                            
                            
                            
                            
                        </div>
                    </div>
                    
                </div><!-- row -->
            </div><!-- row -->
        </div><!-- contet -->
        <script type="javascript">
            // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
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
