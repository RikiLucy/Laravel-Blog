@extends('layouts.main')
@section('content')
	<div class="row">

		<div id="main" class="nine columns">
<!-- Content
================================================== -->
			<article class="entry">

				@foreach ($article as $articles)
				<header class="entry-header">

					<h2 class="entry-title">
						<a href={{URL::route('article', [$articles->id])}} title="">{{$articles->title}}</a>
						<br>

					</h2>

					<div class="entry-meta">
						<ul>
							<li>{{$articles->date}}</li>
							<span class="meta-sep">&bull;</span>
							<li><a href="#" title="" rel="category tag">{{$articles->categories}}</a></li>
							<span class="meta-sep">&bull;</span>
							<li>{{$articles->author}}</li>
						</ul>
					</div>


				</header>


				<div class="entry-content">
					<p>{!! $articles->description!!}
					</p>
				</div>
					<a href={{URL::route('article', [$articles->id])}} title="">[читать полностью]</a>
				@endforeach
			</article> <!-- end entry -->

			</div> <!-- end main -->
			<div id="sidebar" class="three columns">

			<!--<div class="widget widget_search search_form">
					<h3>Search</h3>
					<form action="#">

						<input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
						<input type="submit" value="" class="submit-search">

					</form>
				</div> -->

				<div class="widget widget_categories group">
					<h3>Категории.</h3>
					<ul>
						@foreach ($categorie as $categories)
						<li><a href="{{URL::route('category', [$categories->categories])}}" title="">{{ $categories->categories }}</a> ({{$categories->count}})</li>
						@endforeach

					</ul>
				</div>







			</div> <!-- end sidebar -->
	</div> <!-- end row -->
@endsection