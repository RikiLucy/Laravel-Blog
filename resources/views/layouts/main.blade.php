<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>RikiLucy</title>
	<meta name="description" content="">  
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->

	<link rel="stylesheet" href="{{ URL::asset('css/default.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/media-queries.css') }}">



   <!-- Script
   ================================================== -->
	<script src="{{ URL::asset('js/modernizr.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<!-- Favicons
     ================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="top">

   	<div class="row">

   		<div class="header-content twelve columns">

		      <h1 id="logo-text"><a href="index.html" title="">RikiLucy</a></h1>
				<p id="intro">Put your awesome slogan here...</p>

			</div>			

	   </div>

	   <nav id="nav-wrap"> 

	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

	   	<div class="row">    		            

			   	<ul id="nav" class="nav">
			      	<li class="current"><a href="index.html">Home</a></li>
			      	<li class="has-children"><a href="#">Dropdown</a>
	                  <ul>
	                     <li><a href="#">Submenu 01</a></li>
	                     <li><a href="#">Submenu 02</a></li>
	                     <li><a href="#">Submenu 03</a></li>
	                  </ul>
	               </li>
	               <li><a href="demo.html">Demo</a></li>	
	               <li><a href="archives.html">Archives</a></li>
			      	<li class="has-children"><a href="single.html">Blog</a>
							<ul>
	                     <li><a href="blog.html">Blog Entries</a></li>
	                     <li><a href="single.html">Single Blog</a></li>	                     
	                  </ul>
			      	</li>		      	
			      	<li><a href="page.html">Page</a></li>
			   	</ul> <!-- end #nav -->			   	 

	   	</div> 

	   </nav> <!-- end #nav-wrap --> 	     

   </header> <!-- Header End -->

   <!-- Content
   ================================================== -->
   @yield('content')
   

   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row"> 

      	<div class="twelve columns">	
				<ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>               
               <li><a href="#"><i class="fa fa-github-square"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-flickr"></i></a></li>               
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>			
      	</div>
      	
         <div class="six columns info">

            <h3>About Keep It Simple</h3> 

            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint 
            sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

         </div>

         <div class="four columns">

            <h3>Photostream</h3>
            
            <ul class="photostream group">
               <li><a href="#"><img alt="thumbnail" src="{{ URL::asset('images/thumb.jpg') }}"></a></li>
               <li><a href="#"><img alt="thumbnail" src="{{ URL::asset('images/thumb.jpg') }}"></a></li>
               <li><a href="#"><img alt="thumbnail" src="{{ URL::asset('images/thumb.jpg') }}"></a></li>
               <li><a href="#"><img alt="thumbnail" src="{{ URL::asset('images/thumb.jpg') }}"></a></li>
               <li><a href="#"><img alt="thumbnail" src="{{ URL::asset('images/thumb.jpg') }}"></a></li>
               <li><a href="#"><img alt="thumbnail" src="{{ URL::asset('images/thumb.jpg') }}"></a></li>
               <li><a href="#"><img alt="thumbnail" src="{{ URL::asset('images/thumb.jpg') }}"></a></li>
               <li><a href="#"><img alt="thumbnail" src="{{ URL::asset('images/thumb.jpg') }}"></a></li>
            </ul>           

         </div>

         <div class="two columns">
            <h3 class="social">Navigate</h3>

            <ul class="navigate group">
               <li><a href="#">Home</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="#">Demo</a></li>
               <li><a href="#">Archives</a></li>
               <li><a href="#">About</a></li>
            </ul>
         </div>

         <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>
        
      </div> <!-- End row -->

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

   </footer> <!-- End Footer-->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>