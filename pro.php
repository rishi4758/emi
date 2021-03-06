

  <div class="col-md-8">
  
  <div class="stage">
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <style>
  
  // google font subsetting, see Heydon Pickering's: http://www.sitepoint.com/joy-of-subsets-web-fonts/
@import url('//fonts.googleapis.com/css?family=Pacifico&text=Zaraaka');

@import url('//fonts.googleapis.com/css?family=Kaushan+Script&text=!');

body { 
  min-height: 450px;
  height: 100vh;
  margin: 0;
  background: radial-gradient(circle, darken(dodgerblue, 10%), #1f4f96, #1b2949, #000);
}

.stage {
  height: 300px;
  width: 500px;
  margin: auto;
  position: absolute;
  top: 0; right: 0; bottom: 0; left: 0;
  perspective: 9999px;
  transform-style: preserve-3d;
}

.layer {
  
  position: absolute;
  transform-style: preserve-3d;
  animation: ಠ_ಠ 5s infinite alternate ease-in-out -7.5s;
  animation-fill-mode: backwards;
  transform: rotateY(40deg) rotateX(33deg) translateZ(0);
}

.layer:after {
  font: 70px/2.30 'Pacifico', 'Kaushan Script', Futura, 'Roboto', 'Trebuchet MS', Helvetica, sans-serif;
  content: 'Zaraaka!';
  white-space: pre;
  margin-left:1000px;
  text-align: center;
  height: 100%;
  
  position: absolute;
  top: 50px; 
  color: #F7FCFC;
  letter-spacing: -2px;
  text-shadow: 4px 0 10px hsla(0, 0%, 0%, .13);
}

$i: 1;
$NUM_LAYERS: 20;
@for $i from 1 through $NUM_LAYERS {
  .layer:nth-child(#{$i}):after{
    transform: translateZ(($i - 1) * -1.5px);
  }
}

.layer:nth-child(n+#{round($NUM_LAYERS/2)}):after {
  -webkit-text-stroke: 3px hsla(0, 0%, 0%, .25);
}

.layer:nth-child(n+#{round($NUM_LAYERS/2 + 1)}):after {
  -webkit-text-stroke: 15px dodgerblue;
  text-shadow: 6px 0 6px darken(dodgerblue,35%),
               5px 5px 5px darken(dodgerblue,40%),
               0 6px 6px darken(dodgerblue,35%);
}

.layer:nth-child(n+#{round($NUM_LAYERS/2 + 2)}):after {
  -webkit-text-stroke: 15px darken(dodgerblue, 10%);
}

.layer:last-child:after {
  -webkit-text-stroke: 17px hsla(0, 0%, 0%, .1);
}

.layer:first-child:after{
  color: #fff;
  text-shadow: none;
}

@keyframes ಠ_ಠ {
  100% { transform: rotateY(-40deg) rotateX(-43deg); }
}


  
  
  </style>
  
</div>
  
  </div>
  
