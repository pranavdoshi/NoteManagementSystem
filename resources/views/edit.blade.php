@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edit the Note</h1>

  <form method="POST" action="/notes/{{ $notes->id }}">

    <div class="form-group">
      <input type="text" name="title" class="form-control" value="{{$notes->title }}"/>
      @if ($errors->has('title'))
           <span class="text-danger">{{ $errors->first('title') }}</span>
       @endif
    </div>

    <div class="form-group">
      <textarea name="description" class="form-control">{{$notes->description }}</textarea>
      @if ($errors->has('description'))
           <span class="text-danger">{{ $errors->first('description') }}</span>
       @endif
    </div>


    <div class="form-group">
      <button type="submit" name="update" class="btn btn-primary">Update Note</button>
    </div>
    {{ csrf_field() }}
  </form>



</div>

@stop
