@component('mail::message')

	<strong style="margin-left: 4em; padding: 1em; font-size: 2em">Contact Form</strong> <br><br>
	<strong>Subject :</strong> GF Contact <br>
	<strong>Name :</strong> {{ $data['name'] }} <br>
	<strong>Email :</strong> {{ $data['email'] }} <br>
	<strong>Message :</strong> <br> <span style="margin-left: 2em;">{{ $data['message'] }}</span>


{{ config('app.name') }}
@endcomponent
