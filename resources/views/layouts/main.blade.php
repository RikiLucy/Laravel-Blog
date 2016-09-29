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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">




   <!-- Script
   ================================================== -->
	<script src="{{ URL::asset('js/modernizr.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>




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

		      <h1 id="logo-text"><a href="{{URL::route('index')}}" title="">RikiLucy</a></h1>
				<p id="intro">Come on, get up and go</p>

			</div>			

	   </div>


   </header> <!-- Header End -->

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

       <div class="row">

           <div id="main" class="eight columns">

   @yield('content')

           </div> <!-- end main -->
           <div id="sidebar" class="four columns">

               <div class="widget widget_search">
                   <h3>Search</h3>
                   <form action="#">

                       <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                       <input type="submit" value="" class="submit-search">

                   </form>
               </div>

               <div class="widget widget_categories group">
                   <h3>Категории.</h3>
                   <ul>
                       <li><a href="#" title="">Laravel</a> (2)</li>
                       <li><a href="#" title="">PHP</a> (14)</li>
                       <li><a href="#" title="">JavaScript</a> (5)</li>

                   </ul>
               </div>







           </div> <!-- end sidebar -->

       </div> <!-- end row -->

   </div> <!-- end content-wrap -->
   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row"> 


      	
         <div class="six columns info">

            <h3>About Keep It Simple</h3> 

            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint 
            sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

         </div>





         <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>
        
      </div> <!-- End row -->

      <div id="go-top"><a class="smoothscroll" title="Наверх" href="#top"><i class="fa fa-chevron-up"></i></a></div>

   </footer> <!-- End Footer-->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="{{ URL::asset('js/main.js') }}"></script>

</body>

</html>