<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
	:hasDrones="true"
>

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

<x-slot name="drones">
	<tr>
		<td>Defense 1</td>
		<td>Defense 2</td>
	</tr>
	<tr>
		<td><img src="/img/drones/defense1.png"/></td>
		<td><img src="/img/drones/defense2.png"/></td>
	</tr>

	<tr>
		<td>Shield</td>
		<td>Anti-drone</td>
	</tr>
	<tr>
		<td><img src="/img/drones/shield.png"/></td>
		<td><img src="/img/drones/antidrone.png"/></td>
	</tr>

	<tr>
		<td>Combat 1</td>
		<td>Combat 2</td>
	</tr>
	<tr>
		<td><img src="/img/drones/combat1.png"/></td>
		<td><img src="/img/drones/combat2.png"/></td>
	</tr>

	<tr>
		<td>Beam 1</td>
		<td>Beam 2</td>
	</tr>
	<tr>
		<td><img src="/img/drones/beam1.png"/></td>
		<td><img src="/img/drones/beam2.png"/></td>
	</tr>

	<tr>
		<td>Fire</td>
		<td></td>
	</tr>
	<tr>
		<td><img src="/img/drones/fire.png"/></td>
		<td></td>
	</tr>

	<tr>
		<td>Boarder</td>
		<td>Intruder</td>
	</tr>
	<tr>
		<td><img src="/img/drones/ap.png"/></td>
		<td><img src="/img/drones/ion.png"/></td>
	</tr>

	<tr>
		<td>AP</td>
		<td>Repair</td>
	</tr>
	<tr>
		<td><img src="/img/drones/ap.png"/></td>
		<td><img src="/img/drones/repair.png"/></td>
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
		<td>Vulcan</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/chain.png"/></td>
		<td><img src="/img/weapons/vulcan.png"/></td>
	</tr>

	<tr>
		<td>Charge 2</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/charge_2.png"/></td>
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
</x-slot>

</x-ship-group-layout>