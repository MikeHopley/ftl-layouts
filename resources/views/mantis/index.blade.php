<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
>

<p>Mantis ships never surrender or run, except in the <a href="https://ftl.fandom.com/wiki/Mantis_Ship-Collectors">Ship Collectors</a> event. In most events, exactly one of their crew is an Engi. Those statements do not apply to pirates.</p>

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


</x-ship-group-layout>