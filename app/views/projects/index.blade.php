@extends('layouts.master')

@section('main')

<h1>All Projects</h1>

<p>{{ link_to_route('projects.create', 'Add new project') }}</p>


Filter by Type:
{{-- Check if we even have types first --}}
@foreach ($allProjectTypes as $projecttype)
<a class="btn btn-xs btn-default" href="">{{{ Helpers\Helper::projectTypeToLabel($projecttype->type) }}}</a>
@endforeach
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
Filter by Status:
{{-- Check if we even have statuses first --}}
@foreach ($allProjectStatuses as $projectstatuses)
<a class="btn btn-xs btn-default" href="">{{{ Helpers\Helper::projectStatusToLabel($projectstatuses->status) }}}</a>
@endforeach

<br />
<br />
<strong>List Style:</strong>

<a class="<?php if ($liststyle ==='detailed'){echo "active";}?>" href="{{ action('ProjectsController@index')}}">Detailed</a> | 
<a class="<?php if ($liststyle ==='stages'){echo "active";}?>" href="{{ action('ProjectsController@stageslist')}}">Stages</a> | 
<a class="<?php if ($liststyle ==='compact'){echo "active";}?>" href="{{ action('ProjectsController@compactlist')}}">Compact</a>
<br /><br />

@if ($projects->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Slug</th>
				<th>Type</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>	
				<th>Update Status</th>			
			</tr>
		</thead>

		<tbody>
			@foreach ($projects as $project)
				<tr>
					<td><a href="{{URL::current()}}/{{$project->id}}">{{{ $project->title }}}</a></td>
					<td>{{{ $project->slug }}}</td>
					<td>{{{ Helpers\Helper::projectTypeToLabel($project->type) }}}</td>
					<td>{{{ Helpers\Helper::projectStatusToLabel($project->status) }}}</td>
                    <td>{{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                    <td>
                    	<a href="" class="btn btn-xs btn-default">+ Status</a>
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no projects
@endif

@stop
