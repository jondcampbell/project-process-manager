@extends('layouts.master')

@section('main')

<h1>Show Project</h1>

<p>{{ link_to_route('projects.index', 'Return to all projects') }}</p>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">{{{ $project->title }}}</h3>
	</div>
	<div class="panel-body">
		
		<strong>Slug:</strong>
		{{{ $project->slug }}}
		<br />

		<strong>Type:</strong>
		{{{ Helpers\Helper::projectTypeToLabel($project->type) }}}
		<br />		

		<strong>Status:</strong>
		{{{ Helpers\Helper::projectStatusToLabel($project->status) }}}
		<br />		

		<!-- Figure out a nice way to get each meta field we want and have pretty labels for them. Maybe I should have labels for meta fields -->
		<h4>Details</h4>
		@foreach ($projectmetum as $projectmeta)
		<strong>{{{ $projectmeta->key }}}:</strong> {{{ $projectmeta->value }}}
			<br />
		@endforeach

		<hr />

		<h4>Project Status Feed</h4>
		Show all statuses for the project, newest at the top<br /><br />
		<a href="" class="btn btn-xs btn-default">+ Status</a>

		<br /><br />


		<hr />
						
		{{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}

		<br /><br />

		{{ Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
		    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
		{{ Form::close() }}
	</div>
</div>





@stop
