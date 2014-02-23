<?php

class ProjectsController extends BaseController {

	/**
	 * Project Repository
	 *
	 * @var Project
	 */
	protected $project;

	public function __construct(Project $project)
	{
		$this->project = $project;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


		// doesnt work, but would be sweet if it did
		//$projects = Project::ofType(Input::get('type'))->ofStatus(Input::get('status'))->get();


	
		$projects = Project::select('*');

		if(Input::get('type')){$projects = $projects->where('type', '=',Input::get('type'));}

		if(Input::get('status')){$projects = $projects->where('status', '=', Input::get('status'));}

		$projects = $projects->get();

		// Dont know why this doesnt work
		//$allProjectStatuses = Project::select('status')->distinct()->get();

		// Get all project statuses from the projects table
		$allProjectStatuses = DB::table('projects')->select('status')->distinct()->orderBy('status','ASC')->get();

		// Get all project types from the projects table
		$allProjectTypes = DB::table('projects')->select('type')->distinct()->orderBy('status','ASC')->get();

		//print_r($allProjectStatuses);

		// This works too
		//$allProjectStatuses = DB::select('select distinct status from projects');
		//print_r($allProjectStatuses);

	/*
		$projects = new Project;

		if(Input::get('status'))
		    $projects->where('status', '=', Input::get('status'));

		if(Input::get('type'))
		    $projects->where('type', '=', Input::get('type'));

		// Keep adding more for every filter you have

		// Don't do this till you are done adding filters.
		$projects = $projects->get();
		print_r($projects);
		
	*/

		// Get all projects
		//$projects = $this->project->all();

		return View::make('projects.index', compact('projects','allProjectStatuses','allProjectTypes'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Project::$rules);

		if ($validation->passes())
		{
			$this->project->create($input);

			return Redirect::route('projects.index');
		}

		return Redirect::route('projects.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = $this->project->findOrFail($id);
		$projectmetum = Project::find(1)->projectmetum;
		return View::make('projects.show')
			->with('project',$project)
			->with('projectmetum',$projectmetum);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = $this->project->find($id);

		if (is_null($project))
		{
			return Redirect::route('projects.index');
		}

		return View::make('projects.edit', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Project::$rules);

		if ($validation->passes())
		{
			$project = $this->project->find($id);
			$project->update($input);

			return Redirect::route('projects.show', $id);
		}

		return Redirect::route('projects.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->project->find($id)->delete();

		return Redirect::route('projects.index');
	}

}
