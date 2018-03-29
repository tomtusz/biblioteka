@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
    <h2>Autorzy:</h2>
		<div class="col-md-12">
			<a class="navbar-brand" href="{{action('AuthorController@create')}}">Dodaj autora <span class="glyphicon glyphicon-plus"></span> </a>
		</div>
		@if(session()->has('status'))
			@include('forms.form_info')
		@endif
    <table class="table table-striped">
      <thead>
        <th>Imię</th>
  			<th>Nazwisko</th>
      </thead>
      <tbody>
        @foreach($authors as $author)
          <tr>
            <td>
  						{{$author->name}}
  					</td>
            <td>
  						{{$author->surname}}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop
