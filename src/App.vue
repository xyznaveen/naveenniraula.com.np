<template>
  <div id="app">
    <navigation-menu></navigation-menu>

    <nheader></nheader>

    <social-icons></social-icons>
    
    <transition name="page" mode="out-in">
      <router-view></router-view>
    </transition>    

    <div id="particles-js"></div>
  </div>
</template>

<script>
import NavigationMenu from '@/components/shared/NavigationMenu'
import Header from '@/components/shared/Header'
import SocialIcons from '@/components/shared/SocialIcons'
import particlesjs from 'particles.js';

export default {
  name: 'App',
  mounted () {
    this.initParticleJs();
  },
  methods: {
    // This initialized the particles floating in the background
    // Settings are customimzed
    initParticleJs() {
      let conf = { "particles": { "number": { "value": 180, "density": { "enable": true, "value_area": 404.824135672403 } }, "color": { "value": "#000" }, "shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" }, "polygon": { "nb_sides": 6 }, "image": { "src": "img/github.svg", "width": 100, "height": 100 } }, "opacity": { "value": 1, "random": true, "anim": { "enable": false, "speed": 5.9966216216216175, "opacity_min": 0.1, "sync": false } }, "size": { "value": 3.2, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } }, "line_linked": { "enable": false, "distance": 1546.7537899413642, "color": "#ffffff", "opacity": 0.48927926008349276, "width": 13.415721647450606 }, "move": { "enable": true, "speed": 2, "direction": "left", "random": true, "straight": true, "out_mode": "out", "bounce": false, "attract": { "enable": false, "rotateX": 1500.1062650542164, "rotateY": 5000 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": false, "mode": "repulse" }, "onclick": { "enable": false, "mode": "push" }, "resize": true }, "modes": { "grab": { "distance": 400, "line_linked": { "opacity": 1 } }, "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 }, "repulse": { "distance": 200, "duration": 0.4 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } } }, "retina_detect": true };
      let jsonUri = "data:text/plain;base64,"+window.btoa(JSON.stringify(conf));
      particlesJS.load('particles-js', jsonUri);
    }
  },
  components: {
    navigationMenu: NavigationMenu,
    socialIcons: SocialIcons,
    nheader: Header
  }
}
</script>
<style>
.page-enter-active, .page-leave-active {
  transition: opacity .3s, transform .3s;
}
.page-enter, .page-leave-to {
  opacity: 0;
  transform: translateX(-30%);
}

@import url("https://fonts.googleapis.com/css?family=Open+Sans:300i,400");@import url("https://fonts.googleapis.com/css?family=Sansita");*{transition:all .2s}html,body,ul,li,a,nav{box-sizing:border-box;font-family:"Open Sans";margin:0;padding:0;color:#000}h1,h2,h3,h4,h5,h6{font-family:"Sansita"}html,body{background-color:transparent}a{text-decoration:none}nav.nav.top-nav{bottom:0;box-shadow:0px 0px 3px red;position:fixed;background-color:#000}nav.nav.top-nav ul.top-nav-container{-webkit-flex-flow:row wrap;display:block;display:flex;justify-content:space-around;list-style-type:none}nav.nav.top-nav ul.top-nav-container li{overflow:hidden;position:relative;width:341.5px;z-index:1}nav.nav.top-nav ul.top-nav-container li a{color:#fff;display:block;padding:.5rem;text-align:center;transform:scale(1);transition:transform .6s;width:100%}nav.nav.top-nav ul.top-nav-container li::after{background-color:111111;content:'';height:100%;left:0;position:absolute;top:100%;transition:top .2s;width:100%;z-index:-1}nav.nav.top-nav ul.top-nav-container li:hover a{transform:scale(1.3)}nav.nav.top-nav ul.top-nav-container li:hover::after{top:0;transition:top .2s}nav.header{background:transparent}nav.header ul{background:inherit;position:relative}nav.header ul h1{text-align:center;font-size:300%;margin-topmargin-top:3.5rem;background:inherit;position:relative}nav.header ul h1 span{display:inline-block;cursor:pointer}nav.header ul h1 span.anim{animation:anim 1s infinite linear}nav.header ul h1::before{content:'Web Developer | Android Enthusiast | Content Writer';font-family:"Open Sans";font-size:1rem;font-weight:500;margin-top:-30px;position:absolute;right:5%;text-align:right;top:0;width:100%}nav.header ul h1::after{content:'Designed / Maintained by : Naveen Niraula';font-family:"Open Sans";font-size:1rem;font-weight:500;left:5%;margin-top:-30px;position:absolute;text-align:left;top:0}@keyframes anim{0%{transform:rotateY(0deg)}20%{transform:rotateY(72deg)}40%{transform:rotateY(144deg)}60%{transform:rotateY(216deg)}80%{transform:rotateY(288deg)}100%{transform:rotateY(360deg)}}.container{max-width:960px;padding-left:1rem;padding-right:1rem;margin-left:auto;margin-right:auto}.container main p{text-align:justify;line-height:2.4rem}.container ul{list-style-type:none;text-align:right}.container ul li{display:inline-block}.container ul li a{display:block;margin-left:-4px;padding:.5rem;position:relative;z-index:1;overflow:hidden;color:#000}.container ul li a:hover{color:#fff}.container ul li a::after{background-color:#000;content:'';top:0;left:100%;height:100%;width:100%;z-index:-1;position:absolute;transition:left 1s}.container ul li a:hover::after{left:0;transition:left 1s}code{border:1px solid #000;padding:.05rem 1rem;display:inline-flex;vertical-align:center;align-self:center;align-items:center;justify-content:center;margin-top:.5rem;margin-bottom:.5rem}code i{margin-right:4px}#particles-js{position:fixed;top:0;bottom:0;right:0;left:0;z-index:-999}.tbp{padding-top:.5rem;padding-bottom:.5rem}@media only screen and (max-width: 768px){nav.header ul h1{font-size:200%;position:relative;margin-top:3rem}nav.header ul h1::before{top:6rem;text-align:center;left:0;width:100%;font-size:.8rem}nav.header ul h1::after{right:0;margin-top:-25px;text-align:center}}@media only screen and (max-width: 480px){nav.header ul h1::before{top:6.5rem;text-align:center;left:0;width:100%;font-size:.6rem}nav.header ul h1::after{right:0;margin-top:-25px;text-align:center;font-size:.6rem}.social{display:flex;justify-content:space-around;margin-top:2rem;margin-bottom:1rem}.social li a i{transform:scale(1.5)}.social li a span{display:none}}
/*# sourceMappingURL=main.css.map */
</style>
