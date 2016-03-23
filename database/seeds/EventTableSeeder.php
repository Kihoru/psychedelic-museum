<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([

            [
                'name' => 'Release Party',
                'event_date_begin' => '20/03/2016',
                'event_date_end' => '22/03/2016',
                'abstract' => 'Evenement de Mars, release party, spectacle de danse psychedelique',
                'content' => 'Evenement de Mars, release party, spectacle de danse psychedelique, lorem ipsum, ipsum lorem, blablabla lba bla fdj fgdhnfogjd'
            ]
        ]);
    }
}
