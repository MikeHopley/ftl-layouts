<div class="not-flow ship-item" @if($ship->is_pirate && $groupLayout == true) hidden @endif>
	<h2 class="ship-name">{{ $ship->name }}</h2>
	<div class="image-box">
		<div id="boarders_ship-{{ $ship->id }}">
			<div class="zoltan-boarding" id="zoltan_ship-{{ $ship->id }}" hidden>
				<div class="zoltan-sprite"	id="ship-{{ $ship->id }}_zoltan-1"></div>
			</div>
			<div class="crystal-boarding" id="crystal_ship-{{ $ship->id }}" hidden>
				<div class="boarding-line">
					<div class="crystal-sprite sprite-1"
						id="ship-{{ $ship->id }}_crystal-1"></div>
					<div class="crystal-sprite sprite-2"
						id="ship-{{ $ship->id }}_crystal-2"></div>
				</div>
				<div class="boarding-line">
					<div class="crystal-sprite sprite-3"
						id="ship-{{ $ship->id }}_crystal-3"></div>
					<div class="crystal-sprite sprite-4"
						id="ship-{{ $ship->id }}_crystal-4"></div>
				</div>
			</div>
		</div>

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
			<!-- This is for room numbers -->
			<div hidden
				id="room_number_{{ $room->id }}"
				class="drop-target room-number js_room-numbers"
				data-shape="{{ $room->shape }}"
				data-origin_x="{{ $room->origin_x }}"
				data-origin_y="{{ $room->origin_y }}"
				data-overflow="{{ $room->overflow_room }}"
				data-overflow_x="{{ $room->overflow_x }}"
				data-overflow_y="{{ $room->overflow_y }}"
				data-room="{{ $room->number }}"
				data-ship="{{ $ship->id }}"
			>
		
				<div class="system-block">{{ $room->number }}</div>
			</div>

	
			<!-- This is for boarding overflow -->
			<div hidden
				id="room_number_{{ $room->id }}_boarding"
				class="drop-target room-number js_room-boarding"
				data-shape="{{ $room->shape }}"
				data-origin_x="{{ $room->origin_x }}"
				data-origin_y="{{ $room->origin_y }}"
				data-overflow="{{ $room->overflow_room }}"
				data-overflow_x="{{ $room->overflow_x }}"
				data-overflow_y="{{ $room->overflow_y }}"
				data-room="{{ $room->number }}"
				data-ship="{{ $ship->id }}"
			>
			</div>

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
				
				@if($room->system->optional)
					<!-- This is for highlighting optional systems -->
					<div
						class="drop-target optional-overlay js_optional-overlay"
						data-shape="{{ $room->shape }}"
						data-origin_x="{{ $room->origin_x }}"
						data-origin_y="{{ $room->origin_y }}"
						data-ship="{{ $ship->id }}"
					>
					</div>
				@endif

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