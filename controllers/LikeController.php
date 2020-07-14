<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Bezdna;
use App\Story;

class LikeController extends Controller{
  public function like($id, $num, $item){

    if($item == 'bezdna'){
      $elem = Bezdna::find($id);
    }

    if($item == 'story'){
      $elem = Story::find($id);
    }

    $count = $elem->like;

    if($num == 1){
      $elem->like = $count + 1;
    }else{
      $elem->like = $count - 1;
    }

    $elem->save();
    return redirect()->back();
  }

  public function accordion($id, $item){

    if($item == 'bezdna'){
      $elem = Bezdna::find($id);
    }

    if($item == 'story'){
      $elem = Story::find($id);
    }

    $count = $elem->accordion;
    $elem->accordion = $count + 1;

    $elem->save();
    return redirect()->back();
  }
}
