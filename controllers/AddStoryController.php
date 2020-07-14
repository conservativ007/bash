<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Bezdna;
use App\Story;

class AddStoryController extends Controller{
  public function add(Request $request){
    if($request->email != '' && $request->text != ''){

      $elem = new Bezdna;
      $elem->name = time();
      $elem->text = $request->text;
      $elem->like = 0;
      $elem->accordion = 0;
      $elem->save();

      return redirect('/bezdna');
    }
  }

  public function addstory(Request $request){
    if($request->item == 'bezdna'){
      $bezdna = Bezdna::find($request->id);

      $text = $request->text;
      $elem = new Story;
      $elem->name = time();
      $elem->text = $request->text;
      $elem->like = $bezdna->like;
      $elem->accordion = 0;
      $elem->save();

      $bezdna->delete();

      return redirect('/bezdna');
    }

    if($request->item == 'story'){
      $elem = Story::find($request->id);
      $elem->text = $request->text;
      $elem->save();

      return redirect('/new');
    }

  }

  public function redact($id, $item){

// вместо ифов решил воспользоваться тернарным оператором
// так не работает: $elem = $item::find($id);

    $elem = $item == 'story' ? Story::find($id) :
    Bezdna::find($id);

    return view('story.elems.redact', [
      'elem' => $elem,
      'item' => $item,
    ]);
  }
}
