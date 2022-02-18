<div class="not-flow ship-item" @if($ship->is_pirate && $groupLayout == true) hidden @endif>
	<h2 class="ship-name">{{ $ship->name }}</h2>
	<div class="image-box">
		<div class="image_hull" hidden>
			<img src="/img/{{ $ship->type }}/
			{{ $ship->is_pirate ? '/pirate/' : '' }}
			{{ $ship->class }}_1.png"
			draggable="false"/>
		</div>
		<div class="image_rooms">
			<img src="/img/{{ $ship->type }}/
			{{ $ship->is_pirate ? '/pirate/' : '' }}
			{{ $ship->class }}_2.png"
			draggable="false"/>
		</div>
		<div class="image_slots" hidden>
			<img src="/img/{{ $ship->type }}/
			{{ $ship->is_pirate ? '/pirate/' : '' }}
			{{ $ship->class }}_slots.png"
			draggable="false"/>
		</div>
		
		@foreach ($ship->rooms as $room)
			<!-- This is the drop target for systems test -->
			<div hidden
				class="drop-target transparent js_system-test"
				data-shape="{{ $room->shape }}"
				data-origin_x="{{ $room->origin_x }}"
				data-origin_y="{{ $room->origin_y }}"
				id="room_{{ $room->id }}"
			>
				<div class="droppable-area"
				data-room="{{ $room->id }}"></div>						
			</div>

			<!-- This is for the grey blocks that obscure system icons -->
			<div hidden
				id="room_block_{{ $room->id }}"
				class="drop-target transparent with-block js_system-test"
				data-shape="{{ $room->shape }}"
				data-origin_x="{{ $room->origin_x }}"
				data-origin_y="{{ $room->origin_y }}"
			>
				<div class="system-block"></div>			
			</div>

			@if($room->system)
				<!-- This is a link for getting system info cards -->
				<div 
					class="drop-target transparent js_system-links"
					data-system="{{ $room->system->id }}"
					data-ship="{{ $ship->id }}"
					data-shape="{{ $room->shape }}"
					data-origin_x="{{ $room->origin_x }}"
					data-origin_y="{{ $room->origin_y }}"
					id="room_{{ $room->id }}"
				>
					<div class="system-hover"
					data-room="{{ $room->id }}"></div>						
				</div>
			@endif
		@endforeach
		

		@foreach ($ship->systems as $key => $system)
			@include('includes._system-levels')
			@include('includes._system-draggable')
		@endforeach

		@include('includes._crew')
		@include('includes._hull')
		@include('includes._extras')
	</div>
</div>