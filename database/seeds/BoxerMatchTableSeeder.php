<?php

use Illuminate\Database\Seeder;
use App\BoxerMatch;

class BoxerMatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = [
            [
                'boxer_id'=>'1',
                'total_fitghs'=>'58',
                'wins_(KO)'=>'50 (44)',
                'losses_(KO)'=>'6 (5)',
                'draws'=>'0',
                'titles_won'=>'WBC(Massimi), WBA(Massimi), IBF(Massimi), The Ring(Massimi)'
            ],
            [
                'boxer_id'=>'2',
                'total_fitghs'=>'75',
                'wins_(KO)'=>'66 (47)',
                'losses_(KO)'=>'9 (5)',
                'draws'=>'0',
                'titles_won'=>'IBF(Medi), IBF(Super medi), WBC(Mediomassimi), WBA(Mediomassimi), IBF(Mediomassimi), IBO(Mediomassimi), WBA(Massimi), The Ring(Mediomassimi)'
            ],
            [
                'boxer_id'=>'3',
                'total_fitghs'=>'49',
                'wins_(KO)'=>'49 (43)',
                'losses_(KO)'=>'0',
                'draws'=>'0',
                'titles_won'=>'The Ring(Massimi), lineal heavyweight(Campione lineare dei pesi Massimi)'
            ],
            [
                'boxer_id'=>'4',
                'total_fitghs'=>'54',
                'wins_(KO)'=>'50 (39)',
                'losses_(KO)'=>'4 (3)',
                'draws'=>'0',
                'titles_won'=>'WBA(Massimi), WBC(Massimi), The Ring(Massimi)'
            ],
            [
                'boxer_id'=>'5',
                'total_fitghs'=>'61',
                'wins_(KO)'=>'56 (37)',
                'losses_(KO)'=>'5 (1)',
                'draws'=>'0',
                'titles_won'=>'WBA(Massimi), WBC(Massimi), The Ring(Massimi)'
            ],
            [
                'boxer_id'=>'6',
                'total_fitghs'=>'46',
                'wins_(KO)'=>'46 (32)',
                'losses_(KO)'=>'0',
                'draws'=>'0',
                'titles_won'=>'WBO(Super medi), IBF(Super medi), WBC(Super medi), WBA(Super medi), The Ring(Super medi), The Ring(Mediomassimi)'
            ],
            [
                'boxer_id'=>'7',
                'total_fitghs'=>'31',
                'wins_(KO)'=>'30 (21)',
                'losses_(KO)'=>'0',
                'draws'=>'1',
                'titles_won'=>'IBF(Massimi), IBO(Massimi), WBO(Massimi), WBA(Massimi), WBC(Massimi), The Ring(Massimi)'
            ],
            [
                'boxer_id'=>'8',
                'total_fitghs'=>'50',
                'wins_(KO)'=>'50 (27)',
                'losses_(KO)'=>'0',
                'draws'=>'0',
                'titles_won'=>'WBC(Super piuma), The Ring(Leggeri), WBC(Leggeri), WBC(Super leggeri), IBF(Welter), WBC(Welter), The Ring(Welter), WBC(Superwelter), WBA(Superwelter)'
            ],
            [
                'boxer_id'=>'9',
                'total_fitghs'=>'60',
                'wins_(KO)'=>'50 (30)',
                'losses_(KO)'=>'10 (3)',
                'draws'=>'0',
                'titles_won'=>'IBF(Leggeri), WBA(Leggeri), IBO(Super Leggeri), IBC(Super Leggeri), WBU(Super Leggeri)'
            ],
            [
                'boxer_id'=>'10',
                'total_fitghs'=>'71',
                'wins_(KO)'=>'62 (39)',
                'losses_(KO)'=>'7 (3)',
                'draws'=>'2',
                'titles_won'=>'WBC(Mosca), IBF(Super gallo), The Ring(piuma), WBC(Super piuma), The Ring(Super piuma), WBC(Leggeri), The Ring(Super leggeri), WBC(Super welter), WBO(Welter), WBA(Welter)'
            ],
        ];
        foreach ($matches as $match) {
            $newMatch = new BoxerMatch;
            $newMatch->fill($match);
            $newMatch->save();
        }
    }
}
