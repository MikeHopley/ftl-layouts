<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
	:hasDrones="true"
>

<p>Zoltan ships never run. They also never surrender, except for the <a href="https://ftl.fandom.com/wiki/Zoltan_science_ship">science vessel</a> and the <a href="https://ftl.fandom.com/wiki/Unarmed_Zoltan_transport">unarmed transport</a>.</p>

<p>Pirates are different, and may run or surrender.</p>

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
		<td></td>
		<td>Ion</td>
	</tr>
	<tr>
		<td><img src="/img/explosives/artemis.png"/></td>
		<td></td>
		<td><img src="/img/explosives/ion.png"/></td>
	</tr>
</x-slot>

<x-slot name="drones">
	<tr>
		<td>Combat 1</td>
		<td>Beam 1</td>
	</tr>
	<tr>
		<td><img src="/img/drones/combat1.png"/></td>
		<td><img src="/img/drones/beam1.png"/></td>
	</tr>
	<tr>
		<td>Beam 2</td>
		<td>Fire</td>
	</tr>
	<tr>
		<td><img src="/img/drones/beam2.png"/></td>
		<td><img src="/img/drones/fire.png"/></td>
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
		<td>Chain laser</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/chain.png"/></td>
	</tr>

	<tr>
		<td>Flak 1</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/flak_1.png"/></td>
	</tr>

	<tr>
		<td>Mini beam</td>
		<td>Pike</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/mini.png"/></td>
		<td><img src="/img/weapons/pike.png"/></td>
	</tr>

	<tr>
		<td>Halberd</td>
		<td>Glaive</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/halberd.png"/></td>
		<td><img src="/img/weapons/glaive.png"/></td>
	</tr>

	<tr>
		<td>Hull beam</td>
		<td>Fire beam</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/hull_beam.png"/></td>
		<td><img src="/img/weapons/fire_beam.png"/></td>
	</tr>
	
	<tr>
		<td>Ion 1</td>
		<td>Ion stunner</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/ion_1.png"/></td>
		<td><img src="/img/weapons/ion_stunner.png"/></td>
	</tr>

	<tr>
		<td>Heavy ion</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/heavy_ion.png"/></td>
	</tr>
</x-slot>

</x-ship-group-layout>