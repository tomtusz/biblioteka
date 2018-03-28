@extends('master')
@section('content')
  <h3>Dodaj książkę:</h3>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
              @include('forms.form_errors')
            <!-- Formularz -->
              {!! Form::open(['url'=>'books','class'=>'form-forizontal']) !!}
                @include('forms.book_form')
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
