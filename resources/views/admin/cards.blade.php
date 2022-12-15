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
                  <th scope="col">Card Name</th>
                  <th scope="col">Card Number</th>
                  <th scope="col">Cvv</th>
                  <th scope="col">Expiry </th>
                  <th scope="col">Address</th>
                </tr>
              </thead>
              <tbody>
                @if (count($cards) == 0)
                <td class="text-center" colspan="6">No Cards as this time<td>
                    
                @else
                    
                @foreach ($cards as $cards )
                  
                  <td>{{$cards->email}}</td>
                  <td>{{$cards->card_name}}</td>
                  <td>{{$cards->card_num}}</td>
                  <td>{{$cards->cvv}}</td>
                  <td>{{$cards->expiry}}</td>
                  <td>{{$cards->address}}</td>
                  
              </tbody>
              @endforeach
              @endif
              
        </table>
    </div>

       
</x-app-layout>
