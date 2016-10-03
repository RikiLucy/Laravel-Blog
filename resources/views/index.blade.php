@extends('layouts.main')
@section('content')
<!-- Content
================================================== -->
			<article class="entry">

				@foreach ($article as $articles)
				<header class="entry-header">

					<h2 class="entry-title">
						<a href={{$articles->id}} title="">{{$articles->title}}</a>
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
					<p>{!! $articles->text!!}
					</p>
				</div>
				@endforeach
			</article> <!-- end entry -->

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
						@foreach ($categorie as $categories)
						<li><a href="{{$categories->id}}" title="">{{ $categories->name }}</a></li>
						@endforeach

					</ul>
				</div>







</div> <!-- end sidebar -->

@endsection