<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
	:hasDrones="true"
>

<p>Engi ships never run. They have Med-bot Dispersal.</p>

<x-slot name="explosives">
	<tr>
		<th colspan="2"><strong>No missiles</strong></th>
		<th><img src="/img/explosives/bomb_launcher.png"/></th>
	</tr>
	<tr>
		<td colspan="2">
		<td>Stun</td>
	</tr>
	<tr>
		<td colspan="2">
		<td><img src="/img/explosives/stun.png"/></td>
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
		<td>Anti-drone</td>
		<td></td>
	</tr>
	<tr>
		<td><img src="/img/drones/antidrone.png"/></td>
		<td></td>
	</tr>
</x-slot>

<x-slot name="weapons">
	<tr>
		<td>Basic laser</td>
		<td>Heavy 1</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/basic.png"/></td>
		<td><img src="/img/weapons/heavy_1.png"/></td>
	</tr>

	<tr>
		<td>Burst 1</td>
		<td>Burst 2</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/burst_1.png"/></td>
		<td><img src="/img/weapons/burst_2.png"/></td>
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
		<td>Pike</td>
		<td>Glaive</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/pike.png"/></td>
		<td><img src="/img/weapons/glaive.png"/></td>
	</tr>
	
	<tr>
		<td>Fire beam</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/fire_beam.png"/></td>
	</tr>


	<tr>
		<td>Ion 1</td>
		<td>Ion 2</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/ion_1.png"/></td>
		<td><img src="/img/weapons/ion_2.png"/></td>
	</tr>

	<tr>
		<td>Ion stunner</td>
		<td>Heavy ion</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/ion_stunner.png"/></td>
		<td><img src="/img/weapons/heavy_ion.png"/></td>
	</tr>

	<tr>
		<td>Charge ion</td>
		<td>Chain ion</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/charge_ion.png"/></td>
		<td><img src="/img/weapons/chain_ion.png"/></td>
	</tr>
</x-slot>

</x-ship-group-layout>