<tr>
	<td>{!! is_array($row['sectors']) ?
	$row['sectors'][0] . ' &mdash; ' . $row['sectors'][1] : 
	$row['sectors'] !!}</td>
	<td>{!! is_array($row['values']) ?
	$row['values'][0] . ' &mdash; ' . $row['values'][1] : 
	$row['values'] !!}</td>
</tr>