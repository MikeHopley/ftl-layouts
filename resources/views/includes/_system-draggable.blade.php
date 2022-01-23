@if($ship->hasRooms())
	<div id="systemIcon_{{ $system->id }}" 
		data-room="{{ $system->room->id }}"
		class="draggable-system system-icon {{ $system->short_name }} icon-offset_{{ $key }}"
		draggable="true"
		hidden
	></div>
@endif