<div class="ship-card js_hull" 
	id="extras_{{ $ship->id }}"
	data-extras="{{ $ship->id }}"
	hidden
>
		<p class="card-title">
			{{ $ship->hullMin() }} &mdash; {{ $ship->hullMax() }} hull
		</p>

		@include('includes._hull-table')
</div>