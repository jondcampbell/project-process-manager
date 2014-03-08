@extends('layouts.master')

@section('main')

<h1>Show Stage</h1>

<p>{{ link_to_route('stages.index', 'Return to all stages') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Type</th>			
			<th>Description</th>
			<th>Order</th>
			<th>Process_id</th>
			<th>Financial_stage_id</th>
			<th>Default_stage_length</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $stage->name }}}</td>
			<td>{{{ Helpers\Helper::stageTypeToLabel($stage->type) }}}</td>
			<td>{{{ $stage->description }}}</td>
			<td>{{{ $stage->order }}}</td>
			<td>{{{ $stage->process_id }}}</td>
			<td>{{{ $stage->financial_stage_id }}}</td>
			<td>{{{ $stage->default_stage_length }}}</td>
            <td>{{ link_to_route('stages.edit', 'Edit', array($stage->id), array('class' => 'btn btn-info')) }}</td>
            <td>
                {{ Form::open(array('method' => 'DELETE', 'route' => array('stages.destroy', $stage->id))) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
		</tr>
	</tbody>
</table>

@stop
