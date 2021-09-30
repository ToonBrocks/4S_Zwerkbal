<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tournament;
use App\Models\Team;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //
    	// Je kunt hier je eigen seeders invoegen:
        //


        

        //Tournament 1
        $tournament = new Tournament();
        $tournament->name = "EK Zwerkbal " . date('Y');
        $tournament->date = date("Y-m-d", strtotime("+14 days"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 2
        $tournament = new Tournament();
        $tournament->name = "Zwerkbalcup";
        $tournament->date = date("Y-m-d", strtotime("-8 months"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 3
        $tournament = new Tournament();
        $tournament->name = "Scholentoernooi " . (date('Y')+1);
        $tournament->date = date("Y-m-d", strtotime("+13 months"));
        $tournament->save();

        //Tournament 4
        $tournament = new Tournament();
        $tournament->name = "ZwerkbalBeker";
        $tournament->date = date("Y-m-d");
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Team 1
        $team = new Team();
        $team->name = "kaasknapen";
        $team->type = "school";
        $team->origin = "kaaslandia";
        $team->save();

        //Team 2
        $team = new Team();
        $team->name = "kaaskoppen";
        $team->type = "school";
        $team->origin = "kaasland";
        $team->save();

        //Team 3
        $team = new Team();
        $team->name = "kaasknutselaars";
        $team->type = "school";
        $team->origin = "kaaslandie";
        $team->save();

        //Team 4
        $team = new Team();
        $team->name = "kaaskragen";
        $team->type = "school";
        $team->origin = "Urk";
        $team->save();

        //
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        // ~!@#$%^&**()_+
        // +_)(*&^%$#@!~
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        // 
    }
}
