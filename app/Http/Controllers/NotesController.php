<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Notes;

class NotesController extends Controller
{
  public function index()
  {
    $user = Auth::user();
    return view('Welcome',compact('user'));
  }

  public function add()
  {
    return view('add');
  }

  public function create(Request $request)
  {
    $notes = new Notes();
    $notes->description = $request->description;
    $notes->title = $request->title;
    $notes->user_id = Auth::id();
    $notes->save();
    return redirect('/');
  }

  public function edit(Notes $notes)
  {

    if (Auth::check() && Auth::user()->id == $notes->user_id)
      {
              return view('edit', compact('notes'));
      }
      else {
           return redirect('/');
       }
  }

  public function update(Request $request, Notes $notes)
  {
    if(isset($_POST['delete'])) {
      $notes->delete();
      return redirect('/');
    }
    else
    {
      $notes->description = $request->description;
      $notes->title = $request->title;
      $notes->save();
      return redirect('/');
    }
  }
}
