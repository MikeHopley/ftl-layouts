<table>
	<tr>
		<th>Sector</th>
		<th>System range</th>
	</tr>
	@foreach($system->compacted() as $row)
		@include('includes._compacted-row')
	@endforeach

	<p>Minimums can be <a href="/explanation#minimums">lower than shown</a></p>
</table>