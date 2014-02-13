<?php

class Projectmetum extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'project_id' => 'required',
		'key' => 'required',
		'value' => 'required'
	);
}
