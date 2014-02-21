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


		/*
		$vars = Request::query('type');
		echo "type ";
		print_r($vars);



		$name = Input::get('name', 'Sally');
		print_r($name);
		*/
		$query_vars = Input::all();
		//print_r($query_vars);

		/*
		TODO:this stuff is broken(but should? work)
		 
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
	



		if(!empty($query_vars['status'])){
			echo "we have a status";
		}
		if(!empty($query_vars['type'])){
			echo "we have a type";
		}
		if(!empty($query_vars['budget'])){
			echo "we have a budget";
		}		

		// TODO: This will be replaced by something that has query vars built in
		$projects = $this->project->all();


		return View::make('projects.index', compact('projects'));

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
