<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function index($new) {
   
    $tasks = [$new];
    
    return response()->json( ["tasks" => $tasks] );
    // $tasks = ['practicar', 'estudiar'];
    // return response()->json( ["tasks" => $tasks] );
   }
   public function show(){
       return "se muestra el show";
   }
   public function delete(){
       return "se borra todo";
   }
   public function post(){
       return "se postea el post";
   }
   public function store(){
       return "se almacena todo";
   }
}
