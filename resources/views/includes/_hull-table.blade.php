<table>
	<tr>
		<th>Sector</th>
		<th>Hull</th>
	</tr>
	@foreach([1, 2, 3, 4, 5, 6, 7, 8] as $sector)
		@unless($sector < $ship->sector_min_special || $sector > $ship->sector_max_special)
			<tr>
				<td>{{ $sector }}</td>
				<td>{{ $ship->resources->hull + $sector - 1 }}</td>
			</tr>
		@endunless
	@endforeach
	
</table>