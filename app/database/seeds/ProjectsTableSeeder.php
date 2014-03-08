<?php

class ProjectsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('projects')->truncate();
        
		\DB::table('projects')->insert(array (
			0 => 
			array (
				'id' => '1',
				'title' => 'PoreLogix',
				'slug' => 'porelogix',
				'type' => '1',
				'status' => '1',
				'created_at' => '2014-02-13 08:42:29',
				'updated_at' => '2014-02-13 08:42:29',
			),
			1 => 
			array (
				'id' => '2',
				'title' => 'Work Cabin',
				'slug' => 'workcabin',
				'type' => '1',
				'status' => '1',
				'created_at' => '2014-02-14 07:22:17',
				'updated_at' => '2014-02-14 07:22:17',
			),
			2 => 
			array (
				'id' => '3',
				'title' => 'Apple',
				'slug' => 'apple',
				'type' => '1',
				'status' => '1',
				'created_at' => '2014-03-08 00:11:34',
				'updated_at' => '2014-03-08 00:11:34',
			),
			3 => 
			array (
				'id' => '4',
				'title' => 'Brandywine',
				'slug' => 'brandywine',
				'type' => '1',
				'status' => '1',
				'created_at' => '2014-03-08 00:12:30',
				'updated_at' => '2014-03-08 00:12:30',
			),
			4 => 
			array (
				'id' => '5',
				'title' => 'Steroid Clinic',
				'slug' => 'steroidclinic',
				'type' => '10',
				'status' => '1',
				'created_at' => '2014-03-08 00:13:08',
				'updated_at' => '2014-03-08 00:13:08',
			),
			5 => 
			array (
				'id' => '6',
				'title' => 'Imprint',
				'slug' => 'imprint',
				'type' => '21',
				'status' => '1',
				'created_at' => '2014-03-08 00:15:34',
				'updated_at' => '2014-03-08 00:15:34',
			),
			6 => 
			array (
				'id' => '7',
				'title' => 'Open Water',
				'slug' => 'openwater',
				'type' => '1',
				'status' => '1',
				'created_at' => '2014-03-08 00:21:59',
				'updated_at' => '2014-03-08 00:21:59',
			),
			7 => 
			array (
				'id' => '8',
				'title' => 'BG Extras',
				'slug' => 'bgextras',
				'type' => '2',
				'status' => '1',
				'created_at' => '2014-03-08 00:22:26',
				'updated_at' => '2014-03-08 00:22:26',
			),
			8 => 
			array (
				'id' => '9',
				'title' => 'Art Knapp',
				'slug' => 'artknapp',
				'type' => '1',
				'status' => '0',
				'created_at' => '2014-03-08 00:24:30',
				'updated_at' => '2014-03-08 00:24:30',
			),
		));
	}

}
