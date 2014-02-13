@extends('layouts.scaffold')

@section('main')

<h1>Show Projectmetum</h1>

<p>{{ link_to_route('projectmeta.index', 'Return to all projectmeta') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Project_id</th>
				<th>Key</th>
				<th>Value</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $projectmetum->project_id }}}</td>
					<td>{{{ $projectmetum->key }}}</td>
					<td>{{{ $projectmetum->value }}}</td>
                    <td>{{ link_to_route('projectmeta.edit', 'Edit', array($projectmetum->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('projectmeta.destroy', $projectmetum->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
