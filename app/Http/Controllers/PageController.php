<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use App\Models\Event;
use App\Models\BlogPost;
use App\Mail\NewVolunteer;
use App\Models\Subscriber;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
        
        $causes = Cause::all();
        $events= Event::all();
        $blogs = BlogPost::latest()->take(3)->get();
        return view('index', compact('causes','blogs','events'));
    }


    public function event(){
        
       
        $events= Event::all();
      
        return view('event', compact('events'));
    }

    public function donate(){
        
        $aza = '1P6sPbXz596kS3wBYiZ83MeRCptGhbsbwx';


        $var = "bitcoin:1P6sPbXz596kS3wBYiZ83MeRCptGhbsbwx";
        $code = "<img src=\"https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$var&choe=UTF-8\" title='' style='width:300px;aliign-items:center' />";
    
        return view('donate', compact('var', 'code', 'aza'));
    }


    public function subscribe(Request $request){
        
        $validatedData = $request->validate([
            
            'email' => 'required|email',
        ]);

        $sub = new Subscriber();
        $sub->email = $request->input('email');
        $sub->status = 'Subscribed';
        $sub->save();
        
        return back()->with('done', 'You are now Subscribed');
    }


    public function contact(Request $request){
        
        $validatedData = $request->validate([
            
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'note' => 'required',
        ]);

        
       
        $data['email']= $request->input('email');
        $data['phone']= $request->input('phone');
        $data['name']= $request->input('name');
        $data['note']= $request->input('note');
        $data['address']= $request->input('address');
       
        Mail::to('support@rcicu.org')->queue(new ContactMessage($data));

        
        
        return back()->with('done', 'You message as been sent');
    }

    public function volut_new(Request $request){
        
        $validatedData = $request->validate([
            
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'file' => 'required',
            'note' => 'required',
        ]);

        if($request->file('file')){
            $file= $request->file('file');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image/files'), $filename);
            $data['file']= $filename;
          }

          $data['file']= $filename;
          $data['email']= $request->input('email');
          $data['subject']= $request->input('subject');
          $data['name']= $request->input('name');
          $data['note']= $request->input('note');
         
          Mail::to('support@rcicu.org')->queue(new NewVolunteer($data));

        
        
        return back()->with('done', 'You request as been recieved, we will contact you as soon as possible');
    }
}