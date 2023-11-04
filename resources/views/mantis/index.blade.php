<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
>

<p>Mantis ships never surrender or run, except in the <a href="https://ftl.fandom.com/wiki/Mantis_Ship-Collectors">Ship Collectors</a> event. In most events, exactly one of their crew is an Engi.</p>

<p>Pirates are different. They have random crew, and may run or surrender.</p>

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
		<td>Ion</td>
	</tr>
	<tr>
		<td><img src="/img/explosives/artemis.png"/></td>
		<td><img src="/img/explosives/breach.png"/></td>
		<td><img src="/img/explosives/ion.png"/></td>
	</tr>
	<tr>
		<td colspan="2"></td>
		<td>Stun</td>
	</tr>
	<tr>
		<td colspan="2"></td>
		<td><img src="/img/explosives/stun.png"/></td>
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
		<td>Charge 1</td>
		<td>Charge 2</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/charge_1.png"/></td>
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
		<td>Halberd</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/mini.png"/></td>
		<td><img src="/img/weapons/halberd.png"/></td>
	</tr>

	<tr>
		<td>Ion stunner</td>
		<td>Chain ion</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/ion_stunner.png"/></td>
		<td><img src="/img/weapons/chain_ion.png"/></td>
	</tr>
</x-slot>


</x-ship-group-layout>