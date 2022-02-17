<div class="ship-card js_extras" 
	id="extras_{{ $ship->id }}"
	data-extras="{{ $ship->id }}"
	hidden
>
	<p class="card-title">Sector range
	<span class="card-title-offset">{{ $ship->sector_min_special }} &mdash; {{ $ship->sector_max_special }}</span></p>

	@if($ship->appearsEarly())
		@if($ship->name == 'Mantis Bomber')
			<p class="regular">Normally only in sector {{ $ship->sector_min }}+, but can be 
			sector {{ $ship->sector_min_special }} in the <a href="https://ftl.fandom.com/wiki/Mantis_Ship-Collectors">Ship Collectors</a> event.
			</p>
		@else
			<p class="regular">Normally only in sector {{ $ship->sector_min }}+, but can be 
			sector {{ $ship->sector_min_special }} in the <a href="https://ftl.fandom.com/wiki/Drifting_Refugee_Ship_Distress">one event</a>.
			</p>
		@endif
	@endif
	
	@if($ship->appearsLate())
		<p class="regular">In sector 8, can only appear in <a href="https://ftl.fandom.com/wiki/Brutal_Exchange_Between_Several_Ships">one event</a>.</p>
	@endif
	
	@if($ship->name == 'Rebel Elite Fighter')
		<p>Normally only fought at fleet-controlled beacons, but can be encountered in the <a href="https://ftl.fandom.com/wiki/Encrypted_Federation_Signal">Encrypted Federation Signal</a> quest.</p>
	@endif

	@if($ship->name == 'Rebel Elite Invader')
		<p>Only fought at fleet-controlled beacons.</p>
	@endif

	@if($ship->name == 'Rock Assault (Elite)')
		<p>Only in the <a href="https://ftl.fandom.com/wiki/Rock_War_Vessel_Encounter">Rock Homeworlds Quest</a>.</p>
	@endif
	<br>

	<p class="card-title">Missiles
	<span class="card-title-offset">{{ $ship->resources->missiles }}</span></p>

	@if($ship->resources->drones)
		<p class="card-title">Drone parts
		<span class="card-title-offset">{{ $ship->resources->drones }}</span></p>
	@endif
	@if($ship->increasesDrones())
		<p>Drone parts are increased to double the number of drones.
		With {{ $ship->resources->max_drones }} drones, 
		this ship gets {{ $ship->maxDrones() }} parts.</p>
	@endif
</div>