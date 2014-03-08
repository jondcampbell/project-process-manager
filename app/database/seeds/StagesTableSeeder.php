<?php

class StagesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('stages')->truncate();
        
		\DB::table('stages')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Wireframe',
				'type' => '10',
				'description' => 'Get initial ideas for the site',
				'order' => '1',
				'process_id' => '1',
				'financial_stage_id' => '1',
				'default_stage_length' => '14',
				'created_at' => '2014-02-13 09:10:06',
				'updated_at' => '2014-03-08 00:27:59',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Prototype',
				'type' => '10',
				'description' => 'Functional prototype',
				'order' => '2',
				'process_id' => '1',
				'financial_stage_id' => '1',
				'default_stage_length' => '14',
				'created_at' => '2014-02-13 09:10:54',
				'updated_at' => '2014-03-08 00:28:09',
			),
			2 => 
			array (
				'id' => '3',
				'name' => 'Design Home Page',
				'type' => '10',
				'description' => 'The fun begins',
				'order' => '3',
				'process_id' => '1',
				'financial_stage_id' => '2',
				'default_stage_length' => '7',
				'created_at' => '2014-02-13 09:11:16',
				'updated_at' => '2014-03-08 00:28:16',
			),
		));
	}

}
