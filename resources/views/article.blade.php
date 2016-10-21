@extends('layouts.main')
@section('content')
	<div class="row">

		<div id="main" class="ten columns">
   <!-- Content
   ================================================== -->
   			<article class="entry">

						<header class="entry-header">

							<h2 class="entry-title">
								<a href={{$article->id}} title="">{{$article->title}}</a>
							</h2>

                        <!--<div class="entry-meta">
								<ul>
									<li>{{$article->date}}</li>
									<span class="meta-sep">&bull;</span>
									<li><a href="{{URL::route('category', [$category->categories])}}" title="">{{ $category->categories }}</a></li>

									<span class="meta-sep">&bull;</span>
									<li>{{$article->author}}</li>
								</ul>
							</div>-->

						</header>
                <br><br>

							<div class="entry-content">
								<p class="lead">{!! $article->text!!}</p>
							</div>

			</article>

				<!-- Comments
    ================================================== -->
            <div id="comments">

               <h3 class="commentCount" > Comments</h3>

               <!-- commentlist -->
               <ol class="commentlist" id="successMessage">

				   @foreach ($comment as $comments)
							<li class="comment">

            				         <div class="avatar">
            				            <img width="50" height="50" class="avatar" src="images/user-01.png" alt="">
            				         </div>

            				         <div class="comment-content">

	        				             <div class="comment-info">

	        				                <cite>{{$comments->author}}</cite>

	        				                <div class="comment-meta">
	        				                   <time class="comment-time">{{$comments->date}}</time>
                                            <!--<span class="sep">/</span><a class="reply" href="#">Reply</a>-->
	        				                </div>

	        				             </div>

	        				             <div class="comment-text" id="test">
	        				                {!!$comments->text!!}
	        				             </div>

	        				          </div>

            				</li>
				   @endforeach
               </ol> <!-- Commentlist End -->

               <!-- respond -->
               <div class="respond">
                  <!-- form -->
                  <form name="contactForm" id="contactForm" method="post" action="{{URL::current()}}">
					  {{ csrf_field() }}

  				<fieldset>

                    <div class="group">
  						<input required name="author" type="text" class="showComment" size="35" placeholder="Оставить комментарий"/>
                    </div>

					<div class="sendComment">
						<div class="message group">
							<textarea required name="text"  wrap="soft" id="cMessage" class="your_message" rows="10" cols="50" placeholder="Your message"></textarea>
						</div>

						<button type="submit" class="submit">Send</button>
					</div>

				</fieldset>
  				  </form> <!-- Form End -->


               </div> <!-- Respond End -->

            </div>  <!-- Comments End -->
		</div>  <!-- end Main -->
		</div> <!-- end row -->
@endsection
