<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\SubTask;
use Illuminate\Support\Facades\DB;



class TodoController extends Controller
{
    public function index(){
        $todos = Todo::orderBy('completed')->get();
        return view('todo.index')->with(['todos' => $todos]);
    }

    public function create(){
        return view('todo.create');
    }

    public function upload(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $todo = $request->title;
        Todo::create(['title' => $todo]);
        return redirect()->back()->with('success', "Task created successfully!");
    }

    public function edit($id){
        $todo = Todo::find($id);
        return view('todo.edit')->with(['id' => $id, 'todo' => $todo]);
    }

      public function subedit($id){
        $todo = Todo::find($id);
        return view('todo.sub_task')->with(['id' => $id, 'todo' => $todo]);
    }

      public function sub_view($id){

        $todo = SubTask::find($id);

        $values=$todo->field_name;


       $Avalue = explode (",", $values); 
       //dd($Avalue);

        return view('todo.edit_and_view')->with(['id' => $id, 'todo' => $todo,'Avalue' => $Avalue]);
    }

     public function subupload(Request $request){

       // dd($request->task_id);

        $field_name=array();
        $data=new SubTask;
       
       foreach($request['field_name'] as $key => $n)
             { 
                $field_name[$key] = $request->field_name[$key ];
             }
            
            $data->task_id=$request->task_id;
            $data->field_name=implode(",",$field_name);
            $data->save();
        
        return redirect()->back()->with('success', "SubTask created successfully!");
    }

     public function subupdate(Request $request){

       // dd($request);

        $field_name=array();
       // $data=new SubTask;
       
       foreach($request['field_name'] as $key => $n)
             { 
                $field_name[$key] = $request->field_name[$key ];
             }
            
           $data2=array(
                        'task_id'       =>$request->task_id,
                        'field_name'    => implode(",",$field_name)
                                
                                 );
                                
         DB::table('tbl_subtask')->where('task_id',$request->task_id)->update($data2);
        
        return redirect()->back()->with('success', "SubTask Updated successfully!");
    }


    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $updateTodo = Todo::find($request->id);
        $updateTodo->update(['title' => $request->title]);
        return redirect('/index')->with('success', "Task updated successfully!");
    }

    public function completed($id){
        $todo = Todo::find($id);
        if ($todo->completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', "Task marked as incomplete!");
        }else {
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', "Task marked as complete!");
        }
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success', "Task deleted successfully!"); 
    }

     public function sub_delete($id){
        $todo = SubTask::find($id);
        $todo->delete();
        return redirect()->back()->with('success', "SubTask deleted successfully!"); 
    }
}
