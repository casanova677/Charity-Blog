<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Post') }}
        </h2>

    </x-slot>



    <form action="/new_post/{$id}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (session('done'))
            <div class="alert alert-success">
                {{ session('done') }}
            </div>
        @endif



        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="container">
            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="post title here">
            </div>

            <div class="form-floating mb-3">
                
                <textarea class="form-control" placeholder="post text here" id="floatingTextarea2"
                    style="height: 300px" name="body"></textarea>

            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Highlight</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="highlight"
                    placeholder="post highlight here">
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="image">
               
            </div>

            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>


    </form>
</x-app-layout>
