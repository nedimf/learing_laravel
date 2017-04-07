<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
      $tekst="Nasa prva stranica!";
      $naslov="Nas naslov";
      return view('front.pocetna', compact('osoba1'));
    }

    public function getTito(){
      return view('front.druga');
    }

    public function getArticle($id){
      $text="Nesto nije u redu...";
      if($id==1) $text="Tekst clanka broj 1.";
      if($id==2) $text="Tekst clanka broj 2.";
      if($id>2) $text="Tekst nekog drugog clanka.";
      return view('front.clanak', compact('text'));
    }

    class Person {
            // Creating some properties (variables tied to an object)
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;

            // Creating a method (function tied to an object)
            public function greet() {
              return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
            }
          }

          $osoba1 = new Person();
          $osoba1->firstname = "mirza";
          $osoba1->lastname = "hodzic";
          $osoba1->age=26;
          $osoba1->save();
          $osoba1->greet();



}
