@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card">
    @if (Auth::check())
    <div class="card-header">Notes Dashboard</div>
    <div class="card-body">
      <a href="/notes" class="btn btn-primary">Add New Note</a>
      <table class="table mt-4">
      <tbody>
        @foreach($user->notes as $notes)
        <tr>
          <td>
            {{$notes->title}}
          </td>
          <td>
            {{$notes->description}}
          </td>
          <td>

            <form action="/notes/{{$notes->id}}">
              <button type="submit" name="edit" class="btn btn-primary">Edit</button>
              <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
              {{ csrf_field() }}
            </form>
          </td>
        </tr>


        @endforeach
      </tbody>
    </table>
  </div>
  @else
  <div class="card-body">
    <main role="main" class="inner cover">
      <h1 class="cover-heading">Welcome</h1>
      <p class="lead">Please <a href="/login">Login</a> or <a  href="{{ route('register') }}">{{ __('Register') }}</a> to Continue. </p>
    </main>

  </div>
  @endif
</div>
</div>
@endsection
