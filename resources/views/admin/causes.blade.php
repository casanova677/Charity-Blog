<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Causes') }}
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
                    {{ __('Create New Cause') }}
                </h2>
            </x-slot>
            <form action="/create_cause" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="title" placeholder="cause title here">
                    </div>
        
                    <div class="mb-3">
                        <label for="title" class="form-label">Body</label>
                        <input type="text" class="form-control" name="body" placeholder="cause body here">
        
                    </div>
        
                  
                        <div class="row align-items-start">
                          <div class="col">
                            <label for="exampleInputPassword1" class="form-label">Goal</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="goal"
                            placeholder="Goal in Dollars" >
                          </div>
                          
                          <div class="col">
                            <label for="exampleInputPassword1" class="form-label">Raised</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="raised"
                                placeholder="Raised in Dollars">
                          </div>
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
                  <th scope="col">body</th>
                  <th scope="col">Goal</th>
                  <th scope="col">Raised</th>
                  <th scope="col">Created on</th>
                  <th scope="col" colspan="1"></th>
                </tr>
              </thead>
              <tbody>
                @if (count($posts) == 0)
                <td class="text-center" colspan="5">No Causes as this time<td>
                    
                @else
                    
                @foreach ($posts as $post )
                  
                  <td>{{$post->title}}</td>
                  <td>{{($post->body)}}</td>
                  <td>${{$post->goal}}</td>
                  <td>${{$post->raised}}</td>
                  <td>{{$post->created_at->format('M d,Y \a\t h:i a')}}</td>
                 
                  <td class="text-end">
                    <a href="{{ route('delete_cause', $post) }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i> Delete</a>
                  </td>
              </tbody>
              @endforeach
              @endif
              {{ $posts->links() }}
        </table>
    </div>

       
</x-app-layout>
