@extends('layouts.main')
@section('content')
<!-- Content
================================================== -->
<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
<style>
	#sidebar{
		display: none;
	}
</style>

<div class="add respond"> //форма добавления
	<!-- form -->
	<form name="add_article" class="add_article" method="post" action="{{URL::route('add')}}">
		{{ csrf_field() }}
			<div class="name_article">
				<input type="text" placeholder="Название статьи" name="title">
			</div>
			<br>
			<div class="body_article">

			<div class="text_article">
				<textarea name="text" id="editor1" cols="30" rows="10"></textarea>
			</div>
			<br>

			<div class="date_article">
				<input type="date" name="date">
			</div>
			<br>

			<div class="author_article">
				<input type="text" value="RikiLucy" name="author">
			</div>
			<br>
			
			<div class="tags_article" >
				<input type="text" placeholder="Теги/категория" name="tags">
			</div>
			<br>

			<button type="submit" class="submit">Send</button>
				<div class="hide">Hide</div>

			</div>

			<script>

				CKEDITOR.replace( 'editor1', {
					language: 'Russian',
					uiColor: '#F9F9F9'
				});
			</script>
	</form> <!-- Form End -->


</div> <!-- Respond End -->

// статьи и каменты
<form class="table_article" action="{{URL::route('delete')}}" method="post">
	{{ csrf_field() }}
<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
	<thead>
	<tr>
		<th >Id</th>
		<th>Название</th>
		<th>Дата</th>
		<th>Автор</th>
		<th>Категории</th>
		<th>Редактировть</th>
		<th>Удалить</th>
		<th>Комментарии</th>



	</tr>
	</thead>
	<tbody class="articles_table">
	<div class="token">{{ csrf_field() }}</div>
	@foreach ($article as $articles)
	<tr id_article="{{$articles->id}}">
		<td >{{$articles->id}}</td>
		<td>{{$articles->title}}</td>
		<td>{{$articles->date}}</td>
		<td>{{$articles->author}}</td>
		<td>{{$articles->tags}}</td>
		<td>Редактировать</td>
		<td class="delete_article">Удалить</td>
		<td>Комментарии</td>
	</tr>
	@endforeach
	</tbody>
</table>
</form>


@endsection