<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $posts = Event::paginate(10);
       
        return view('admin.event', compact('posts'));
    }


    public function create_event(Request $request){

        $validatedData = $request->validate([
              
          'title' => 'required|string|max:26',
          'body' => 'required',
          'category' => 'required',
          
      ]);
  
  
        if($request->file('image')){
          $file= $request->file('image');
          $filename= date('YmdHi').$file->getClientOriginalName();
          $file-> move(public_path('public/Image'), $filename);
          $data['image']= $filename;
        }
  
        $blog = new Event();
         
          $blog->title = $request->input('title');
          $blog->body = $request->input('body');
          $blog->category = $request->input('category');
          $blog->image = $filename;
          $blog->save();
          
          return back()->with('done', 'Event created succesfully');
      }


      public function delete ($event){
      
      $delete = Event::find($event);
      $delete->delete();
      
      return back()->with('deleted', 'Event Deleted Succesfully');
      
      }
  
}