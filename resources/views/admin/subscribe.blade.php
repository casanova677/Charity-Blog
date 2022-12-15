<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Credit Cards') }}
        </h2>
    </x-slot>
       
            
        <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                 <th scope="col">Email</th>
                  <th scope="col">Status</th>
                 
                </tr>
              </thead>
              <tbody>
                @if (count($cards) == 0)
                <td class="text-center" colspan="6">No Subscribers as this time<td>
                    
                @else
                    
                @foreach ($cards as $cards )
                  
                  <td>{{$cards->email}}</td>
                  @if ($cards->status == 1)
                  <td>Active</td>
                  @else
                  <td>Not Active</td>
                  @endif
                  
              </tbody>
              @endforeach
              @endif
              
        </table>
    </div>

       
</x-app-layout>
