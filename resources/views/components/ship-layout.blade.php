<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="{{ $title }} ship layouts in FTL"/>
	<title>{{ $title }} ships | Enemies in FTL</title>
	<link rel="stylesheet" href="/css/main.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"/>
</head>
<body>

<div class="wrapper">

	<div class="sidebar">
		<h2>Controls</h2>

		<button id="toggleRooms">Hide rooms</button>

		<button id="toggleSlots">Show weapon slots</button>

		<div class="cluster">
			@if ($ship->type == 'auto')
				<button disabled>No crew</button>
			@else
				<button id="toggleCrew">Show crew</button>
			@endif
			<button id="toggleHull">Show hull</button>
		</div>
		
		<button id="toggleExtras">Show extra info</button>

		<button id="toggleTest">Test yourself!</button>
	</div>

	<div class="content-wrapper">

		<p class="guide"><a href="https://mikehopley.github.io/Mikes-FTL-stuff/">Mike’s FTL stuff</a> > 
		<a href="/">Enemy ships</a> > {{ $title }}</p>

		<div class="flow content">
			{{ $slot }}
			
			<div class="ship-grid not-flow">
				@include('includes._ship')
			</div>
		</div>
	</div>

</div>

<script src="/js/functions.js"></script>

</body>
</html>