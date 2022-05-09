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

</x-ship-group-layout>