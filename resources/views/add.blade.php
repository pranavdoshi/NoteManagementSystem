@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Add New Note</h2>

  <form method="POST" action="/notes">

    <div class="form-group">
      <input type="text" name="title" class="form-control" placeholder="Note Title"/>
    </div>

    <div class="form-group">
      <textarea name="description" class="form-control" placeholder="Note Description"></textarea>
    </div>


    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Note</button>
    </div>
    {{ csrf_field() }}
  </form>


</div>
@endsection
