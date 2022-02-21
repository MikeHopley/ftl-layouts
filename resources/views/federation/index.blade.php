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

</x-ship-group-layout>