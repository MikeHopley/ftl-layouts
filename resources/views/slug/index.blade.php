<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
>

<p>Slug surrenders are never worth taking, except to unlock the Slug Cruiser. That does not apply to pirates.</p>

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

</x-ship-group-layout>