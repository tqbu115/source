<div class="quick-alo-phone quick-alo-green quick-alo-show" id="quick-alo-phoneIcon"> 
  <a target="_blank" class="hotline_index" href="https://zalo.me/<?=$row_setting['oaid']?>">
    <div class="quick-alo-ph-circle"></div>
  </a> 
  <a target="_blank" class="hotline_index" href="https://zalo.me/<?=$row_setting['oaid']?>">
    <div class="quick-alo-ph-circle-fill"></div>
  </a>
  <a target="_blank" class="hotline_index" href="https://zalo.me/<?=$row_setting['oaid']?>">
  <div class="quick-alo-ph-img-circle"></div>
  </a> 
 </div>
 
<style>
.blink_me {
    -webkit-animation-name: blinker;
    -webkit-animation-duration: 1s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;

    -moz-animation-name: blinker;
    -moz-animation-duration: 1s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;

    animation-name: blinker;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}

@-moz-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@-webkit-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}
/*phone*/
.quick-alo-phone.quick-alo-show {
    visibility: visible;
}

.quick-alo-phone {
    position: fixed;
    visibility: hidden;
    background-color: transparent;
   /* width: 200px;
    height: 200px;*/
    width:82px;
    height:64px;
    cursor: pointer;
    z-index: 200000 !important;
    -webkit-backface-visibility: hidden;
    -webkit-transform: translateZ(0);
    -webkit-transition: visibility .5s;
    -moz-transition: visibility .5s;
    -o-transition: visibility .5s;
    transition: visibility .5s;
    left: 10px;
    bottom: 50px;
}
.quick-alo-phone.quick-alo-green .quick-alo-ph-circle {
    border-color: #00aff2;
    border-color: #bfebfc 9;
    opacity: .5;
}

.quick-alo-ph-circle {
    width: 100px;
    height: 100px;
    top: 20px;
    left: 20px;
    position: absolute;
    background-color: transparent;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 2px solid rgba(30,30,30,0.4);
    border: 2px solid #bfebfc 9;
    opacity: .1;
    -webkit-animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
    -moz-animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
    -ms-animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
    -o-animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
    animation: quick-alo-circle-anim 1.2s infinite ease-in-out;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
}

.quick-alo-phone.quick-alo-green .quick-alo-ph-circle-fill {
    background-color: rgba(0,175,242,0.5);
    background-color: #a6e3fa 9;
    opacity: .75 !important;
}

.quick-alo-ph-circle-fill {
    width: 80px;
    height: 80px;
    top: 30px;
    left: 30px;
    position: absolute;
    background-color: #000;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 2px solid transparent;
    opacity: .1;
    -webkit-animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
    -moz-animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
    -ms-animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
    -o-animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
    animation: quick-alo-circle-fill-anim 2.3s infinite ease-in-out;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
}
.quick-alo-phone.quick-alo-green .quick-alo-ph-img-circle {
    /*background-color: #00aff2;
    background-color: #00aff2;*/
}
.quick-alo-ph-img-circle {
    width: 50px;
    height: 50px;
    top: 45px;
    color: red;
    font-size: 20px;
    font-family: RobotoBold;
    left: 45px;
    position: absolute;
    background: url(images/back_hotline_fixed.png) no-repeat center center;
    background-size: cover;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 2px solid transparent;
    /*opacity: .7;*/
    -webkit-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    -moz-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    -ms-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    -o-animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
}
@-moz-keyframes quick-alo-circle-anim{0%{-moz-transform:rotate(0) scale(.5) skew(1deg);opacity:.1;-moz-opacity:.1;-webkit-opacity:.1;-o-opacity:.1}30%{-moz-transform:rotate(0) scale(.7) skew(1deg);opacity:.5;-moz-opacity:.5;-webkit-opacity:.5;-o-opacity:.5}100%{-moz-transform:rotate(0) scale(1) skew(1deg);opacity:.6;-moz-opacity:.6;-webkit-opacity:.6;-o-opacity:.1}}@-webkit-keyframes quick-alo-circle-anim{0%{-webkit-transform:rotate(0) scale(.5) skew(1deg);-webkit-opacity:.1}30%{-webkit-transform:rotate(0) scale(.7) skew(1deg);-webkit-opacity:.5}100%{-webkit-transform:rotate(0) scale(1) skew(1deg);-webkit-opacity:.1}}@-o-keyframes quick-alo-circle-anim{0%{-o-transform:rotate(0) kscale(.5) skew(1deg);-o-opacity:.1}30%{-o-transform:rotate(0) scale(.7) skew(1deg);-o-opacity:.5}100%{-o-transform:rotate(0) scale(1) skew(1deg);-o-opacity:.1}}@-moz-keyframes quick-alo-circle-fill-anim{0%{-moz-transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{-moz-transform:rotate(0) -moz-scale(1) skew(1deg);opacity:.2}100%{-moz-transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@-webkit-keyframes quick-alo-circle-fill-anim{0%{-webkit-transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{-webkit-transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{-webkit-transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@-o-keyframes quick-alo-circle-fill-anim{0%{-o-transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50%{-o-transform:rotate(0) scale(1) skew(1deg);opacity:.2}100%{-o-transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}@-moz-keyframes quick-alo-circle-img-anim{0%{transform:rotate(0) scale(1) skew(1deg)}10%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}30%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}50%{-moz-transform:rotate(0) scale(1) skew(1deg)}100%{-moz-transform:rotate(0) scale(1) skew(1deg)}}@-webkit-keyframes quick-alo-circle-img-anim{0%{-webkit-transform:rotate(0) scale(1) skew(1deg)}10%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}30%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}50%{-webkit-transform:rotate(0) scale(1) skew(1deg)}100%{-webkit-transform:rotate(0) scale(1) skew(1deg)}}@-o-keyframes quick-alo-circle-img-anim{0%{-o-transform:rotate(0) scale(1) skew(1deg)}10%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-o-transform:rotate(25deg) scale(1) skew(1deg)}30%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-o-transform:rotate(25deg) scale(1) skew(1deg)}50%{-o-transform:rotate(0) scale(1) skew(1deg)}100%{-o-transform:rotate(0) scale(1) skew(1deg)}}@-moz-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%, 0, 0);-ms-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none}}@-webkit-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%, 0, 0);-ms-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none}}@-o-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%, 0, 0);-ms-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none}}
    .ui-slider-horizontal {
        height: 3px !important;
       background:#fff;
    }
    .ui-slider .ui-slider-handle{width:8px  !important;height:8px  !important;border-radius:50%  !important;}
    .ui-slider-horizontal .ui-slider-handle{top:-3px !important;margin-left:0px !important;}
    .contain_slider_number{padding:7px 0px;position:relative;}
    .num_before{position:absolute;right:100%;margin-right:5px;font-size:13px;color:#fff;line-height:20px;top:0px;font-weight:bold;}
    .num_after{position:absolute;left:100%;margin-left:5px;font-size:13px;color:#fff;line-height:20px;top:0px;font-weight:bold;}

    .ui-slider-handle{}
    .tooltip_slider{position:absolute;bottom:100%;white-space:nowrap;padding:3px;display:block;color:#fff;background:rgba(0,0,0,0.5);margin-bottom:5px;left:50%;margin-left:-7px;display:none;}
    @media(max-width: 980px){
       /* .hotline_index:nth-child(1),.hotline_index:nth-child(2){display: none;}
        .quick-alo-phone{display: none;}*/
    }
</style>