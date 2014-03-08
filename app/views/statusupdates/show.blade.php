@extends('layouts.master')

@section('main')

<h1>Show Statusupdate</h1>

<p>{{ link_to_route('statusupdates.index', 'Return to all statusupdates') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Type</th>
				<th>Stage_id</th>
				<th>User</th>
				<th>Status</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $statusupdate->type }}}</td>
					<td>{{{ $statusupdate->stage_id }}}</td>
					<td>{{{ $statusupdate->user }}}</td>
					<td>{{{ $statusupdate->status }}}</td>
                    <td>{{ link_to_route('statusupdates.edit', 'Edit', array($statusupdate->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('statusupdates.destroy', $statusupdate->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
