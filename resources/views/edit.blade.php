@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edit the Note</h1>

  <form method="POST" action="/notes/{{ $notes->id }}">

    <div class="form-group">
      <input type="text" name="title" class="form-control" value="{{$notes->title }}"/>
    </div>

    <div class="form-group">
      <textarea name="description" class="form-control">{{$notes->description }}</textarea>
    </div>


    <div class="form-group">
      <button type="submit" name="update" class="btn btn-primary">Update Note</button>
    </div>
    {{ csrf_field() }}
  </form>



</div>

@stop
