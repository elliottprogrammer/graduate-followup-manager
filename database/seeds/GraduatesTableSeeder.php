<?php

use Illuminate\Database\Seeder;
use App\Graduate;
use App\Note;

class GraduatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->delete();
        DB::table('graduates')->delete();

        factory(Graduate::class, 15)->create()->each(function ($graduate) {
            //create 3 notes for each user
            factory(Note::class, 3)->create(['graduate_id'=>$graduate->id]);
        });

        
        // for ($i = 1; $i < 11; $i++) {
        //     $faker = Faker\Factory::create();
        //     $graduate = new App\Graduate;
        //     $graduate->first_name = $faker->firstName;
        //     $graduate->last_name = $faker->lastName;
        //     $graduate->street_address = $faker->streetAddress;
        //     $graduate->city = $faker->city;
        //     $graduate->state = $faker->stateAbbr;
        //     $graduate->zip = $faker->postcode;
        //     $graduate->phone1 = $faker->phoneNumber;
        //     $graduate->alt_phone1 = $faker->tollFreePhoneNumber;
        //     $graduate->email1 = $faker->email;
        //     $graduate->gender = $faker->randomElement($array = array('Male', 'Female'));
        //     $graduate->graduation_date = $faker->dateTimeThisMonth($max = 'now', 'UTC');
        //     $graduate->date_of_birth = $faker->dateTime($max = '-19 years');
        //     $graduate->condition = $faker->randomElement($array = array('Good', 'Suspicious', 'Relapsed'));
        //     $graduate->last_contacted = $faker->dateTimeThisMonth($max = 'now', 'UTC');
        //     $graduate->next_call_date = $faker->dateTimeBetween($startDate = 'now', $endDate = '+ 7 days', 'UTC');
        //     $graduate->status = 'Active';
        //     $faker = Faker\Factory::create();
        //     $graduate->fam_first_name = $faker->firstName;
        //     $graduate->fam_last_name = $faker->lastName;
        //     $graduate->fam_relationship = $faker->randomElement($array = array('Mother', 'Father'));
        //     $graduate->fam_street_address = $faker->streetAddress;
        //     $graduate->fam_city = $faker->city;
        //     $graduate->fam_state = $faker->state;
        //     $graduate->fam_zip = $faker->postcode;
        //     $graduate->fam_phone1 = $faker->phoneNumber;
        //     $graduate->fam_email1 = $faker->email;
        //     $graduate->fam_gender = $faker->randomElement($array = array('Male', 'Female'));

        //     $graduate->save();
        // }
    }
}
