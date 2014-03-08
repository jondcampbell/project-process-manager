<?php

class ProjectmetaTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('projectmeta')->truncate();
        
		\DB::table('projectmeta')->insert(array (
			0 => 
			array (
				'id' => '1',
				'project_id' => '1',
				'key' => 'budget',
				'value' => '1000',
				'created_at' => '2014-02-13 09:02:45',
				'updated_at' => '2014-02-13 09:02:45',
			),
			1 => 
			array (
				'id' => '2',
				'project_id' => '1',
				'key' => 'project_lead',
				'value' => 'Andrew',
				'created_at' => '2014-02-13 09:02:58',
				'updated_at' => '2014-02-13 09:02:58',
			),
			2 => 
			array (
				'id' => '3',
				'project_id' => '1',
				'key' => 'dev_lead',
				'value' => 'Andrew',
				'created_at' => '2014-02-13 09:03:09',
				'updated_at' => '2014-02-13 09:03:09',
			),
			3 => 
			array (
				'id' => '4',
				'project_id' => '1',
				'key' => 'process_id',
				'value' => '1',
				'created_at' => '2014-02-13 09:03:28',
				'updated_at' => '2014-02-13 09:03:44',
			),
			4 => 
			array (
				'id' => '5',
				'project_id' => '1',
				'key' => 'client',
				'value' => 'Cam Vacek',
				'created_at' => '2014-02-13 09:04:09',
				'updated_at' => '2014-02-13 09:04:09',
			),
			5 => 
			array (
				'id' => '6',
				'project_id' => '3',
				'key' => 'description',
				'value' => 'A great project',
				'created_at' => '2014-03-08 00:20:11',
				'updated_at' => '2014-03-08 00:20:11',
			),
			6 => 
			array (
				'id' => '7',
				'project_id' => '3',
				'key' => 'project_lead',
				'value' => 'Abe',
				'created_at' => '2014-03-08 00:20:35',
				'updated_at' => '2014-03-08 00:20:35',
			),
			7 => 
			array (
				'id' => '8',
				'project_id' => '8',
				'key' => 'project_lead',
				'value' => 'Andrew',
				'created_at' => '2014-03-08 00:22:43',
				'updated_at' => '2014-03-08 00:22:43',
			),
		));
	}

}
