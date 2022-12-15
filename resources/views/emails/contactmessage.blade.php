@component('mail::message')
This Is a message from your contact us section <br>

Name : {{ $data['name']}} <br>
Email :  {{ $data['email']}} <br>
Address:  {{ $data['address']}}<br>
Message:  {{ $data['note']}}<br>




Thanks,<br>
{{ config('app.name') }}
@endcomponent
