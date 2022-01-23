<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="{{ $title }} ship layouts in FTL"/>
	<title>{{ $title }} ships | Learn your layouts</title>
	<link rel="stylesheet" href="/css/main.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"/>
</head>
<body>

<div class="wrapper">

<div class="sidebar">
	<h2>Controls</h2>

	<button id="toggleRooms">Hide rooms</button>

	@if (!$pirated)
		<button disabled>No pirate versions</button>
	@else
		<button id="togglePirate">Show pirate layouts</button>
	@endif

	<button id="toggleTest">Test yourself!</button>
</div>

<div class="content-wrapper">

	<p class="guide"><a href="https://mikehopley.github.io/Mikes-FTL-stuff/">Mike’s FTL stuff</a> > <a href="/">Enemy ships</a> > {{ $title }}</p>

	<h1>{{ $title }} ships</h1>

	<div class="flow content">
		{{ $slot }}

		
		<div class="ship-grid not-flow">
			@foreach ($ships as $ship)
				<div class="not-flow ship-item">
					<h2 class="ship-name">{{ $ship->name }}</h2>
					<div class="image-box">
						<div class="rooms" hidden>
							<img src="/img/{{ $ship->type }}/{{ $ship->class }}_1.png"
							draggable="false"/>
						</div>
						<div class="rooms">
							<img src="/img/{{ $ship->type }}/{{ $ship->class }}_2.png"
							draggable="false"/>
						</div>

						@if ($ship->hasRooms())
							@foreach ($ship->rooms as $room)			
<div 
	class="drop-target "
	data-shape="{{ $room->shape }}"
	data-origin_x="{{ $room->origin_x }}"
	data-origin_y="{{ $room->origin_y }}"
	id="room_{{ $room->id }}"
>	
								<!-- <div hidden
									class="drop-target transparent"
									data-shape="{{ $room->shape }}"
									data-origin_x="{{ $room->origin_x }}"
									data-origin_y="{{ $room->origin_y }}"
									id="room_{{ $room->id }}"
								> -->
									<div class="droppable-area"
									data-room="{{ $room->id }}"></div>						
								</div>

								<!-- Not actually a drop target, just resuing the styles -->
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
							
					</div>
				</div>

<!--
	For drag-and-drop:	
	https://www.javascripttutorial.net/web-apis/javascript-drag-and-drop/
-->


				@unless (!$pirated)
					<div class="not-flow ship-item" hidden>
						<h2 class="ship-name">{{ $ship->name }}</h2>
						@if (!$ship->pirated)
							<div class="no-pirate">
								<p>No pirate version</p>
							</div>
						@else
							<div class="rooms" hidden>
								<img src="/img/{{ $ship->type }}/pirate/{{ $ship->class }}_1.png" draggable="false"/>
							</div>
							<div class="rooms">
								<img src="/img/{{ $ship->type }}/pirate/{{ $ship->class }}_2.png" draggable="false"/>
							</div>
						@endif
					</div>
				@endunless
			@endforeach

		</div>
	</div>

</div>

</div>

<script src="/js/functions.js"></script>

</body>
</html>