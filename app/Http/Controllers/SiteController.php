<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function hello()
    {
      return 'hello';
    }


  public function play($id){
  if($id == 1){
    return view('game1');
  }elseif($id == 2){
    return view('game2');
  }
}

  public function dashboard(){
  return view('dashboard');
}

  public function demo(){
    $name = 'Evelyn';
    $age = '24';
    return view('test.demo',compact('name','age'));
  }

  public function dessert(){
  return view('jsoul.dessert');
}

 public function scan(){
  return view('scan');
}

 public function carousel(){
  return view('carousel');
}

 public function music(){
  return view('music');
}


}
