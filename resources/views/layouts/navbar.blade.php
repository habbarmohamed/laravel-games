<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>GF.com </title>
	<meta charset="UTF-8">
	<meta name="description" content="GameFace">
	<meta name="keywords" content="warrior, game">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{asset('img')}}/logohead.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
<!-- 	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>

	<link rel="stylesheet" href="{{ asset('css/game.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('css/preloader.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">

      <!-- Add link -->

  

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>


<div id="preloder">
  <div class="body">
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <div class="base">
    <span></span>
    <div class="face"></div>
  </div>
</div>
<div class="longfazers">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
<h1>Redirecting...</h1>
</div>


<!-- 	 Page Preloder --> 
<!-- 	<div id="preloder">
		<div class="pulse"></div>
	</div> -->

	
		<!-- 	<nav class="navbar navbar-expand-lg navbar-light fixed-top Front">
				<div class="container">
  				<a class="navbar-brand" href="/">
  					<img src="../img/logog.png" alt=""></a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
  				</button>

 				 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   						 <ul class="navbar-nav mx-auto">
     						 <li class="nav-item pr-1 active">
      							  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      						</li>
      						<li class="nav-item pr-1">
        						  <a class="nav-link" href="/jeux">Games</a>
      						</li>
      						<li class="nav-item pr-1">
        						  <a class="nav-link " href="/reviews">blog</a>
      						</li>
                  <li class="nav-item pr-1">
                      <a class="nav-link" href="/reviews">News</a>
                  </li>
      						<li class="nav-item pr-1">
        						  <a class="nav-link" href="/contact">contact</a>
      						</li>
      						
    				</ul>
    				
    <!-- <div class="search-wrapper front-wrapper">
    		<div class="input-holder front-holder">
        		<input type="text" class="search-input front-input" placeholder="" id="myInput" onkeyup="myFunction()"/>
        		<button class="search-icon front-icon" onclick="searchToggle(this, event);"><span></span></button>
    		</div>
    		<span class="close front-close" onclick="searchToggle(this, event);"></span>
		</div> -->
<!--     					

  </div>
</nav>  -->

      

<header>
         <!-- Navigation -->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " id="mainNav" style="padding: 0;">
            <div class="container">
               <a class="navbar-brand" href="/"><img src="{{asset('img/logog.png')}}" alt="#" style="height: 3em; width: 6em;" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarResponsive">
                  
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item ">
                        <a <?php if ($pageName  == 'Home') {
                          echo "class='nav-link active'"; } ?> class="nav-link " href="{{ url('/') }}">HOME</a>
                     </li>
                     {{-- <li class="nav-item pr-1">
                        <a <?php if ($pageName == 'Game') {
                          echo "class='nav-link active'"; } ?> class="nav-link" href="{{ url('/jeux') }}">
                        GAMES
                        </a>
                     </li> --}}
                  <!--    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Categories
                        </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      
                        
                     </div>
      </li> -->
                     <li class="nav-item pr-1">
                        <a <?php if ($pageName == 'Games') {
                          echo "class='nav-link active'"; } ?> class="nav-link " href="{{ url('/reviews') }}">Games</a>
                     </li>
                    
                     <li class="nav-item pr-1">
                        <a <?php if ($pageName == 'News') {
                          echo "class='nav-link active'"; } ?> class="nav-link " href="{{ url('/news') }}">News</a>
                     </li>

                     <!--  <li class="nav-item pr-1">
                        <a class="nav-link" href="{{ url('/index') }}">Price</a>
                     </li> -->

                     <li class="nav-item pr-0">
                        <a <?php if ($pageName == 'Contact') {
                          echo "class='nav-link active'"; } ?> class="nav-link " href="{{ url('/contact') }}">CONTACT US</a>
                     </li>

                     <li class="nav-item pr-0">
                        <a <?php if ($pageName == 'Help_us') {
                          echo "class='nav-link active'"; } ?> class="nav-link " href="{{ url('/support') }}">support </a>
                   </li>
                  </ul>
                  
                   
                   <i class="far fa-clock clock" style="color: #f6aa1b;"></i> &nbsp;<div class="phone-info" id="oclock"><!-- <img src="{{asset('img/pho-icon.png')}}" alt="#" /><span><a href="tel:074123654309"> --><!-- </a></span> --></div> 
               </div>
               
               

            </div>
         </nav>
      </header>
		
     <!-- Floating Social Media bar Starts -->

<div class="float-sm">
  <div class="fl-fl float-fb">
    <i class="fab fa-facebook-f icon"></i>
    <a href="" target="_blank"> Like us!</a>
  </div>
  <div class="fl-fl float-tw">
    <i class="fab fa-twitter icon"></i>
    <a href="" target="_blank">Follow us!</a>
  </div>
  <div class="fl-fl float-gp">
    <i class="fab fa-google-plus icon"></i>
    <a href="" target="_blank">Recommend us!</a>
  </div>
  <div class="fl-fl float-ig">
    <i class="fab fa-instagram icon"></i>
    <a href="" target="_blank">Follow us!</a>
  </div>
  <div class="fl-fl float-pn">
    <i class="fab fa-telegram icon"></i>
    <a href="" target="_blank">Follow us!</a>
  </div>
</div>
	<!-- </header> -->
	@yield('content')


