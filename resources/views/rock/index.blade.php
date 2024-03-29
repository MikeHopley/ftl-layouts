<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
>

<p>Rock sectors have three events that force a pirate Rock ship (<a href="https://ftl.fandom.com/wiki/Rock_pirate_fight">1</a>, <a href="https://ftl.fandom.com/wiki/Rock_pirate_fight_in_asteroid_field">2</a>, <a href="https://ftl.fandom.com/wiki/Rock_pirate_fight_near_sun">3</a>). These pirates only have Rock crew, and will never run or surrender.</p>

<p>Regular Rock ships may surrender, but they never run (except <a href="https://ftl.fandom.com/wiki/Rock_war_vessel_encounter">the Elite Assault</a>).</p>

<p>All Rock ships have Rock Hull Plating, including pirates.</p>

<x-slot name="explosives">
	<tr>
		<th><img src="/img/explosives/small_launcher.png"/></th>
		<th><img src="/img/explosives/big_launcher.png"/></th>
		<th><img src="/img/explosives/bomb_launcher.png"/></th>
	</tr>
	<tr>
		<td>Leto</td>
		<td>Hermes</td>
		<td>Small</td>
	</tr>
	<tr>
		<td><img src="/img/explosives/leto.png"/></td>
		<td><img src="/img/explosives/hermes.png"/></td>
		<td><img src="/img/explosives/small.png"/></td>
	</tr>
	<tr>
		<td>Artemis</td>
		<td>Breach</td>
		<td></td>
	</tr>
	<tr>
		<td><img src="/img/explosives/artemis.png"/></td>
		<td><img src="/img/explosives/breach.png"/></td>
		<td></td>
	</tr>
</x-slot>

<x-slot name="weapons">
	<tr>
		<td>Basic laser</td>
		<td>Burst 1</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/basic.png"/></td>
		<td><img src="/img/weapons/burst_1.png"/></td>
	</tr>

	<tr>
		<td>Burst 2</td>
		<td>Burst 3</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/burst_2.png"/></td>
		<td><img src="/img/weapons/burst_3.png"/></td>
	</tr>

	<tr>
		<td>Heavy 1</td>
		<td>Heavy 2</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/heavy_1.png"/></td>
		<td><img src="/img/weapons/heavy_2.png"/></td>
	</tr>

	<tr>
		<td>Flak 1</td>
		<td>Flak 2</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/flak_1.png"/></td>
		<td><img src="/img/weapons/flak_2.png"/></td>
	</tr>
	
	<tr>
		<td>Mini beam</td>
		<td>Halberd</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/mini.png"/></td>
		<td><img src="/img/weapons/halberd.png"/></td>
	</tr>

	<tr>
		<td>Heavy ion</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/heavy_ion.png"/></td>
	</tr>
</x-slot>

</x-ship-group-layout>