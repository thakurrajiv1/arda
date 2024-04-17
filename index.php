
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8"><meta name="viewport" content="width=1530, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
    <meta name="og:type" content="website"><meta name="twitter:card" content="photo">
    <script id="anima-load-script" src="load.js"></script>
    <script id="anima-hotspots-script" src="hotspots.js">
    </script><script id="anima-overrides-script" src="overrides.js"></script>
    <script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script><style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
@import url("https://fonts.googleapis.com/css?family=Abel:400|Inter:700,600,300,500,400|Outfit:500,400");

@font-face {
  font-family: "Copperplate Gothic Light-Regular";
  font-style: normal;
  font-weight: 400;
  src: url('https://anima-uploads.s3.amazonaws.com/projects/658292984ab05579c7aa4b5d/fonts/copperplate-gothic-bold-regular.ttf') format("truetype");
}
/* The following line is used to measure usage of this code. You can remove it if you want. */
@import url("https://px.animaapp.com/66138a5fae5d4de376d11f22.66138a60ae5d4de376d11f25.9IWdJrI.hch.png");


.screen textarea:focus,
.screen input:focus {
  outline: none;
}

.screen * {
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

.screen div {
  -webkit-text-size-adjust: none;
}

.component-wrapper a {
  display: contents;
  pointer-events: auto;
  text-decoration: none;
}

.component-wrapper * {
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
  pointer-events: none;
}

.component-wrapper a *,
.component-wrapper input,
.component-wrapper video,
.component-wrapper iframe {
  pointer-events: auto;
}

.component-wrapper.not-ready,
.component-wrapper.not-ready * {
  visibility: hidden !important;
}

.screen a {
  display: contents;
  text-decoration: none;
}

.full-width-a {
  width: 100%;
}

.full-height-a {
  height: 100%;
}

.container-center-vertical {
  align-items: center;
  display: flex;
  flex-direction: row;
  height: 100%;
  pointer-events: none;
}

.container-center-vertical > * {
  flex-shrink: 0;
  pointer-events: auto;
}

.container-center-horizontal {
  display: flex;
  flex-direction: row;
  justify-content: center;
  pointer-events: none;
  width: 100%;
}

.container-center-horizontal > * {
  flex-shrink: 0;
  pointer-events: auto;
}

.auto-animated div {
  --z-index: -1;
  opacity: 0;
  position: absolute;
}

.auto-animated input {
  --z-index: -1;
  opacity: 0;
  position: absolute;
}

.auto-animated .container-center-vertical,
.auto-animated .container-center-horizontal {
  opacity: 1;
}

.overlay-base {
  display: none;
  height: 100%;
  opacity: 0;
  position: fixed;
  top: 0;
  width: 100%;
}

.overlay-base.animate-appear {
  align-items: center;
  animation: reveal 0.3s ease-in-out 1 normal forwards;
  display: flex;
  flex-direction: column;
  justify-content: center;
  opacity: 0;
}

.overlay-base.animate-disappear {
  animation: reveal 0.3s ease-in-out 1 reverse forwards;
  display: block;
  opacity: 1;
  pointer-events: none;
}

.overlay-base.animate-disappear * {
  pointer-events: none;
}

@keyframes reveal {
  from { opacity: 0 }
 to { opacity: 1 }
}

.animate-nodelay {
  animation-delay: 0s;
}

.align-self-flex-start {
  align-self: flex-start;
}

.align-self-flex-end {
  align-self: flex-end;
}

.align-self-flex-center {
  align-self: flex-center;
}

.valign-text-middle {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.valign-text-bottom {
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}

input:focus {
  outline: none;
}

.listeners-active,
.listeners-active * {
  pointer-events: auto;
}

.hidden,
.hidden * {
  pointer-events: none;
  visibility: hidden;
}

.smart-layers-pointers,
.smart-layers-pointers * {
  pointer-events: auto;
  visibility: visible;
}

.listeners-active-click,
.listeners-active-click * {
  cursor: pointer;
}

* {
  box-sizing: border-box;
}
:root { 
  --athens-gray: #e6edf5;
  --black: #000000;
  --black-2: #0000007a;
  --east-bay: #453f78;
  --ebony: #080a1e;
  --manatee: #8a8aaa;
  --manatee-2: #8989aa;
  --shark: #242424;
  --white: #ffffff;
 
  --font-size-l: 20px;
  --font-size-m: 15px;
  --font-size-s: 12px;
  --font-size-xl: 80px;
  --font-size-xs: 11px;
  --font-size-xxs: 10.1px;
  --font-size-xxxs: 10px;
 
  --font-family-abel: "Abel", Helvetica;
  --font-family-copperplate_gothic_light-regular: "Copperplate Gothic Light-Regular", Helvetica;
  --font-family-inter: "Inter", Helvetica;
  --font-family-outfit: "Outfit", Helvetica;
}
.outfit-medium-manatee-15-1px {
  color: var(--manatee);
  font-family: var(--font-family-outfit);
  font-size: 15.1px;
  font-style: normal;
  font-weight: 500;
}

.outfit-normal-manatee-10-1px {
  color: var(--manatee-2);
  font-family: var(--font-family-outfit);
  font-size: var(--font-size-xxs);
  font-style: normal;
  font-weight: 400;
}

.outfit-medium-white-30-2px {
  color: var(--white);
  font-family: var(--font-family-outfit);
  font-size: 30.2px;
  font-style: normal;
  font-weight: 500;
}

.abel-normal-black-15px {
  color: var(--black);
  font-family: var(--font-family-abel);
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 400;
}

.copperplategothiclight-regular-normal-black-80px {
  color: var(--black);
  /* font-family: var(--font-family-copperplate_gothic_light-regular); */
  font-size: var(--font-size-xl);
  font-style: normal;
  font-weight: 400;
}

.inter-semi-bold-black-12px {
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 600;
}

.inter-normal-black-10px {
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: var(--font-size-xxxs);
  font-style: normal;
  font-weight: 400;
}

.inter-medium-white-18px {
  color: var(--white);
  font-family: var(--font-family-inter);
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
}

.copperplategothiclight-regular-normal-black-15px {
  color: var(--black);
  /* font-family: var(--font-family-copperplate_gothic_light-regular); */
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 400;
}

.inter-light-black-15px {
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 300;
}

.abel-normal-black-40px {
  color: var(--black);
  font-family: var(--font-family-abel);
  font-size: 40px;
  font-style: normal;
  font-weight: 400;
}

.inter-medium-black-16px {
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: 16px;
  font-style: normal;
  font-weight: 500;
}

.inter-light-black-10px {
  color: var(--black-2);
  font-family: var(--font-family-inter);
  font-size: var(--font-size-xxxs);
  font-style: normal;
  font-weight: 300;
}

.inter-light-black-11px {
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: var(--font-size-xs);
  font-style: normal;
  font-weight: 300;
}

.inter-light-black-12px {
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 300;
}

.inter-normal-black-20px {
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: var(--font-size-l);
  font-style: normal;
  font-weight: 400;
}

:root {
}


/* screen - desktop-1 */

.desktop-1 {
  background-color: var(--white);
  height: 6737px;
  overflow: hidden;
  overflow-x: hidden;
  position: relative;
  width: 100%;
}

.desktop-1 .homepage_-pattern-1800px1x-1-Ys8k0x {
  background-color: transparent;
  height: 6912px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 100%;
}

.desktop-1 .footer-Ys8k0x {
  background-color: transparent;
  height: 637px;
  left: 0px;
  position: absolute;
  top: 6073px;
  width: 1532px;
}

.desktop-1 .logo-copywrite-u1Y9HI {
  background-color: transparent;
  height: 165px;
  left: 100px;
  position: absolute;
  top: 472px;
  width: 1104px;
}

.desktop-1 .x2023-aiims-rishikesh-QQH1KH {
  background-color: transparent;
  height: auto;
  left: 325px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 136px;
  white-space: nowrap;
  width: 777px;
}

.desktop-1 .png-final-logo-1-QQH1KH {
  background-color: transparent;
  height: 165px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 199px;
}

.desktop-1 .notices-u1Y9HI {
  background-color: transparent;
  height: 223px;
  left: 994px;
  position: absolute;
  top: 202px;
  width: 416px;
}

.desktop-1 .notice-timing-schedu-KsWBj7 {
  background-color: transparent;
  height: auto;
  left: 2px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 204px;
  width: auto;
}

.desktop-1 .events-conference-fo-KsWBj7 {
  background-color: transparent;
  height: auto;
  left: 2px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 151px;
  width: auto;
}

.desktop-1 .event-screening-of-s-KsWBj7 {
  background-color: transparent;
  height: auto;
  left: 2px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 98px;
  width: 404px;
}

.desktop-1 .notice-ppt-template-for-cpc-cgr-meets-KsWBj7 {
  background-color: transparent;
  height: auto;
  left: 2px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 64px;
  width: auto;
}

.desktop-1 .notices-events-KsWBj7 {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 0px;
  width: auto;
}

.desktop-1 .services-u1Y9HI {
  height: 208px;
  left: 713px;
  top: 202px;
  width: 143px;
}

.desktop-1 .tele-consultations-2GKW0n {
  background-color: transparent;
  height: auto;
  left: 2px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 189px;
  width: auto;
}

.desktop-1 .skills-2GKW0n {
  height: auto;
  left: 3px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 155px;
  width: auto;
}

.desktop-1 .e-learning-2GKW0n {
  height: auto;
  left: 2px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 121px;
  width: auto;
}

.desktop-1 .drone-medicine-2GKW0n {
  left: 2px;
  line-height: normal;
  text-align: left;
  top: 87px;
}

.desktop-1 .ai-solutions-2GKW0n {
  background-color: transparent;
  height: auto;
  left: 2px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 53px;
  width: auto;
}

.desktop-1 .services-2GKW0n {
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 0px;
  width: auto;
}

.desktop-1 .partners-u1Y9HI {
  height: 341px;
  left: 422px;
  top: 202px;
  width: 235px;
}

.desktop-1 .e-sanjeevani-logo-2-tYn0Xz {
  background-color: transparent;
  height: 55px;
  left: 3px;
  position: absolute;
  top: 286px;
  width: 217px;
}

.desktop-1 .ministry-1-tYn0Xz {
  background-color: transparent;
  height: 69px;
  left: 3px;
  object-fit: cover;
  position: absolute;
  top: 51px;
  width: 216px;
}

.desktop-1 .nmcn-3-tYn0Xz {
  background-color: transparent;
  height: 68px;
  left: 3px;
  object-fit: cover;
  position: absolute;
  top: 130px;
  width: 217px;
}

.desktop-1 .lmis-1-tYn0Xz {
  background-color: transparent;
  height: 68px;
  left: 3px;
  object-fit: cover;
  position: absolute;
  top: 208px;
  width: 230px;
}

.desktop-1 .partners-tYn0Xz {
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 0px;
  width: auto;
}

.desktop-1 .address-u1Y9HI {
  height: 247px;
  left: 134px;
  top: 202px;
  width: 219px;
}

.desktop-1 .nodal-officer-depart-shiNNi {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 57px;
  width: auto;
}

.desktop-1 .address-shiNNi {
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 0px;
  width: auto;
}

.desktop-1 .marquee-u1Y9HI {
  background-color: transparent;
  height: 14px;
  left: 0px;
  position: absolute;
  top: 98px;
  width: 1540px;
}

.desktop-1 .aiims-rishikesh-digital-academy-Cvoy70 {
  left: 0px;
}

.desktop-1 .aiims-rishikesh-digital-academy-cBpQTE {
  left: 310px;
}

.desktop-1 .aiims-rishikesh-digital-academy-Lm0CgB {
  left: 620px;
}

.desktop-1 .aiims-rishikesh-digital-academy-7e9tgL {
  left: 930px;
}

.desktop-1 .aiims-rishikesh-digital-academy-xlBMcZ {
  left: 1240px;
}

.desktop-1 .social-media-u1Y9HI {
  background-color: transparent;
  height: 48px;
  left: 1105px;
  position: absolute;
  top: 21px;
  width: 297px;
}

.desktop-1 .facebook-SCOzYH {
  background-color: transparent;
  height: 39px;
  left: 128px;
  position: absolute;
  top: 5px;
  width: 41px;
}

.desktop-1 .twitter-SCOzYH {
  background-color: transparent;
  height: 42px;
  left: 187px;
  position: absolute;
  top: 3px;
  width: 45px;
}

.desktop-1 .google-SCOzYH {
  background-color: transparent;
  height: 45px;
  left: 62px;
  position: absolute;
  top: 2px;
  width: 48px;
}

.desktop-1 .instagram-SCOzYH {
  height: 48px;
  left: 250px;
  width: 47px;
}

.desktop-1 .you-tube-SCOzYH {
  background-color: transparent;
  height: 42px;
  left: 0px;
  position: absolute;
  top: 3px;
  width: 44px;
}

.desktop-1 .contact-us-u1Y9HI {
  background-color: transparent;
  height: auto;
  left: 123px;
  letter-spacing: 0.00px;
  line-height: 75.8px;
  position: absolute;
  text-align: left;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .our-team-Ys8k0x {
  background-color: transparent;
  height: 754px;
  left: 130px;
  overflow: hidden;
  position: absolute;
  top: 5301px;
  width: 1270px;
}

.desktop-1 .group-13628-XZxuQ9 {
  background-color: transparent;
  height: 462px;
  left: 82px;
  position: absolute;
  top: 159px;
  width: 1106px;
}

.desktop-1 .tile-7-k93k0G {
  background-color: transparent;
  height: 301px;
  left: 960px;
  position: absolute;
  top: 161px;
  width: 146px;
}

.desktop-1 .rectangle-4345-B53ZSU {
  box-shadow: inset 0px 4px 11px #00000040 , 0px 4px 11px #00000040;
}

.desktop-1 .group-13627-B53ZSU {
  background-color: transparent;
  height: 77px;
  left: 0px;
  position: absolute;
  top: 171px;
  width: 150px;
}

.desktop-1 .component-1-A5j8oU {
  left: 25px;
  top: 52px;
}

.desktop-1 .instagram-JUxR4l {
  height: 25px;
  left: 35px;
  width: 25px;
}

.desktop-1 .mr-shivashish-dobhal-A5j8oU {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 0px;
  width: 146px;
}

.desktop-1 .administrative-assistant-A5j8oU {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 25px;
  width: 146px;
}

.desktop-1 .tile-6-k93k0G {
  background-color: transparent;
  height: 301px;
  left: 800px;
  position: absolute;
  top: 0px;
  width: 146px;
}

.desktop-1 .rectangle-4346-BRA8rG {
  background-color: var(--athens-gray);
  border-radius: 75px;
  box-shadow: inset 0px 4px 11px #00000040 , 0px 4px 4px #00000040;
  height: 301px;
  left: 0px;
  width: 146px;
}

.desktop-1 .group-13632-BRA8rG {
  background-color: transparent;
  height: 140px;
  left: 9px;
  position: absolute;
  top: 152px;
  width: 129px;
}

.desktop-1 .group-13623-BRA8rG {
  background-color: transparent;
  height: 77px;
  left: 0px;
  position: absolute;
  top: 43px;
  width: 150px;
}

.desktop-1 .component-1-C52MK5 {
  left: 25px;
  top: 52px;
}

.desktop-1 .instagram-5E2gho {
  height: 25px;
  left: 35px;
  width: 25px;
}

.desktop-1 .mr-ajay-semwal-C52MK5 {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 0px;
  width: 146px;
}

.desktop-1 .content-developer-C52MK5 {
  background-color: transparent;
  height: auto;
  left: 29px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 25px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .tile-5-k93k0G {
  background-color: transparent;
  height: 301px;
  left: 640px;
  position: absolute;
  top: 152px;
  width: 146px;
}

.desktop-1 .rectangle-4345-Y2L9iI {
  box-shadow: inset 0px 4px 11px #00000040 , 0px 4px 4px #00000040;
}

.desktop-1 .group-13626-Y2L9iI {
  background-color: transparent;
  height: 77px;
  left: 0px;
  position: absolute;
  top: 171px;
  width: 150px;
}

.desktop-1 .mr-shubham-sangal-ukQDha {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 0px;
  width: 146px;
}

.desktop-1 .component-1-ukQDha {
  left: 25px;
  top: 52px;
}

.desktop-1 .instagram-psemKX {
  height: 25px;
  left: 35px;
  width: 25px;
}

.desktop-1 .technical-officer-ukQDha {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 25px;
  width: 146px;
}

.desktop-1 .tile-4-k93k0G {
  background-color: transparent;
  height: 301px;
  left: 480px;
  position: absolute;
  top: 0px;
  width: 146px;
}

.desktop-1 .rectangle-4346-nGRTUy {
  background-color: var(--athens-gray);
  border-radius: 75px;
  box-shadow: inset 0px 4px 11px #00000040 , 0px 4px 11px #00000040;
  height: 301px;
  left: 0px;
  width: 146px;
}

.desktop-1 .group-13631-nGRTUy {
  background-color: transparent;
  height: 140px;
  left: 9px;
  position: absolute;
  top: 152px;
  width: 129px;
}

.desktop-1 .group-13622-nGRTUy {
  background-color: transparent;
  height: 77px;
  left: 0px;
  position: absolute;
  top: 43px;
  width: 150px;
}

.desktop-1 .component-1-xMWF27 {
  left: 26px;
  top: 52px;
}

.desktop-1 .instagram-nMrouB {
  height: 25px;
  left: 35px;
  width: 25px;
}

.desktop-1 .er-rajeev-kumar-xMWF27 {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 0px;
  width: 146px;
}

.desktop-1 .website-programmer-xMWF27 {
  background-color: transparent;
  height: auto;
  left: 23px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 25px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .tile-3-k93k0G {
  background-color: transparent;
  height: 301px;
  left: 320px;
  position: absolute;
  top: 150px;
  width: 146px;
}

.desktop-1 .rectangle-4345-gxwuQy {
  box-shadow: inset 0px 4px 11px #00000040 , 0px 4px 4px #00000040;
}

.desktop-1 .group-13625-gxwuQy {
  background-color: transparent;
  height: 77px;
  left: 0px;
  position: absolute;
  top: 171px;
  width: 150px;
}

.desktop-1 .component-1-oNIm5N {
  left: 25px;
  top: 52px;
}

.desktop-1 .instagram-X61Ff8 {
  height: 25px;
  left: 35px;
  width: 25px;
}

.desktop-1 .dr-vk-malik-oNIm5N {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 0px;
  width: 146px;
}

.desktop-1 .manager-oNIm5N {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 25px;
  width: 146px;
}

.desktop-1 .tile-2-k93k0G {
  background-color: transparent;
  height: 301px;
  left: 160px;
  position: absolute;
  top: 0px;
  width: 146px;
}

.desktop-1 .rectangle-4346-fU88wV {
  background-color: transparent;
  height: 309px;
  left: -4px;
  width: 154px;
}

.desktop-1 .group-13630-fU88wV {
  background-color: transparent;
  height: 140px;
  left: 9px;
  position: absolute;
  top: 152px;
  width: 129px;
}

.desktop-1 .group-13621-fU88wV {
  background-color: transparent;
  height: 77px;
  left: 0px;
  position: absolute;
  top: 43px;
  width: 150px;
}

.desktop-1 .component-2-WZpI01 {
  background-color: transparent;
  height: 25px;
  left: 26px;
  position: absolute;
  top: 52px;
  width: 95px;
}

.desktop-1 .instagram-vGHoPH {
  height: 25px;
  left: 35px;
  width: 25px;
}

.desktop-1 .mr-vineet-kumar-WZpI01 {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 0px;
  width: 146px;
}

.desktop-1 .it-incharge-WZpI01 {
  background-color: transparent;
  height: auto;
  left: 46px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 25px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .tile-1-k93k0G {
  background-color: transparent;
  height: 301px;
  left: 0px;
  position: absolute;
  top: 150px;
  width: 146px;
}

.desktop-1 .rectangle-4345-pcAjep {
  box-shadow: inset 0px 4px 11px #00000040 , 0px 4px 11px #00000040;
}

.desktop-1 .group-13620-pcAjep {
  background-color: transparent;
  height: 89px;
  left: 0px;
  position: absolute;
  top: 171px;
  width: 150px;
}

.desktop-1 .component-1-eqVZM8 {
  left: 25px;
  top: 64px;
}

.desktop-1 .instagram-Uv9WuA {
  height: 25px;
  left: 35px;
  width: 25px;
}

.desktop-1 .prof-meenu-singh-eqVZM8 {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 0px;
  width: 146px;
}

.desktop-1 .executive-director-ceo-aiims-rishikesh-eqVZM8 {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 25px;
  width: 146px;
}

/* .desktop-1 .circle-pcAjep {
  box-shadow: 0px 4px 11px #00000040;
} */

.desktop-1 .meet-our-team-XZxuQ9 {
  background-color: transparent;
  height: auto;
  left: 386px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: -1px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .blogs-Ys8k0x {
  height: 687px;
  left: 1px;
  overflow: hidden;
  top: 4523px;
  width: 1529px;
}

.desktop-1 .group-701-3OxE2V {
  left: 692px;
  top: 565px;
  width: 145px;
}

.desktop-1 .rectangle-1-yYbtus {
  background-color: var(--black);
  height: 65px;
  width: 145px;
}

.desktop-1 .expand-arrow-yYbtus {
  height: 27px;
  left: 46px;
  top: 36px;
  width: 52px;
}

.desktop-1 .group-10-yYbtus {
  height: 32px;
  left: 26px;
  top: 13px;
  width: 94px;
}

.desktop-1 .view-more-9fi63W {
  white-space: nowrap;
  width: auto;
}

.desktop-1 .group-13617-3OxE2V {
  background-color: transparent;
  height: 372px;
  left: 129px;
  position: absolute;
  top: 141px;
  width: 411px;
}

.desktop-1 .rectangle-4340-UFLeS0 {
  width: 403px;
}

.desktop-1 .rectangle-4341-UFLeS0 {
  left: 327px;
}

.desktop-1 .writer-UFLeS0 {
  white-space: nowrap;
  width: auto;
}

.desktop-1 .india-the-fabled-lan-UFLeS0 {
  background-color: transparent;
  height: auto;
  left: 17px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: justify;
  top: 229px;
  width: 374px;
}

.desktop-1 .india-the-land-of-yoga-UFLeS0 {
  background-color: transparent;
  height: auto;
  left: 17px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 197px;
  width: 374px;
}

.desktop-1 .rectangle-4342-UFLeS0 {
  background-color: transparent;
  height: 194px;
  left: 4px;
  object-fit: cover;
  position: absolute;
  top: -7px;
  width: 396px;
}

.desktop-1 .group-13618-3OxE2V {
  background-color: transparent;
  height: 372px;
  left: 562px;
  position: absolute;
  top: 141px;
  width: 412px;
}

.desktop-1 .rectangle-4340-CnneXL {
  width: 404px;
}

.desktop-1 .rectangle-4341-CnneXL {
  left: 328px;
}

.desktop-1 .writer-CnneXL {
  width: 28px;
}

.desktop-1 .the-remote-sentinels-CnneXL {
  background-color: transparent;
  height: auto;
  left: 17px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: justify;
  top: 229px;
  width: 375px;
}

.desktop-1 .indian-hill-stations-a-historical-affair-CnneXL {
  background-color: transparent;
  height: auto;
  left: 17px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 197px;
  width: 375px;
}

.desktop-1 .rectangle-4343-CnneXL {
  background-color: transparent;
  height: 194px;
  left: 4px;
  object-fit: cover;
  position: absolute;
  top: -7px;
  width: 397px;
}

.desktop-1 .group-13619-3OxE2V {
  background-color: transparent;
  height: 372px;
  left: 996px;
  position: absolute;
  top: 141px;
  width: 411px;
}

.desktop-1 .rectangle-4340-DsiTtJ {
  width: 403px;
}

.desktop-1 .rectangle-4341-DsiTtJ {
  left: 327px;
}

.desktop-1 .writer-DsiTtJ {
  width: 28px;
}

.desktop-1 .do-you-find-yourself-DsiTtJ {
  background-color: transparent;
  height: auto;
  left: 17px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: justify;
  top: 253px;
  width: 374px;
}

.desktop-1 .the-divine-power-at-DsiTtJ {
  background-color: transparent;
  height: auto;
  left: 17px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 197px;
  width: 374px;
}

.desktop-1 .rectangle-4344-DsiTtJ {
  background-color: transparent;
  height: 194px;
  left: 4px;
  object-fit: cover;
  position: absolute;
  top: -7px;
  width: 396px;
}

.desktop-1 .blogs-3OxE2V {
  height: auto;
  left: 664px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 17px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .tele-consultation-Ys8k0x {
  height: 583px;
  left: 20px;
  top: 3813px;
  width: 1389px;
}

.desktop-1 .group-701-AopHQg {
  left: 1011px;
  top: 406px;
  width: 171px;
}

.desktop-1 .rectangle-1-R79Mxl {
  background-color: var(--black);
  height: 65px;
  width: 171px;
}

.desktop-1 .expand-arrow-R79Mxl {
  height: 27px;
  left: 55px;
  top: 36px;
  width: 62px;
}

.desktop-1 .group-10-R79Mxl {
  height: 32px;
  left: 31px;
  top: 13px;
  width: 110px;
}

.desktop-1 .view-more-y0WH3t {
  width: 108px;
}

.desktop-1 .stats-AopHQg {
  height: 143px;
  left: 835px;
  top: 233px;
}

.desktop-1 .stat-3-Jt4rRx {
  top: 0px;
}

.desktop-1 .group-13614-kGetOx {
  height: 143px;
}

.desktop-1 .rectangle-4327-bMPWg7 {
  top: 0px;
}

.desktop-1 .rectangle-4339-bMPWg7 {
  background-color: var(--ebony);
  top: 0px;
}

.desktop-1 .medical-doctor-bMPWg7 {
  height: 26px;
  left: 100px;
  top: 3px;
  width: 26px;
}

.desktop-1 .doctors-kGetOx {
  background-color: transparent;
  height: 19px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-kGetOx {
  height: 38px;
  top: 81px;
  width: 109px;
}

.desktop-1 .reg-doctors-0Xakm3 {
  background-color: transparent;
  height: 13px;
  left: 47px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 6px;
  width: auto;
}

.desktop-1 .x-0Xakm3 {
  top: 0px;
}

.desktop-1 .stat-2-Jt4rRx {
  height: 143px;
}

.desktop-1 .group-13614-LfxnOT {
  height: 143px;
}

.desktop-1 .rectangle-4327-Q8xvQ4 {
  top: 0px;
}

.desktop-1 .rectangle-4339-Q8xvQ4 {
  background-color: var(--east-bay);
  top: 0px;
}

.desktop-1 .hospital-Q8xvQ4 {
  background-color: transparent;
  height: 29px;
  left: 98px;
  position: absolute;
  top: 1px;
  width: 29px;
}

.desktop-1 .centers-LfxnOT {
  background-color: transparent;
  height: 19px;
  left: 7px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-LfxnOT {
  height: 38px;
  top: 81px;
  width: 116px;
}

.desktop-1 .satellite-center-Ebh2ax {
  background-color: transparent;
  height: 13px;
  left: 44px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 5px;
  width: auto;
}

.desktop-1 .x-Ebh2ax {
  top: 0px;
}

.desktop-1 .stat-1-Jt4rRx {
  top: 0px;
}

.desktop-1 .group-13614-gx9jfA {
  height: 143px;
}

.desktop-1 .rectangle-4327-tqn8Oe {
  top: 0px;
}

.desktop-1 .rectangle-4339-tqn8Oe {
  background-color: var(--ebony);
  top: 0px;
}

.desktop-1 .tonometer-tqn8Oe {
  background-color: transparent;
  height: 32px;
  left: 99px;
  position: absolute;
  top: 2px;
  width: 32px;
}

.desktop-1 .plus-math-tqn8Oe {
  background-color: transparent;
  height: 11px;
  left: 102px;
  position: absolute;
  top: 6px;
  width: 11px;
}

.desktop-1 .consultation-gx9jfA {
  background-color: transparent;
  height: 19px;
  left: 5px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-gx9jfA {
  height: 38px;
  top: 81px;
  width: 98px;
}

.desktop-1 .total-done-zsx0Sp {
  background-color: transparent;
  height: 13px;
  left: 47px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: -10px;
  width: auto;
}

.desktop-1 .x-zsx0Sp {
  top: 0px;
}

.desktop-1 .teleconsultation-whe-AopHQg {
  background-color: transparent;
  height: 28px;
  left: 746px;
  letter-spacing: 0.00px;
  line-height: 14.2px;
  position: absolute;
  text-align: justify;
  top: 164px;
  width: 634px;
}

.desktop-1 .tele-consultation-AopHQg {
  height: auto;
  left: 864px;
  letter-spacing: 0.00px;
  line-height: 75.8px;
  text-align: center;
  top: 2px;
  width: auto;
}

.desktop-1 .telemed-final-png-1-AopHQg {
  background-color: transparent;
  height: 583px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 841px;
}

.desktop-1 .skills-Ys8k0x {
  height: 969px;
  left: 130px;
  top: 2777px;
  width: 1341px;
}

.desktop-1 .group-11-s6Xmfc {
  background-color: transparent;
  height: 65px;
  left: 238px;
  position: absolute;
  top: 611px;
  width: 145px;
}

.desktop-1 .rectangle-1-UgCNmI {
  background-color: var(--black);
  height: 65px;
  width: 145px;
}

.desktop-1 .expand-arrow-UgCNmI {
  height: 27px;
  left: 46px;
  top: 35px;
  width: 52px;
}

.desktop-1 .group-10-UgCNmI {
  height: 32px;
  left: 27px;
  top: 10px;
  width: 94px;
}

.desktop-1 .view-more-qWeoSg {
  white-space: nowrap;
  width: auto;
}

.desktop-1 .stats-s6Xmfc {
  height: 143px;
  left: 62px;
  top: 438px;
}

.desktop-1 .stat-3-I0Sli3 {
  top: 0px;
}

.desktop-1 .group-13614-9ZkqON {
  height: 143px;
}

.desktop-1 .rectangle-4327-fjpMxP {
  top: 0px;
}

.desktop-1 .rectangle-4339-fjpMxP {
  background-color: var(--ebony);
  top: 0px;
}

.desktop-1 .atm-fjpMxP {
  background-color: transparent;
  height: 28px;
  left: 99px;
  position: absolute;
  top: 5px;
  width: 28px;
}

.desktop-1 .kiosk-9ZkqON {
  background-color: transparent;
  height: 19px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-9ZkqON {
  height: 38px;
  top: 81px;
  width: 119px;
}

.desktop-1 .kiosk-deployed-AmLyJj {
  background-color: transparent;
  height: 13px;
  left: 47px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 6px;
  width: auto;
}

.desktop-1 .x-AmLyJj {
  top: 0px;
}

.desktop-1 .stat-2-I0Sli3 {
  height: 143px;
}

.desktop-1 .group-13614-VXewlC {
  height: 143px;
}

.desktop-1 .rectangle-4327-RNOkvd {
  top: 0px;
}

.desktop-1 .rectangle-4339-RNOkvd {
  background-color: var(--east-bay);
  top: 0px;
}

.desktop-1 .administrator-male-RNOkvd {
  background-color: transparent;
  height: 32px;
  left: 97px;
  position: absolute;
  top: 0px;
  width: 32px;
}

.desktop-1 .professional-VXewlC {
  background-color: transparent;
  height: 19px;
  left: 7px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-VXewlC {
  height: 38px;
  top: 81px;
  width: 109px;
}

.desktop-1 .pro-trained-B2DbqP {
  background-color: transparent;
  height: 13px;
  left: 51px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 6px;
  width: auto;
}

.desktop-1 .x-B2DbqP {
  top: 0px;
}

.desktop-1 .stat-1-I0Sli3 {
  top: 0px;
}

.desktop-1 .group-13614-8R02sO {
  height: 143px;
}

.desktop-1 .rectangle-4327-DIjceZ {
  top: 0px;
}

.desktop-1 .rectangle-4339-DIjceZ {
  background-color: var(--ebony);
  top: 0px;
}

.desktop-1 .test-DIjceZ {
  height: 33px;
  left: 97px;
  top: 2px;
  width: 33px;
}

.desktop-1 .test-8R02sO {
  height: 19px;
  left: 13px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-8R02sO {
  height: 38px;
  top: 81px;
  width: 94px;
}

.desktop-1 .test-done-BFcqf5 {
  background-color: transparent;
  height: 13px;
  left: 47px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 6px;
  width: auto;
}

.desktop-1 .x-BFcqf5 {
  top: 0px;
}

.desktop-1 .digital-healthcare-d-s6Xmfc {
  background-color: transparent;
  height: 42px;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 14.2px;
  position: absolute;
  text-align: justify;
  top: 355px;
  width: 620px;
}

.desktop-1 .skills-s6Xmfc {
  height: auto;
  left: 237px;
  letter-spacing: 0.00px;
  line-height: 75.8px;
  text-align: center;
  top: 269px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .health-kiosk-with-shadow-final-fianl-1-s6Xmfc {
  background-color: transparent;
  height: 969px;
  left: 813px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 524px;
}

.desktop-1 .e-learning-Ys8k0x {
  height: 681px;
  left: -111px;
  top: 2173px;
  width: 1520px;
}

.desktop-1 .group-10-WmtcVc {
  height: 47px;
  left: 1184px;
  top: 476px;
  width: 147px;
}

.desktop-1 .rectangle-1-jOwR7v {
  background-color: var(--black);
  height: 47px;
  width: 145px;
}

.desktop-1 .expand-arrow-jOwR7v {
  height: 20px;
  left: 95px;
  top: 14px;
  width: 52px;
}

.desktop-1 .group-10-jOwR7v {
  height: 23px;
  left: 17px;
  top: 8px;
  width: 94px;
}

.desktop-1 .view-more-0fTTtf {
  white-space: nowrap;
  width: 92px;
}

.desktop-1 .stats-WmtcVc {
  height: 144px;
  left: 1012px;
  top: 302px;
}

.desktop-1 .stat-3-6AJ3xP {
  top: 1px;
}

.desktop-1 .group-13614-2tWZRk {
  height: 143px;
}

.desktop-1 .rectangle-4327-JTzbpe {
  top: 0px;
}

.desktop-1 .rectangle-4339-JTzbpe {
  background-color: var(--ebony);
  top: 0px;
}

.desktop-1 .process-JTzbpe {
  background-color: transparent;
  height: 30px;
  left: 96px;
  position: absolute;
  top: 5px;
  width: 34px;
}

.desktop-1 .processing-2tWZRk {
  background-color: transparent;
  height: 19px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-2tWZRk {
  height: 38px;
  top: 81px;
  width: 115px;
}

.desktop-1 .lectures-ppt-vCvL58 {
  background-color: transparent;
  height: 13px;
  left: 47px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 6px;
  width: auto;
}

.desktop-1 .x-vCvL58 {
  top: 0px;
}

.desktop-1 .stat-2-6AJ3xP {
  height: 144px;
}

.desktop-1 .group-13614-k3mhro {
  height: 144px;
}

.desktop-1 .rectangle-4327-mHQiK4 {
  top: 1px;
}

.desktop-1 .rectangle-4339-mHQiK4 {
  background-color: var(--east-bay);
  top: 1px;
}

.desktop-1 .cloud-done-mHQiK4 {
  background-color: transparent;
  height: 36px;
  left: 95px;
  position: absolute;
  top: 0px;
  width: 36px;
}

.desktop-1 .on-internet-k3mhro {
  background-color: transparent;
  height: 19px;
  left: 7px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 28px;
  width: auto;
}

.desktop-1 .group-13615-k3mhro {
  height: 38px;
  top: 82px;
  width: 119px;
}

.desktop-1 .video-lectures-TNCKBY {
  left: 51px;
}

.desktop-1 .x-TNCKBY {
  top: 0px;
}

.desktop-1 .stat-1-6AJ3xP {
  top: 1px;
}

.desktop-1 .group-13614-38lQZN {
  height: 143px;
}

.desktop-1 .rectangle-4327-Okaqzi {
  top: 0px;
}

.desktop-1 .rectangle-4339-Okaqzi {
  background-color: var(--ebony);
  top: 0px;
}

.desktop-1 .camera-Okaqzi {
  background-color: transparent;
  height: 33px;
  left: 98px;
  position: absolute;
  top: 2px;
  width: 31px;
}

.desktop-1 .recorded-38lQZN {
  background-color: transparent;
  height: 19px;
  left: 13px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-38lQZN {
  height: 38px;
  top: 81px;
  width: 115px;
}

.desktop-1 .video-lectures-pGRL4y {
  left: 47px;
}

.desktop-1 .x-pGRL4y {
  top: 0px;
}

.desktop-1 .e-learning-opens-the-WmtcVc {
  background-color: transparent;
  height: 42px;
  left: 1011px;
  letter-spacing: 0.00px;
  line-height: 14.2px;
  position: absolute;
  text-align: justify;
  top: 221px;
  width: 500px;
}

.desktop-1 .e-learning-WmtcVc {
  height: auto;
  left: 1057px;
  letter-spacing: 0.00px;
  line-height: 75.8px;
  text-align: center;
  top: 135px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .elearning_final-1-WmtcVc {
  background-color: transparent;
  height: 681px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 1090px;
}

.desktop-1 .drone-Ys8k0x {
  height: 704px;
  left: 129px;
  top: 1469px;
  width: 1724px;
}

.desktop-1 .drone-with-shadow-pn-CMOS7Q {
  background-color: transparent;
  height: 704px;
  left: 67px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 1653px;
}

.desktop-1 .group-9-CMOS7Q {
  background-color: transparent;
  height: 65px;
  left: 204px;
  position: absolute;
  top: 518px;
  width: 145px;
}

.desktop-1 .rectangle-1-pc4BzU {
  background-color: var(--black);
  height: 65px;
  width: 145px;
}

.desktop-1 .expand-arrow-pc4BzU {
  height: 27px;
  left: 46px;
  top: 35px;
  width: 52px;
}

.desktop-1 .group-10-pc4BzU {
  height: 32px;
  left: 27px;
  top: 9px;
  width: 94px;
}

.desktop-1 .view-more-FbImVx {
  white-space: nowrap;
  width: auto;
}

.desktop-1 .stats-CMOS7Q {
  height: 143px;
  left: 7px;
  top: 345px;
}

.desktop-1 .stat-3-gNdUpR {
  top: 0px;
}

.desktop-1 .group-13614-6NxsZH {
  height: 143px;
}

.desktop-1 .rectangle-4327-lhjumj {
  top: 0px;
}

.desktop-1 .rectangle-4339-lhjumj {
  background-color: var(--ebony);
  top: -0px;
}

.desktop-1 .sites-lhjumj {
  height: 34px;
  left: 98px;
  top: 4px;
  width: 34px;
}

.desktop-1 .sites-6NxsZH {
  height: 19px;
  left: 8px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-6NxsZH {
  height: 38px;
  top: 81px;
  width: 96px;
}

.desktop-1 .total-sites-yqC7Cn {
  background-color: transparent;
  height: 13px;
  left: 47px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 6px;
  width: auto;
}

.desktop-1 .x-yqC7Cn {
  top: 0px;
}

.desktop-1 .stat-2-gNdUpR {
  height: 143px;
}

.desktop-1 .group-13614-qcAec7 {
  height: 143px;
}

.desktop-1 .rectangle-4327-feiX7O {
  top: 0px;
}

.desktop-1 .rectangle-4339-feiX7O {
  background-color: var(--east-bay);
  top: 0px;
}

.desktop-1 .distance-feiX7O {
  height: 30px;
  left: 98px;
  top: 2px;
  width: 30px;
}

.desktop-1 .distance-qcAec7 {
  height: 19px;
  left: 7px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-qcAec7 {
  height: 42px;
  top: 77px;
  width: 120px;
}

.desktop-1 .distance-covered-0pDqa3 {
  background-color: transparent;
  height: 26px;
  left: 52px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 0px;
  width: 64px;
}

.desktop-1 .x-0pDqa3 {
  top: 4px;
}

.desktop-1 .stat-1-gNdUpR {
  top: 0px;
}

.desktop-1 .group-13614-XCkXXm {
  height: 143px;
}

.desktop-1 .rectangle-4327-pfqOsP {
  top: 0px;
}

.desktop-1 .rectangle-4339-pfqOsP {
  background-color: var(--ebony);
  top: -0px;
}

.desktop-1 .flights-pfqOsP {
  height: 34px;
  left: 96px;
  top: 2px;
  width: 34px;
}

.desktop-1 .flights-XCkXXm {
  height: 19px;
  left: 13px;
  letter-spacing: 0.00px;
  line-height: normal;
  text-align: left;
  top: 27px;
  width: auto;
}

.desktop-1 .group-13615-XCkXXm {
  height: 38px;
  top: 81px;
  width: 106px;
}

.desktop-1 .flights-done-RFZfNu {
  background-color: transparent;
  height: 13px;
  left: 47px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 6px;
  width: auto;
}

.desktop-1 .x-RFZfNu {
  top: 0px;
}

.desktop-1 .empowering-precision-CMOS7Q {
  background-color: transparent;
  height: 28px;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 14.2px;
  position: absolute;
  text-align: left;
  top: 277px;
  width: 513px;
}

.desktop-1 .drone-medicine-CMOS7Q {
  left: 71px;
  line-height: 75.8px;
  text-align: center;
  top: 115px;
}

.desktop-1 .ai-Ys8k0x {
  height: 439px;
  left: -133px;
  top: 938px;
  width: 1537px;
}

.desktop-1 .group-13629-KUcrKU {
  background-color: transparent;
  height: 439px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 1104px;
}

.desktop-1 .network-1-mkKH3I {
  background-color: transparent;
  height: 425px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 7px;
  width: 1104px;
}

.desktop-1 .network2-1-mkKH3I {
  background-color: transparent;
  height: 439px;
  left: 2px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 1101px;
}

.desktop-1 .artificial-intellige-KUcrKU {
  background-color: transparent;
  height: 56px;
  left: 1021px;
  letter-spacing: 0.00px;
  line-height: 14.2px;
  position: absolute;
  text-align: justify;
  top: 206px;
  width: 512px;
}

.desktop-1 .ai-in-health-care-KUcrKU {
  background-color: transparent;
  height: auto;
  left: 1050px;
  letter-spacing: 0.00px;
  line-height: 75.8px;
  position: absolute;
  text-align: center;
  top: 43px;
  width: auto;
}

.desktop-1 .group-7-KUcrKU {
  background-color: transparent;
  height: 71px;
  left: 1192px;
  position: absolute;
  top: 332px;
  width: 172px;
}

.desktop-1 .rectangle-1-91PTAw {
  background-color: var(--black);
  height: 71px;
  width: 172px;
}

.desktop-1 .group-8-91PTAw {
  background-color: transparent;
  height: 53px;
  left: 40px;
  position: absolute;
  top: 17px;
  width: 94px;
}

.desktop-1 .view-more-PojWpC {
  color: #f5ecec;
  font-family: var(--font-family-inter);
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .expand-arrow-PojWpC {
  height: 30px;
  left: 15px;
  top: 23px;
  width: 62px;
}

.desktop-1 .main-page-Ys8k0x {
  background-color: transparent;
  height: 708px;
  left: 117px;
  position: absolute;
  top: 36px;
  width: 1300px;
}

.desktop-1 .group-6-TTnV8t {
  background-color: transparent;
  height: 116px;
  left: 477px;
  position: absolute;
  top: 20px;
  width: 116px;
}

.desktop-1 .rectangle-16-4BxVx5 {
  background-color: #ffcf52;
  height: 53px;
  left: 28px;
  position: absolute;
  top: 28px;
  width: 58px;
}

.desktop-1 .ellipse-20-4BxVx5 {
  background-color: var(--white);
  border-radius: 28.96px/29.03px;
  height: 58px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 58px;
}

.desktop-1 .ellipse-21-4BxVx5 {
  background-color: var(--white);
  border-radius: 28.96px/29.03px;
  height: 58px;
  left: 58px;
  position: absolute;
  top: 0px;
  width: 58px;
}

.desktop-1 .ellipse-22-4BxVx5 {
  background-color: var(--white);
  border-radius: 28.96px/29.03px;
  height: 58px;
  left: 58px;
  position: absolute;
  top: 58px;
  width: 58px;
}

.desktop-1 .ellipse-23-4BxVx5 {
  background-color: var(--white);
  border-radius: 28.96px/29.03px;
  height: 58px;
  left: 0px;
  position: absolute;
  top: 58px;
  width: 58px;
}

.desktop-1 .rectangle-14-TTnV8t {
  background-color: #ffc42b;
  border-radius: 13px;
  height: 19px;
  left: 14px;
  position: absolute;
  top: 329px;
  width: 435px;
}

.desktop-1 .future-in-medical-science-TTnV8t {
  background-color: transparent;
  color: var(--black);
  /* font-family: var(--font-family-copperplate_gothic_light-regular); */
  font-size: 100px;
  font-style: normal;
  font-weight: 100;
  height: auto;
  left: 14px;
  letter-spacing: 0.00px;
  line-height: 94.7px;
  position: absolute;
  text-align: left;
  top: 73px;
  width: 507px;
}

.desktop-1 .we-working-in-the-di-TTnV8t {
  background-color: transparent;
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: var(--font-size-l);
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 14px;
  letter-spacing: 0.00px;
  line-height: 35.4px;
  position: absolute;
  text-align: left;
  top: 391px;
  width: 403px;
}

.desktop-1 .group-1-TTnV8t {
  background-color: transparent;
  height: 62px;
  left: 14px;
  position: absolute;
  top: 506px;
  width: 165px;
}

.desktop-1 .rectangle-1-7MczEy {
  background-color: var(--black);
  height: 62px;
  width: 163px;
}

.desktop-1 .lets-explore-7MczEy {
  background-color: transparent;
  height: auto;
  left: 28px;
  letter-spacing: 0.00px;
  line-height: 31.9px;
  position: absolute;
  text-align: left;
  top: 14px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .group-2-TTnV8t {
  background-color: transparent;
  height: 37px;
  left: 1069px;
  position: absolute;
  top: 0px;
  width: 98px;
}

.desktop-1 .rectangle-1-nkpJIS {
  background-color: var(--black);
  height: 37px;
  width: 96px;
}

.desktop-1 .login-nkpJIS {
  background-color: transparent;
  height: auto;
  left: 24px;
  letter-spacing: 0.00px;
  line-height: 31.9px;
  position: absolute;
  text-align: left;
  top: 3px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .group-3-TTnV8t {
  background-color: transparent;
  height: 37px;
  left: 1188px;
  position: absolute;
  top: 0px;
  width: 98px;
}

.desktop-1 .rectangle-1-Lez4ha {
  background-color: transparent;
  border: 2px solid;
  border-color: #000000a3;
  height: 37px;
  width: 96px;
}

.desktop-1 .join-Lez4ha {
  background-color: transparent;
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: 18px;
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 29px;
  letter-spacing: 0.00px;
  line-height: 31.9px;
  position: absolute;
  text-align: left;
  top: 3px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .ai-TTnV8t {
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 414px;
  letter-spacing: 0.00px;
  line-height: 15.2px;
  text-align: left;
  top: 10px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .drone-TTnV8t {
  height: auto;
  left: 458px;
  letter-spacing: 0.00px;
  line-height: 15.2px;
  text-align: left;
  top: 10px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .e-learning-TTnV8t {
  height: auto;
  left: 527px;
  letter-spacing: 0.00px;
  line-height: 15.2px;
  text-align: left;
  top: 10px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .tele-consultation-TTnV8t {
  height: auto;
  left: 691px;
  letter-spacing: 0.00px;
  line-height: 15.2px;
  text-align: left;
  top: 10px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .skills-TTnV8t {
  height: auto;
  left: 628px;
  letter-spacing: 0.00px;
  line-height: 15.2px;
  text-align: left;
  top: 10px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .arda-TTnV8t {
  background-color: transparent;
  color: var(--black);
  font-family: var(--font-family-inter);
  font-size: var(--font-size-l);
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 17px;
  letter-spacing: 0.00px;
  line-height: 18.9px;
  position: absolute;
  text-align: left;
  top: 9px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .group-5-TTnV8t {
  background-color: transparent;
  height: 631px;
  left: 683px;
  position: absolute;
  top: 73px;
  width: 601px;
}

.desktop-1 .rectangle-2-x55dcg {
  background: linear-gradient(180deg, rgb(86.00000247359276, 174.00000482797623, 255) 0%, rgb(217.0000022649765, 217.0000022649765, 217.0000022649765) 51.99999809265137%, rgb(154.00000602006912, 49.00000087916851, 236.00000113248825) 100%);
  background-color: transparent;
  border-radius: 50px;
  height: 631px;
  left: 383px;
  position: absolute;
  top: 0px;
  width: 218px;
}

.desktop-1 .ellipse-1-x55dcg {
  background-color: #ffffff40;
  border-radius: 247.97px/260.8px;
  height: 522px;
  left: 100px;
  position: absolute;
  top: 55px;
  width: 496px;
}

.desktop-1 .ellipse-10-x55dcg {
  background-color: transparent;
  height: 229px;
  left: 385px;
  position: absolute;
  top: 86px;
  width: 184px;
}

.desktop-1 .ellipse-2-x55dcg {
  border-radius: 197.66px/208.19px;
  height: 416px;
  left: 150px;
  position: absolute;
  top: 107px;
  width: 395px;
}

.desktop-1 .ellipse-5-x55dcg {
  background-color: transparent;
  height: 576px;
  left: 61px;
  position: absolute;
  top: 39px;
  width: 555px;
}

.desktop-1 .ellipse-6-x55dcg {
  background-color: transparent;
  height: 383px;
  left: 329px;
  position: absolute;
  top: 117px;
  width: 212px;
}

.desktop-1 .ellipse-7-x55dcg {
  background-color: transparent;
  height: 323px;
  left: 914px;
  position: absolute;
  top: 2180px;
  width: 307px;
}

.desktop-1 .ellipse-3-x55dcg {
  background-color: transparent;
  height: 274px;
  left: 207px;
  position: absolute;
  top: 191px;
  width: 264px;
}

.desktop-1 .ellipse-8-x55dcg {
  background-color: transparent;
  height: 119px;
  left: 355px;
  position: absolute;
  top: 398px;
  width: 115px;
}

.desktop-1 .ellipse-4-x55dcg {
  background-color: transparent;
  height: 125px;
  left: 289px;
  position: absolute;
  top: 253px;
  width: 118px;
}

.desktop-1 .ellipse-9-x55dcg {
  background-color: transparent;
  height: 66px;
  left: 385px;
  position: absolute;
  top: 419px;
  width: 63px;
}

.desktop-1 .polygon-1-x55dcg {
  height: 51px;
  left: 396px;
  top: 436px;
  width: 49px;
}

.desktop-1 .ellipse-11-x55dcg {
  background-color: transparent;
  height: 20px;
  left: 373px;
  position: absolute;
  top: 82px;
  width: 19px;
}

.desktop-1 .ellipse-15-x55dcg {
  background-color: transparent;
  height: 20px;
  left: 533px;
  position: absolute;
  top: 11px;
  width: 19px;
}

.desktop-1 .ellipse-12-x55dcg {
  background-color: transparent;
  height: 20px;
  left: 557px;
  position: absolute;
  top: 307px;
  width: 19px;
}

.desktop-1 .ellipse-13-x55dcg {
  background-color: transparent;
  height: 20px;
  left: 501px;
  position: absolute;
  top: 154px;
  width: 19px;
}

.desktop-1 .ellipse-14-x55dcg {
  background-color: transparent;
  height: 20px;
  left: 554px;
  position: absolute;
  top: 11px;
  width: 19px;
}

.desktop-1 .tab-x55dcg {
  height: 171px;
  left: 0px;
  top: 32px;
  width: 214px;
}

.desktop-1 .rectangle-3-mqlLAE {
  height: 171px;
  left: 0px;
}

.desktop-1 .ellipse-16-mqlLAE {
  background-color: #f58b8b;
  border-radius: 4.28px/4.51px;
  box-shadow: -9px 12px 80px #0000001a;
  height: 9px;
  left: 25px;
  position: absolute;
  top: 17px;
  width: 9px;
}

.desktop-1 .ellipse-17-mqlLAE {
  left: 42px;
}

.desktop-1 .ellipse-18-mqlLAE {
  background-color: #5aea42;
  left: 59px;
}

.desktop-1 .rectangle-4-mqlLAE {
  background-color: #d9d9d9;
  border-radius: 40px;
  height: 10px;
  left: 25px;
  position: absolute;
  top: 39px;
  width: 113px;
}

.desktop-1 .rectangle-5-mqlLAE {
  background-color: #d9d9d9;
  border-radius: 40px;
  height: 10px;
  left: 25px;
  position: absolute;
  top: 61px;
  width: 38px;
}

.desktop-1 .rectangle-6-mqlLAE {
  height: 10px;
  left: 25px;
  top: 117px;
  width: 63px;
}

.desktop-1 .tab-qtRJXF {
  height: 168px;
  left: 13px;
  top: 462px;
  width: 243px;
}

.desktop-1 .rectangle-3-CJ7TIA {
  height: 135px;
  left: 29px;
}

.desktop-1 .group-4-CJ7TIA {
  background-color: transparent;
  height: 168px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 243px;
}

.desktop-1 .rectangle-12-6UdBk0 {
  background-color: transparent;
  height: 135px;
  left: 0px;
  position: absolute;
  top: 33px;
  width: 214px;
}

.desktop-1 .rectangle-11-6UdBk0 {
  background-color: var(--white);
  border-image: linear-gradient(to bottom, rgb(245.00000059604645, 236.00000113248825, 236.00000113248825), rgba(245.00000059604645, 236.00000113248825, 236.00000113248825, 0)) 1;
  border-radius: 40px;
  box-shadow: -9px 12px 80px #0000001a;
  height: 135px;
  left: 29px;
  position: absolute;
  top: 0px;
  width: 214px;
}

.desktop-1 .ellipse-16-CJ7TIA {
  background-color: #f58b8b;
  border-radius: 4.28px/4.51px;
  box-shadow: -9px 12px 80px #0000001a;
  height: 9px;
  left: 54px;
  position: absolute;
  top: 17px;
  width: 9px;
}

.desktop-1 .ellipse-17-CJ7TIA {
  left: 71px;
}

.desktop-1 .ellipse-18-CJ7TIA {
  background-color: #59ea42;
  left: 88px;
}

.desktop-1 .rectangle-6-CJ7TIA {
  height: 9px;
  left: 44px;
  top: 109px;
  transform: rotate(-90deg);
  width: 30px;
}

.desktop-1 .rectangle-7-CJ7TIA {
  background-color: #5aea42;
  border-radius: 40px;
  height: 9px;
  left: 63px;
  position: absolute;
  top: 98px;
  transform: rotate(-90deg);
  width: 51px;
}

.desktop-1 .rectangle-8-CJ7TIA {
  background-color: var(--shark);
  border-radius: 40px;
  height: 9px;
  left: 103px;
  position: absolute;
  top: 109px;
  transform: rotate(-90deg);
  width: 30px;
}

.desktop-1 .rectangle-9-CJ7TIA {
  background-color: #58affe;
  border-radius: 40px;
  height: 9px;
  left: 115px;
  position: absolute;
  top: 91px;
  transform: rotate(-90deg);
  width: 66px;
}

.desktop-1 .rectangle-10-CJ7TIA {
  background-color: var(--shark);
  border-radius: 40px;
  height: 9px;
  left: 163px;
  position: absolute;
  top: 109px;
  transform: rotate(-90deg);
  width: 30px;
}

.desktop-1 .rectangle-15-x55dcg {
  background-color: #f3f3f3;
  border-radius: 27px;
  box-shadow: -9px 12px 80px #0000001a;
  height: 28px;
  left: 441px;
  position: absolute;
  top: 591px;
  width: 98px;
}

.desktop-1 .final-state-x55dcg {
  background-color: transparent;
  height: 19px;
  left: 483px;
  position: absolute;
  top: 595px;
  width: 18px;
}

.desktop-1 .plus-x55dcg {
  background-color: transparent;
  height: 15px;
  left: 518px;
  position: absolute;
  top: 598px;
  width: 14px;
}

.desktop-1 .erase-x55dcg {
  background-color: transparent;
  height: 19px;
  left: 448px;
  position: absolute;
  top: 595px;
  width: 18px;
}

.desktop-1 .ai-1-x55dcg {
  background-color: transparent;
  height: 72px;
  left: 307px;
  object-fit: cover;
  position: absolute;
  top: 278px;
  width: 81px;
}

.desktop-1 .quadcopter-x55dcg {
  background-color: transparent;
  height: 45px;
  left: 511px;
  position: absolute;
  top: 116px;
  width: 43px;
}

.desktop-1 .nmcn-1-TTnV8t {
  background-color: transparent;
  height: 69px;
  left: 90px;
  object-fit: cover;
  position: absolute;
  top: 626px;
  width: 71px;
}

.desktop-1 .mohfw-1-TTnV8t {
  background-color: transparent;
  height: 70px;
  left: 166px;
  position: absolute;
  top: 627px;
  width: 184px;
}

.desktop-1 .nihfw-removebg-preview-1-TTnV8t {
  background-color: transparent;
  height: 88px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 620px;
  width: 93px;
}

.desktop-1 .e-sanjeevani-logo-1-TTnV8t {
  background-color: transparent;
  height: 70px;
  left: 360px;
  position: absolute;
  top: 627px;
  width: 163px;
}

.desktop-1 .group-704-Ys8k0x {
  background-color: transparent;
  height: 47px;
  left: 1101px;
  position: absolute;
  top: 552px;
  width: 47px;
}

.desktop-1 .rectangle-13-OB2eHw {
  background: linear-gradient(180deg, rgb(86.00000247359276, 174.00000482797623, 255) 0%, rgba(86.00000247359276, 174.00000482797623, 255, 0.25) 100%);
}

.desktop-1 .ellipse-19-OB2eHw {
  box-shadow: -2.277372360229492px 2.277372360229492px 0px #000000;
  left: 8px;
}

.desktop-1 .sick-OB2eHw {
  background-color: transparent;
  height: 23px;
  left: 14px;
  position: absolute;
  top: 9px;
  width: 23px;
}

.desktop-1 .group-705-Ys8k0x {
  background-color: transparent;
  height: 47px;
  left: 1071px;
  position: absolute;
  top: 252px;
  width: 47px;
}

.desktop-1 .rectangle-13-Vg0h4i {
  background: linear-gradient(180deg, rgb(151.00000619888306, 71.00000336766243, 255) 0%, rgb(193.53215754032135, 110.80678135156631, 232.46172219514847) 100%);
}

.desktop-1 .ellipse-19-Vg0h4i {
  box-shadow: -2.9864745140075684px 2.9864745140075684px 0px #000000;
  left: 6px;
}

.desktop-1 .medical-doctor-Vg0h4i {
  height: 25px;
  left: 11px;
  top: 9px;
  width: 25px;
}

.desktop-1 .group-707-Ys8k0x {
  background-color: transparent;
  height: 404px;
  left: 970px;
  position: absolute;
  top: 225px;
  width: 409px;
}

.desktop-1 .group-706-Px5OEW {
  background-color: transparent;
  height: 404px;
  left: 0px;
  position: relative;
  top: 0px;
  width: 409px;
}

.desktop-1 .ellipse-25-r8OjXH {
  background-color: transparent;
  height: 279px;
  left: 32px;
  position: absolute;
  top: 75px;
  width: 100px;
}

.desktop-1 .polygon-1-r8OjXH {
  height: 30px;
  left: 81px;
  top: 63px;
  width: 31px;
}

.desktop-1 .ellipse-16-r8OjXH {
  background-color: transparent;
  height: 23px;
  left: 121px;
  position: absolute;
  top: 342px;
  width: 23px;
}

.desktop-1 .address {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .ai {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .aiims-rishikesh-digital-academy {
  background-color: transparent;
  height: auto;
  letter-spacing: 0.00px;
  line-height: 14.2px;
  position: absolute;
  text-align: justify;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.desktop-1 .blogs {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .circle {
  background-color: transparent;
  height: 140px;
  left: 8px;
  position: absolute;
  top: 11px;
  width: 129px;
}

.desktop-1 .component-1 {
  background-color: transparent;
  height: 25px;
  position: absolute;
  width: 95px;
}

.desktop-1 .distance {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .drone {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .drone-medicine {
  background-color: transparent;
  height: auto;
  letter-spacing: 0.00px;
  position: absolute;
  width: auto;
}

.desktop-1 .e-learning {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .ellipse-17 {
  background-color: #f5d760;
  border-radius: 4.28px/4.51px;
  box-shadow: -9px 12px 80px #0000001a;
  height: 9px;
  position: absolute;
  top: 17px;
  width: 9px;
}

.desktop-1 .ellipse-18 {
  border-radius: 4.28px/4.51px;
  box-shadow: -9px 12px 80px #0000001a;
  height: 9px;
  position: absolute;
  top: 17px;
  width: 9px;
}

.desktop-1 .ellipse-19 {
  background-color: var(--white);
  border-radius: 17.5px;
  height: 35px;
  position: absolute;
  top: 5px;
  width: 35px;
}

.desktop-1 .ellipse-26 {
  background-color: transparent;
  height: 129px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 129px;
}

.desktop-1 .ellipse-27 {
  background-color: transparent;
  height: 129px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 11px;
  width: 129px;
}

.desktop-1 .expand-arrow {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .flights {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .gmail {
  background-color: transparent;
  height: 25px;
  left: 70px;
  position: absolute;
  top: 0px;
  width: 25px;
}

.desktop-1 .group-10 {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .group-13614 {
  background-color: transparent;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 136px;
}

.desktop-1 .group-13615 {
  background-color: transparent;
  left: 19px;
  position: absolute;
}

.desktop-1 .group-701 {
  background-color: transparent;
  height: 65px;
  position: absolute;
}

.desktop-1 .instagram {
  background-color: transparent;
  position: absolute;
  top: 0px;
}

.desktop-1 .linked-in {
  background-color: transparent;
  height: 25px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 25px;
}

.desktop-1 .medical-doctor {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .partners {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .polygon-1 {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .polygon-2 {
  background-color: transparent;
  height: 12px;
  left: 58px;
  position: absolute;
  top: 128px;
  width: 14px;
}

.desktop-1 .polygon-3 {
  background-color: transparent;
  height: 12px;
  left: 57px;
  position: absolute;
  top: 0px;
  width: 14px;
}

.desktop-1 .prof-meenu-singh-ed-ceo-aiims-rishikesh {
  background-color: transparent;
  height: auto;
  left: 15px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: justify;
  top: 338px;
  width: 127px;
}

.desktop-1 .rectangle-1 {
  border-radius: 77px;
  left: 0px;
  position: absolute;
  top: 0px;
}

.desktop-1 .rectangle-13 {
  background-color: transparent;
  border-radius: 11.39px;
  height: 47px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 47px;
}

.desktop-1 .rectangle-3 {
  background-color: var(--white);
  border-image: linear-gradient(to bottom, rgb(245.00000059604645, 236.00000113248825, 236.00000113248825), rgba(245.00000059604645, 236.00000113248825, 236.00000113248825, 0)) 1;
  border-radius: 40px;
  box-shadow: -9px 12px 80px #0000001a;
  position: absolute;
  top: 0px;
  width: 214px;
}

.desktop-1 .rectangle-4327 {
  background-color: transparent;
  height: 143px;
  left: 0px;
  position: absolute;
  width: 136px;
}

.desktop-1 .rectangle-4339 {
  -webkit-backdrop-filter: blur(5.03930139541626px) brightness(100%);
  backdrop-filter: blur(5.03930139541626px) brightness(100%);
  border-radius: 18.27px;
  height: 37px;
  left: 95px;
  position: absolute;
  width: 37px;
}

.desktop-1 .rectangle-4340 {
  background-color: var(--white);
  border-radius: 10px;
  box-shadow: 0px 4px 11px #00000040;
  height: 321px;
  left: 0px;
  position: absolute;
  top: 51px;
}

.desktop-1 .rectangle-4341 {
  background-color: transparent;
  height: 86px;
  object-fit: cover;
  position: absolute;
  top: 291px;
  width: 78px;
}

.desktop-1 .rectangle-4345 {
  background-color: var(--athens-gray);
  border-radius: 75px;
  height: 301px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 146px;
}

.desktop-1 .rectangle-4346 {
  position: absolute;
  top: 0px;
}

.desktop-1 .rectangle-6 {
  background-color: var(--shark);
  border-radius: 40px;
  position: absolute;
}

.desktop-1 .services {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .sites {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .skills {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .stat-1 {
  background-color: transparent;
  height: 143px;
  left: 0px;
  position: absolute;
  width: 138px;
}

.desktop-1 .stat-2 {
  background-color: transparent;
  left: 182px;
  position: absolute;
  top: 0px;
  width: 138px;
}

.desktop-1 .stat-3 {
  background-color: transparent;
  height: 143px;
  left: 363px;
  position: absolute;
  width: 138px;
}

.desktop-1 .stats {
  background-color: transparent;
  position: absolute;
  width: 499px;
}

.desktop-1 .tab {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .tele-consultation {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .test {
  background-color: transparent;
  position: absolute;
}

.desktop-1 .video-lectures {
  background-color: transparent;
  height: 13px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 6px;
  width: auto;
}

.desktop-1 .view-more {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 31.9px;
  position: absolute;
  text-align: left;
  top: 0px;
}

.desktop-1 .writer {
  background-color: transparent;
  height: auto;
  left: 15px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: justify;
  top: 322px;
}

.desktop-1 .x {
  background-color: transparent;
  height: 38px;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  width: auto;
}
</style>
</head>
  <body style="margin: 0;background: #ffffff;">
    <div class="container-center-horizontal">
        <div class="desktop-1 screen " data-id="318:329">
            <img class="homepage_-pattern-1800px1x-1-Ys8k0x" data-id="465:60" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/homepage-pattern-1800px-1x-1.png" alt="Homepage_Pattern-1800px@1x 1">
            <footer class="footer-Ys8k0x" data-id="332:1387">
                <div class="logo-copywrite-u1Y9HI" data-id="582:82">
                    <p class="x2023-aiims-rishikesh-QQH1KH abel-normal-black-15px" data-id="318:1247">
                        © 2023 AIIMS Rishikesh, All Rights Reserved, Designed , Developed &amp; Maintained @ RRC, Department of Telemedicine, AIIMS Rishikesh
                    </p>
                    <img class="png-final-logo-1-QQH1KH" data-id="397:15" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/png-final-logo-1.png" alt="png final logo 1">
                </div>
                <div class="notices-u1Y9HI" data-id="581:78">
                    <p class="notice-timing-schedu-KsWBj7 abel-normal-black-15px" data-id="318:1244">
                        Notice : Timing schedule for recording of lecture for LMIS portal .
                    </p>
                    <p class="events-conference-fo-KsWBj7 abel-normal-black-15px" data-id="318:1242">Events : Conference for telecons is going to organized in the month of <br>march 2024</p>
                    <p class="event-screening-of-s-KsWBj7 abel-normal-black-15px" data-id="318:1240">Event : Screening of security officers is going at RRC, Dept. of Teleme-dicine, AIIMS Rishikesh</p>
                    <p class="notice-ppt-template-for-cpc-cgr-meets-KsWBj7 abel-normal-black-15px" data-id="318:1238">Notice : PPT Template for CPC &amp; CGR meets</p>
                    <div class="notices-events-KsWBj7 abel-normal-black-40px" data-id="318:1235">Notices/Events</div>
                </div>
                <div class="services-u1Y9HI services" data-id="581:76">
                    <div class="tele-consultations-2GKW0n abel-normal-black-15px" data-id="318:1245">Tele-consultations</div>
                    <div class="skills-2GKW0n skills abel-normal-black-15px" data-id="318:1243">Skills</div>
                    <div class="e-learning-2GKW0n e-learning abel-normal-black-15px" data-id="318:1241">E-Learning</div>
                    <div class="drone-medicine-2GKW0n drone-medicine abel-normal-black-15px" data-id="318:1239">Drone Medicine</div>
                    <div class="ai-solutions-2GKW0n abel-normal-black-15px" data-id="318:1236">AI Solutions</div>
                    <div class="services-2GKW0n services abel-normal-black-40px" data-id="318:1234">Services</div>
                </div>
                <div class="partners-u1Y9HI partners" data-id="582:83">
                    <img class="e-sanjeevani-logo-2-tYn0Xz" data-id="318:1150" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/esanjeevanilogo-2.svg" alt="eSanjeevaniLogo 2">
                    <img class="ministry-1-tYn0Xz" data-id="581:72" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ministry-1.png" alt="ministry 1">
                    <img class="nmcn-3-tYn0Xz" data-id="581:73" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/nmcn-3.png" alt="nmcn 3">
                    <img class="lmis-1-tYn0Xz" data-id="581:74" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/lmis-1.png" alt="lmis 1">
                    <div class="partners-tYn0Xz partners abel-normal-black-40px" data-id="318:1232">Partners</div>
                </div>
                <div class="address-u1Y9HI address" data-id="581:77">
                    <p class="nodal-officer-depart-shiNNi abel-normal-black-15px" data-id="318:1237">
                        Nodal Officer<br>Department of Tele-medicine<br>
                        All India Institute of Medical Sciences<br>Virbhadra Road, Rishikesh<br>
                        Uttarakhand - 249 203, India<br><br>
                        Landline - 01902-245838 <br>Email - thakur.rajeev72@gmail.com<br><br>
                        Map Location - AIIMS Rishikesh
                    </p>
                    <div class="address-shiNNi address abel-normal-black-40px" data-id="318:1233">Address</div>
                </div>
                <div class="marquee-u1Y9HI" data-id="581:75">
                  <!-- <marquee>AIIMS RISHIKESH DIGITAL ACADEMY      AIIMS RISHIKESH DIGITAL ACADEMY     AIIMS RISHIKESH DIGITAL ACADEMY     AIIMS RISHIKESH DIGITAL ACADEMY     AIIMS RISHIKESH DIGITAL ACADEMY</marquee> -->
                    <div class="aiims-rishikesh-digital-academy-Cvoy70 aiims-rishikesh-digital-academy copperplategothiclight-regular-normal-black-15px" data-id="318:1221">
                        AIIMS RISHIKESH DIGITAL ACADEMY
                    </div>
                    <div class="aiims-rishikesh-digital-academy-cBpQTE aiims-rishikesh-digital-academy copperplategothiclight-regular-normal-black-15px" data-id="331:1375">
                        AIIMS RISHIKESH DIGITAL ACADEMY
                    </div>
                    <div class="aiims-rishikesh-digital-academy-Lm0CgB aiims-rishikesh-digital-academy copperplategothiclight-regular-normal-black-15px" data-id="318:1222">
                        AIIMS RISHIKESH DIGITAL ACADEMY
                    </div>
                    <div class="aiims-rishikesh-digital-academy-7e9tgL aiims-rishikesh-digital-academy copperplategothiclight-regular-normal-black-15px" data-id="318:1223">
                        AIIMS RISHIKESH DIGITAL ACADEMY
                    </div>
                    <div class="aiims-rishikesh-digital-academy-xlBMcZ aiims-rishikesh-digital-academy copperplategothiclight-regular-normal-black-15px" data-id="318:1224">
                        AIIMS RISHIKESH DIGITAL ACADEMY
                    </div>
                </div>
                <div class="social-media-u1Y9HI" data-id="318:1225">
                    <img class="facebook-SCOzYH" data-id="318:1226" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/facebook.svg" alt="Facebook">
                    <img class="twitter-SCOzYH" data-id="318:1227" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/twitter.svg" alt="Twitter">
                    <img class="google-SCOzYH" data-id="318:1228" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/google.svg" alt="Google">
                    <img class="instagram-SCOzYH instagram" data-id="318:1230" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/instagram.svg" alt="Instagram">
                    <img class="you-tube-SCOzYH" data-id="318:1231" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/youtube.svg" alt="YouTube">
                </div>
                <div class="contact-us-u1Y9HI copperplategothiclight-regular-normal-black-80px" data-id="318:1051">Contact Us</div>
            </footer>
            <div class="our-team-Ys8k0x" data-id="420:176">
                <div class="group-13628-XZxuQ9" data-id="457:61">
                    <div class="tile-7-k93k0G" data-id="420:260">
                        <div class="rectangle-4345-B53ZSU rectangle-4345" data-id="420:261"></div>
                        <div class="group-13627-B53ZSU" data-id="430:339">
                            <div class="component-1-A5j8oU component-1" data-id="428:324">
                                <img class="linked-in" data-id="I428:324;426:292" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/linkedin@2x.png" alt="LinkedIn">
                                <img class="instagram-JUxR4l instagram" data-id="I428:324;426:293" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/instagram-1@2x.png" alt="Instagram">
                                <img class="gmail" data-id="I428:324;426:294" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/gmail@2x.png" alt="Gmail">
                            </div>
                            <div class="mr-shivashish-dobhal-A5j8oU inter-semi-bold-black-12px" data-id="420:262">Mr Shivashish Dobhal</div>
                            <div class="administrative-assistant-A5j8oU inter-normal-black-10px" data-id="420:263">Administrative Assistant</div>
                        </div>
                        <div class="circle" data-id="420:264">
                            <img class="ellipse-26" data-id="420:265" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-26@2x.png" alt="Ellipse 26">
                            <img class="polygon-2" data-id="420:266" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/polygon-2.svg" alt="Polygon 2">
                        </div>
                    </div>
                    <div class="tile-6-k93k0G" data-id="420:250">
                        <div class="rectangle-4346-BRA8rG rectangle-4346" data-id="420:251"></div>
                        <div class="group-13632-BRA8rG" data-id="612:275">
                            <img class="ellipse-27" data-id="420:257" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-27@2x.png" alt="Ellipse 27">
                            <img class="polygon-3" data-id="420:258" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/polygon-3.svg" alt="Polygon 3">
                        </div>
                        <div class="group-13623-BRA8rG" data-id="430:335"><div class="component-1-C52MK5 component-1" data-id="428:320">
                            <img class="linked-in" data-id="I428:320;426:292" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/linkedin@2x.png" alt="LinkedIn">
                            <img class="instagram-5E2gho instagram" data-id="I428:320;426:293" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/instagram-1@2x.png" alt="Instagram">
                            <img class="gmail" data-id="I428:320;426:294" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/gmail@2x.png" alt="Gmail">
                        </div>
                        <div class="mr-ajay-semwal-C52MK5 inter-semi-bold-black-12px" data-id="420:256">Mr Ajay Semwal</div>
                            <div class="content-developer-C52MK5 inter-normal-black-10px" data-id="420:259">Content Developer</div>
                        </div>
                    </div>
                    <div class="tile-5-k93k0G" data-id="420:239">
                        <div class="rectangle-4345-Y2L9iI rectangle-4345" data-id="420:240"></div><div class="group-13626-Y2L9iI" data-id="430:338">
                        <div class="mr-shubham-sangal-ukQDha inter-semi-bold-black-12px" data-id="420:241">Mr Shubham Sangal</div>
                        <div class="component-1-ukQDha component-1" data-id="428:316"><img class="linked-in" data-id="I428:316;426:292" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/linkedin@2x.png" alt="LinkedIn">
                            <img class="instagram-psemKX instagram" data-id="I428:316;426:293" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/instagram-1@2x.png" alt="Instagram">
                            <img class="gmail" data-id="I428:316;426:294" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/gmail@2x.png" alt="Gmail">
                        </div>
                        <div class="technical-officer-ukQDha inter-normal-black-10px" data-id="420:242">Technical Officer</div>
                    </div>
                    <div class="circle" data-id="420:243">
                        <img class="ellipse-26" data-id="420:244" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-26-1@2x.png" alt="Ellipse 26">
                        <img class="polygon-2" data-id="420:245" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/polygon-2-1.svg" alt="Polygon 2">
                    </div>
                </div>
                <div class="tile-4-k93k0G" data-id="420:229">
                    <div class="rectangle-4346-nGRTUy rectangle-4346" data-id="420:230"></div>
                    <div class="group-13631-nGRTUy" data-id="612:274">
                        <img class="ellipse-27" data-id="420:236" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-27-1@2x.png" alt="Ellipse 27">
                        <img class="polygon-3" data-id="420:237" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/polygon-3-1.svg" alt="Polygon 3">
                    </div>
                    <div class="group-13622-nGRTUy" data-id="430:334"><div class="component-1-xMWF27 component-1" data-id="428:312">
                        <img class="linked-in" data-id="I428:312;426:292" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/linkedin@2x.png" alt="LinkedIn">
                        <img class="instagram-nMrouB instagram" data-id="I428:312;426:293" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/instagram-1@2x.png" alt="Instagram">
                        <img class="gmail" data-id="I428:312;426:294" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/gmail@2x.png" alt="Gmail">
                    </div>
                    <div class="er-rajeev-kumar-xMWF27 inter-semi-bold-black-12px" data-id="420:235">Er Rajeev Kumar</div>
                    <div class="website-programmer-xMWF27 inter-normal-black-10px" data-id="420:238">Website Programmer</div>
                </div>
            </div>
            <div class="tile-3-k93k0G" data-id="420:208">
                <div class="rectangle-4345-gxwuQy rectangle-4345" data-id="420:209"></div>
                <div class="group-13625-gxwuQy" data-id="430:337"><div class="component-1-oNIm5N component-1" data-id="428:308">
                    <img class="linked-in" data-id="I428:308;426:292" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/linkedin@2x.png" alt="LinkedIn">
                    <img class="instagram-X61Ff8 instagram" data-id="I428:308;426:293" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/instagram-1@2x.png" alt="Instagram">
                    <img class="gmail" data-id="I428:308;426:294" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/gmail@2x.png" alt="Gmail">
                </div>
                <div class="dr-vk-malik-oNIm5N inter-semi-bold-black-12px" data-id="420:210">Dr. V.K Malik</div>
                <div class="manager-oNIm5N inter-normal-black-10px" data-id="420:211">Manager</div>
            </div>
            <div class="circle" data-id="420:212">
                <img class="ellipse-26" data-id="420:213" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-26-2@2x.png" alt="Ellipse 26">
                <img class="polygon-2" data-id="420:214" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/polygon-2-2.svg" alt="Polygon 2">
                </div>
            </div>
            <div class="tile-2-k93k0G" data-id="420:228">
                <img class="rectangle-4346-fU88wV rectangle-4346" data-id="420:219" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4346.svg" alt="Rectangle 4346">
                <div class="group-13630-fU88wV" data-id="612:273">
                    <img class="ellipse-27" data-id="420:220" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-27-2@2x.png" alt="Ellipse 27">
                    <img class="polygon-3" data-id="420:221" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/polygon-3-2.svg" alt="Polygon 3">
                </div>
                <div class="group-13621-fU88wV" data-id="428:333">
                    <div class="component-2-WZpI01" data-id="428:304">
                        <img class="linked-in" data-id="I428:304;426:292" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/linkedin@2x.png" alt="LinkedIn">
                        <img class="instagram-vGHoPH instagram" data-id="I428:304;426:293" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/instagram-1@2x.png" alt="Instagram">
                        <img class="gmail" data-id="I428:304;426:294" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/gmail@2x.png" alt="Gmail">
                    </div>
                    <div class="mr-vineet-kumar-WZpI01 inter-semi-bold-black-12px" data-id="420:222">Mr. Vineet Kumar</div>
                    <div class="it-incharge-WZpI01 inter-normal-black-10px" data-id="420:223">IT-Incharge</div>
                </div>
            </div>
            <div class="tile-1-k93k0G" data-id="420:207">
                <div class="rectangle-4345-pcAjep rectangle-4345" data-id="420:177"></div>
                <div class="group-13620-pcAjep" data-id="428:332">
                    <div class="component-1-eqVZM8 component-1" data-id="427:295">
                        <img class="linked-in" data-id="426:292" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/linkedin@2x.png" alt="LinkedIn">
                        <img class="instagram-Uv9WuA instagram" data-id="426:293" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/instagram-1@2x.png" alt="Instagram">
                        <img class="gmail" data-id="426:294" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/gmail@2x.png" alt="Gmail">
                    </div>
                    <div class="prof-meenu-singh-eqVZM8 inter-semi-bold-black-12px" data-id="420:180">Prof. Meenu Singh</div>
                        <p class="executive-director-ceo-aiims-rishikesh-eqVZM8 inter-normal-black-10px" data-id="420:181">Executive Director &amp; CEO AIIMS Rishikesh</p>
                    </div>
                    <div class="circle-pcAjep circle" data-id="420:206"><img class="ellipse-26" data-id="420:178" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-26-3@2x.png" alt="Ellipse 26">
                        <img class="polygon-2" data-id="420:179" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/polygon-2.svg" alt="Polygon 2">
                    </div>
                </div>
            </div>
            <div class="meet-our-team-XZxuQ9 copperplategothiclight-regular-normal-black-80px" data-id="457:60">Meet Our Team</div>
        </div>
        <div class="blogs-Ys8k0x blogs" data-id="399:16">
            <div class="group-701-3OxE2V group-701" data-id="418:56">
                <div class="rectangle-1-yYbtus rectangle-1" data-id="418:57"></div>
                <img class="expand-arrow-yYbtus expand-arrow" data-id="418:58" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/expand-arrow-1@2x.png" alt="Expand Arrow">
                <div class="group-10-yYbtus group-10" data-id="418:59">
                    <div class="view-more-9fi63W view-more inter-medium-white-18px" data-id="418:60">View More</div>
                </div>
            </div>
            <div class="group-13617-3OxE2V" data-id="401:32">
                <div class="rectangle-4340-UFLeS0 rectangle-4340" data-id="399:18"></div>
                <img class="rectangle-4341-UFLeS0 rectangle-4341" data-id="401:51" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4341-1@2x.png" alt="Rectangle 4341">
                    <div class="writer-UFLeS0 writer inter-light-black-10px" data-id="399:30">Writer</div>
                    <p class="prof-meenu-singh-ed-ceo-aiims-rishikesh inter-light-black-11px" data-id="399:29">Prof Meenu Singh <br>ED, CEO AIIMS Rishikesh</p>
                    <p class="india-the-fabled-lan-UFLeS0 inter-light-black-12px" data-id="399:20">India, the fabled land of seers, sages, spiritual leaders and healers has been a beacon of light for the West for centuries. it is known for its tremendous cultural power.</p>
                    <p class="india-the-land-of-yoga-UFLeS0 inter-normal-black-20px" data-id="399:19">India The Land Of Yoga</p>
                    <img class="rectangle-4342-UFLeS0" data-id="404:118" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4342@2x.png" alt="Rectangle 4342">
            </div>
            <div class="group-13618-3OxE2V" data-id="404:84">
            <div class="rectangle-4340-CnneXL rectangle-4340" data-id="404:85"></div>
                <img class="rectangle-4341-CnneXL rectangle-4341" data-id="404:86" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4341@2x.png" alt="Rectangle 4341">
                <div class="writer-CnneXL writer inter-light-black-10px" data-id="404:87">Writer</div>
                <p class="prof-meenu-singh-ed-ceo-aiims-rishikesh inter-light-black-11px" data-id="404:88">Prof Meenu Singh <br>ED, CEO AIIMS Rishikesh</p>
                <p class="the-remote-sentinels-CnneXL inter-light-black-12px" data-id="404:89">The remote sentinels of India, its majestic mountains and verdant hills, have played a pivotal role in the history of the country. The frontline defence on the northern border.</p>
                <p class="indian-hill-stations-a-historical-affair-CnneXL inter-normal-black-20px" data-id="404:90">Indian Hill Stations: A Historical Affair</p>
                <img class="rectangle-4343-CnneXL" data-id="404:119" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4343@2x.png" alt="Rectangle 4343">
            </div>
            <div class="group-13619-3OxE2V" data-id="404:110">
                <div class="rectangle-4340-DsiTtJ rectangle-4340" data-id="404:111"></div>
                <img class="rectangle-4341-DsiTtJ rectangle-4341" data-id="404:112" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4341-1@2x.png" alt="Rectangle 4341">
                <div class="writer-DsiTtJ writer inter-light-black-10px" data-id="404:113">Writer</div>
                <p class="prof-meenu-singh-ed-ceo-aiims-rishikesh inter-light-black-11px" data-id="404:114">Prof Meenu Singh <br>ED, CEO AIIMS Rishikesh</p>
                <p class="do-you-find-yourself-DsiTtJ inter-light-black-12px" data-id="404:115">Do you find yourself in a situation, where you feel dispirited, disheartened and helpless? Do you often feel empty inside?</p>
                <p class="the-divine-power-at-DsiTtJ inter-normal-black-20px" data-id="404:116">The Divine Power At Spiritual Escapes In India</p>
                <img class="rectangle-4344-DsiTtJ" data-id="404:120" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4344@2x.png" alt="Rectangle 4344">'
            </div>
            <div class="blogs-3OxE2V blogs copperplategothiclight-regular-normal-black-80px" data-id="399:17">Blogs</div>
        </div>
        <div class="tele-consultation-Ys8k0x tele-consultation" data-id="331:1297">
            <div class="group-701-AopHQg group-701" data-id="331:1299"><div class="rectangle-1-R79Mxl rectangle-1" data-id="318:1183"></div>
                <img class="expand-arrow-R79Mxl expand-arrow" data-id="318:1184" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/expand-arrow-1@2x.png" alt="Expand Arrow">
                <div class="group-10-R79Mxl group-10" data-id="318:1185">
                    <div class="view-more-y0WH3t view-more inter-medium-white-18px" data-id="318:1186">View More</div>
                </div>
            </div>
            <div class="stats-AopHQg stats" data-id="592:122"><div class="stat-3-Jt4rRx stat-3" data-id="592:123">
                <div class="group-13614-kGetOx group-13614" data-id="592:124">
                    <img class="rectangle-4327-bMPWg7 rectangle-4327" data-id="592:125" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327.svg" alt="Rectangle 4327">
                    <div class="rectangle-4339-bMPWg7 rectangle-4339" data-id="592:126"></div>
                    <img class="medical-doctor-bMPWg7 medical-doctor" data-id="592:150" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/medical-doctor@2x.png" alt="Medical Doctor">
                </div>
                <div class="doctors-kGetOx valign-text-middle outfit-medium-manatee-15-1px" data-id="592:128">Doctors</div>
                <div class="group-13615-kGetOx group-13615" data-id="592:129">
                    <div class="reg-doctors-0Xakm3 valign-text-middle outfit-normal-manatee-10-1px" data-id="592:130">Reg. Doctors</div>
                    <div class="x-0Xakm3 valign-text-middle outfit-medium-white-30-2px" data-id="592:131">##</div>
                    </div>
                </div>
                <div class="stat-2-Jt4rRx stat-2" data-id="592:132">
                  <div class="group-13614-LfxnOT group-13614" data-id="592:133">
                    <img class="rectangle-4327-Q8xvQ4 rectangle-4327" data-id="592:134" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-1.svg" alt="Rectangle 4327">
                    <div class="rectangle-4339-Q8xvQ4 rectangle-4339" data-id="592:135"></div>
                      <img class="hospital-Q8xvQ4" data-id="592:151" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/hospital@2x.png" alt="Hospital">
                    </div>
                    <div class="centers-LfxnOT valign-text-middle outfit-medium-manatee-15-1px" data-id="592:137">Centers</div>
                    <div class="group-13615-LfxnOT group-13615" data-id="592:138">
                      <div class="satellite-center-Ebh2ax valign-text-middle outfit-normal-manatee-10-1px" data-id="592:139">Satellite center</div>
                      <div class="x-Ebh2ax valign-text-middle outfit-medium-white-30-2px" data-id="592:140">4</div>
                    </div>
                  </div>
                  <div class="stat-1-Jt4rRx stat-1" data-id="592:141">
                    <div class="group-13614-gx9jfA group-13614" data-id="592:142">
                      <img class="rectangle-4327-tqn8Oe rectangle-4327" data-id="592:143" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-2.svg" alt="Rectangle 4327">
                      <div class="rectangle-4339-tqn8Oe rectangle-4339" data-id="592:144"></div>
                      <img class="tonometer-tqn8Oe" data-id="592:152" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/tonometer@2x.png" alt="Tonometer">
                      <img class="plus-math-tqn8Oe" data-id="592:155" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/plus-math@2x.png" alt="Plus Math">
                    </div>
                    <div class="consultation-gx9jfA valign-text-middle outfit-medium-manatee-15-1px" data-id="592:146">Consultation</div>
                    <div class="group-13615-gx9jfA group-13615" data-id="592:147">
                      <div class="total-done-zsx0Sp valign-text-middle outfit-normal-manatee-10-1px" data-id="592:148">Total done</div>
                      <div class="x-zsx0Sp valign-text-middle outfit-medium-white-30-2px" data-id="592:149">520</div>
                    </div>
                  </div>
                </div>
                <p class="teleconsultation-whe-AopHQg valign-text-middle inter-light-black-15px" data-id="318:1166">
                  Teleconsultation: Where distance dissolves and care connects. Bringing expertise to your fingertips, and healthcare to your home, one click at a time
                </p>
                <div class="tele-consultation-AopHQg tele-consultation copperplategothiclight-regular-normal-black-80px" data-id="318:1049">Tele <br>Consultation</div>
                  <img class="telemed-final-png-1-AopHQg" data-id="642:286" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/telemed-final-png-1.png" alt="telemed final png 1">
                </div>
                <div class="skills-Ys8k0x skills" data-id="318:1290">
                  <div class="group-11-s6Xmfc" data-id="318:1177">
                    <div class="rectangle-1-UgCNmI rectangle-1" data-id="318:1178"></div>
                    <img class="expand-arrow-UgCNmI expand-arrow" data-id="318:1179" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/expand-arrow-1@2x.png" alt="Expand Arrow">
                    <div class="group-10-UgCNmI group-10" data-id="318:1180">
                      <div class="view-more-qWeoSg view-more inter-medium-white-18px" data-id="318:1181">View More</div>
                    </div>
                  </div>
                  <div class="stats-s6Xmfc stats" data-id="592:212">
                    <div class="stat-3-I0Sli3 stat-3" data-id="592:213">
                      <div class="group-13614-9ZkqON group-13614" data-id="592:214">
                        <img class="rectangle-4327-fjpMxP rectangle-4327" data-id="592:215" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-3.svg" alt="Rectangle 4327">
                        <div class="rectangle-4339-fjpMxP rectangle-4339" data-id="592:216"></div>
                        <img class="atm-fjpMxP" data-id="592:243" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/atm@2x.png" alt="ATM">
                      </div>
                      <div class="kiosk-9ZkqON valign-text-middle outfit-medium-manatee-15-1px" data-id="592:218">kiosk</div>
                      <div class="group-13615-9ZkqON group-13615" data-id="592:219">
                      <div class="kiosk-deployed-AmLyJj valign-text-middle outfit-normal-manatee-10-1px" data-id="592:220">Kiosk deployed</div>
                      <div class="x-AmLyJj valign-text-middle outfit-medium-white-30-2px" data-id="592:221">##</div>
                    </div>
                  </div>
                  <div class="stat-2-I0Sli3 stat-2" data-id="592:222">
                    <div class="group-13614-VXewlC group-13614" data-id="592:223">
                      <img class="rectangle-4327-RNOkvd rectangle-4327" data-id="592:224" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-4.svg" alt="Rectangle 4327">
                      <div class="rectangle-4339-RNOkvd rectangle-4339" data-id="592:225"></div>
                      <img class="administrator-male-RNOkvd" data-id="592:242" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/administrator-male@2x.png" alt="Administrator Male">
                    </div>
                    <div class="professional-VXewlC valign-text-middle outfit-medium-manatee-15-1px" data-id="592:227">Professional</div>
                    <div class="group-13615-VXewlC group-13615" data-id="592:228">
                      <div class="pro-trained-B2DbqP valign-text-middle outfit-normal-manatee-10-1px" data-id="592:229">Pro. trained</div>
                      <div class="x-B2DbqP valign-text-middle outfit-medium-white-30-2px" data-id="592:230">##</div>
                    </div>
                  </div>
                  <div class="stat-1-I0Sli3 stat-1" data-id="592:231">
                    <div class="group-13614-8R02sO group-13614" data-id="592:232">
                      <img class="rectangle-4327-DIjceZ rectangle-4327" data-id="592:233" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-5.svg" alt="Rectangle 4327">
                      <div class="rectangle-4339-DIjceZ rectangle-4339" data-id="592:234"></div>
                      <img class="test-DIjceZ test" data-id="592:241" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/test@2x.png" alt="Test">
                    </div>
                  <div class="test-8R02sO valign-text-middle test outfit-medium-manatee-15-1px" data-id="592:236">Test</div>
                  <div class="group-13615-8R02sO group-13615" data-id="592:237"><div class="test-done-BFcqf5 valign-text-middle outfit-normal-manatee-10-1px" data-id="592:238">Test done</div>
                  <div class="x-BFcqf5 valign-text-middle outfit-medium-white-30-2px" data-id="592:239">##</div>
                </div>
              </div>
            </div>
            <p class="digital-healthcare-d-s6Xmfc valign-text-middle inter-light-black-15px" data-id="318:1165">
              Digital healthcare devices are not just tools; they are the skilled companions on our journey towards wellness, harnessing technology to empower individuals with insights, control, and ultimately, better health outcomes.
            </p>
            <div class="skills-s6Xmfc skills copperplategothiclight-regular-normal-black-80px" data-id="318:1048">Skills</div>
            <img class="health-kiosk-with-shadow-final-fianl-1-s6Xmfc" data-id="639:283" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/health-kiosk-with-shadow-final-fianl-1.png" alt="health kiosk with shadow final fianl 1">
          </div>
          <div class="e-learning-Ys8k0x e-learning" data-id="318:1288">
            <div class="group-10-WmtcVc group-10" data-id="318:1172">
              <div class="rectangle-1-jOwR7v rectangle-1" data-id="318:1173"></div>
              <img class="expand-arrow-jOwR7v expand-arrow" data-id="318:1174" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/expand-arrow-1@2x.png" alt="Expand Arrow">
              <div class="group-10-jOwR7v group-10" data-id="318:1175">
                <div class="view-more-0fTTtf view-more inter-medium-white-18px" data-id="318:1176">View More</div>
              </div>
            </div>
            <div class="stats-WmtcVc stats" data-id="582:84">
              <div class="stat-3-6AJ3xP stat-3" data-id="379:235">
                <div class="group-13614-2tWZRk group-13614" data-id="379:236">
                  <img class="rectangle-4327-JTzbpe rectangle-4327" data-id="379:237" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-6.svg" alt="Rectangle 4327">
                  <div class="rectangle-4339-JTzbpe rectangle-4339" data-id="379:238"></div>
                  <img class="process-JTzbpe" data-id="379:247" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/process@2x.png" alt="Process">
                </div>
                <div class="processing-2tWZRk valign-text-middle outfit-medium-manatee-15-1px" data-id="379:242">Processing</div>
                <div class="group-13615-2tWZRk group-13615" data-id="379:243">
                  <div class="lectures-ppt-vCvL58 valign-text-middle outfit-normal-manatee-10-1px" data-id="379:244">Lectures + ppt</div>
                  <div class="x-vCvL58 valign-text-middle outfit-medium-white-30-2px" data-id="379:245">22</div>
                </div>
              </div>
              <div class="stat-2-6AJ3xP stat-2" data-id="379:213">
                  <div class="group-13614-k3mhro group-13614" data-id="379:214">
                    <img class="rectangle-4327-mHQiK4 rectangle-4327" data-id="379:215" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-7.svg" alt="Rectangle 4327">
                    <div class="rectangle-4339-mHQiK4 rectangle-4339" data-id="379:216"></div>
                    <img class="cloud-done-mHQiK4" data-id="379:250" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/cloud-done@2x.png" alt="Cloud Done">
                  </div>
                  <div class="on-internet-k3mhro valign-text-middle outfit-medium-manatee-15-1px" data-id="379:220">On Internet</div>
                  <div class="group-13615-k3mhro group-13615" data-id="379:221">
                    <div class="video-lectures-TNCKBY valign-text-middle video-lectures outfit-normal-manatee-10-1px" data-id="379:222">Video lectures</div>
                    <div class="x-TNCKBY valign-text-middle outfit-medium-white-30-2px" data-id="379:223">11</div>
                  </div>
                </div>
              <div class="stat-1-6AJ3xP stat-1" data-id="379:224">
              <div class="group-13614-38lQZN group-13614" data-id="379:225">
                <img class="rectangle-4327-Okaqzi rectangle-4327" data-id="379:226" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-8.svg" alt="Rectangle 4327">
                <div class="rectangle-4339-Okaqzi rectangle-4339" data-id="379:227"></div>
                <img class="camera-Okaqzi" data-id="379:251" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/camera@2x.png" alt="Camera">
              </div>
              <div class="recorded-38lQZN valign-text-middle outfit-medium-manatee-15-1px" data-id="379:231">Recorded</div>
              <div class="group-13615-38lQZN group-13615" data-id="379:232">
                <div class="video-lectures-pGRL4y valign-text-middle video-lectures outfit-normal-manatee-10-1px" data-id="379:233">Video lectures</div>
                <div class="x-pGRL4y valign-text-middle outfit-medium-white-30-2px" data-id="379:234">17</div>
              </div>
            </div>
          </div>
          <p class="e-learning-opens-the-WmtcVc valign-text-middle inter-light-black-15px" data-id="318:1164">E-learning opens the door to boundless knowledge, where education transcends boundaries of time and space, empowering learners to shape their futures from anywhere, at any time.</p>
          <div class="e-learning-WmtcVc e-learning copperplategothiclight-regular-normal-black-80px" data-id="318:1047">E - Learning</div>
          <img class="elearning_final-1-WmtcVc" data-id="500:65" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/elearning-final-1.png" alt="elearning_final 1">
        </div>
        <div class="drone-Ys8k0x drone" data-id="318:1289">
          <img class="drone-with-shadow-pn-CMOS7Q" data-id="634:282" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/drone-with-shadow-png-final-final-final-1.png" alt="drone with shadow png final final final 1">
          <div class="group-9-CMOS7Q" data-id="318:1167">
            <div class="rectangle-1-pc4BzU rectangle-1" data-id="318:1168"></div>
            <img class="expand-arrow-pc4BzU expand-arrow" data-id="318:1169" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/expand-arrow-1@2x.png" alt="Expand Arrow">
            <div class="group-10-pc4BzU group-10" data-id="318:1170">
              <div class="view-more-FbImVx view-more inter-medium-white-18px" data-id="318:1171">View More</div>
            </div>
          </div>
          <div class="stats-CMOS7Q stats" data-id="582:85">
            <div class="stat-3-gNdUpR stat-3" data-id="582:104">
              <div class="group-13614-6NxsZH group-13614" data-id="582:105">
                <img class="rectangle-4327-lhjumj rectangle-4327" data-id="582:106" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-9.svg" alt="Rectangle 4327">
                <div class="rectangle-4339-lhjumj rectangle-4339" data-id="582:107"></div>
                <img class="sites-lhjumj sites" data-id="582:116" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/sites@2x.png" alt="sites">
              </div>
              <div class="sites-6NxsZH valign-text-middle sites outfit-medium-manatee-15-1px" data-id="582:109">Sites</div>
              <div class="group-13615-6NxsZH group-13615" data-id="582:110">
                <div class="total-sites-yqC7Cn valign-text-middle outfit-normal-manatee-10-1px" data-id="582:111">Total sites</div>
                <div class="x-yqC7Cn valign-text-middle outfit-medium-white-30-2px" data-id="582:112">##</div>
              </div>
            </div>
            <div class="stat-2-gNdUpR stat-2" data-id="582:86">
              <div class="group-13614-qcAec7 group-13614" data-id="582:87">
                <img class="rectangle-4327-feiX7O rectangle-4327" data-id="582:88" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-10.svg" alt="Rectangle 4327">
                <div class="rectangle-4339-feiX7O rectangle-4339" data-id="582:89"></div>
                <img class="distance-feiX7O distance" data-id="582:115" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/distance@2x.png" alt="distance">
              </div>
              <div class="distance-qcAec7 valign-text-middle distance outfit-medium-manatee-15-1px" data-id="582:91">Distance</div>
              <div class="group-13615-qcAec7 group-13615" data-id="582:92">
                <div class="distance-covered-0pDqa3 valign-text-middle outfit-normal-manatee-10-1px" data-id="582:93">Distance Covered</div>
                <div class="x-0pDqa3 valign-text-middle outfit-medium-white-30-2px" data-id="582:94">##</div>
              </div>
            </div>
            <div class="stat-1-gNdUpR stat-1" data-id="582:95">
              <div class="group-13614-XCkXXm group-13614" data-id="582:96">
                <img class="rectangle-4327-pfqOsP rectangle-4327" data-id="582:97" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-4327-11.svg" alt="Rectangle 4327">
                  <div class="rectangle-4339-pfqOsP rectangle-4339" data-id="582:98"></div>
                  <img class="flights-pfqOsP flights" data-id="582:117" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/flights@2x.png" alt="flights">
                </div>
                <div class="flights-XCkXXm valign-text-middle flights outfit-medium-manatee-15-1px" data-id="582:100">Flights</div>
                <div class="group-13615-XCkXXm group-13615" data-id="582:101">
                  <div class="flights-done-RFZfNu valign-text-middle outfit-normal-manatee-10-1px" data-id="582:102">Flights done</div>
                  <div class="x-RFZfNu valign-text-middle outfit-medium-white-30-2px" data-id="582:103">##</div>
                </div>
              </div>
            </div>
            <p class="empowering-precision-CMOS7Q valign-text-middle inter-light-black-15px" data-id="318:1163">
              Empowering precision healthcare from the skies, drone medicine delivers hope, healing, and humanity to the most remote corners of our world.
            </p>
            <div class="drone-medicine-CMOS7Q drone-medicine copperplategothiclight-regular-normal-black-80px" data-id="318:1046">Drone <br>Medicine</div>
          </div>
          <div class="ai-Ys8k0x ai" data-id="318:1278">
            <div class="group-13629-KUcrKU" data-id="542:71">
              <img class="network-1-mkKH3I" data-id="514:60" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/network-1.png" alt="network 1">
              <img class="network2-1-mkKH3I" data-id="514:62" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/network2-1.png" alt="network2 1">
            </div>
            <p class="artificial-intellige-KUcrKU valign-text-middle inter-light-black-15px" data-id="318:1032">
              Artificial intelligence holds immense promise in revolutionizing medical science, offering unparalleled opportunities for personalized care, enhanced diagnostics, and predictive interventions, ultimately paving the way for a healthier future
            </p>
            <div class="ai-in-health-care-KUcrKU copperplategothiclight-regular-normal-black-80px" data-id="318:1033">AI<br>in HealthCare</div>
            <div class="group-7-KUcrKU" data-id="318:1034">
              <div class="rectangle-1-91PTAw rectangle-1" data-id="318:1035"></div>
              <div class="group-8-91PTAw" data-id="318:1036">
                <div class="view-more-PojWpC view-more" data-id="318:1037">View More</div>
                <img class="expand-arrow-PojWpC expand-arrow" data-id="318:1038" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/expand-arrow@2x.png" alt="Expand Arrow">
              </div>
            </div>
          </div>
          <div class="main-page-Ys8k0x" data-id="318:1275">
            <div class="group-6-TTnV8t" data-id="318:831">
              <div class="rectangle-16-4BxVx5" data-id="318:832"></div>
              <div class="ellipse-20-4BxVx5" data-id="318:833"></div>
              <div class="ellipse-21-4BxVx5" data-id="318:834"></div>
              <div class="ellipse-22-4BxVx5" data-id="318:835"></div>
              <div class="ellipse-23-4BxVx5" data-id="318:836"></div>
            </div>
            <div class="rectangle-14-TTnV8t" data-id="318:837"></div>
            <h1 class="future-in-medical-science-TTnV8t" data-id="318:838">Future in<br>Medical<br>Science</h1>
            <p class="we-working-in-the-di-TTnV8t" data-id="318:839">
              We working in the direction of making Tech. and Medical on the same page.
            </p>
            <div class="group-1-TTnV8t" data-id="318:840">
              <div class="rectangle-1-7MczEy rectangle-1" data-id="318:841"></div>
              <div class="lets-explore-7MczEy inter-medium-white-18px" data-id="318:842">Lets Explore</div>
            </div>
            <div class="group-2-TTnV8t" data-id="318:843">
              <div class="rectangle-1-nkpJIS rectangle-1" data-id="318:844"></div>
              <div class="login-nkpJIS inter-medium-white-18px" data-id="318:845">Login</div>
            </div>
            <div class="group-3-TTnV8t" data-id="318:846">
              <div class="rectangle-1-Lez4ha rectangle-1" data-id="318:847"></div>
              <div class="join-Lez4ha" data-id="318:848">Join</div>
            </div>
            <div class="ai-TTnV8t ai" data-id="318:849">AI</div>
            <div class="drone-TTnV8t drone inter-medium-black-16px" data-id="318:850">Drone</div>
            <div class="e-learning-TTnV8t e-learning inter-medium-black-16px" data-id="318:851">e-Learning</div>
            <div class="tele-consultation-TTnV8t tele-consultation inter-medium-black-16px" data-id="318:852">Tele-Consultation</div>
            <div class="skills-TTnV8t skills inter-medium-black-16px" data-id="318:853">Skills</div>
            <div class="arda-TTnV8t" data-id="318:854">ARDA</div>
            <div class="group-5-TTnV8t" data-id="318:855">
              <div class="rectangle-2-x55dcg" data-id="318:856"></div>
              <div class="ellipse-1-x55dcg" data-id="318:857"></div>
              <img class="ellipse-10-x55dcg" data-id="318:858" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-10.svg" alt="Ellipse 10">
              <div class="ellipse-2-x55dcg" data-id="318:859"></div>
              <img class="ellipse-5-x55dcg" data-id="318:860" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-5.svg" alt="Ellipse 5">
              <img class="ellipse-6-x55dcg" data-id="318:861" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-6.svg" alt="Ellipse 6">
              <img class="ellipse-7-x55dcg" data-id="318:862" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-7@2x.png" alt="Ellipse 7">
              <img class="ellipse-3-x55dcg" data-id="318:863" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-3.svg" alt="Ellipse 3">
              <img class="ellipse-8-x55dcg" data-id="318:864" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-8.svg" alt="Ellipse 8">
              <img class="ellipse-4-x55dcg" data-id="318:865" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-4.svg" alt="Ellipse 4">
              <img class="ellipse-9-x55dcg" data-id="318:866" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-9.svg" alt="Ellipse 9">
              <img class="polygon-1-x55dcg polygon-1" data-id="342:33" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/polygon-1.svg" alt="Polygon 1">
              <img class="ellipse-11-x55dcg" data-id="318:867" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-11.svg" alt="Ellipse 11">
              <img class="ellipse-15-x55dcg" data-id="318:868" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-15.svg" alt="Ellipse 15">
              <img class="ellipse-12-x55dcg" data-id="318:869" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-12.svg" alt="Ellipse 12">
              <img class="ellipse-13-x55dcg" data-id="318:870" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-13.svg" alt="Ellipse 13">
              <img class="ellipse-14-x55dcg" data-id="318:871" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-14.svg" alt="Ellipse 14">
              <div class="tab-x55dcg tab" data-id="318:872">
                <div class="rectangle-3-mqlLAE rectangle-3" data-id="318:873"></div>
                <div class="ellipse-16-mqlLAE" data-id="318:874"></div>
                <div class="ellipse-17-mqlLAE ellipse-17" data-id="318:875"></div>
                <div class="ellipse-18-mqlLAE ellipse-18" data-id="318:876"></div>
                <div class="rectangle-4-mqlLAE" data-id="318:877"></div>
                <div class="rectangle-5-mqlLAE" data-id="318:878"></div>
                <div class="rectangle-6-mqlLAE rectangle-6" data-id="318:879"></div>
              </div>
              <div class="tab-qtRJXF tab" data-id="318:880">
                <div class="rectangle-3-CJ7TIA rectangle-3" data-id="318:881"></div>
                <div class="group-4-CJ7TIA" data-id="318:882">
                  <img class="rectangle-12-6UdBk0" data-id="318:883" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/rectangle-12.svg" alt="Rectangle 12">
                  <div class="rectangle-11-6UdBk0" data-id="318:884"></div>
                </div>
                <div class="ellipse-16-CJ7TIA" data-id="318:885"></div>
                <div class="ellipse-17-CJ7TIA ellipse-17" data-id="318:886"></div>
                <div class="ellipse-18-CJ7TIA ellipse-18" data-id="318:887"></div>
                <div class="rectangle-6-CJ7TIA rectangle-6" data-id="318:888"></div>
                <div class="rectangle-7-CJ7TIA" data-id="318:889"></div>
                <div class="rectangle-8-CJ7TIA" data-id="318:890"></div>
                <div class="rectangle-9-CJ7TIA" data-id="318:891"></div>
                <div class="rectangle-10-CJ7TIA" data-id="318:892"></div>
              </div>
              <div class="rectangle-15-x55dcg" data-id="318:904"></div>
              <img class="final-state-x55dcg" data-id="318:905" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/final-state@2x.png" alt="Final State">
              <img class="plus-x55dcg" data-id="318:906" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/plus@2x.png" alt="Plus">
              <img class="erase-x55dcg" data-id="318:907" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/erase@2x.png" alt="Erase">
              <img class="ai-1-x55dcg" data-id="610:249" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ai-1.png" alt="ai 1">
              <img class="quadcopter-x55dcg" data-id="318:1019" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/quadcopter@2x.png" alt="Quadcopter">
            </div>
            <img class="nmcn-1-TTnV8t" data-id="318:908" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/nmcn-1.png" alt="nmcn 1">
            <img class="mohfw-1-TTnV8t" data-id="318:909" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/mohfw-1.svg" alt="mohfw 1">
            <img class="nihfw-removebg-preview-1-TTnV8t" data-id="602:245" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/nihfw-removebg-preview-1.png" alt="NIHFW-removebg-preview 1">
            <img class="e-sanjeevani-logo-1-TTnV8t" data-id="318:1006" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/esanjeevanilogo-1.svg" alt="eSanjeevaniLogo 1">
          </div>
          <div class="group-704-Ys8k0x" data-id="345:58">
            <div class="rectangle-13-OB2eHw rectangle-13" data-id="342:35"></div>
            <div class="ellipse-19-OB2eHw ellipse-19" data-id="342:36"></div>
            <img class="sick-OB2eHw" data-id="342:51" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/sick@2x.png" alt="Sick">
          </div>
          <div class="group-705-Ys8k0x" data-id="345:59">
            <div class="rectangle-13-Vg0h4i rectangle-13" data-id="342:39"></div>
            <div class="ellipse-19-Vg0h4i ellipse-19" data-id="342:40"></div>
            <img class="medical-doctor-Vg0h4i medical-doctor" data-id="342:50" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/medical-doctor-1@2x.png" alt="Medical Doctor">
          </div>
          <div class="group-707-Ys8k0x" data-id="346:64">
            <div class="group-706-Px5OEW" data-id="346:63">
              <img class="ellipse-25-r8OjXH" data-id="344:56" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-25.svg" alt="Ellipse 25">
              <img class="polygon-1-r8OjXH polygon-1" data-id="342:44" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/polygon-1-1.svg" alt="Polygon 1">
              <img class="ellipse-16-r8OjXH" data-id="342:43" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/66138a61ae5d4de376d11f27/releases/66138aaaf31d2b27ca9d2836/img/ellipse-16.svg" alt="Ellipse 16">
            </div>
          </div>
        </div>
      </div>
      <script src="launchpad-js/launchpad-banner.js" async></script>
      <script defer src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script>
    </body>
  </html>