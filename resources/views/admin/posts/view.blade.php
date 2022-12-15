<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Post') }}
        </h2>

    </x-slot>



    

        <div class="container">

            <div class="input-group mt-3 mb-3">
                <label for="title" class="form-label">Blog image</label>
                <img src="../public/image/{{$post->image}}" alt="post image">
                
            </div>


            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="post title here" value="{{$post->title}}">
            </div>

            <div class=" mb-3">
                <label for="exampleInputPassword1" class="form-label">Post Content</label>
                <input type="text" class="form-control" name="title" placeholder="post title here" value="{{$post->body}}">

            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Highlight</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="highlight"
                    placeholder="post highlight here" value="{{$post->highlight}}">
            </div>

           

           
        </div>


    
</x-app-layout>
