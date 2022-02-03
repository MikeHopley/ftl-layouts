<div class="not-flow ship-item" @if($ship->is_pirate) hidden @endif>
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


		@if ($ship->hasRooms())
			@foreach ($ship->rooms as $room)			
				<div hidden
					class="drop-target transparent"
					data-shape="{{ $room->shape }}"
					data-origin_x="{{ $room->origin_x }}"
					data-origin_y="{{ $room->origin_y }}"
					id="room_{{ $room->id }}"
				>
					<div class="droppable-area"
					data-room="{{ $room->id }}"></div>						
				</div>

				<!-- 
					Not actually a drop target, just reusing the styles.
				-->
				<div hidden
					id="room_block_{{ $room->id }}"
					class="drop-target transparent with-block"
					data-shape="{{ $room->shape }}"
					data-origin_x="{{ $room->origin_x }}"
					data-origin_y="{{ $room->origin_y }}"
				>
					<div class="system-block"></div>			
				</div>
			@endforeach
		@endif

		@foreach ($ship->systems as $key => $system)
			@include('includes._system-levels')
			@include('includes._system-draggable')
		@endforeach

		@include('includes._extras')
	</div>
</div>