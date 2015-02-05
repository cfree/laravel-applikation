<?php

class AppSeeder extends Seeder {
	public function run() {
		// Empty tables first
		DB::table('applications')->delete();
		DB::table('companies')->delete();
		DB::table('statuses')->delete();

		// Add statuses
		$status1 = Company::create(array(
			'status' => 'Awaiting Response',
		));
		
		$status2 = Company::create(array(
			'status' => 'Interview Scheduled',
		));
		
		$status3 = Company::create(array(
			'status' => 'Post Interview',
		));

		$status4 = Company::create(array(
			'status' => 'Awaiting Decision',
		));

		$status5 = Company::create(array(
			'status' => 'Denied',
		));

		$status6 = Company::create(array(
			'status' => 'No Response',
		));

		$status7 = Company::create(array(
			'status' => 'Position Filled',
		));

		$status8 = Company::create(array(
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
			'name' => 'Continental',
		));

		$co8 = Company::create(array(
			'name' => 'Frontier',
		));

		// Add some applications
		$application = Application::create(array( // 1
			'company_id' => 1, 
			'position' => 'First Officer',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 8,
			'source_url' => 'http://dice.com',
		));
		$day1->timeslots()->save($timeslot);

		$application = Application::create(array( // 2
			'company_id' => 2, 
			'position' => 'Captain',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 4,
			'source_url' => 'http://monster.com',
		));
		$day1->timeslots()->save($timeslot);

		$application = Application::create(array( // 3
			'company_id' => 3, 
			'position' => 'Captain',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 4,
			'source_url' => 'http://indeed.com',
		));
		$day1->timeslots()->save($timeslot);

		$application = Application::create(array( // 2
			'company_id' => 2, 
			'position' => 'Flight Attendant',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 4,
			'source_url' => 'http://dice.com',
		));
		$day1->timeslots()->save($timeslot);

		$application = Application::create(array( // 4
			'company_id' => 4, 
			'position' => 'Lead Flight Attendant',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 5,
			'source_url' => 'http://careerbuilder.com',
		));
		$day1->timeslots()->save($timeslot);


		$application = Application::create(array( // 8
			'company_id' => 8, 
			'position' => 'Captain',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 5,
			'source_url' => 'http://craigslist.com',
		));
		$day2->timeslots()->save($timeslot);

		$application = Application::create(array( // 7
			'company_id' => 7, 
			'position' => 'Back-end Developer',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 2,
			'source_url' => 'http://voltagead.com',
		));
		$day2->timeslots()->save($timeslot);

		$application = Application::create(array( // 7
			'company_id' => 7, 
			'position' => 'Flight Engineer',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 4,
			'source_url' => 'http://glassdoor.com',
		));
		$day2->timeslots()->save($timeslot);


		$application = Application::create(array( // 6
			'company_id' => 6, 
			'position' => 'Air Marshal',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 6,
			'source_url' => 'https://www.usajobs.gov',
		));
		$day3->timeslots()->save($timeslot);

		$application = Application::create(array( // 5
			'company_id' => 5, 
			'position' => 'Stewardess',
			'date_applied' => date("Y-m-d H:i:s"),
			'status_id' => 7,
			'source_url' => 'http://denverhelpwanted.com',
		));
		$day3->timeslots()->save($timeslot);
	}
}
