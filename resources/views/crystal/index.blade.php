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


<x-slot name="weapons">
	<tr>
		<td>Crystal burst 1</td>
		<td>Crystal burst 2</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/crystal_burst_1.png"/></td>
		<td><img src="/img/weapons/crystal_burst_2.png"/></td>
	</tr>

	<tr>
		<td>Heavy crystal 1</td>
		<td>Heavy crystal 2</td>
	</tr>
	<tr>
		<td><img src="/img/weapons/crystal_heavy_1.png"/></td>
		<td><img src="/img/weapons/crystal_heavy_2.png"/></td>
	</tr>
</x-slot>

</x-ship-group-layout>