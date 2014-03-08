<?php

class ProcessesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('processes')->truncate();
        
		\DB::table('processes')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'End to End',
				'description' => 'Full project from conception to final touches',
				'status' => '1',
				'default' => '1',
				'type' => '1',
				'created_at' => '2014-02-13 09:12:29',
				'updated_at' => '2014-02-13 09:12:29',
			),
		));
	}

}
