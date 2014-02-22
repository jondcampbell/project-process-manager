@extends('layouts.master')

@section('main')

<h1>Show Process</h1>

<p>{{ link_to_route('processes.index', 'Return to all processes') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Description</th>
				<th>Status</th>
				<th>Default</th>
				<th>Type</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $process->name }}}</td>
					<td>{{{ $process->description }}}</td>
					<td>{{{ $process->status }}}</td>
					<td>{{{ $process->default }}}</td>
					<td>{{{ $process->type }}}</td>
                    <td>{{ link_to_route('processes.edit', 'Edit', array($process->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('processes.destroy', $process->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
