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
</x-ship-group-layout>