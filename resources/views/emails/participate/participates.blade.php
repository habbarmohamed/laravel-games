@component('mail::message')

	<strong style="margin-left: 4em; padding: 1em; font-size: 2em">Participate Form</strong> <br><br>
	<strong>Subject :</strong> GF Tournament <br>
	<strong>First Name :</strong> {{ $participate['first'] }} <br>
	<strong>Last Name :</strong> {{ $participate['last'] }} <br>
	<strong>Email :</strong> {{ $participate['email'] }} <br>
	<strong>Status of Tournament :</strong> {{ $participate['status'] }} <br>
	<strong>Game :</strong> @foreach($participate['game_tour'] as $service)
    	{{ $service}}
	@endforeach  <br>
	<strong>Stay Overight :</strong> {{ $participate['stay_over'] }} <br>
	<strong>Message :</strong> <br> <span style="margin-left: 2em;">{{ $participate['comment'] }}</span>


{{ config('app.name') }}
@endcomponent
