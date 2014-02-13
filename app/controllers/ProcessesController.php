<?php

class ProcessesController extends BaseController {

	/**
	 * Process Repository
	 *
	 * @var Process
	 */
	protected $process;

	public function __construct(Process $process)
	{
		$this->process = $process;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$processes = $this->process->all();

		return View::make('processes.index', compact('processes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('processes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Process::$rules);

		if ($validation->passes())
		{
			$this->process->create($input);

			return Redirect::route('processes.index');
		}

		return Redirect::route('processes.create')
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
		$process = $this->process->findOrFail($id);

		return View::make('processes.show', compact('process'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$process = $this->process->find($id);

		if (is_null($process))
		{
			return Redirect::route('processes.index');
		}

		return View::make('processes.edit', compact('process'));
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
		$validation = Validator::make($input, Process::$rules);

		if ($validation->passes())
		{
			$process = $this->process->find($id);
			$process->update($input);

			return Redirect::route('processes.show', $id);
		}

		return Redirect::route('processes.edit', $id)
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
		$this->process->find($id)->delete();

		return Redirect::route('processes.index');
	}

}
