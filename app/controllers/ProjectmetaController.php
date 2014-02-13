<?php

class ProjectmetaController extends BaseController {

	/**
	 * Projectmetum Repository
	 *
	 * @var Projectmetum
	 */
	protected $projectmetum;

	public function __construct(Projectmetum $projectmetum)
	{
		$this->projectmetum = $projectmetum;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projectmeta = $this->projectmetum->all();

		return View::make('projectmeta.index', compact('projectmeta'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projectmeta.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Projectmetum::$rules);

		if ($validation->passes())
		{
			$this->projectmetum->create($input);

			return Redirect::route('projectmeta.index');
		}

		return Redirect::route('projectmeta.create')
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
		$projectmetum = $this->projectmetum->findOrFail($id);

		return View::make('projectmeta.show', compact('projectmetum'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$projectmetum = $this->projectmetum->find($id);

		if (is_null($projectmetum))
		{
			return Redirect::route('projectmeta.index');
		}

		return View::make('projectmeta.edit', compact('projectmetum'));
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
		$validation = Validator::make($input, Projectmetum::$rules);

		if ($validation->passes())
		{
			$projectmetum = $this->projectmetum->find($id);
			$projectmetum->update($input);

			return Redirect::route('projectmeta.show', $id);
		}

		return Redirect::route('projectmeta.edit', $id)
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
		$this->projectmetum->find($id)->delete();

		return Redirect::route('projectmeta.index');
	}

}
