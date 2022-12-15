<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>

    </x-slot>



    <form action="{{ route('update_post', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif



        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="container">

            <div class="input-group mt-3 mb-3">
                <label for="title" class="form-label">Blog image</label>
                <img src="../public/image/{{$post->image}}" alt="post image">
                
            </div>
            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="post title here" value="{{$post->title}}">
            </div>

            <div class="form-floating mb-3">
                
                <textarea class="form-control" placeholder="post text here" id="floatingTextarea2"
                    style="height: 300px" name="body" >{{$post->body}}</textarea>

            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Highlight</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="highlight"
                    placeholder="post highlight here" value="{{$post->highlight}}">
            </div>

            <div class="input-group mb-3">
                <label for="inputGroupFile02" class="">Change Image</label><hr>
                <input type="file" class="form-control" id="inputGroupFile02" name="image" value="{{$post->image}}">
                
            </div>

            <button type="submit" class="btn btn-primary mb-3">Edit Post</button>
        </div>


    </form>
</x-app-layout>
