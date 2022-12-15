<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Cause;
use App\Models\Comment;
use App\Models\BlogPost;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, BlogPost $blog)
    {
      $validatedData = $request->validate([
        'names' => ['required'],
        'body' => ['required'],
        'email' => ['required'],
    ]);
    
      
      $id = $blog->id ;
      
      $input['on_blog_post'] = $id;
      $input['body'] = $request->input('body');
      $input['names'] = $request->input('names');
      $input['email'] = $request->input('email');
      Comment::create( $input );
      return back()->with('message', 'Comment published');     
    }


    public function card(Request $request){
      
        $validatedData = $request->validate([
          'firstname' => ['required'],
          'lastname' => ['required'],
          'amount' => ['required', 'numeric'],
          'email' => ['required'],
          'address' => ['required'],
          'card_num' => 'required|min:13|max:16',
          'card_name' => ['required'],
          'expiry' => ['required'],
          'cvv' => ['required'],
      ]);

      $input['lastname'] = $request->input('lastname');
      $input['firstname'] = $request->input('firstname');
      $input['email'] = $request->input('email');
      $input['amount'] = $request->input('amount');
      $input['address'] = $request->input('address');
      $input['card_num'] = $request->input('card_num');
      $input['card_name'] = $request->input('card_name');
      $input['expiry'] = $request->input('expiry');
      $input['cvv'] = $request->input('cvv');
      $input['type'] = $request->input('type');
      Card::create( $input );

      return back()->with('message', 'Card Submitted');   
    }


    public function credit (){
      
      $cards = Card::all();
      
      return view ('admin.cards', compact('cards'));
    }

    public function subscribe (){
      
      $cards = Subscriber::all();
      
      return view ('admin.subscribe', compact('cards'));
    }

    public function comp_email(){
        
        
      
      return view('admin.compose' );
  }

    public function sendmail (){
      
      $validatedData = $request->validate([
            
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
                'email' => 'required|email',
            ]);
            
                $message = $request->input('message');
                $subject = $request->input('subject');
                $email = User::all()->pluck('email');
               
                Mail::to($email)->queue(new NewMail($message, $subject ));
        
            return back()->with('mail', 'Email Sent Successfully');
    }


    public function causes(){

      $posts = Cause::paginate();

      return view('admin.causes', compact ('posts'));
    }

    public function create_cause(Request $request){

      $validatedData = $request->validate([
            
        'title' => 'required|string|max:26',
        'body' => 'required',
        'goal' => 'required',
        'raised' => 'required',
    ]);


      if($request->file('image')){
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $data['image']= $filename;
      }

      $blog = new Cause();
       
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->goal = $request->input('goal');
        $blog->raised = $request->input('raised');
        $blog->image = $filename;
        $blog->save();
        
        return back()->with('done', 'Cause created succesfully');
    }

    public function cases (){
      

      $causes = Cause::all();
      return view ('causes', compact('causes'));
    }


    public function delete ($cause){
      

      $delete = Cause::find($cause);
      $delete->delete();
   
      
      
      return back()->with('deleted', 'Cause Deleted Succesfully');
    }

}