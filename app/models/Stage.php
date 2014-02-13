<?php

class Stage extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'description' => 'required',
		'order' => 'required',
		'process_id' => 'required',
		'financial_stage_id' => 'required',
		'default_stage_length' => 'required'
	);
}
