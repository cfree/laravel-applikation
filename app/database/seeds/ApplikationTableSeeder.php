<?php

class ApplikationTableSeeder extends Seeder {
	public function run() {
		// Empty tables first
		DB::table('applications')->delete();
		DB::table('companies')->delete();
		DB::table('statuses')->delete();

		// Add statuses
		$status1 = Status::create(array(
			'status' => 'Awaiting Response',
		));
		
		$status2 = Status::create(array(
			'status' => 'Interview Scheduled',
		));
		
		$status3 = Status::create(array(
			'status' => 'Post Interview',
		));

		$status4 = Status::create(array(
			'status' => 'Awaiting Decision',
		));

		$status5 = Status::create(array(
			'status' => 'Denied',
		));

		$status6 = Status::create(array(
			'status' => 'No Response',
		));

		$status7 = Status::create(array(
			'status' => 'Position Filled',
		));

		$status8 = Status::create(array(
			'status' => 'Need to Apply',
		));

		// Add some companies
		$co1 = Company::create(array(
			'name' => 'Delta',
		));
		
		$co2 = Company::create(array(
			'name' => 'United',
		));
		
		$co3 = Company::create(array(
			'name' => 'Northwest',
		));

		$co4 = Company::create(array(
			'name' => 'Southwest',
		));

		$co5 = Company::create(array(
			'name' => 'Repubic',
		));

		$co6 = Company::create(array(
			'name' => 'JetBlue',
		));

		$co7 = Company::create(array(
			'name' => 'VOLTAGE',
		));

		$co8 = Company::create(array(
			'name' => 'Frontier',
		));

		// Add some applications
		$application = Application::create(array(
			'position' => 'First Officer',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'http://dice.com',
		));
		$status8->statuses()->save($application);
		$co1->names()->save($application);

		$application = Application::create(array(
			'position' => 'Captain',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'http://monster.com',
		));
		$status4->statuses()->save($application);
		$co2->names()->save($application);

		$application = Application::create(array(
			'position' => 'Captain',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'http://indeed.com',
		));
		$status4->statuses()->save($application);
		$co3->names()->save($application);

		$application = Application::create(array(
			'position' => 'Flight Attendant',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'http://dice.com',
		));
		$status4->statuses()->save($application);
		$co2->names()->save($application);

		$application = Application::create(array(
			'position' => 'Lead Flight Attendant',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'http://careerbuilder.com',
		));
		$status5->statuses()->save($application);
		$co4->names()->save($application);


		$application = Application::create(array(
			'position' => 'Captain',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'http://craigslist.com',
		));
		$status5->statuses()->save($application);
		$co8->names()->save($application);

		$application = Application::create(array(
			'position' => 'Back-end Developer',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'http://voltagead.com',
		));
		$status2->statuses()->save($application);
		$co7->names()->save($application);

		$application = Application::create(array(
			'position' => 'Flight Engineer',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'http://glassdoor.com',
		));
		$status4->statuses()->save($application);
		$co8->names()->save($application);

		$application = Application::create(array(
			'position' => 'Air Marshal',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'https://www.usajobs.gov',
		));
		$status6->statuses()->save($application);
		$co6->names()->save($application);

		$application = Application::create(array(
			'position' => 'Stewardess',
			'date_applied' => date("Y-m-d H:i:s"),
			'source_url' => 'http://denverhelpwanted.com',
		));
		$status7->statuses()->save($application);
		$co5->names()->save($application);
	}
}
