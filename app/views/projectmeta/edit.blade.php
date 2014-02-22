@extends('layouts.master')

@section('main')

<h1>Edit Projectmetum</h1>
{{ Form::model($projectmetum, array('method' => 'PATCH', 'route' => array('projectmeta.update', $projectmetum->id))) }}
	<ul>
        <li>
            {{ Form::label('project_id', 'Project_id:') }}
            {{ Form::input('number', 'project_id') }}
        </li>

        <li>
            {{ Form::label('key', 'Key:') }}
            {{ Form::text('key') }}
        </li>

        <li>
            {{ Form::label('value', 'Value:') }}
            {{ Form::textarea('value') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('projectmeta.show', 'Cancel', $projectmetum->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
