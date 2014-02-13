@extends('layouts.scaffold')

@section('main')

<h1>All Processes</h1>

<p>{{ link_to_route('processes.create', 'Add new process') }}</p>

@if ($processes->count())
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
			@foreach ($processes as $process)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no processes
@endif

@stop
