<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

use App\Bezdna;
use App\Story;


class ShowController extends Controller{

  public function bezdna(){
    $elems = Bezdna::orderByDesc('created_at')
    ->simplePaginate(5);

    return view('story.show', [
      'elems'    => $elems,
      'key'      => Auth::check() ? true : false,
      'item'     => 'bezdna',
      'datenow'  => date('Y-m-d'),
      'sort'     => 'created_at',
    ]);
  }

  public function new(){

   $elems = Story::orderByDesc('created_at')->paginate(5);

   // инфострока
   $countAll = Story::get()->count();
   $countDay = Story::whereDay('created_at', date('d'))
   ->count();
   $countBezdna = Bezdna::get()->count();


    return view('story.show', [
      'elems'       => $elems,
      'key'         => Auth::check() ? true : false,
      'item'        => 'story',
      'sort'        => 'created_at',
      'countAll'    => $countAll,
      'countDay'    => $countDay,
      'countBezdna' => $countBezdna,
      'info'        => true,
    ]);
  }
}
