<?php
session_start();
include("config.php");
// $userprofile=$_SESSION[''];
// if($userprofile == true)
//  {
  
//  }
//  else
//   {
//       header("location:login.php");
//   }

// ?>
<!DOCTYPE html>
<html lang="en">


<head>

    <title>Appsroot.in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
   
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/color-1.css');
    }


    </script>
 <style type="text/css">
     
  body 
        {
  
          background-color: #F0E68C;
        }
    #sliderimg
    {
        border-radius: 7%;
    }
     #sliderimg:hover
    {
        border-radius: 8%;
    }
 </style>
     
</head>
<body><!-- HEADER-->

<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email"><a href="#"><i class="topbar-icon fa fa-envelope-o"></i><span>gpsky2018@gmail.com</span></a></div>
                <div class="hotline"><a href="#"><i class="topbar-icon fa fa-phone"></i><span>+919919535236</span></a></div>
            </div>
            <div class="topbar-right pull-right">
                <div class="socials"><a href="facebook.com" target="blank" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a><a href="#" class="blog"><i class="fa fa-rss"></i></a><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                </div>
                 <div class="group-sign-in">
                    
                    <a href="logout.php" class="Logout">Logout</a>
                 </div>
            </div>
        </div>
    </div>
    <div class="header-main homepage-01">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="navbar-heade">
                    <div class="logo pull-left"><a href="#" class="header-logo"><img src="#" alt=""/></a></div>
                    <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <nav class="navigation collapse navbar-collapse pull-right">
                    <ul class="nav-links nav navbar-nav">
                      <li class="dropdown"><a href="#" class="main-menu">programming<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="cpage/cfullpage.html"  target="blank"class="link-page">C PROGRAM</a></li>
                                <li><a href="c++/c++fullpage.html"  target="blank" class="link-page">C++ PROGRAM </a></li>
                                <li><a href="javapage/javafullpage.html" target="blank" class="link-page">JAVA PROGRAM</a></li>
                                <li><a href="pythonpage/pythonfullpage.html" target="blank" class="link-page">PYTHON PROGRAM</a></li>
                            </ul>
                        </li>

                         <li class="dropdown"><a href="#" class="main-menu">Web-Developement<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="html/htmlfullpage.html" class="link-page">HTML</a></li>
                                <li><a href="css/cssfullpage.html" class="link-page">CSS</a></li>
                                <li><a href="javascript/javascriptfullpage.html" class="link-page">JAVASCRIPT</a></li>
                                <li><a href="bootstrap/bootstrapfullpage.html" target="blank" class="link-page" >BOOTSTRAP</a></li>
                                <li><a href="jsp/jspfullpage.html" class="link-page">JAVA SERVER PAGE (JSP)</a></li>
                                <li><a href="php/phpfullpage.html" class="link-page">PHP</a></li>
                                <li><a href="xml/xmlfullpage.html" class="link-page">XML</a></li>
                                <li><a href="ajax/ajaxfullpage.html" target="blank" class="link-page">AJAX</a></li>
                                <li><a href="ajax/ajaxfullpage.html" target="blank" class="link-page">MYSQL Database</a></li>
                            </ul>
                        </li>
                       
                         <li class="dropdown"><a href="#" class="main-menu">Linux<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="ubuntu/ubuntufullpage.html"  target="blank"  class="link-page">UBUNTU LINUX</a></li>
                                <li><a href="redhat/redhatfullpage.html"  target="blank"  class="link-page">REDHAT LINUX</a></li>
                                <li><a href="kali linux/kalilinuxfullpage.html"  target="blank"  class="link-page">KALI LINUX</a></li>
                                
                                <li><a href="fedora/fedorafullpage.html"  target="blank"  class="link-page">FEDORA LINUX</a></li>
                                
                            </ul>

                       
                          <li class="dropdown"><a href="#" class="main-menu">Networking<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="basicnetworking/basicnetworkingfullpage.html" class="link-page">BASIC NETWORKING</a></li>
                                <li><a href="advancenetworking/advancenetworkingfullpage.html" class="link-page">ADVANCE NETWORKING</a></li>
                                
                               
                            </ul>
                        </li>
                         <li class="dropdown"><a href="computer/computebasicfullpage.html" target="blank" class="main-menu">Computer-Basic</a>
                           </li>
                         <li class="dropdown"><a href="computersoftware/computersoftware.html" target="blank" class="main-menu">computer software</a>
                           </li>
                           <li class="dropdown"><a href="os/os.html" target="blank" class="main-menu">Operating Systems</a>
                           </li>
                           
                        


                                                
                       
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
        <div class="container">
                     
                   <div class="row jumbotron ">
                        <div class="col-sm-12">
                            
                           <div class="alert alert-danger" align="center">
                           <strong>News</strong> This site is not 100% ready <a href="#" class="alert-link">And you can visit Here. </a>.
                           </div>

                        </div> 


                   </div>

        
                 </div> 


          <!......slider img...!>
            
                 <div class="container">
                     
                   <div class="row jumbotron ">
                        <div class="col-sm-12">
                            
                           <img src="assets\images\sliderimg.jpg" id="sliderimg" width="100%" height="400px;">

                        </div> 


                   </div>

        
                 </div> 


<!.. Computer gajal....!>
                <div class="container">
  
    

              <div class="panel panel-primary">
                <div class="panel-heading" align="center"><h3 style=" color: white;">Computer Programming is proving to be very useful in our daily lives.</h3></div>

                <div class="panel-body">
            
               
              <div class="row jumbotron">
                
               <div class="col-sm-12">
                 
                   hhhhh


               </div>


              </div>


          



         </div>
      </div>

</div>

                
               
               
             
<!-- LOADING-->
<!---->
<!-- JAVASCRIPT LIBS-->

<script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->


    <div class="col-sm-12">
        <marquee direction="right" behavior="alternate"><h2 style="color: orange;">लोग आपके आइडिया को ग़लत बताते है
तो आपकी ज़िम्मेदारी है की
इसे सही साबित करके दिखाए!</h2></marquee>


</div>
</body>

</html>