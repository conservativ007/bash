<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Bezdna;
use App\Story;

class SortController extends Controller{
  public function sortTop($item, $sort){
    if($item == 'story'){
      $elems = Story::whereMonth('created_at', date('m'))
      ->orderByDesc('like')
      ->paginate(5);
    }

    if($item == 'bezdna'){
      $elems = Bezdna::whereMonth('created_at', date('m'))
      ->orderByDesc('like')
      ->simplePaginate(5);
    }

    return view('story.show', [
      'elems' => $elems,
      'key'   => Auth::check() ? true : false,
      'item'  => $item,
      'datenow'  => date('Y-m-d'),
      'sort'  => $sort,
    ]);
  }

  public function sortTopForever($item, $sort){
    if($item == 'story'){
      $elems = Story::orderByDesc('like')
      ->paginate(5);
    }

    if($item == 'bezdna'){
      $elems = Bezdna::orderByDesc('like')
      ->simplePaginate(5);
    }


    return view('story.show', [
      'elems' => $elems,
      'key'   => Auth::check() ? true : false,
      'item'  => $item,
      'datenow'  => date('Y-m-d'),
      'sort'  => $sort,

    ]);
  }
}
