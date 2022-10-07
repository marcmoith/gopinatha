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
        .parallax {
        /* Coloque a imagem a ser usada como background */

        background-image: url("assets/images/banners/coach.jpg");

        /* Defina uma altura para a visÃ£o que o usuÃ¡rio terÃ¡ da imagem */
        min-height: 250px;

        /* defina o background como fixo e posicione a imagem */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        
        
    </style>
    
</head>
<body>

<nav aria-label="breadcrumb" style="margin-left: 12px; margin-top: 16px;">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" style="font-family: padrao;"><a href="home" style="color: #005984">Home</a></li>
      <li class="breadcrumb-item" style="font-family: padrao;"><a href="produtos" style="color: #005984">Produtos</a></li>
      <li class="breadcrumb-item active" style="font-family: padrao;" aria-current="page">Coaching</li>
  </ol>
</nav>
    
<div class="quem-somos" style="padding: 10px 10px 10px 10px;">
    <div class="col-12" style="margin-bottom: 35px;">
        <div class="parallax" style="-webkit-box-shadow: inset 5px 5px 11px 1px #000000; box-shadow: inset 5px 5px 11px 1px #000000;">            
        </div>
    </div>
    <h1 class="page-header" style="margin-left: 10px;"><em>Coaching</em></h1>
    <div class="box-01-total" style="margin-left:-450px; margin-top: -58px"> 
        <div class="box-01">
            <div class="conteudo">
                <div class="linha">
                    <div class="barra" style="background-color: darkcyan;">
                    </div>
                </div> <!-- Linha -->
            </div>
        </div>
    </div>        
    <p class="justify-content">
            
    </p>
</div><!-- quem-somos -->
    <hr style="color: #60a3da; height: 6px; border: 1px solid darkblue; box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);" />
    <div class="row justify-content-center">
        <div class="col-6 rounded" style="border: 1px solid #cecece; margin: 20px 0px 20px 0px; box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 3px 4px 0px rgba(0,0,0,0.75);">
            <figure class="text-center">
                <blockquote class="blockquote">
                  <p>
                    No mundo dos negócios todos são pagos em duas moedas: dinheiro e experiência. 
                    Agarre a experiência primeiro, o dinheiro virá depois.
                  </p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Harold Geneen <cite title="Source Title">(1910-1997)</cite>
                </figcaption>
            </figure>
        </div>
    </div>
    
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

        