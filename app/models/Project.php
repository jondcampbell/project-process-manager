<?php

class Project extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'slug' => 'required',
		'type' => 'required',
		'status' => 'required'
	);
}