<table>
	<tr>
		<th>Sector</th>
		@if($ship->crew->s1 > 0)
			<th>Crew</th>
		@endif
		<th>Hull</th>
	</tr>
	@foreach([1, 2, 3, 4, 5, 6, 7, 8] as $sector)
		@unless($sector < $ship->sector_min_special || $sector > $ship->sector_max_special)
			<tr>
				<td>{{ $sector }}</td>
				@if($ship->crew->s1 > 0)
					<td>{{ $ship->crew->{"s".$sector} }}</td>
				@endif
				<td>{{ $ship->resources->hull + $sector - 1 }}</td>
			</tr>
		@endunless
	@endforeach
	
</table>