<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
      $tekst="Nasa prva stranica!";
      $naslov="Nas naslov";
      return view('front.pocetna', compact('tekst','naslov'));
    }

    public function getTito(){
      return view('front.druga');
    }

    public function getArticle($id){
      $text="Nesto nije u redu";
      if($id==1) $text="Tekst clanka broj 1.";
      if($id==2) $text="Tekst clanka broj 2.";
      if($id>2) $text="Tekst nekog drugog clanka.";
      return view('front.clanak', compact('text'));
    }

}
