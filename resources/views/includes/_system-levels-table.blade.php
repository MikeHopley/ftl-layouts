<table>
	<tr>
		<th>Sector</th>
		<th>System range</th>
	</tr>
	@foreach($system->compacted() as $row)
		@include('includes._compacted-row')
	@endforeach
</table>