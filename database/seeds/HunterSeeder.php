<?php

use App\Hunter;
use Illuminate\Database\Seeder;

class HunterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hunter = new Hunter();
        $hunter->id = 1;
        $hunter->name = 'Hunter-01';
        $hunter->gender = 'Male';
        $hunter->save();

        $hunter = new Hunter();
        $hunter->id = 2;
        $hunter->name = 'Hunter-02';
        $hunter->gender = 'Male';
        $hunter->save();

        $hunter = new Hunter();
        $hunter->id = 3;
        $hunter->name = 'Hunter-03';
        $hunter->gender = 'Male';
        $hunter->save();

        $hunter = new Hunter();
        $hunter->id = 4;
        $hunter->name = 'Hunter-04';
        $hunter->gender = 'Female';
        $hunter->save();

        $hunter = new Hunter();
        $hunter->id = 5;
        $hunter->name = 'Hunter-05';
        $hunter->gender = 'Female';
        $hunter->save();

    }
}
