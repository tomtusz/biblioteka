<div class="form-group">
  <div  class="col-md-4 control-label">
    {!! Form::label('title','Tytuł:') !!}
  </div>
  <div class="col-md-6">
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
  </div>
</div>
<div class="form-group">
  <div  class="col-md-4 control-label">
    {!! Form::label('author_id','Autor:') !!}
  </div>
  <div class="col-md-6">
    <select class="form-control" name="author_id" placeholder="Wybierz autora...">
      @foreach ($authors as $author)
         <option value="{{$author->id}}">{{$author->name." ".$author->surname}}</option>
      @endforeach
    </select>
  </div>
</div>
<div class="form-group">
  <div  class="col-md-4 control-label">
    {!! Form::label('description','Opis:') !!}
  </div>
  <div class="col-md-6">
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
  </div>
</div>
<div class="form-group">
  <div  class="col-md-12 control-label">
    <button type="submit" class="btn btn-info">Zapisz książkę: <span class="glyphicon glyphicon-floppy-save"></span></button>
  </div>
</div>
