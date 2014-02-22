@extends('layouts.master')

@section('main')

<h1>Create Project</h1>

{{ Form::open(array('route' => 'projects.store')) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::input('number', 'type') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::input('number', 'status') }}
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


