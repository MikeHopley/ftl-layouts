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

		<button id="toggleSlots">Show weapon slots</button>

		<div class="cluster">
			@if ($title == 'Automated')
				<button disabled>No crew</button>
			@else
				<button id="toggleCrew">Show crew</button>
			@endif
			<button id="toggleHull">Show hull</button>
		</div>
		
		<button id="toggleTest">Test yourself!</button>
	</div>

	<div class="content-wrapper">

		<p class="guide"><a href="https://mikehopley.github.io/Mikes-FTL-stuff/">Mike’s FTL stuff</a> > 
		<a href="/">Enemy ships</a> > {{ $title }}</p>

		<h1>{{ $title }} ships</h1>

		<div class="flow content">
			{{ $slot }}
			
			<div class="ship-grid not-flow">
				@foreach ($ships as $ship)
					@include('includes._ship')

					@if($pirated && !$ship->pirated && !$ship->is_pirate)
						<div class="not-flow ship-item" hidden>
							<h2 class="ship-name">{{ $ship->name }}</h2>
							<div class="no-pirate">
								<p>No pirate version</p>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>

</div>

<script src="/js/functions.js"></script>

</body>
</html>