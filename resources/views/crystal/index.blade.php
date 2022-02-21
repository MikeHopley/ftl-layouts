<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
>

<p>Crystal ships can never be found outside the Crystal Homeworlds. They use Crystal weapons exclusively.</p>

<x-slot name="explosives">
	<tr>
		<th colspan="2"><strong>No missiles</strong></th>
		<th><img src="/img/explosives/bomb_launcher.png"/></th>
	</tr>
	<tr>
		<td colspan="2">
		<td>Lockdown</td>
	</tr>
	<tr>
		<td colspan="2">
		<td><img src="/img/explosives/lockdown.png"/></td>
	</tr>
</x-slot>

</x-ship-group-layout>