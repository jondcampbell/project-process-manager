<?php

class StatusupdatesController extends BaseController {

	/**
	 * Statusupdate Repository
	 *
	 * @var Statusupdate
	 */
	protected $statusupdate;

	public function __construct(Statusupdate $statusupdate)
	{
		$this->statusupdate = $statusupdate;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$statusupdates = $this->statusupdate->all();

		return View::make('statusupdates.index', compact('statusupdates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('statusupdates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Statusupdate::$rules);

		if ($validation->passes())
		{
			$this->statusupdate->create($input);

			return Redirect::route('statusupdates.index');
		}

		return Redirect::route('statusupdates.create')
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
		$statusupdate = $this->statusupdate->findOrFail($id);

		return View::make('statusupdates.show', compact('statusupdate'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$statusupdate = $this->statusupdate->find($id);

		if (is_null($statusupdate))
		{
			return Redirect::route('statusupdates.index');
		}

		return View::make('statusupdates.edit', compact('statusupdate'));
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
		$validation = Validator::make($input, Statusupdate::$rules);

		if ($validation->passes())
		{
			$statusupdate = $this->statusupdate->find($id);
			$statusupdate->update($input);

			return Redirect::route('statusupdates.show', $id);
		}

		return Redirect::route('statusupdates.edit', $id)
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
		$this->statusupdate->find($id)->delete();

		return Redirect::route('statusupdates.index');
	}

}
