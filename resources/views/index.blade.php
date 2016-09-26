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
							<li><a href="#" title="" rel="category tag">{{$articles->tags}}</a></li>
							<span class="meta-sep">&bull;</span>
							<li>{{$articles->author}}</li>
						</ul>
					</div>

				</header>


				<div class="entry-content">
					<p>{{$articles->text}}
					</p>
				</div>
				@endforeach
			</article> <!-- end entry -->

@endsection