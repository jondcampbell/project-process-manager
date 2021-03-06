@extends('layouts.master')

@section('main')

<h1>Create Stage</h1>

{{ Form::open(array('route' => 'stages.store')) }}
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
            {{ Form::label('order', 'Order:') }}
            {{ Form::input('number', 'order') }}
        </li>

        <li>
            {{ Form::label('process_id', 'Process_id:') }}
            {{ Form::input('number', 'process_id') }}
        </li>

        <li>
            {{ Form::label('financial_stage_id', 'Financial_stage_id:') }}
            {{ Form::input('number', 'financial_stage_id') }}
        </li>

        <li>
            {{ Form::label('default_stage_length', 'Default_stage_length:') }}
            {{ Form::input('number', 'default_stage_length') }}
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


