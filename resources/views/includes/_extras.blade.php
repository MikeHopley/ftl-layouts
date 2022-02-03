<div class="ship-card" 
	id="extras_{{ $ship->id }}"
	data-extras="{{ $ship->id }}"
>
		<p class="card-title">
			@if ($ship->crew->s1 == $ship->crew->s8)	
				{{ $ship->crew->s1 > 0 ? $ship->crew->s1 : "No" }} crew
			@else
				{{ $ship->crew->s1 }} &mdash; {{ $ship->crew->s8 }} crew
			@endif
			<span class="card-title-offset">
			{{ $ship->resources->hull }} &mdash; {{ $ship->resources->hull + 7 }} hull</span>
		</p>

		@include('includes._crew-and-hull-table')

		<div class="close-extras" data-crew="{{ $ship->id }}">Close</div>

</div>