<table>
	<tr>
		<th>Sector</th>
		<th>Crew</th>
	</tr>
	@foreach($ship->crew->compacted() as $row)
		@include('includes._compacted-row')
	@endforeach
	
</table>