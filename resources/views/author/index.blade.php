@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
    <h2>Autorzy:</h2>
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
