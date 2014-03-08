<?php

class Statusupdate extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'type' => 'required',
		'stage_id' => 'required',
		'user' => 'required',
		'status' => 'required'
	);
}
