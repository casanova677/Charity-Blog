<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container mt-3">

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create New Event') }}
            </h2>
        </x-slot>
        <form action="/create_event" method="POST" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" name="title" placeholder="Event title here">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Body</label>
                    <input type="text" class="form-control" name="body" placeholder="Event body here">

                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Category</label>
                    <input type="text" class="form-control" name="category" placeholder="Category">

                </div>


                <div class="input-group mt-3 mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="image">

                </div>

                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>


        </form>





        <table class="table table-bordered mt-3 mb-3">
            <thead>
                <tr>

                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Category</th>
                    <th scope="col">Created on</th>
                    <th scope="col" colspan="1"></th>
                </tr>
            </thead>
            <tbody>
                @if (count($posts) == 0)
                    <td class="text-center" colspan="5">No Events as this time
                    <td>
                    @else
                        @foreach ($posts as $post)
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->created_at->format('M d,Y \a\t h:i a') }}</td>

                    <td class="text-end">
                        <a href="{{ route('delete_event', $post) }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> Delete</a>
                    </td>
            </tbody>
            @endforeach
            @endif
            {{ $posts->links() }}
        </table>
    </div>


</x-app-layout>
