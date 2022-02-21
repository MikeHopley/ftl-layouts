<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
	:hasDrones="true"
>

<p>Automated ships never surrender and do not run from fights, unless they are running at the start. They take 40 seconds to escape and double the Fleet pursuit.</p>

<p>They repair all systems simultaneously, taking 37.5 seconds each bar. They cannot repair a breached system. They <strong>always</strong> have manning bonuses, unless the system is damaged.</p>

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
	<tr>
		<td colspan="2"></td>
		<td>Fire</td>
	</tr>
	<tr>
		<td colspan="2"></td>
		<td><img src="/img/explosives/fire.png"/></td>
	</tr>
</x-slot>

<x-slot name="drones">
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
</x-slot>

</x-ship-group-layout>