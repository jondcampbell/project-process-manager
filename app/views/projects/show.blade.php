@extends('layouts.scaffold')

@section('main')

<h1>Show Project</h1>

<p>{{ link_to_route('projects.index', 'Return to all projects') }}</p>

<h1>{{{ $project->title }}}</h1>

<h4>Slug</h4>
{{{ $project->slug }}}

<h4>Type</h4>
{{{ $project->type }}}

<h4>Status</h4>
{{{ Helpers\Helper::projectStatusToLabel($project->status) }}}

<br />

<h3>Details</h3>
@foreach ($projectmetum as $projectmeta)
	{{{ $projectmeta->key }}}: 
	{{{ $projectmeta->value }}}
	<br />
@endforeach


				
{{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}

<br /><br />

{{ Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}


@stop
