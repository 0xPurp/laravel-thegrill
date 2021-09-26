<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "titre" => "A WARM WELCOME",
                "sous-titre" => "were very happy to see you.",
                "titregauche" => "ABOUT DUJOUR",
                "descriptiongauche" => "Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.",
                "notesgauche" => "Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.",
                "titredroite" => "LATEST AWARDS",
                "descriptiondroite" => "Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.",
                "notesdroite" => "Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.",
                "titrebook" => "LOVE STEAK?",
                "descriptionbook" => "Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.",
                "titremenu" => "CREATE MEMORIES",
                "descriptionmenu" => "Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation."
            ]
        ]);
    }
}
