<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Enemy ship information for FTL"/>
		<title>{{ $title }}</title>
		<link rel="stylesheet" href="/css/main.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	</head>
	<body class="homepage flow">
		<div>
			
				
		<p class="breadcrumb homepage-crumbs"><a href="https://mikehopley.github.io/Mikes-FTL-stuff/">Mike’s FTL stuff</a> > Enemy ships</p>
						
		<h1 class="homepage-title">{{ $title }}</h1>
		<h2 class="homepage-sub">Info is correct for Hard difficulty only</h2>
		
		<div class="subtitle-nav">
			<a href="/" class="nav-button">Search the ships</a>
			<a href="/" class="nav-button">Explanatory video</a>
		</div>

			<div class="flow">
				{{ $slot }}
			</div>
		</div>
	</body>
</html>