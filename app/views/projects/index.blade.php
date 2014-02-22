@extends('layouts.master')

@section('main')

<h1>All Projects</h1>

<p>{{ link_to_route('projects.create', 'Add new project') }}</p>

@if ($projects->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Slug</th>
				<th>Type</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>				
			</tr>
		</thead>

		<tbody>
			@foreach ($projects as $project)
				<tr>
					<td><a href="{{URL::current()}}/{{$project->id}}">{{{ $project->title }}}</a></td>
					<td>{{{ $project->slug }}}</td>
					<td>{{{ $project->type }}}</td>
					<td>{{{ $project->status }}}</td>
                    <td>{{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no projects
@endif

@stop
