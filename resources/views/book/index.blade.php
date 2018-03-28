@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>Księgozbiór:</h2>
		<a class="navbar-brand" href="{{action('BookController@create')}}">Dodaj książkę <span class="glyphicon glyphicon-plus"></span> </a>
    <table class="table table-striped">
      <thead>
        <th>Tytuł</th>
  			<th>Nazwisko</th>
  			<th>Akcje</th>
      </thead>
      <tbody>
        @foreach($books as $book)
          <tr>
            <td>
							{{ (strlen ($book->title)>10)?substr($book->title,0,10)."...":$book->title}}
  					</td>
            <td>
  						{{$book->author->name." ".$book->author->surname}}
            </td>
            <td>
							<a href="{{ action('BookController@edit', $book->id) }}" class="btn btn-xs btn-info">
              	<span class="glyphicon glyphicon-pencil"></span>
              </a>
							<a href="{{ action('BookController@destroy', $book->id) }}" class="btn btn-xs btn-info">
              	<span class="glyphicon glyphicon-trash"></span>
              </a>
							<a href="" class="btn btn-xs btn-info">
              	<span class="glyphicon glyphicon-info-sign"></span>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop
