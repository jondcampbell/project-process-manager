<?php

class Process extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'description' => 'required',
		'status' => 'required',
		'default' => 'required',
		'type' => 'required'
	);
}
