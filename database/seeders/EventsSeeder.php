<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            "titreevents" => "OUR UPCOMING EVENTS",
            "sous-titre" => "try us for yourself today.",
            "event1name" => "STEAK NIGHT",
            "dateevent1" => "TUESDAYS.",
            "titreevent1" => "Every Tuesday we offer the best steaks for all you meat lovers out there.",
            "descriptionevent1" => "Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate.",
            "event2name" => "CURRY CLUB",
            "dateevent2" => "THURSDAYS.",
            "titreevent2" => "Like something spicy, then this is for you!",
            "descriptionevent2" => "Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate.",
            "event3name" => "SUNDAY SPECIAL",
            "dateevent3" => "SUNDAYS.",
            "titreevent3" => "Who doesnt love a roast?",
            "descriptionevent3" => "Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate.",
            "event4name" => "ITALIAN CUISINE",
            "dateevent4" => "APRIL 25TH",
            "titreevent4" => "Try something new and our special event.",
            "descriptionevent4" => "Is post each that just leaf no. He connection interested so we an sympathize advantages. To said is it shed want do. Occasional middletons everything so to. Have spot part for his quit may. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate."
        ]);
    }
}
