<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::paginate(10);
       
        return view('dashboard', compact('posts'));
    }

    public function blog_view(BlogPost $blogPost)
    {
        $blog = $blogPost;
        $user = User::where('role', 'Super Admin')->first();
        $comments = Comment::where('on_blog_post', $blog->id)->get(); 
       
       
        return view('blog_view', compact('blog','user','comments'));
    }

    public function like(BlogPost $blogPost){
        
     
        $likes = $blogPost->likes ;
        $new = $likes + 1 ;
        
        $blogPost->likes = $new;
        $blogPost->save();

        return redirect()->back();
    }

    public function blog()
    {
        $blogs = BlogPost::paginate(3);
        
        return view('blog' ,compact('blogs'));
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
            'image' => ['required'],
            'highlight' => ['required'],
            
        ]);
        
      

        
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }

            $duplicate = BlogPost::where('title', $request->input('title'))->first();
        if ($duplicate) {
            return back()->withErrors('Title already exists.')->withInput();
        }   

        $blog = new BlogPost();
        $blog->user_id = Auth::id();
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->highlight = $request->input('highlight');
        $blog->image = $filename;
        $blog->save();
        
        return back()->with('done', 'post created succesfully');
       
        
    }

    public function show(BlogPost $blogPost)
    {

        $post = BlogPost::where('id',$blogPost->id)->first();

       
        if(!$post)
        {
        return back()->withErrors('requested page not found');
        }
        $comments = $post->comments;
        return view('admin.posts.view')->withPost($post)->withComments($comments);
    }
    

    
    public function edit(BlogPost $blogPost)
    {
      
        $post = BlogPost::where('id',$blogPost->id)->first();

        return view('admin.posts.edit')->withPost($post);
        
        
    }

    
    public function update(Request $request, BlogPost $blogPost)
    {

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }

        $blog = BlogPost::where('id',$blogPost->id)->first();
        $blog->user_id = Auth::id();
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->highlight = $request->input('highlight');
        if($request->file('image')){
            $blog->image = $filename;
        }
        $blog->save();

        return back()->with('success', 'Post updated');
        
    }

    
    public function destroy(BlogPost $blogPost)
    {
        
        $blogPost->delete();

        return back()->with('success', 'Post Deleted');
        
    }
}