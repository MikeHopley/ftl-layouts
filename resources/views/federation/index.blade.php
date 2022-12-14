<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
>

<p>Federation ships and their pirate layouts are identical. You only fight a regular Federation ship in <a href="https://ftl.fandom.com/wiki/Federation_Deserters">one event</a> in the Crystal Homeworlds.</p>

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
		<td>Artemis<img src="/img/explosives/artemis.png"/></td>
		<td>Breach<img src="/img/explosives/breach.png"/></td>
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
		<td>Vulcan</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/vulcan.png"/></td>
	</tr>

	<tr>
		<td>Flak 1</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/flak_1.png"/></td>
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
		<td>Ion stunner</td>
		<td>Charge ion</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/ion_stunner.png"/></td>
		<td><img src="/img/weapons/charge_ion.png"/></td>
	</tr>
</x-slot>

</x-ship-group-layout>