@extends('layouts.master')

@section('main')

<h1>All Projectmeta</h1>

<p>{{ link_to_route('projectmeta.create', 'Add new projectmetum') }}</p>

@if ($projectmeta->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Project_id</th>
				<th>Key</th>
				<th>Value</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($projectmeta as $projectmetum)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no projectmeta
@endif

@stop
