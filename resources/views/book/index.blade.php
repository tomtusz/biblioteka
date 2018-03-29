@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>Księgozbiór:</h2>
		<div class="col-md-12">
			<a class="navbar-brand" href="{{action('BookController@create')}}">Dodaj książkę <span class="glyphicon glyphicon-plus"></span> </a>
		</div>
		@if(session()->has('status'))
			@include('forms.form_info')
		@endif
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
						</td>
						<td>
							<form id="deleteForm" action="{{action('BookController@destroy', $book['id'])}}" method="post">
		            @csrf
		            <input name="_method" type="hidden" value="DELETE">
		            <button class="btn btn-xs btn-danger" type="submit">
									<span class="glyphicon glyphicon-trash"></span>
								</button>
		          </form>
						</td>
						<td>
							<button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal{{$book->id}}">
                <span class="glyphicon glyphicon-info-sign"></span>
              </button>
							@include('book.modalInfo')
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
	<script type="text/javascript">
		$("#deleteForm").on("submit", function(){
		 	return confirm("Do you want to delete this item?");
		});
	</script>
</div>
@stop
