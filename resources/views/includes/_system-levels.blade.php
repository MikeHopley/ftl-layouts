<div class="ship-card js_system-levels" 
	id="system_{{ $system->id }}" 
	data-systemship="{{ $ship->id }}"
	hidden
>
	<p class="card-title">{{ ucfirst($system->name) }}
		<span class="card-title-offset">
			@if ($system->isFixed())
				Level {{ $system->min() }}
			@else
				{{ $system->min() }} &mdash; {{ $system->max() }}
			@endif
	</p>

	@if($system->optional)
		<p>Optional system</p>
	@endif

	@if ($system->isFixed())
		<p>Same level in all sectors</p>
	@elseif ($system->isFixedRange())
		<p>Same levels in all sectors</p>
	@else
		@include('includes._system-levels-table')
	@endif

	<div class="close-system" data-system="{{ $system->id }}">Close</div>
</div>

<div id="systemTray_{{ $system->id }}" 
	data-system="{{ $system->id }}"
	data-ship="{{ $ship->id }}"
	class="system-icon icon-offset_{{ $key }} invisible-icon">
</div>

<div id="systemIcon_{{ $system->id }}"	hidden
	class="draggable-system system-icon {{ $system->short_name }} icon-offset_{{ $key }}"
	draggable="true"	
>
</div>