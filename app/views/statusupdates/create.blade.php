@extends('layouts.scaffold')

@section('main')

<h1>Create Statusupdate</h1>

{{ Form::open(array('route' => 'statusupdates.store')) }}
	<ul>
        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::input('number', 'type') }}
        </li>

        <li>
            {{ Form::label('stage_id', 'Stage_id:') }}
            {{ Form::input('number', 'stage_id') }}
        </li>

        <li>
            {{ Form::label('user', 'User:') }}
            {{ Form::input('number', 'user') }}
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


