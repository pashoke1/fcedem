<head>
  <style type="text/css">.slider {
  width: 500px;
  height: 300px;
  margin: auto;
  margin-top: 25px;
  border: 1px solid black;
  position: relative;
  overflow: hidden;
}
.slide {
  width: 500px;
  height: 300px;
  position: absolute;
  top: 0;
  left: 0;
}
@keyframes slide {
  from {
    top: 0;
    left: 0;
  }
  1 { transform: translate(0px, 0px); }
  2 { transform: translate(-500px, 0); }
  3 { transform: translate(-500px, 300px); }
  4 { transform: translate(500px, 300px); }
  5 { transform: translate(500px, 0); }
  to  { transform: (0px, 0px);  }
}
@keyframes slide {
 from {
  top: 0;
  left: 0;
 }
 12.5% {
  transform: translate(0px, 0px);
 }
 25% {
  transform: translate(-500px, 0);
 }
 36% {
  transform: translate(-500px, 300px);
 }
 37% {
  transform: translate(500px, 300px);
 }
 87.5% {
  transform: translate(500px, 0);
  
 }
 to {
  transform: (0px, 0px);
 }
}
.slide1 { 
 background: url(soperniki/k1.png);
 animation-delay: 7.5s;
}
.slide2 { 
 background: url(soperniki/k2.png);
 animation-delay: 5s;
}
.slide3 { 
 background: url(soperniki/k3.png);
 animation-delay: 2.5s;
}
.slide4 { 
 background: url(soperniki/k4.png);
 animation-delay: 0s;
}
.slide {
  width: 500px;
  height: 300px;
  position: absolute;
  top: 0;
  left: 0;
  animation-name: slid;
  animation-duration: 10s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}</style>
</head>
 <div class="slider">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
      <div class="slide slide4"></div>
 </div>