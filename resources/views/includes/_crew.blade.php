<div class="ship-card js_crew" 
	id="extras_{{ $ship->id }}"
	data-extras="{{ $ship->id }}"
	hidden
>
		<p class="card-title">
			@if (!$ship->hasCrew())	
				No crew
			@elseif ($ship->fixedCrew())
				{{ $ship->crewMin() }} crew, always
			@else
				{{ $ship->crewMin() }} &mdash; {{ $ship->crewMax() }} crew
			@endif
		</p>

		@if($ship->hasCrew() && !$ship->fixedCrew() )
			@include('includes._crew-table')
		@endif
</div>