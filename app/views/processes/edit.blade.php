@extends('layouts.master')

@section('main')

<h1>Edit Process</h1>
{{ Form::model($process, array('method' => 'PATCH', 'route' => array('processes.update', $process->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::input('number', 'status') }}
        </li>

        <li>
            {{ Form::label('default', 'Default:') }}
            {{ Form::checkbox('default') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::input('number', 'type') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('processes.show', 'Cancel', $process->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
