<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use Validator;

class TaskController extends Controller
{
   public function index($new) {
   
    // $tasks = [
    //     ['id' => 1, 'name'=> 'practicar', 'description'=>'hay que practicar'],
    //     ['id' => 2, 'name'=> 'estudiar', 'description'=>'hay que estudiar'],
    //     ['id' => 3, 'name'=> 'limpiar', 'description'=>'hay que limpiar ']
    // ];
    $tasks = task::get();
    return response()->json( ["tasks" => $tasks] );
    // $tasks = ['practicar', 'estudiar'];
    // return response()->json( ["tasks" => $tasks] );
   }
   public function show(){
    
    $tasks = task::where('id', 2)->get();
    if (!isset($task)) {
        return response()->json( ["Message" => "no existe la tarea"] );
    }

    return response()->json( ["tasks" => $tasks] );  
   }
   public function delete(){
       return "se borra todo";
   }
   public function post(){
       return "posteo el post";
   }
   public function store(Request $request){
   $validator = Validator::make($request->all(), [
    'name'=> 'required|unique:tasks'
   ]);

   if ($validator->fails()) {
       return response()->json(['error'=>$validator->errors()], 422);
   }
  $task = new Task;

  $task->name = $request->name;
  $task->description = $request->description;
  $task->priority = $request->priority;
  $task->status = $request->status;

  $task->save();
  return response()->json( ["tasks" => $task] );

}
} 
   
   
   
//     $taskName = $request['name'];
//     if (!isset($taskName)) {
//         return "Debe incluir el nombre";
//     }
//     return $request;
//    }

