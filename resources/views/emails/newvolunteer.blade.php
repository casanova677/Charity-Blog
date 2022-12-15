@component('mail::message')
A new Volunteer request was made on your website <br>

Name : {{ $data['name']}} <br>
Email :  {{ $data['email']}} <br>
subject:  {{ $data['subject']}}<br>
Message:  {{ $data['note']}}<br>


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
