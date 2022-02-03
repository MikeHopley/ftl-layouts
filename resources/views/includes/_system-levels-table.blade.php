<table class="system-table">
	<tr>
		<th>Sector</th>
		<th>System range</th>
	</tr>
	@foreach([1, 2, 3, 4, 5, 6, 7, 8] as $sector)
		<tr>
			<td>{{ $sector }}</td>
			<td>{{ $system->{"s".$sector."_min"} }} &mdash; {{ $system->{"s".$sector."_max"} }}</td>
		</tr>
	@endforeach
</table>