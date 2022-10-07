<style type="text/css">
        .parallax {
        /* Coloque a imagem a ser usada como background */

        background-image: url("assets/images/banners/quems.png");

        /* Defina uma altura para a visÃƒÂ£o que o usuÃƒÂ¡rio terÃƒÂ¡ da imagem */
        min-height: 250px;

        /* defina o background como fixo e posicione a imagem */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        
        
/******************* Timeline Demo - 9 *****************/

.main-timeline9{position:relative}

.main-timeline9:after,.main-timeline9:before{content:"";display:block;width:100%;clear:both}

.main-timeline9:before{content:"";width:3px;height:100%;background:#bf8a03;position:absolute;top:0;left:50%}

.main-timeline9 .timeline{width:50%;float:left;position:relative;z-index:1;}

.main-timeline9 .timeline:after,.main-timeline9 .timeline:before{content:"";display:block;width:0%;clear:both}

.main-timeline9 .timeline:first-child:before,.main-timeline9 .timeline:last-child:before{content:"";width:25px;height:25px;border-radius:50%;background:#fff;border:4px solid #cca872;position:absolute;top:0;right:-14px;z-index:1;}

.main-timeline9 .timeline:last-child:before{top:auto;bottom:0}

.main-timeline9 .timeline:last-child:nth-child(even):before{right:auto;left:-10px;bottom:-2px}

.main-timeline9 .timeline-content{text-align:center;margin-top:8px;position:relative;transition:all .3s ease 0s}

.main-timeline9 .timeline-content:before{content:"";width:100%;height:5px;background:#cca872;position:absolute;top:88px;left:0;z-index:-1}

.main-timeline9 .circle{width:180px;height:180px;border-radius:50%;background:#fff;border:8px solid #cca872;float:left;margin-right:35px;position:relative}

.main-timeline9 .circle span:after,.main-timeline9 .circle span:before,.main-timeline9 .circle:before{content:"";margin:auto;position:absolute;right:-33px;bottom:0;z-index:-1}

.main-timeline9 .circle:before{width:26px;height:30px;background:#cca872;top:0;box-shadow:inset 7px 0 9px -7px #444}

.main-timeline9 .circle span{display:block;width:100%;height:100%;border-radius:50%;line-height:160px;border:0px solid #adabab;font-size:80px;color:#e3b967;}

.main-timeline9 .circle span:after,.main-timeline9 .circle span:before{width:28px;height:50px;background:#fff;border-radius:0 0 0 21px;top:-54px}

.main-timeline9 .circle span:after{border-radius:21px 0 0;top:0;bottom:-56px}

.main-timeline9 .content{display:table;padding-right:40px;position:relative}

.main-timeline9 .year{display:block;padding:10px;margin:10px 0 50px;background:#cca872;border-radius:7px;font-size:25px;color:#fff}

.main-timeline9 .title{font-size:25px;font-weight:700;color:#cca872;margin-top:0}

.main-timeline9 .icon span:after,.main-timeline9 .icon span:before,.main-timeline9 .icon:before{content:"";height:25px;margin:auto;position:absolute;bottom:0;z-index:-1;left:-15px}

.main-timeline9 .description{font-size:14px;color:#a6a6a6;text-align:justify}

.main-timeline9 .icon{width:25px;height:25px;border-radius:50%;background:#fff;border:4px solid #cca872;position:absolute;top:78px;right:-14px}

.main-timeline9 .icon:before{width:15px;background:#cca872;top:-1px}

.main-timeline9 .icon span:after,.main-timeline9 .icon span:before{width:21px;background:#fff;border-radius:0 0 21px;top:-30px}

.main-timeline9 .icon span:after{border-radius:0 21px 0 0;top:0;left:-15px;bottom:-30px}

.main-timeline9 .timeline:nth-child(2n) .circle,.main-timeline9 .timeline:nth-child(2n) .timeline-content{float:right}

.main-timeline9 .timeline:nth-child(2n) .circle{margin:0 0 0 25px}

.main-timeline9 .timeline:nth-child(2n) .circle:before{right:auto;left:-33px;box-shadow:-7px 0 9px -7px #444 inset}

.main-timeline9 .timeline:nth-child(2n) .circle span:after,.main-timeline9 .timeline:nth-child(2n) .circle span:before{right:auto;left:-33px;border-radius:0 0 21px}

.main-timeline9 .timeline:nth-child(2n) .circle span:after{border-radius:0 21px 0 0}

.main-timeline9 .timeline:nth-child(2n) .content{padding:0 0 0 40px;margin-left:2px}

.main-timeline9 .timeline:nth-child(2n) .icon{right:auto;left:-14px}

.main-timeline9 .timeline:nth-child(2n) .icon span:after,.main-timeline9 .timeline:nth-child(2n) .icon span:before,.main-timeline9 .timeline:nth-child(2n) .icon:before{left:auto;right:-15px}

.main-timeline9 .timeline:nth-child(2n) .icon span:before{border-radius:0 0 0 21px}

.main-timeline9 .timeline:nth-child(2n) .icon span:after{border-radius:21px 0 0}

.main-timeline9 .timeline:nth-child(2){margin-top:180px}

.main-timeline9 .timeline:nth-child(odd){margin:-175px 0 0}

.main-timeline9 .timeline:nth-child(even){margin-bottom:80px}

.main-timeline9 .timeline:first-child,.main-timeline9 .timeline:last-child:nth-child(even){margin:0}

@media only screen and (max-width:990px){.main-timeline9:before{left:100%}

.main-timeline9 .timeline{width:100%;float:none;margin-bottom:20px!important}

.main-timeline9 .timeline:first-child:before,.main-timeline9 .timeline:last-child:before{left:auto!important;right:-13px!important}

.main-timeline9 .timeline:nth-child(2n) .circle{float:left;margin:0 25px 0 0}

.main-timeline9 .timeline:nth-child(2n) .circle:before{right:-33px;left:auto;box-shadow:7px 0 9px -7px #444 inset}

.main-timeline9 .timeline:nth-child(2n) .circle span:after,.main-timeline9 .timeline:nth-child(2n) .circle span:before{right:-33px;left:auto;border-radius:0 0 0 21px}

.main-timeline9 .timeline:nth-child(2n) .circle span:after{border-radius:21px 0 0}

.main-timeline9 .timeline:nth-child(2n) .content{padding:0 40px 0 0;margin-left:0}

.main-timeline9 .timeline:nth-child(2n) .icon{right:-14px;left:auto}

.main-timeline9 .timeline:nth-child(2n) .icon span:after,.main-timeline9 .timeline:nth-child(2n) .icon span:before,.main-timeline9 .timeline:nth-child(2n) .icon:before{left:-15px;right:auto}

.main-timeline9 .timeline:nth-child(2n) .icon span:before{border-radius:0 0 21px}

.main-timeline9 .timeline:nth-child(2n) .icon span:after{border-radius:0 21px 0 0}

.main-timeline9 .timeline:nth-child(2),.main-timeline9 .timeline:nth-child(even),.main-timeline9 .timeline:nth-child(odd){margin:0}

}

@media only screen and (max-width:480px){.main-timeline9:before{left:0}

.main-timeline9 .timeline:first-child:before,.main-timeline9 .timeline:last-child:before{left:-12px!important;right:auto!important}

.main-timeline9 .circle,.main-timeline9 .timeline:nth-child(2n) .circle{width:130px;height:130px;float:none;margin:0 auto}

.main-timeline9 .timeline-content:before{width:99.5%;top:68px;left:.5%}

.main-timeline9 .circle span{line-height:115px;font-size:60px}

.main-timeline9 .circle span:after,.main-timeline9 .circle span:before,.main-timeline9 .circle:before,.main-timeline9 .icon{display:none}

.main-timeline9 .content,.main-timeline9 .timeline:nth-child(2n) .content{padding:0 10px}

.main-timeline9 .year{margin-bottom:15px}

.main-timeline9 .description{text-align:center}

}


.description p{
    text-align:left;
}
    </style>
<nav aria-label="breadcrumb" style="margin-left: 12px; margin-top: 16px;">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" style="font-family: padrao;"><a href="home" style="color: #005984">Home</a></li>
    <li class="breadcrumb-item active" style="font-family: padrao;" aria-current="page">Quem Somos</li>
  </ol>
</nav>
<div class="container">        
    <div class="row">
        <div class="col-12" style="margin-bottom: 35px;">
            <div class="parallax" style="-webkit-box-shadow: inset 5px 5px 11px 1px #000000; box-shadow: inset 5px 5px 11px 1px #000000;"></div>
        </div><!-- col-12 -->     
    </div><!-- row -->
</div><!-- container --> 

   
<hr />
    
<div class="box-01-total" style="margin: 0px 0px 0px 0px;"> 
    <div class="box-01" style="width: 95%">
        <div class="conteudo quem-somos">
            <div class="titulo" style="margin-left: -10px;">
                <h1>
                    Quem Somos
                </h1>
                <div class="linha">
                    <div class="barra" style="background-color: red;"></div>
                </div> <!-- Linha -->
                <div class="texto justify-content caracteristicas">
                    A <b>Gopinatha Services</b> é uma empresa de assessoria, consultoria em alta gestão, 
                    treinamento e coaching, especializada em modelos de negócios complexos. Fundada em 1989, 
                    traz consigo a experiência de seus sócios cada um com mais de 20 anos em atuações de 
                    destaque no seu segmento. Devido à  carência existente no mercado no que toca à consultoria 
                    de gestão especializada em Concessionárias de Veículos, tem desenvolvido projetos 
                    voltados para o mercado automobilístico desde 1997 e a cada dia vem contribuindo 
                    junto às principais montadoras para aperfeiçoamento e profissionalização da gestão 
                    dos <em>dealers</em>.  
                </div><!-- texto -->
            </div><!-- conteudo -->
            <div class="img item prabhu">
                <img class="img-fluid img img-thumbnail"  src="assets/images/avatar/inst.jpg" alt="Gopinatha Services" title="Gopinatha Services" /> 
            </div> <!-- Img -->
        </div><!-- box-01 -->
    </div><!-- box-01-total -->
    <div class="box-01-total"> 
        <div class="box-01">
            <div class="box-01-total t" style="margin-left: 130px;"> 
                <div class="box-01">
                    <div class="conteudo">
                        <div class="titulo">Webster Moitinho
                            <h3 style="color: #8a1f69;">Fundador</h3>
                        </div> <!-- Titulo -->
                        <div class="texto justify-content">
                            De espírito inquieto, estava constantemente insatisfeito com os serviços
                            de consultoria que tomava sistematicamente nas empresas que gerenciou. 
                            Até que no final dos anos 80 decidiu idealizar um padrão de consultoria que pudesse 
                            fornecer soluções aos clientes com o nível de profundidade necessário 
                            ao sucesso.
                        </div> <!-- Texto -->
                    </div> <!-- Conteudo -->
                    <div class="img item prabhu" style="margin-bottom: -8px; width: 350px;">
                        <img src="assets/images/webster.png" alt="Webster Moitinho" title="Webster Moitinho" /> 
                    </div> <!-- Img -->
                </div> <!-- box-01 -->
            </div> <!-- box-01-total t-->

            <center>
            <div class="col-lg-12 caracteristicas" style="text-align: center; border: 1px solid #cdcdcd">
                <p class="text justify-content">
                    Clique abaixo para saber os detalhes:
                </p>
                <div class="accordion accordion-flush" id="Geral">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" style="font-weight: bold;" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              <span class="mobi-mbri mobi-mbri-website-theme mbr-iconfont mbr-iconfont-btn" style="font-weight: bold; color: red; font-size: 16pt;"></span> &nbsp; Identidade Institucional
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"  aria-labelledby="flush-headingOne" data-bs-parent="#Geral">
                            <div class="accordion-body row justify-content-center">

                                <p>Parte do resultado do nosso <a href="planejamento-estrategico">Planejamento Estratégico</a>
                                nos trouxe a luz os três pilares da nossa Identidade Institucional.<br /> 
                                Clique abaixo e conheça cada um deles.
                                </p>
                                <div class="accordion accordion-flush" id="accordionFlushExample" style="width: 600px;">
                                    <div class="accordion-item" style="border: 1px solid #8f6a21;-webkit-box-shadow: 2px 2px 8px 2px #000000; box-shadow: 2px 2px 8px 2px #000000; border-radius: 8px; font-weight: bold;">
                                        <h2 class="accordion-header" id="flush-headingA" style=" background-color: #f6a80d;">
                                            <button class="accordion-button collapsed" type="button" style="font-weight: bold; color: #f7f4ec;" data-bs-toggle="collapse" data-bs-target="#flush-collapseA" aria-expanded="false" aria-controls="flush-collapseA">
                                            Missão
                                          </button>
                                        </h2>
                                        <div id="flush-collapseA" class="accordion-collapse collapse"  aria-labelledby="flush-headingA" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body row justify-content-center">

                                                <div class="card mb-3" style="max-width: 540px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/avatar/miss.jpg" class="img-fluid rounded img-thumbnail" alt="Nossa Missão" title="Nossa Missão" style="margin-top: 50%">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title" style="font-weight: bold;">Missão</h5>
                                                                <p class="card-text"><small class="text-muted">O que fazemos?</small></p>
                                                                <p class="card-text" style="text-align: left;">
                                                                    Prestar serviços de assessoria de qualidade, consultoria especializada 
                                                                    e  promover da capacitação profissional nas empresas, transmitindo  
                                                                    conhecimento específico, resultando tanto no desenvolvimento do  profissional 
                                                                    quanto no da empresa contratante.
                                                                </p>
                                                            </div><!-- card-body -->
                                                        </div><!-- col-md-8 -->
                                                    </div><!-- row -->
                                                </div><!-- card -->                                            

                                            </div><!-- accordion-body -->
                                        </div><!-- flush-collapse-one -->
                                    </div><!-- accordion-item -->
                                    <div class="accordion-item" style="border: 1px solid #3f1901;-webkit-box-shadow: 2px 2px 8px 2px #000000; box-shadow: 2px 2px 8px 2px #000000;font-weight: bold;">
                                        <h2 class="accordion-header" id="flush-headingB" style="background-color: #2a4600;">
                                            <button class="accordion-button collapsed" type="button" style="font-weight: bold; color: #f7f4ec;" data-bs-toggle="collapse" data-bs-target="#flush-collapseB" aria-expanded="false" aria-controls="flush-collapseB">
                                            Visão
                                          </button>
                                        </h2>
                                        <div id="flush-collapseB" class="accordion-collapse collapse"  aria-labelledby="flush-headingB" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body row justify-content-center">
                                                <div class="card mb-3" style="max-width: 540px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title" style="font-weight: bold;">Visão</h5>
                                                                <p class="card-text"><small class="text-muted">Aonde queremos chegar?</small></p>
                                                                <p class="card-text" style="text-align: left;">
                                                                    Tornar-se referência nacional em  consultoria especializada e treinamento sob 
                                                                    os  aspectos de melhoria de processos produtivos, planejamento estratégico, planejamento tributário,  
                                                                    consultoria em tecnologias, consultoria para seleção de softwares de 
                                                                    gestão,  auditoria de sistemas e treinamentos sistemáticos, promovendo
                                                                    o desenvolvimento  profissional através da capacitação das 
                                                                    equipes e do máximo aproveitamento dos recursos disponíveis.
                                                                </p>
                                                            </div><!-- card-body -->
                                                        </div><!-- col-md-8 -->
                                                        <div class="col-md-4">
                                                            <img src="assets/images/avatar/vis.jpg" class="img-fluid rounded img-thumbnail" alt="Nossa Visão" title="Nossa Visão" style="margin-top: 50%">
                                                        </div>
                                                    </div><!-- row -->
                                                </div><!-- card -->                                            

                                            </div><!-- accordion-body -->
                                        </div><!-- flush-collapse-one -->
                                    </div><!-- accordion-item -->
                                    <div class="accordion-item" style="border: 1px solid #3f1901;-webkit-box-shadow: 2px 2px 8px 2px #000000; box-shadow: 2px 2px 8px 2px #000000; border-radius: 8px; font-weight: bold;">
                                        <h2 class="accordion-header" id="flush-headingC" style="background-color: red;">
                                            <button class="accordion-button collapsed" type="button" style="font-weight: bold; color: #f7f4ec;" data-bs-toggle="collapse" data-bs-target="#flush-collapseC" aria-expanded="false" aria-controls="flush-collapseC">
                                            Valores
                                          </button>
                                        </h2>
                                        <div id="flush-collapseC" class="accordion-collapse collapse"  aria-labelledby="flush-headingC" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body row justify-content-center">
                                                <div class="card mb-3" style="max-width: 540px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/avatar/val.jpg" class="img-fluid rounded img-thumbnail" alt="Nossos Valores" title="Nossos Valores" style="margin-top: 50%">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title" style="font-weight: bold;">Valores</h5>
                                                                <p class="card-text"><small class="text-muted">De que maneira fazemos?</small></p>
                                                                <p class="card-text" style="text-align: left;">
                                                                    Como princípio e filosofia de  trabalho, temos como nosso compromisso os 
                                                                    objetivos de nossos clientes,  pautados por um atendimento diferenciado, buscando 
                                                                    agregar valor ao negócio  através do entusiasmo e <em>expertise</em> 
                                                                    de nossos consultores, sem abrir mão  da honestidade e da ética, 
                                                                    agindo com lealdade e sendo fiel à missão e visão da  empresa, 
                                                                    promovendo a qualidade dos serviços prestados.
                                                                </p>
                                                            </div><!-- card-body -->
                                                        </div><!-- col-md-8 -->
                                                    </div><!-- row -->
                                                </div><!-- card -->                                            
                                            </div><!-- accordion-body -->
                                        </div><!-- flush-collapse-one -->
                                    </div><!-- accordion-item -->
                                </div><!-- accordion-flush -->                            



                            </div><!-- accordion-body -->
                        </div><!-- flush-collapse-one -->
                    </div><!-- accordion-item -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" style="font-weight: bold;" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <span class="mobi-mbri mobi-mbri-watch mbr-iconfont mbr-iconfont-btn" style="font-weight: bold; color: green; font-size: 20pt;"></span> &nbsp;  &nbsp; Linha do Tempo
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"  aria-labelledby="flush-headingTwo" data-bs-parent="#Geral">
                            <div class="accordion-body row justify-content-center">

                                <section class="team1 cid-soNLnVhpxH" id="team1-3">
                                    <div class="container" style="background-color: #ffffff;">        
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="main-timeline9" style="margin-top:8px; width:90%;">   

                                                            <div class="timeline">
                                                                <div class="timeline-content">	
                                                                    <div class="circle">
                                                                        <span>
                                                                            <i class="mbri-star mbr-iconfont mbr-iconfont-btn" title= "1989" style="color: #bd1ccb"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="content">
                                                                        <span class="year" style="background-color: #bd1ccb;">1989</span>
                                                                        <h4 class="title" style="color: #bd1ccb">
                                                                            Inauguração
                                                                        </h4>
                                                                        <p class="description" style="text-align:left;">
                                                                            Após firmar contratos com uma poderosa empresa de Traduções Técnicas, a <b>Gopinatha</b>
                                                                            se lança no mercado de consultoria, oferecendo serviços de Profissionalização de Gestão, 
                                                                            Assessoria para Inventário de Estoques e de Ativos. 
                                                                        </p>
                                                                        <div class="icon">
                                                                            <span></span>
                                                                        </div><!-- icon -->
                                                                    </div><!-- content -->
                                                                </div><!-- timeline-content -->                        				
                                                            </div><!-- timeline -->

                                                            <div class="timeline">
                                                                <div class="timeline-content">	
                                                                    <div class="circle">
                                                                        <span>
                                                                            <i class="socicon socicon-augment mbr-iconfont mbr-iconfont-btn" title= "1992" style="color: #E8AC36"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="content">
                                                                            <span class="year" style="background-color: #E8AC36;">1992</span>
                                                                        <h4 class="title" style="color: #E8AC36">
                                                                            Comércio Exterior
                                                                        </h4>
                                                                            <p class="description" style="text-align:left;">
                                                                                Implantou Escritório de Controladoria em uma importante <em>trading</em>, possibilitando
                                                                                a leitura dos resultados em cada uma das 136 carteiras de <em>trade</em> existentes até então.
                                                                                Automatizou contabilização da Folha de Pagamento, conquistando um ganho de desempenho de 86%.
                                                                                Contribuiu com técnicas para elaboração do Planejamento Orçãmentário e iniciou consultoria 
                                                                                de elaboração de <em>budget</em> em seus clientes.
                                                                            </p>
                                                                            <div class="icon">
                                                                                <span></span>
                                                                        </div><!-- icon -->
                                                                    </div><!-- content -->
                                                                </div><!-- timeline-content -->                        				
                                                            </div><!-- timeline -->

                                                            <div class="timeline">
                                                                <div class="timeline-content">	
                                                                    <div class="circle">
                                                                        <span>    
                                                                            <i class="mbri-delivery mbr-iconfont mbr-iconfont-btn" title= "1996" style="color: red"></i>                                            
                                                                        </span>
                                                                    </div>
                                                                    <div class="content">
                                                                        <span class="year" style="background-color: red;">1996</span>
                                                                        <h4 class="title" style="color: red">
                                                                            Automotivo
                                                                        </h4>
                                                                        <p class="description" style="text-align:left;">
                                                                            Ao realizar a implantação da Controladoria na maior <em>trading</em> do Brasil, foi possível
                                                                            estabelecer <em>networking</em> com algumas montadoras, o que permitiu realizar 
                                                                            significativas consultorias tributárias, de mercado e de boas práticas na industria automotiva,
                                                                            nos possibilitando oferecer relevantes serviços ao setor.
                                                                        </p>
                                                                        <div class="icon">
                                                                            <span></span>
                                                                        </div><!-- icon -->
                                                                    </div><!-- content -->
                                                                </div><!-- timeline-content -->                        				
                                                            </div><!-- timeline -->

                                                            <div class="timeline">
                                                                <div class="timeline-content">	
                                                                    <div class="circle">
                                                                        <span>
                                                                            <i class="mobi-mbri mobi-mbri-responsive-2 mbr-iconfont mbr-iconfont-btn" title= "2001" style="color: #377AA8"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="content">
                                                                        <span class="year" style="background-color: #377AA8;">
                                                                            2001
                                                                        </span>
                                                                        <h4 class="title" style="color: #377AA8;">
                                                                            <em>Dealers</em>
                                                                        </h4>
                                                                        <p class="description" style="text-align:left;">
                                                                            Em 2001 acabamos por fechar contrato com um dos primeiros grupos de Concessionárias 
                                                                            de Veículos Multinacional do Brasil. Isso nos possibilitou validar e consolidar nossos métodos
                                                                            de consultoria utilizando os Diagramas de Pareto, Ishikawa e KPI's. Com a implantação 
                                                                            da Gestão Matricial de Resultados, pudemos economizar mais de um milhão de reais por ano.
                                                                        </p>
                                                                        <div class="icon">
                                                                            <span></span>
                                                                        </div><!-- icon -->
                                                                    </div><!-- content -->
                                                                </div><!-- timeline-content -->                        				
                                                            </div><!-- timeline -->


                                                            <div class="timeline">
                                                                <div class="timeline-content">	
                                                                    <div class="circle">
                                                                        <span>  
                                                                            <i class="mobi-mbri mobi-mbri-sites mbr-iconfont mbr-iconfont-btn" title= "2006" style="color: darkolivegreen"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="content">
                                                                        <span class="year" style="background-color: darkolivegreen;">
                                                                            2006
                                                                        </span>
                                                                        <h4 class="title" style="color: darkolivegreen">
                                                                            ERP
                                                                        </h4>
                                                                        <p class="description" style="text-align: left;">
                                                                            Devido ao reconhecido sucesso de nossas consultorias na operação do Sistema de Gestão
                                                                            de Concessionárias - <b>SISDIA</b>, foi firmado um acordo comercial para a implantação
                                                                            do sistema em diversas Concessionárias por todo o Brasil, notadamente Concessionárias Toyota&reg;.
                                                                        </p>
                                                                        <div class="icon">
                                                                            <span></span>
                                                                        </div><!-- icon -->
                                                                    </div><!-- content -->
                                                                </div><!-- timeline-content -->                        				
                                                            </div><!-- timeline -->


                                                            <div class="timeline">
                                                                <div class="timeline-content">	
                                                                    <div class="circle">
                                                                        <span>
                                                                            <i class="mobi-mbri mobi-mbri-briefcase mbr-iconfont mbr-iconfont-btn" title= "2009" style="color: #fb059a"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="content">
                                                                        <span class="year" style="background-color: #fb059a;">
                                                                            2009
                                                                        </span>
                                                                        </a>
                                                                        <h4 class="title" style="color: #fb059a;">
                                                                            <em>Compliance</em>
                                                                        </h4>
                                                                        <p class="description" style="text-align:left;">
                                                                            Com a implantação do Escritório de <em>Compliance</em> em nossos Clientes, é que 
                                                                            pudemos atestar a importância deste setor. Foi possível a recuperação de mais de
                                                                            três milhÕes de reais em tributos pagos a maior ou indevidamente. Além disso,
                                                                            pudemos capacitar estes profissionais a entender a cultura tributária.

                                                                        </p>
                                                                        <div class="icon">
                                                                            <span></span>
                                                                        </div><!-- icon -->
                                                                    </div><!-- content -->
                                                                </div><!-- timeline-content -->                        				
                                                            </div><!-- timeline -->


                                                        </div><!-- main-timeline9 -->  
                                                    </div><!-- row -->
                                                </div><!-- container -->
                                            </div><!-- col-12 -->
                                        </div><!-- row -->
                                    </div><!-- container -->
                                </section>
                                <p>&nbsp;</p>
                                <hr />
                                <p>
                                    E é assim que agregamos valor aos serviços que prestamos. Aproveitando cada oportunidade,
                                    cada necessidade do cliente, cada solução, para assim poder apresentar um
                                    <em>portfolio</em> diversificado e especialmente projetado para a sua situação,
                                    para o seu perfil.
                                </p>

                            </div><!-- accordion-body -->
                        </div><!-- flush-collapse-one -->
                    </div><!-- accordion-item -->

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" style="font-weight: bold;" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              <span class="mobi-mbri mobi-mbri-users mbr-iconfont mbr-iconfont-btn" style="font-weight: bold; color: darkorange; font-size: 20pt;"></span> &nbsp;  &nbsp; Nosso &nbsp;<em>Staff</em>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"  aria-labelledby="flush-headingThree" data-bs-parent="#Geral">
                            <div class="accordion-body row justify-content-center">
                                <div class="row">

                                    <div class="col-md-4" style="margin-top: 25px;">
                                        <div class="card" style="border: 1px solid darkblue;">
                                            <div class="card-header" style="background-color: darkblue; color: white;">
                                                Administrativo
                                            </div><!-- header -->
                                            <div class="card-body">
                                                <image>
                                                    <img src="assets/images/usuarios/kel.jpg" class="img-fluid rounded img-thumbnail" alt="Maria Rachel Nanci" />
                                                </image>
                                            </div><!-- card-body -->
                                            <div class="card-footer" style="border-top: 1px solid darkblue; background-color: lightblue; color: darkblue; font-size: small;">
                                                Maria Rachel Nanci
                                            </div><!-- card-footer -->
                                        </div><!-- card -->
                                    </div><!-- col-md-6 -->

                                    <div class="col-md-4" style="margin-top: 25px;">
                                        <div class="card" style="border: 1px solid #d8a50a;">
                                            <div class="card-header" style="background-color: #d8a50a; color: white;">
                                                Operações
                                            </div><!-- header -->
                                            <div class="card-body">
                                                <image>
                                                    <img src="assets/images/usuarios/vic.jpg" class="img-fluid rounded img-thumbnail" alt="Victor Caesar" />
                                                </image>
                                            </div><!-- card-body -->
                                            <div class="card-footer" style="border-top: 1px solid #d8a50a; background-color: #ffe18b; color: #6a5109; font-size: small;">
                                                Victor Caesar
                                            </div><!-- card-footer -->
                                        </div><!-- card -->
                                    </div><!-- col-md-6 -->


                                    <div class="col-md-4" style="margin-top: 25px;">
                                        <div class="card" style="border: 1px solid darkblue;">
                                            <div class="card-header" style="background-color: #0b6e95; color: white;">
                                                Finançãs
                                            </div><!-- header -->
                                            <div class="card-body">
                                                <image>
                                                    <img src="assets/images/usuarios/mari.jpg" class="img-fluid rounded img-thumbnail" alt="Mariana Rodrigues" />
                                                </image>
                                            </div><!-- card-body -->
                                            <div class="card-footer" style="border-top: 1px solid darkblue; background-color: #f5fbfe; color: darkblue; font-size: small;">
                                                Mariana Rodrigues
                                            </div><!-- card-footer -->
                                        </div><!-- card -->
                                    </div><!-- col-md-6 -->


                                    <div class="col-md-4" style="margin-top: 25px;">
                                        <div class="card" style="border: 1px solid red;">
                                            <div class="card-header" style="background-color: red; color: white;">
                                                Jurídico
                                            </div><!-- header -->
                                            <div class="card-body">
                                                <image>
                                                    <img src="assets/images/usuarios/vero.jpg" class="img-fluid rounded img-thumbnail" alt="Dra. Verônica Loraine" />
                                                </image>
                                            </div><!-- card-body -->
                                            <div class="card-footer" style="border-top: 1px solid red; background-color: #ffb2b2; color: red; font-size: small;">
                                                Verônica Loraine
                                            </div><!-- card-footer -->
                                        </div><!-- card -->
                                    </div><!-- col-md-6 -->



                                    <div class="col-md-4" style="margin-top: 25px;">
                                        <div class="card" style="border: 1px solid grey;">
                                            <div class="card-header" style="background-color: grey; color: white;">
                                                Tecnologia
                                            </div><!-- header -->
                                            <div class="card-body">
                                                <image>
                                                    <img src="assets/images/usuarios/pim.jpg" class="img-fluid rounded img-thumbnail" alt="Vinícius Pim" />
                                                </image>
                                            </div><!-- card-body -->
                                            <div class="card-footer" style="border-top: 1px solid grey; background-color: lightgrey; color: #666; font-size: small;">
                                                Vinícius Pim
                                            </div><!-- card-footer -->
                                        </div><!-- card -->
                                    </div><!-- col-md-6 -->


                                    <div class="col-md-4" style="margin-top: 25px;">
                                        <div class="card">
                                            <div class="card-header">
                                                Contratos
                                            </div><!-- header -->
                                            <div class="card-body">
                                                <image>
                                                    <img src="assets/images/usuarios/gisa.jpg" class="img-fluid rounded img-thumbnail" alt="Gisele Lima" />
                                                </image>
                                            </div><!-- card-body -->
                                            <div class="card-footer" style="font-size: small;">
                                                Gisele Lima
                                            </div><!-- card-footer -->
                                        </div><!-- card -->
                                    </div><!-- col-md-6 -->

                                </div><!-- row -->
                            </div><!-- accordion-body -->
                        </div><!-- flush-collapse-one -->
                    </div><!-- accordion-item -->


                </div><!-- accordion-flush -->
            </div><!-- col-lg-12 -->
            </center>
        </div><!-- box-01 -->
        <hr style="color: #60a3da; height: 6px; border: 1px solid darkblue; box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);" />
        <div class="row justify-content-center">
            <div class="col-6 rounded" style="background-color: #e4edfe; border: 1px solid #cecece; margin: 20px 0px 20px 0px; box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75); -moz-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);">
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p class="text-primary">
                          Não se gerencia o que não se mede, não se mede o que não se define, 
                          não se define o que não se entende ou seja não há sucesso no que não se gerencia</p>
                    </blockquote>
                    <figcaption class="blockquote-footer text-primary">
                      William Edwards Deming <cite title="Source Title">(1900-1993)</cite>
                    </figcaption>
                </figure>
            </div>
        </div>   
    </div><!-- box-01-total -->    
        <script>
            !function(){"use strict";var u,e;function t(e){return void 0===this||Object.getPrototypeOf(this)!==t.prototype?new t(e):((u=this).version="3.3.1",u.tools=new r,u.isSupported()?(u.tools.extend(u.defaults,e||{}),y(u.defaults),u.store={elements:{},containers:[]},u.sequences={},u.history=[],u.uid=0,u.initialized=!1):"undefined"!=typeof console&&null!==console&&console.log("ScrollReveal is not supported in this browser."),u)}function y(e){if(e&&e.container){if("string"==typeof e.container)return window.document.documentElement.querySelector(e.container);if(u.tools.isNode(e.container))return e.container;console.log('ScrollReveal: invalid container "'+e.container+'" provided.'),console.log("ScrollReveal: falling back to default container.")}return u.defaults.container}function m(){return++u.uid}function p(e,t,n){t.container&&(t.container=n),e.config?e.config=u.tools.extendClone(e.config,t):e.config=u.tools.extendClone(u.defaults,t),"top"===e.config.origin||"bottom"===e.config.origin?e.config.axis="Y":e.config.axis="X"}function g(e){var t=window.getComputedStyle(e.domEl);e.styles||(e.styles={transition:{},transform:{},computed:{}},e.styles.inline=e.domEl.getAttribute("style")||"",e.styles.inline+="; visibility: visible; ",e.styles.computed.opacity=t.opacity,t.transition&&"all 0s ease 0s"!==t.transition?e.styles.computed.transition=t.transition+", ":e.styles.computed.transition=""),e.styles.transition.instant=n(e,0),e.styles.transition.delayed=n(e,e.config.delay),e.styles.transform.initial=" -webkit-transform:",e.styles.transform.target=" -webkit-transform:",i(e),e.styles.transform.initial+="transform:",e.styles.transform.target+="transform:",i(e)}function n(e,t){var n=e.config;return"-webkit-transition: "+e.styles.computed.transition+"-webkit-transform "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s, opacity "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s; transition: "+e.styles.computed.transition+"transform "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s, opacity "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s; "}function i(e){var t,n=e.config,i=e.styles.transform;t="top"===n.origin||"left"===n.origin?/^-/.test(n.distance)?n.distance.substr(1):"-"+n.distance:n.distance,parseInt(n.distance)&&(i.initial+=" translate"+n.axis+"("+t+")",i.target+=" translate"+n.axis+"(0)"),n.scale&&(i.initial+=" scale("+n.scale+")",i.target+=" scale(1)"),n.rotate.x&&(i.initial+=" rotateX("+n.rotate.x+"deg)",i.target+=" rotateX(0)"),n.rotate.y&&(i.initial+=" rotateY("+n.rotate.y+"deg)",i.target+=" rotateY(0)"),n.rotate.z&&(i.initial+=" rotateZ("+n.rotate.z+"deg)",i.target+=" rotateZ(0)"),i.initial+="; opacity: "+n.opacity+";",i.target+="; opacity: "+e.styles.computed.opacity+";"}function w(e){var t=e.config.container;t&&-1===u.store.containers.indexOf(t)&&u.store.containers.push(e.config.container),u.store.elements[e.id]=e}function v(){if(u.isSupported()){o();for(var e=0;e<u.store.containers.length;e++)u.store.containers[e].addEventListener("scroll",a),u.store.containers[e].addEventListener("resize",a);u.initialized||(window.addEventListener("scroll",a),window.addEventListener("resize",a),u.initialized=!0)}return u}function a(){e(o)}function o(){var i,o,n,r,s;u.tools.forOwn(u.sequences,function(e){s=u.sequences[e],n=!1;for(var t=0;t<s.elemIds.length;t++)r=s.elemIds[t],c(u.store.elements[r])&&!n&&(n=!0);s.active=n}),u.tools.forOwn(u.store.elements,function(e){var t,n;o=u.store.elements[e],n=(t=o).config.useDelay,i="always"===n||"onload"===n&&!u.initialized||"once"===n&&!t.seen,function(e){if(e.sequence){var t=u.sequences[e.sequence.id];return t.active&&!t.blocked&&!e.revealing&&!e.disabled}return c(e)&&!e.revealing&&!e.disabled}(o)?(o.config.beforeReveal(o.domEl),i?o.domEl.setAttribute("style",o.styles.inline+o.styles.transform.target+o.styles.transition.delayed):o.domEl.setAttribute("style",o.styles.inline+o.styles.transform.target+o.styles.transition.instant),l("reveal",o,i),o.revealing=!0,o.seen=!0,o.sequence&&function(e,t){var n=0,i=0,o=u.sequences[e.sequence.id];o.blocked=!0,t&&"onload"===e.config.useDelay&&(i=e.config.delay);e.sequence.timer&&(n=Math.abs(e.sequence.timer.started-new Date),window.clearTimeout(e.sequence.timer));e.sequence.timer={started:new Date},e.sequence.timer.clock=window.setTimeout(function(){o.blocked=!1,e.sequence.timer=null,a()},Math.abs(o.interval)+i-n)}(o,i)):function(e){if(e.sequence){var t=u.sequences[e.sequence.id];return!t.active&&e.config.reset&&e.revealing&&!e.disabled}return!c(e)&&e.config.reset&&e.revealing&&!e.disabled}(o)&&(o.config.beforeReset(o.domEl),o.domEl.setAttribute("style",o.styles.inline+o.styles.transform.initial+o.styles.transition.instant),l("reset",o),o.revealing=!1)})}function l(e,t,n){var i=0,o=0,r="after";switch(e){case"reveal":o=t.config.duration,n&&(o+=t.config.delay),r+="Reveal";break;case"reset":o=t.config.duration,r+="Reset"}t.timer&&(i=Math.abs(t.timer.started-new Date),window.clearTimeout(t.timer.clock)),t.timer={started:new Date},t.timer.clock=window.setTimeout(function(){t.config[r](t.domEl),t.timer=null},o-i)}function b(e){for(var t=0,n=0,i=e.offsetHeight,o=e.offsetWidth;isNaN(e.offsetTop)||(t+=e.offsetTop),isNaN(e.offsetLeft)||(n+=e.offsetLeft),e=e.offsetParent;);return{top:t,left:n,height:i,width:o}}function c(e){var t,n,i,o,r,s,a,l,c,d=b(e.domEl),f={width:(t=e.config.container).clientWidth,height:t.clientHeight},u=function(e){if(e&&e!==window.document.documentElement){var t=b(e);return{x:e.scrollLeft+t.left,y:e.scrollTop+t.top}}return{x:window.pageXOffset,y:window.pageYOffset}}(e.config.container),y=e.config.viewFactor,m=d.height,p=d.width,g=d.top,w=d.left;return n=g+m*y,i=w+p*y,o=g+m-m*y,r=w+p-p*y,s=u.y+e.config.viewOffset.top,a=u.x+e.config.viewOffset.left,l=u.y-e.config.viewOffset.bottom+f.height,c=u.x-e.config.viewOffset.right+f.width,n<l&&s<o&&a<i&&r<c||"fixed"===window.getComputedStyle(e.domEl).position}function r(){}t.prototype.defaults={origin:"bottom",distance:"20px",duration:500,delay:0,rotate:{x:0,y:0,z:0},opacity:0,scale:.9,easing:"cubic-bezier(0.6, 0.2, 0.1, 1)",container:window.document.documentElement,mobile:!0,reset:!1,useDelay:"always",viewFactor:.2,viewOffset:{top:0,right:0,bottom:0,left:0},beforeReveal:function(e){},afterReveal:function(e){},beforeReset:function(e){},afterReset:function(e){}},t.prototype.isSupported=function(){var e=document.documentElement.style;return"WebkitTransition"in e&&"WebkitTransform"in e||"transition"in e&&"transform"in e},t.prototype.reveal=function(e,t,n,i){var o,r,s,a,l,c,d;if(void 0!==t&&"number"==typeof t?(n=t,t={}):null==t&&(t={}),!(r=function(e,t){{if("string"==typeof e)return Array.prototype.slice.call(t.querySelectorAll(e));if(u.tools.isNode(e))return[e];if(u.tools.isNodeList(e))return Array.prototype.slice.call(e)}return[]}(e,o=y(t))).length)return console.log('ScrollReveal: reveal on "'+e+'" failed, no elements found.'),u;n&&"number"==typeof n&&(c=m(),l=u.sequences[c]={id:c,interval:n,elemIds:[],active:!1});for(var f=0;f<r.length;f++)(a=r[f].getAttribute("data-sr-id"))?s=u.store.elements[a]:(s={id:m(),domEl:r[f],seen:!1,revealing:!1}).domEl.setAttribute("data-sr-id",s.id),l&&(s.sequence={id:l.id,index:l.elemIds.length},l.elemIds.push(s.id)),p(s,t,o),g(s),w(s),u.tools.isMobile()&&!s.config.mobile||!u.isSupported()?(s.domEl.setAttribute("style",s.styles.inline),s.disabled=!0):s.revealing||s.domEl.setAttribute("style",s.styles.inline+s.styles.transform.initial);return!i&&u.isSupported()&&(d={target:e,config:t,interval:n},u.history.push(d),u.initTimeout&&window.clearTimeout(u.initTimeout),u.initTimeout=window.setTimeout(v,0)),u},t.prototype.sync=function(){if(u.history.length&&u.isSupported()){for(var e=0;e<u.history.length;e++){var t=u.history[e];u.reveal(t.target,t.config,t.interval,!0)}v()}else console.log("ScrollReveal: sync failed, no reveals found.");return u},r.prototype.isObject=function(e){return null!==e&&"object"==typeof e&&e.constructor===Object},r.prototype.isNode=function(e){return"object"==typeof window.Node?e instanceof window.Node:e&&"object"==typeof e&&"number"==typeof e.nodeType&&"string"==typeof e.nodeName},r.prototype.isNodeList=function(e){var t=Object.prototype.toString.call(e);return"object"==typeof window.NodeList?e instanceof window.NodeList:e&&"object"==typeof e&&/^\[object (HTMLCollection|NodeList|Object)\]$/.test(t)&&"number"==typeof e.length&&(0===e.length||this.isNode(e[0]))},r.prototype.forOwn=function(e,t){if(!this.isObject(e))throw new TypeError('Expected "object", but received "'+typeof e+'".');for(var n in e)e.hasOwnProperty(n)&&t(n)},r.prototype.extend=function(t,n){return this.forOwn(n,function(e){this.isObject(n[e])?(t[e]&&this.isObject(t[e])||(t[e]={}),this.extend(t[e],n[e])):t[e]=n[e]}.bind(this)),t},r.prototype.extendClone=function(e,t){return this.extend(this.extend({},e),t)},r.prototype.isMobile=function(){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)},e=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)},"function"==typeof define&&"object"==typeof define.amd&&define.amd?define(function(){return t}):"undefined"!=typeof module&&module.exports?module.exports=t:window.ScrollReveal=t}();
        </script>
        <script>
            (function($) {
                'use strict';
                window.sr = ScrollReveal();
                sr.reveal('.quem-somos .caracteristicas', {
                    duration: 2000,
                    origin: 'top',
                    distance: '100px',
                    viewFactor: 0.6,
                    mobile: false
                }, 300);
                sr.reveal('.objetivos li', {
                    duration: 2000,
                    origin: 'bottom',
                    distance: '0px',
                    viewFactor: 0.6,
                    mobile: false
                }, 300);
                sr.reveal('.box-01 .item', {
                    duration: 2000,
                    origin: 'right',
                    distance: '100px',
                    viewFactor: 0.6,
                    mobile: false
                }, 300);

            })();

        </script>

</div>
</body>