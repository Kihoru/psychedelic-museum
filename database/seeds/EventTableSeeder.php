<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event')->insert([

            [
                'name' => 'Release Party',
                'event_date' => '25/03/2016',
                'abstract' => 'Evenement de Mars, release party, spectacle de danse psychedelique',
                'content' => 'Evenement de Mars, release party, spectacle de danse psychedelique, lorem ipsum, ipsum lorem, blablabla lba bla fdj fgdhnfogjd',
            ]
        ]);
    }
}
