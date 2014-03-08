@extends('layouts.scaffold')

@section('main')

<h1>Edit Statusupdate</h1>
{{ Form::model($statusupdate, array('method' => 'PATCH', 'route' => array('statusupdates.update', $statusupdate->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('statusupdates.show', 'Cancel', $statusupdate->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
