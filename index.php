<!-- j -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <title>eQuaSmart</title>

    <meta name="description" content="Free download theme onepage, clean and modern responsive for all"/>
    <meta name="keywords" content="responsive, html5, onepage, themes, template, clean layout, free web"/>
    <meta name="author" content="Thomsoon.com"/>
    
    <link rel="shortcut icon" href="img/logos.png" class="logo"> 
    <link rel="stylesheet" type="text/css" href="equasmart-main/css/style-responsive.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">              

        
    <style>

 
html, body, div, span, applet, object, iframe, 
h1, h2, h3, h4, h5, h6, p, blockquote, pre, 
a, abbr, acronym, address, big, cite, code, 
del, dfn, em, img, ins, kbd, q, s, samp, 
small, strike, strong, sub, sup, tt, var, 
b, u, i, center, 
dl, dt, dd, ol, ul, li, 
fieldset, form, label, legend, 
table, caption, tbody, tfoot, thead, tr, th, td, 
article, aside, canvas, details, embed,  
figure, figcaption, footer, header, hgroup,  
menu, nav, output, ruby, section, summary, 
time, mark, audio, video { 
    margin: 0; 
    padding: 0; 
    border: 0; 
    font-size: 100%; 
    font: inherit; 
    vertical-align: baseline; 
} 
/* HTML5 display-role reset for older browsers */ 
article, aside, details, figcaption, figure,  
footer, header, hgroup, menu, nav, section { 
    display: block; 
} 
body { 
    line-height: 1; 
} 
ol, ul { 
    list-style: none; 
} 
blockquote, q { 
    quotes: none; 
} 
blockquote:before, blockquote:after, 
q:before, q:after { 
    content: ''; 
    content: none; 
} 
table { 
    border-collapse: collapse; 
    border-spacing: 0; 
}

@import url(http://fonts.googleapis.com/css?family=Lato:400,300,100,700,900&subset=latin,latin-ext);



.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: white;
  z-index: 99999;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 1;
  transition: opacity 5s ease; /* 1-second transition */
}

.preloader .item img {
  width: 500px; /* Adjust size of the loading icon */
  height: auto;
} 


html, body{
  font-family: 'Lato', sans-serif;
  font-size:15px;
  -webkit-font-smoothing: subpixel-antialiased!important;
  color:black;
  font-weight:400;
  height:100%;
}

a{
  text-decoration:none;
  outline:none;
  font-size:14px;
}

h1{
  font-size:34px;
  color:white;
  font-weight:400;
  letter-spacing:6px;
  line-height:1.2;
}

p{
  font-size:14px;
  color:white;
  font-weight:300;
  letter-spacing:1px;
  margin-top:40px;
}


h1 span{
  color:#2fa68e;
}


::selection {
  background: #ada074;
  color:white;
}

::-moz-selection {
  background: #ada074;
  color:white;
}


.container{
  position:absolute;
  width:100%;
  height:100%;
}






/* Start page */

.start-page{
  position:relative;
  width:100%;
  height:100%;
  z-index:10;
  background:transparent;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.start-page hr{
  color: white;
  margin-top:30px;
  background-color: white;
  height: 1px;
  width:106px;
  border:0;

}

.start-page .opacity{
  position:absolute;
  width:100%;
  height:100%;
  background:rgba(51,51,51,0.5); /* Standard Off */
  display:none;
}


.start-page .content{
  position:relative;
  width:700px;
  margin:0 auto;
  height:100%;
}

.start-page .content .text{
  position:absolute;
  text-align:center;
  margin:auto;
  top:0; 
  left:0; 
  bottom:0; 
  right:0;
  width:700px;
  height:520px;
}

.start-page .content .text .logo{
  width:123px;
  height:123px;
  margin:0 auto 50px;
  
}


.start-page .content .text .read-more{
  width:183px;
  height:47px;
  margin:100px auto;
  line-height:47px;
  border:1px solid white;
  text-transform:uppercase;
  color:white;
  display:block;
  cursor:pointer;
  font-size:14px;
  letter-spacing:1px;
  background:none;
  -webkit-transition: all 0.6s ease-in;
	-moz-transition: all 0.6s ease-in;
	-ms-transition: all 0.6s ease-in;
	-o-transition: all 0.6s ease-in;
	transition: all 0.6s ease-in;
}

.start-page .content .text .read-more:hover{
  color:white;
  background: #ada074;
  border:1px solid #ada074;
}

.start-page .content .arrow-down{
  position: absolute;
  bottom: 110px;
  left: 50%;
  margin-left: -10px;
  width: 21px;
  height: 29px;
  background: url(../img/arrow-down.png) no-repeat center center;
  display: block;
  -webkit-animation: bounce-fade 1.2s infinite; /* Safari 4+ */
  -moz-animation:    bounce-fade 1.2s infinite; /* Fx 5+ */
  -o-animation:      bounce-fade 1.2s infinite; /* Opera 12+ */
   animation:        bounce-fade 1.2s infinite; /* IE 10+ */
}


@-webkit-keyframes bounce-fade {
    0%   { opacity: 0; bottom: 70px; }
    100% { opacity: 1; bottom: 35px; }
}
@-moz-keyframes bounce-fade {
    0%   { opacity: 0; bottom: 70px; }
    100% { opacity: 1; bottom: 35px; }
}
@-o-keyframes bounce-fade {
    0%   { opacity: 0; bottom:70px; }
    100% { opacity: 1; bottom: 35px; }
}
@keyframes bounce-fade {
    0%   { opacity: 0; bottom: 70px; }
    100% { opacity: 1; bottom: 35px; }
}


/* Menu mobile */

.menu-media{
  position:relative;
  width:100%;
  height:90px;
  background:#ada074;
  z-index:1000;
  display:none;
}

.menu-media .menu-content{
  width:280px;
  position:relative;
  margin:0 auto;
}

.menu-media .menu-content .logo {
   color:white;
   font-weight:700;
   font-size:24px;
   width:200px;
   line-height:90px;
   float:left;
   list-style: none;
}

.menu-media .menu-content .icon{
  width:41px;
  height:23px;
  float:right;
  line-height:100px;
}

.menu-click{
  display:none;
}


.menu-click li {
  position:relative;
  width:100%;
  height:70px;
  color:#333333;
  font-size:18px;
  text-align:center;
  line-height:70px;
  z-index:1000;
  border-bottom:1px solid #f2f2f2;
  -webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
 }

.menu-click li:hover {
  color:#ada074;
 }


/* Menu */

.menu{
  position:relative;
  width:100%;
  height:60px;
  background:white;
  border-bottom:1px solid #f2f2f2;
  z-index:1000;
}

.menu-content{
  width:900px;
  position:relative;
  margin:0 auto;
}

.menu-content .logo {
   color:#333;
   font-weight:700;
   font-size:24px;
   width:300px;
   line-height:60px;
   float:left;
   list-style: none;
 }

.menu-content ul{

  width:500px;
  left:50%;
  float:right;
  text-align:right;
  list-style:none;
}

.menu-content li{
   display:inline-block;
   position:relative;
}

.menu-content li a{
  color:#333;
  font-size:16px;
  display: block;
  padding: 0 20px 0 10px;
  line-height:60px;
  -webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
}

.menu-content li.active a{
  color:#ada074;
}

.menu-content li a:hover{
  color:#ada074;
}


/* About us */

.about-us{
  position:relative;
  width:100%;
  background:lemonchiffon;
  z-index:10;
}

.about-us .content{
  position:relative;
  width:900px;
  margin: 0 auto;
  overflow: hidden;
}

.about-us h1{
  font-size:34px;
  color:black;
  text-align:center;
  margin-top:120px;
  letter-spacing:6px;
  font-weight:bold;
  text-transform:uppercase;
  line-height:1.2;

}

.about-us hr{
  color: black;
  margin-top:30px;
  background-color: black;
  height: 1px;
  width:106px;
  border:0;

}

.about-us p.title{
  color: #a4a4a4;
  margin:40px auto;
  width:300px;
  line-height:26px;
  letter-spacing:0;
  font-size:14px;
  font-weight:300;
  text-align:center;
}

.about-us h2{
  text-align:center;
  margin-top:50px;
  font-size:26px;
  color:black;
  line-height:1.2;
  letter-spacing:6px;
  width:100%;
  position:relative;
  font-weight:400;
}

.about-us p{
  text-align:center;
  font-size:14px;
  width:250px;
  margin:30px auto;
  color:#a4a4a4;
  line-height:26px;
  letter-spacing:0;
  position:relative;
  font-weight:300;
}

.about-us .column-one{
  margin-top:40px;
  width:300px;
  float:left;
  margin-bottom:70px;
  height:350px;
}

.about-us .column-one .circle-one{
  height: 100px;
  position:relative;
  margin:0 auto;
  border:2px solid #f0f0f0;
  background: url(../img/icons/responsive.png) white no-repeat center center;
  -moz-border-radius:100px;
  -webkit-border-radius:100px;
  border-radius: 100px;
  width: 100px;
  cursor:pointer;
    -webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
}

.about-us .column-one .circle-one:hover{
  border:2px solid #ada074;

}

.about-us .column-two{
  margin-top:40px;
  width:300px;
  float:left;
  margin-bottom:70px;
  height:350px;
}

.about-us .column-two .circle-two{
  height: 100px;
  position:relative;
  margin:0 auto;
  border:2px solid #f0f0f0;
  background: url(../img/icons/minimalist.png) white no-repeat center center;
  -moz-border-radius:100px;
  -webkit-border-radius:100px;
  border-radius: 100px;
  width: 100px;
    cursor:pointer;
    -webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
}

.about-us .column-two .circle-two:hover{
  border:2px solid #ada074;
}


.about-us .column-three{ 
  margin-top:40px;
  width:300px;
  float:left;
  margin-bottom:70px;
  height:350px;
}

.about-us .column-three .circle-three{ 
  height: 100px;
  position:relative;
  margin:0 auto;
  border:2px solid #f0f0f0;
  background: url(../img/icons/free.png) white no-repeat center center;
  -moz-border-radius:100px;
  -webkit-border-radius:100px;
  border-radius: 100px;
  width: 100px;
  cursor:pointer;
  -webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
}

.about-us .column-three .circle-three:hover{ 
  border:2px solid #ada074;
}



/* Portfolio */


.portfolio{
  position:relative;
  width:100%;
  background:lemonchiffon;
  z-index:10;

}

.portfolio .portfolio-margin{
  position:relative;
  width:900px;
  overflow:hidden;
  margin:0 auto;
}

.portfolio .portfolio-margin .read-more{
  width:183px;
  height:47px;
  position:relative;
  margin:50px auto 100px;
  line-height:47px;
  border:1px solid #333333;
  text-transform:uppercase;
  text-align:center;
  color:#333333;
  cursor:pointer;
  font-size:14px;
  background:none;
  -webkit-transition: all 0.6s ease-in;
	-moz-transition: all 0.6s ease-in;
	-ms-transition: all 0.6s ease-in;
	-o-transition: all 0.6s ease-in;
	transition: all 0.6s ease-in;
	letter-spacing:1px;
}

.portfolio .portfolio-margin .read-more:hover{
  background:#ada074;
  color:white;
  border:1px solid #ada074;
}

.portfolio .portfolio-margin h1{
  font-size:34px;
  color:black;
  text-align:center;
  margin-top:120px;
  letter-spacing:6px;
  font-weight:bold;
  text-transform:uppercase;
  line-height:1.2;
}

.portfolio .portfolio-margin hr{
  color: black;
  margin-top:30px;
  background-color: black;
  height: 1px;
  width:106px;
  border:0;
}




/* Portfolio grid */

.grid{
  margin-top:70px;
  width:100%;
  position:relative;
  margin-bottom:70px;
  overflow:hidden;
  gap: 10px;
}

.grid li{
  width:285px;
  margin:0 15px 15px 0;
  float: left;
  position: relative;
  overflow: hidden;
}

.grid img{
  width:285px;
  float: left;
  position: relative;
}

.grid .text {
  position: absolute;
  width: 285px;
  height:100%;
  background: rgba(173,160,116,1);
  z-index: 2;
  opacity:0;
    -webkit-transition: all 0.6s ease-in;
	-moz-transition: all 0.6s ease-in;
	-ms-transition: all 0.6s ease-in;
	-o-transition: all 0.6s ease-in;
	transition: all 0.6s ease-in;
}

.grid .text:hover {
  opacity:1;
}

.grid .no-text {
  position: absolute;
  width: 285px;
  height:100%;
  background: rgba(173,160,116,0.5);
  z-index: 2;
  opacity:0;
  -webkit-transition: all 0.6s ease-in;
	-moz-transition: all 0.6s ease-in;
	-ms-transition: all 0.6s ease-in;
	-o-transition: all 0.6s ease-in;
	transition: all 0.6s ease-in;
}

.grid .no-text:hover {
  opacity:1;
}

.grid p {
  font-size: 18px;
  text-align:center;
  line-height:26px;
  margin-top:40px;
  font-weight: bold;
  letter-spacing:1px;
  color: #FFF;
}

.grid p.description {
  font-size: 12px;
  width:300px;
  margin-top:20px;
  text-align:center;
  line-height:20px;
  font-weight: 400;
  color: #FFF;
  position:relative;
}

.clear { 
    clear:both; 
}

/* Partners */

.partners{
  position:relative;
  width:100%;
  z-index:10;
  height:400px;
  background:url('../img/background/partners.jpg') 0px 0px fixed;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.partners .opacity{
  position:absolute;
  width:100%;
  height:400px;
  background:rgba(79,79,79,0.6);
}

.partners .content{
  position:absolute;
  width:900px;
  height:190px;
  margin:auto;
  top:0;
  bottom:0;
  left:0;
  right:0;
}

.partners h2{
  color:white;
  letter-spacing:1px;
  font-size:32px;
  font-weight:300;
  text-align:center;
}

.partners .logo{
  position:relative;
  width:900px;
  overflow:hidden;
  margin-top:50px;
  text-align:center;
}

.partners .logo img{
  opacity:0.5;
  -webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
}

.partners .logo img:hover{
  opacity:1;
}

/* Contact */

.contact {
  position: relative;
  width: 100%;
  background: white;
  z-index: 10;
  overflow: hidden;
  margin-bottom: 100px;
  padding: 40px 20px;
}

.contact h1 {
  font-size: 34px;
  color: black;
  text-align: center;
  margin-top: 60px;
  letter-spacing: 6px;
  font-weight: bold;
  text-transform: uppercase;
  line-height: 1.2;
}

.contact hr {
  margin: 30px auto;
  background-color: black;
  height: 1px;
  width: 106px;
  border: 0;
}

.contact .content {
  max-width: 900px;
  margin: 40px auto;
  display: flex;
  flex-direction: column;  /* Stack elements vertically */
  align-items: center;  /* Center the content */
}

.contact .contact-text {
  font-weight: 300;
  font-size: 16px;
  line-height: 26px;
  padding: 20px;
  color: black;
  
}

.map-container {
  width: 100%;/* Increase max-width */
  height: 300px; /* Adjust height */
}

@media (max-width: 768px) {
  .contact .content {
    padding: 10px;
  }
  .map-container {
    max-width: 100%; /* Full width on mobile */
  }
}


/* Footer */


.footer{
  position:fixed;
  bottom:0;
  width:100%;
  background:#3c3c3c;
}

.footer .logo{

  position:relative;
  width:58px;
  height:58px;
  margin: 0 auto;
  padding-top:50px;

}

.footer .menu-footer{
  width:80%;
  text-align:center;
  margin:0 auto;
  padding-top:30px;
  overflow: hidden;
  position:relative;  
}


.footer .menu-footer a{
  line-height:46px;
  padding:10px;
  color:#a4a4a4;
  -webkit-transition: all 0.2s ease-in;
	-moz-transition: all 0.2s ease-in;
	-ms-transition: all 0.2s ease-in;
	-o-transition: all 0.2s ease-in;
	transition: all 0.2s ease-in;
}

.footer .menu-footer a:hover{
  color:#ada074;
}


.footer .copyright{
  width:80%;
  position:relative;
  font-weight:300;
  margin:0 auto;
  padding:30px 0 50px;
  text-align:center;
  font-size:14px;
  line-height:36px;
  color:#a4a4a4;
}

.map-container {
  width: 100%;
  max-width: 900px; /* You can adjust this width to make the map smaller */
  height: 200px;
  margin-top: 20px;
}


/* iPad (portrait) */
@media (min-width: 320px) and (max-width: 579px) {

.menu{
  display:none;
}

.menu-media{
  display:block;
}

.start-page .content {
  width:300px;
  height:100%;
}

.start-page, .start-page .opacity{
  height:100%;
}
.start-page .content .text {
  width:300px;
}

.start-page .content .text .read-more {
  width: 120px; /* Further reduce width for smaller screens */
  height: 35px; /* Adjust height */
  line-height: 35px; /* Matches height */
  font-size: 10px; /* Smaller font size for mobile */
  margin-top: 50px;
}

.start-page .content .text .read-more {
  width: 100px; /* Even smaller for very small devices */
  height: 30px; /* Adjust height */
  line-height: 30px; /* Matches height */
  font-size: 9px; /* Reduce font size */
  margin-top: 30px;
}

.grid li {
  width: 90%; /* Full width for very small screens */
  margin: 10px auto; /* Center the items */
    }

.about-us h1 {
        font-size: 24px; /* Further reduce heading size */
        margin-top: 50px;
    }

    .about-us h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .about-us p {
        font-size: 12px; /* Smaller text */
        line-height: 1.4;
        margin: 10px; /* Reduce overall margins */
    }

    .about-us .column-one,
    .about-us .column-two,
    .about-us .column-three {
        padding: 10px; /* Reduce padding for compact layout */
}


h1 {
  font-size:36px;
}

.about-us h1 {
  margin-top:0;
}

.about-us .content{
  width:300px;
}

.about-us hr,.portfolio .portfolio-margin hr, .contact hr {
  width:106px;
}

.about-us .column-one, .about-us .column-two{
  width:300px;
  margin-bottom:20px;
}

 .about-us .content .column-three{
  width:300px;
  margin-bottom:70px;
 }

 .about-us .content {
  max-width: 90%; /* Almost full width on mobile */
  padding: 10px; /* Reduce padding further */
}

.about-us h1 {
  font-size: 24px; /* Further reduce heading size */
}

.about-us h2 {
font-size: 20px; /* Further reduce subheading size */
margin-top: 20px; /* Adjust spacing */
}

.about-us p {
  font-size: 12px; /* Smaller font size */
  line-height: 1.7; /* Adjust line height */
}

.about-us hr {
  width: 80px; /* Further reduce line width for very small screens */
  margin: 15px auto;

}

.about-us .subtitle {
        font-size: 12px; /* Smaller text size for very small screens */
        margin-top: -8px; /* Adjust spacing if necessary */
 }

.portfolio .portfolio-margin{
  width:300px;
}

.partners .content{
  width:300px;
}

.partners .logo {
  width:300px;
}

.partners .logo img {
  width:80px;
  padding-bottom:20px;
}

.contact, .contact .content, .contact .content .form{
  width:300px;
}

.contact .content .contact-text{
  padding-left:0px;
  width:300px;
  text-align:center;
  margin-top:60px;
}

input{
  width:320px;
}

textarea{
  width:320px;
}

.contact .content .contact-text {
  width:275px;
}

.contact .content .form .column, .contact .content .form .column-3{
  width:320px;
}

.contact .content .form .column-2{
  width:320px;
  padding-left:0;
}

.grid li{
  margin:0 0 15px 0;
}

.contact{ 
  margin:0 auto;
}

.footer{
  position:relative;
}

}



/* iPad (portrait) */
@media (min-width: 580px) and (max-width: 767px) {

.menu{
  display:none;
}

.menu-media{
  display:block;
}

.menu-media .menu-content{
  width:540px;
}

.partners .logo img {
  padding-bottom:20px;
}

.start-page .content {
  width:300px;
  height:100%;
}

.about-us h1 {
    font-size: 28px; /* Reduce heading size */
    margin-top: 80px;
    }

.about-us h2 {
    font-size: 22px; /* Smaller subheadings */
    margin-bottom: 15px;
    }

.about-us .column-one,
.about-us .column-two,
.about-us .column-three {
  width: 100%; /* Full width for columns */
  margin-bottom: 40px; /* Reduce bottom margin */
  float: none; /* Remove floating for stacking */
  text-align: center; /* Center-align text */
  margin: 0 auto;
  }

.about-us p {
    font-size: 13px; /* Slightly smaller text */
    margin: 10px 20px; /* Add horizontal padding */
}

.start-page, .start-page .opacity{
  height:100%;
}
.start-page .content .text {
  width:300px;
}


h1 {
  font-size:36px;
}

.about-us h1 {
  margin-top:0;
}

.grid li {
  width: 45%; /* Adjust the width for smaller screens */
  margin: 10px 5%; /* Add space between items */
}

.about-us .content {
  max-width: 600px; /* Narrower width for tablets */
  padding: 15px; /* Reduce padding */
}

.about-us h1 {
  font-size: 28px; /* Reduce heading size */
}

.about-us h2 {
  font-size: 22px; /* Reduce subheading size */
}

.about-us p {
  font-size: 13px; /* Slightly smaller text */
}

.about-us hr {
        width: 106px; /* Keep the line width smaller for smaller screens */
        margin: 20px auto; /* Center the line horizontally */
        background-color: black;
        height: 1px;
        border: none;
        position: relative;
}

.about-us .subtitle {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -10px; /* Adjust this value to move the text onto the line */
        font-size: 14px;
        color: #a4a4a4;
}

.about-us .content{
  width:300px;
}

.about-us hr,.portfolio .portfolio-margin hr, .contact hr {
  width:106px;
}

.about-us .column-one, .about-us .column-two{
  width:300px;
  margin-bottom:20px;
}

 .about-us .column-three{
  width:300px;
  margin-bottom:70px;
 }

.portfolio .portfolio-margin{
  width:300px;
}

.partners .content{
  width:400px;
}

.partners .logo {
  width:400px;
}

.partners .logo img {
  width:80px;
  padding-bottom:20px;
}

.contact, .contact .content, .contact .content .form{
  width:300px;
}

.contact .content .contact-text{
  padding-left:0px;
  width:300px;
  text-align:center;
  margin-top:60px;
}

.video-background{
  height: 100%;
  width: auto;
  object-fit: cover;
}

.contact .content .contact-text {
  width:275px;
}

.contact .content .form .column, .contact .content .form .column-3{
  width:420px;
}

.contact .content .form .column-2{
  width:420px;
  padding-left:0;
}

.contact{ 
  margin:0 auto;
}

.footer{
  position:relative;
}

input{
  width:420px;
}

textarea{
  width:420px;
}


}

/* iPad (portrait) */
@media (min-width: 768px) and (max-width: 1023px) {



.menu-content .logo{
  width:200px;
}

.menu-content{
  width:700px;
}

.about-us .content{
  width:700px;
}

.about-us p{
  width:200px;
}

.about-us h2{
  letter-spacing:2px;
}

.about-us .column-one{
  width:233px;
}

.about-us .column-two{
  width:233px;
}

.about-us .column-three{
  width:233px;
}

.portfolio .portfolio-margin {
  width:600px;
}

.partners .content{
  width:700px;
}

.partners .logo {
  width:700px;
}

.contact{ 
  margin:0 auto;
}

.contact .content {
  width:700px
}

.footer{
  position:relative;
}

.contact .content .form{
  width:355px;
}

input{
  width:320px;
}

textarea{
  width:320px;
}

.contact .content .contact-text {
  width:275px;
}

.contact .content .form .column, .contact .content .form .column-3{
  width:450px;
}

.contact .content .form .column-2{
  width:450px;
  padding-left:0;
}


}

.video-background {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
    z-index: -1;
}

video#coverVideo {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Additional styles for the map */
.map-container {
    width: 100%;
    max-width: 400px; /* You can adjust this width to make the map smaller */
    height: 200px;
           
}

.app-promo {
    color: white;
    padding: 40px 20px;
}

.app-promo .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.app-promo .promo-left {
    flex: 1;
    display: flex;
    justify-content: center;
}

.app-promo .phone-image {
    max-width: 70%;
    height: auto;
    border-radius: 10px;
    margin-top: 50px;
}

.app-promo .promo-right {
    flex: 1;
    text-align: left;
}

.app-promo .promo-right h1 {
    font-size: 36px;
    margin-bottom: 10px;
}

.app-promo .promo-right p {
    font-size: 18px;
    margin-bottom: 30px;
}

.app-promo .buttons {
    margin-bottom: 5px;
}

.app-promo .btn-download-android,
.app-promo .btn-download-pc {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    margin-right: 10px;
    font-size: 18px;
}

.app-promo .btn-download-android {
    background-color: #0c7026;
    color: white;
}

.app-promo .btn-download-android:hover {
    background-color: #0b5a1f;
}

.app-promo .btn-download-pc {
    background-color: #5a40d1;
    color: white;
}

.app-promo .btn-download-pc:hover {
    background-color: #4830b3;
}








    </style>
</head>

<body>

<div class="preloader">
    <div class="item">
    <img src="/img/icons/loading.gif" alt="Loading">
    </div>
</div>

<div class="container">

    <!-- section start-page -->
    <section class="start-page parallax-background" id="home">
    <div class="video-background">
      <video id="backgroundVideo" autoplay muted loop style="width: 100%; height: auto;">
        <source src="./video/landscape.mp4" type="video/mp4" id="videoSource">
    Your browser does not support the video tag.
</video>
    </div>
    <div class="opacity"></div> <!-- Opacity color -->
    <div class="content">
        <div class="text">
            <div class="logocontainer"><img src="images/equasmartlogo_croppedlogo.png" alt="" style="width: 30%;"></div>
            <div style="display: flex; justify-content: center; gap: 20px;">
                <a href="#about-us"><div class="read-more">View more</div></a>
                <a href="login_page.php"><div class="read-more">Login</div></a>
            </div>
        </div>
    </div>
</section>



    <!-- section menu mobile -->
    <section class="menu-media">
        <div class="menu-content">
            <div><img src="imag/logos.png" alt="" style="width: 50%; align-items: center;"></div>
            <div class="icon"><a href="#"><img src="img/icons/menu-media.png"/></a></div>
        </div>
    </section>
    
    <ul class="menu-click">
        <a href="#home"><li href="#home">HOME</li></a>
        <a href="#about-us"><li href="#about-us">ABOUT US</li></a>
        <a href="#portfolio"><li href="#portfolio">GALLERY</li></a>
        <a href="login_page.php"><li href="login_page.php">LOGIN</li></a>
    </ul>
   
    <!-- section menu -->
    <section class="menu">
        <div class="menu-content">
            <div class="logo" style="display: flex; align-items: center;">
                <img src="img/logos.png" alt="" style="width: 20%; margin-right: 10px;">
                <span>eQuaSmart</span>
            </div>
            <ul id="menu">
                <li><a href="#home">HOME</a></li>
                <li><a href="#about-us">ABOUT US</a></li>
                <li><a href="#portfolio">GALLERY</a></li>
                <li><a href="login_page.php">LOGIN</a></li>


            </ul>
        </div>
    </section>

    <!-- section about us -->
    <section class="about-us" id="about-us">
        <div class="content">
            <h1>ABOUT US</h1>
            <hr/>
            <p>About eQuaSmart</p>
            <p class="title">Welcome to EQUA SMART Aquaponics, your premier destination for sustainable aquaponic solutions. Founded on the principles of environmental stewardship and innovation, we are dedicated to revolutionizing food production through the integration of aquaculture and hydroponics.</p>
        
            <div class="column-one">
                <h2>MISSION</h2>
                <p>Our mission is to revolutionize sustainable agriculture through the development and implementation of innovative aquaponics systems.</p>
            </div>
        
            <div class="column-two">
                <h2>VISION</h2>
                <p>We envision becoming a global leader in sustainable food production by continuously advancing aquaponics technology and inspiring eco-conscious lifestyles.</p>
            </div>
        
            <div class="column-three">
                <h2>OUR STORY</h2>
                <p class="title">Driven by a shared passion for sustainability and a desire to address food security challenges, EQUA SMART Aquaponics was founded by a team of experts with diverse backgrounds in agriculture, technology, and environmental science.</p>
            </div>  
        </div>
    </section>
  
    <div class="clear"></div>  

    <!-- portfolio-->
    <section class="portfolio" id="portfolio">
        <div class="portfolio-margin">
            <h1>GALLERY</h1>
            <hr/>
            <ul class="grid">
                <!-- Portfolio items -->
                <li><a href="#"><img src="img/portfolio/1.jpg" alt="Portfolio item" /></a></li>
                <li><a href="#"><img src="img/portfolio/2.jpg" alt="Portfolio item" /></a></li>
                <li><a href="#"><img src="img/portfolio/3.jpg" alt="Portfolio item" /></a></li>
                <li><a href="#"><img src="img/portfolio/4.jpg" alt="Portfolio item" /></a></li>
                <li><a href="#"><img src="img/portfolio/5.jpg" alt="Portfolio item" /></a></li>
                <li><a href="#"><img src="img/portfolio/6.jpg" alt="Portfolio item" /></a></li>
            </ul>
        </div>
    </section>


</div>

<!-- Scripts -->
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.4.min.js" type="text/javascript"></script> <!-- jQuery -->
<script src="js/jquery.nicescroll.js"></script> <!-- jQuery NiceScroll -->
<script src="js/jquery.sticky.js"></script> <!-- jQuery Stick Menu -->
<script src="js/masonry.pkgd.min.js"></script> <!-- All script -->
<script src="js/imagesloaded.pkgd.min.js"></script> <!-- All script -->   
<script>
    $(function(){
        var $container = $('.grid');
        $container.imagesLoaded( function(){
            $container.masonry({
                itemSelector : 'li'
            });
        });
    });
</script>
<script src="js/jquery.parallax.js"></script> <!-- jQuery Parallax -->    
<script src="js/script.js"></script> <!-- All script -->

<script>
  // JavaScript to randomize the transition time
  window.addEventListener('load', () => {
    const preloader = document.querySelector('.preloader');
    // Random transition time between 1 and 5 seconds
    const randomTransitionTime = (Math.random() * 4 + 1).toFixed(2); // 1-5 seconds
    preloader.style.transition = `opacity ${randomTransitionTime}s ease`;
    
    preloader.style.opacity = '0';
    setTimeout(() => {
      preloader.style.display = 'none';
    }, randomTransitionTime * 1000); // convert to milliseconds
  });

  function updateVideoSource() {
    const videoElement = document.getElementById('backgroundVideo');
    const videoSource = document.getElementById('videoSource');
    
    // Check if the viewport width is less than or equal to 768px (mobile)
    if (window.matchMedia("(max-width: 768px)").matches) {
      videoSource.src = './video/portrait.mp4'; // Mobile video
    } else {
      videoSource.src = './video/landscape.mp4'; // Desktop video
    }
    
    // Reload the video with the new source
    videoElement.load();
  }

  // Initial setup
  updateVideoSource();

  // Update video source on window resize
  window.addEventListener('resize', updateVideoSource);
</script>

</body>
</html>
