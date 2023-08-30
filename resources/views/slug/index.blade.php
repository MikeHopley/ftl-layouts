<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
>

<h1>Slugs are slimy wankers, you can’t trust them</h1>

<p>All Slug ships have Slug Repair Gel, including pirates.</p>

<x-slot name="explosives">
	<tr>
		<th><img src="/img/explosives/small_launcher.png"/></th>
		<th><img src="/img/explosives/big_launcher.png"/></th>
		<th><img src="/img/explosives/bomb_launcher.png"/></th>
	</tr>
	<tr>
		<td>Artemis</td>
		<td>Breach</td>
		<td>Fire</td>
	</tr>
	<tr>
		<td><img src="/img/explosives/artemis.png"/></td>
		<td><img src="/img/explosives/breach.png"/></td>
		<td><img src="/img/explosives/fire.png"/></td>
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
		<td>Charge 2</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/burst_2.png"/></td>
		<td><img src="/img/weapons/charge_2.png"/></td>
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
		<td>Charge ion</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/charge_ion.png"/></td>
	</tr>
</x-slot>

</x-ship-group-layout>