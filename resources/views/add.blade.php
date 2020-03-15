@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Add New Note</h2>

  <form method="POST" action="/notes">

    <div class="form-group">
      <input type="text" name="title" class="form-control" placeholder="Note Title"/>
      @if ($errors->has('title'))
           <span class="text-danger">{{ $errors->first('title') }}</span>
       @endif
    </div>

    <div class="form-group">
      <textarea name="description" class="form-control" placeholder="Note Description"></textarea>
      @if ($errors->has('description'))
           <span class="text-danger">{{ $errors->first('description') }}</span>
       @endif
    </div>


    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Note</button>
    </div>
    {{ csrf_field() }}
  </form>


</div>
@endsection
