<div class="form-group">
  <div  class="col-md-4 control-label">
    {!! Form::label('name','Imię:') !!}
  </div>
  <div class="col-md-6">
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
  </div>
</div>
<div class="form-group">
  <div  class="col-md-4 control-label">
    {!! Form::label('surname','Nazwisko:') !!}
  </div>
  <div class="col-md-6">
    {!! Form::text('surname', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div  class="col-md-12 control-label">
    <button type="submit" class="btn btn-info">Dodaj autora: <span class="glyphicon glyphicon-floppy-save"></span></button>
    <a href="{{ action('AuthorController@index') }}" class="btn btn-info"> Anuluj
      <span class="glyphicon glyphicon-remove"></span>
    </a>
  </div>
</div>
