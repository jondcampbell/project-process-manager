@extends('layouts.scaffold')

@section('main')

<h1>Create Projectmetum</h1>

{{ Form::open(array('route' => 'projectmeta.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


