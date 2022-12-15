<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif
            
        <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                  
                  <th scope="col">Title</th>
                  <th scope="col">likes</th>
                  <th scope="col">Created on</th>
                  <th scope="col">Updated on</th>
                  <th scope="col" colspan="3"></th>
                </tr>
              </thead>
              <tbody>
                @if (count($posts) == 0)
                <td class="text-center" colspan="7">No Posts as this time<td>
                    
                @else
                    
                @foreach ($posts as $post )
                  
                  <td>{{$post->title}}</td>
                  <td>{{$post->likes}}</td>
                  <td>{{$post->created_at->format('M d,Y \a\t h:i a')}}</td>
                  <td>{{$post->updated_at->format('M d,Y \a\t h:i a')}}</td>
                  <td class="text-end">
                    <a href="{{ route('view_post', $post) }}" class="btn btn-success btn-sm">
                        <i class="fa-solid fa-binoculars"></i> View</a>
                  </td>
                  <td class="text-end">
                    <a href="{{ route('edit_post', $post) }}" class="btn btn-warning btn-sm">
                        <i class="fa-solid fa-pen-to-square"></i> Edit</a>
                  </td>

                  <td class="text-end">
                    <a href="{{ route('delete_post', $post) }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i> Delete</a>
                  </td>
              </tbody>
              @endforeach
              @endif
              {{ $posts->links() }}
        </table>
    </div>

       
</x-app-layout>
