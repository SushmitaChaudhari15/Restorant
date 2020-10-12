<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table1;
use App\Models\Table2;
use App\Models\Table3;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;



class bookTable extends Controller
{
    
    function book1(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'people'=>'required',
            'date'=>'required',
            'time'=>'required',
            'number'=>'required',
        
        ]);
 
         $res=new Table1;
         $res->name=$request->input('name');
         $res->email=$request->input('email');
         $res->people=$request->input('people');
         $res->date=$request->input('date');
         $res->time=$request->input('time');
         $res->number=$request->input('number');
         $res->coment=$request->input('coment');

        
        $table = Table1::where('date',$request->input('date'))->where('time',$request->input('time'))->count();
        
        if($table>3){
            $request->session()->flash('msg',' Oops! The time slot is already booked! Please choose another slot');
            return redirect('/reservation1');
        } 
        else{
            $res->save();   
             $request->session()->flash('msg','Your Table is Booked! Thanks for booking');          
            return redirect('/');
        }
            
}

function book2(Request $request){

    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'people'=>'required',
        'date'=>'required',
        'time'=>'required',
        'number'=>'required',
    
    ]);

     $res=new Table2;
     $res->name=$request->input('name');
     $res->email=$request->input('email');
     $res->people=$request->input('people');
     $res->date=$request->input('date');
     $res->time=$request->input('time');
     $res->number=$request->input('number');
     $res->coment=$request->input('coment');

    
     $table = Table2::where('date',$request->input('date'))->where('time',$request->input('time'))->count();
        
     if($table>3){
         $request->session()->flash('msg',' Oops! The time slot is already booked! Please choose another slot');
         return redirect('/reservation1');
     }
     else{
         $res->save();   
          $request->session()->flash('msg','Your Table is Booked! Thanks for booking');          
         return redirect('/');
     }
         
}
function book3(Request $request){

    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'people'=>'required',
        'date'=>'required',
        'time'=>'required',
        'number'=>'required',
    
    ]);

     $res=new Table3;
     $res->name=$request->input('name');
     $res->email=$request->input('email');
     $res->people=$request->input('people');
     $res->date=$request->input('date');
     $res->time=$request->input('time');
     $res->number=$request->input('number');
     $res->coment=$request->input('coment');

         
     $table = Table3::where('date',$request->input('date'))->where('time',$request->input('time'))->count();
        
     if($table>3){
         $request->session()->flash('msg',' Oops! The time slot is already booked! Please choose another slot');
         return redirect('/reservation1');
     }
     else{
         $res->save();   
          $request->session()->flash('msg','Your Table is Booked! Thanks for booking');          
         return redirect('/');
     }
         
}

function contact(Request $request){

    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'subject'=>'required',
        'message'=>'required',
          
    ]);

     $res=new Contact;
     $res->name=$request->input('name');
     $res->email=$request->input('email');
     $res->subject=$request->input('subject');
     $res->message=$request->input('message');
     $res->save();   
     $request->session()->flash('msg','Your Message has been send');
 

    return redirect('/contact');
        
}
}