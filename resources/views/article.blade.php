@extends('layouts.main')
@section('content')

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

   			<article class="entry">

				<header class="entry-header">

					<h2 class="entry-title">
						<a href={{$article->id}} title="">{{$article->title}}</a>
					</h2>

					<div class="entry-meta">
						<ul>
							<li>{{$article->date}}</li>
							<span class="meta-sep">&bull;</span>
							<li><a href="#" title="" rel="category tag">{{$article->tags}}</a></li>
							<span class="meta-sep">&bull;</span>
							<li>{{$article->author}}</li>
						</ul>
					</div>

				</header>
				


					<div class="entry-content">
						<p class="lead">{!! $article->text!!}</p>


					</div>

					<p class="tags">
  			         <span>Tagged in </span>:
  				      <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
  			       </p> 

  			       <ul class="post-nav group">
  			            <li class="prev"><a rel="prev" href="#"><strong>Previous Article</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
  				         <li class="next"><a rel="next" href="#"><strong>Next Article</strong> Morbi Elit Consequat Ipsum</a></li>
  			        </ul>

				</article>

				<!-- Comments
            ================================================== -->
            <div id="comments">

               <h3>5 Comments</h3>

               <!-- commentlist -->
               <ol class="commentlist" id="successMessage">

				   @foreach ($comment as $comments)
				   <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/user-01.png" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>{{$comments->author}}</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T23:05">{{$comments->date}} @ 23:05</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text" id="test">
	                        <p>{{$comments->text}}</p>
	                     </div>

	                  </div>

                  </li>
				   @endforeach



               </ol> <!-- Commentlist End -->


               <!-- respond -->
               <div class="respond">

                  <h3>Leave a Comment</h3>

                  <!-- form -->
                  <form name="contactForm" id="contactForm" method="post" action="{{URL::current()}}">

  					   <fieldset>
						   {{ csrf_field() }}

                     <div class="group">
  						      <label for="cName">Name <span class="required">*</span></label>
  						      <input name="author" type="text" id="cName" size="35" value="" />
                     </div>

                     <div class="group">
  						      <label for="cEmail">Email <span class="required">*</span></label>
  						      <input name="cEmail" type="text" id="cEmail" size="35" value="" />
                     </div>

                     <div class="group">
  						      <label for="cWebsite">Website</label>
  						      <input name="cWebsite" type="text" id="cWebsite" size="35" value="" />
                     </div>

                     <div class="message group">
                        <label  for="cMessage">Message <span class="required">*</span></label>
                        <textarea name="text"  id="cMessage" rows="10" cols="50" ></textarea>
                     </div>

                     <button type="submit" class="submit">Submit</button>

  					   </fieldset>
  				      </form> <!-- Form End -->
				   <script>
					   $(document).ready(function(){
						   $('#contactForm').submit(function () {
							   var formData =$(this).serialize();
							   var url = $('#contactForm').attr('action');
							   $.post( url, formData, processData);
							   function processData(data) {
								   var newComment =
										   '<li class="depth-1"><div class="avatar">' +
										   '<img width="50" height="50" class="avatar" src="images/user-01.png" alt="">' +
										   '</div><div class="comment-content"><div class="comment-info">' +
										   '<cite>' + data.author +'</cite><div class="comment-meta">' +
										   '<time class="comment-time" ' +
										   'datetime="2014-07-12T23:05">' +
										   '@ 23:05</time><span class="sep">/</span><a class="reply" href="#">Reply</a></div></div><div class="comment-text" id="test"><p>' +
										   data.text + '</p></div></div></li>';
								   $('#successMessage').append(newComment);
								   console.log("test");


							   }
							   return false;
						   });
					   });

				   </script>

               </div> <!-- Respond End -->

            </div>  <!-- Comments End -->		
   			

   		</div> <!-- main End -->

   		<div id="sidebar" class="four columns">

   			<div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">

                     <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">

                  </form>
               </div>

   			<div class="widget widget_categories group">
   				<h3>Categories.</h3> 
   				<ul>
						<li><a href="#" title="">Wordpress</a> (2)</li>
						<li><a href="#" title="">Ghost</a> (14)</li>
						<li><a href="#" title="">Joomla</a> (5)</li>
						<li><a href="#" title="">Drupal</a> (3)</li>
						<li><a href="#" title="">Magento</a> (2)</li>
						<li><a href="#" title="">Uncategorized</a> (9)</li>						
					</ul>
				</div>

				<div class="widget widget_text group">
					<h3>Widget Text.</h3>

   				<p>Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.</p>

   			</div>

   			<div class="widget widget_tags">
               <h3>Post Tags.</h3>

               <div class="tagcloud group">
                	<a href="#">Corporate</a>
                  <a href="#">Onepage</a>
                  <a href="#">Agency</a>
                  <a href="#">Multipurpose</a>
                  <a href="#">Blog</a>
                  <a href="#">Landing Page</a>
                  <a href="#">Resume</a>
               </div>
                  
            </div>

            <div class="widget widget_popular">
               <h3>Popular Post.</h3>

               <ul class="link-list">
                  <li><a href="#">Sint cillum consectetur voluptate.</a></li>
                  <li><a href="#">Lorem ipsum Ullamco commodo.</a></li>
                  <li><a href="#">Fugiat minim eiusmod do.</a></li>                     
               </ul>
                  
            </div>
   			
   		</div> <!-- end sidebar -->

  		</div> <!-- end row -->

   </div> <!-- end content-wrap -->
@endsection
