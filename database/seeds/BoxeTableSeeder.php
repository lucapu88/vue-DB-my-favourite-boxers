<?php
use App\Boxer;
use Illuminate\Database\Seeder;

class BoxeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boxers = [
            [
             'name'=> 'Mike Tyson',
             'birthday'=> '1966-06-30',
             'poster'=> 'https://i.pinimg.com/originals/63/bd/bb/63bdbba86c193493bf691e07ffd3f025.jpg',
             'description'=> "Soprannominato 'Iron Mike','The Baddest Man on the Planet', 'Kid Dynamite' e 'King Kong', è considerato uno dei migliori pesi massimi nella storia del pugilato. Tra gli atleti più riconoscibili e pagati degli anni ottanta e novanta, nonostante l'altezza non elevata per la categoria (178 cm), grazie alla notevole prestanza fisica è stato uno dei picchiatori più efficaci e temibili nella storia della divisione."
            ],
            [
             'name'=> 'Roy Jones Jr',
             'birthday'=> '1969-01-16',
             'poster'=> 'https://dartortorromeo.files.wordpress.com/2015/12/403f0091b26f24d04725de3b32c50722.jpg',
             'description'=> "Soprannominato Junior, Captain Hook, RJJ o RJJR, ha vinto come pugile professionista titoli mondiali in quattro categorie di peso. Ha vinto la medaglia d'argento alle Olimpiadi di Seul nel 1988.Annoverato tra i migliori pugili di sempre, Jones è l'unico nella storia della disciplina ad aver iniziato la carriera nei pesi medioleggeri e ad aver vinto un titolo mondiale dei pesi massimi."
            ],
            [
             'name'=> 'Rocky Marciano',
             'birthday'=> '1923-09-01',
             'poster'=> 'https://m.media-amazon.com/images/I/41BPXz3Y-kL.jpg',
             'description'=> "Soprannominato 'The Brockton Blockbuster' ('Il bombardiere di Brockton'), è ritenuto essere il migliore pugile di tutti i tempi da molti esperti, fu campione del mondo dei pesi massimi 1952-1956 e fu l'unico peso massimo della storia a ritirarsi imbattuto, difendendo il titolo sei volte."
            ],
            [
             'name'=> 'Sonny Liston',
             'birthday'=> '1932-05-08',
             'poster'=> 'https://knpr.org/sites/default/files/public/styles/detail_small/public/images/story/ap_070314046346.jpg?itok=a5tjAK-T',
             'description'=> "campione mondiale dei pesi massimi dal 1962 al 1964 e riconosciuto dalla International Boxing Hall of Fame fra i più grandi pugili di ogni tempo. Protagonista dell'età d'oro della boxe, ancora pesantemente condizionata dalla mafia, Sonny Liston è stato il primo a combattere con Muhammad Ali in un match con in palio il titolo mondiale."
            ],
            [
             'name'=> 'Muhammad Ali',
             'birthday'=> '1942-01-17',
             'poster'=> 'https://www.ladige.it/sites/www.ladige.it/files/al%C3%AC_1.jpg',
             'description'=> "Sin dagli inizi di carriera, Ali si contraddistinse come una figura carismatica, controversa e polarizzante sia dentro sia fuori dal ring di pugilato. Il suo enorme impatto mediatico e soprattutto sociale non ebbe precedenti nel mondo agonistico."
            ],
            [
             'name'=> 'Joe Calzaghe',
             'birthday'=> '1972-03-23',
             'poster'=> 'https://www.southwalesargus.co.uk/resources/images/3708628.jpg?display=1&htype=0&type=responsive-gallery',
             'description'=> "Calzaghe è noto come Italian Dragon (in italiano Drago italiano) e si è ritirato imbattuto nel febbraio 2009 con un record di 46 vittorie (delle quali 32 prima del limite), diventando il terzo europeo, dopo Terry Marsh e Sven Ottke, a ritirarsi da campione del mondo imbattuto.
             Ha fatto parte della top 10 della classifica Pound for Pound di Ring Magazine, e in passato ha detenuto le corone mondiali WBO, IBF, WBC e WBA dei pesi supermedi."
            ],
            [
             'name'=> 'Tyson Fury',
             'birthday'=> '1988-08-12',
             'poster'=> 'https://www.sportphotogallery.com/content/images/cmsfiles/product/14414/14414-zoom.jpg',
             'description'=> "È due volte campione del mondo dei pesi massimi, avendo detenuto i titoli WBC, The Ring e Lineal dopo aver sconfitto Deontay Wilder nel febbraio 2020; in precedenza ha ricoperto i titoli unificati WBA (Super), IBF, WBO, IBO, The Ring e Lineal dopo aver sconfitto Wladimir Klitschko nel 2015. Con la vittoria su Wilder, Fury è diventato il terzo dei pesi massimi, dopo Floyd Patterson e Muhammad Ali, e detenere il titolo della rivista The Ring due volte, e il primo peso massimo nella storia ad aver detenuto i titoli della rivista WBA (Super), WBC, IBF, WBO e The Ring. A partire da aprile 2020, si è classificato come il migliore del mondo dei pesi massimi attiva da ESPN."
            ],
            [
             'name'=> 'Floyd Mayweather Jr.',
             'birthday'=> '1977-02-24',
             'poster'=> 'https://media.spokesman.com/photos/2014/05/04/spt_4_mayweather_mug.jpg',
             'description'=> "Soprannominato Pretty Boy Floyd e Money Mayweather, ha vinto la medaglia di bronzo alle Olimpiadi di Atlanta 1996. Da pugile professionista è stato campione del mondo WBC in cinque categorie differenti di peso ed è stato nominato da Ring Magazine Fighter Of The Year nel 1998 e nel 2007. Dal 18 luglio 2005 al 2 giugno 2008 è stato al vertice della classifica pound for pound di Ring Mazagine. Nel 2017 ha partecipato al suo ultimo incontro contro Conor McGregor finendo così la carriera con il record di 50 vittorie e nessuna sconfitta."
            ],
            [
             'name'=> 'Vinny Paz',
             'birthday'=> '1962-12-16',
             'poster'=> 'https://media.gettyimages.com/photos/vinny-pazienza-poses-for-a-portrait-with-his-belt-in-1996-in-new-york-picture-id160061892?s=612x612',
             'description'=> "Nome completo Vincenzo Edward Pazienza, diviene campione del mondo dei pesi leggeri IBF al primo tentativo, il 7 giugno 1987, battendo Greg Haugen a Providence dopo 15 round. A causa di un incidente stradale, è costretto a lasciare il titolo e i medici gli annunciano che non avrebbe più combattuto. Nonostante ciò, dopo aver indossato un collare per sei mesi, nove mesi dopo l'incidente, torna sul ring e batte il futuro campione dei pesi superwelter WBC Luis Santana."
            ],
            [
             'name'=> 'Manny Pacquiao',
             'birthday'=> '1978-12-17',
             'poster'=> 'https://i.pinimg.com/originals/05/5e/f3/055ef386c2ed959856a90ca00668d126.jpg',
             'description'=> "E' il primo e unico campione mondiale in otto differenti classi di peso, dove ha vinto dodici titoli iridati, nonché il primo a vincere il campionato lineare in cinque diverse classi. Soprannominato 'Pac-Man', 'Fighting Pride of the Philippines' o 'Ang Pambansang Kamao' ('Il Pugno Nazionale'), è stato nominato 'pugile del decennio' (2000–2010) dalle associazioni Boxing Writers Association of America (BWAA), World Boxing Council (WBC) e World Boxing Organization (WBO). Pacquiao è inoltre vincitore dei premi pugile dell'anno, assegnato da The Ring e dalla BWAA nel 2006, 2008 e 2009, e miglior pugile, assegnatogli dalla ESPY nel 2009 e 2011. Il portale BoxRec lo ha nominato il miglior pugile asiatico di tutti i tempi. All'età di 40 anni e 215 giorni Pacquiao diviene il campione del mondo più anziano nella storia dei pesi welter e il quinto in assoluto nella storia del pugilato (dopo Hopkins, Foreman, Malinga e Fitzsimmons) sconfiggendo l'imbattuto campione regolare Keith Thurman."
            ],
        ];
        foreach ($boxers as $boxer) {
            $newBoxer = new Boxer;
            $newBoxer->fill($boxer);
            $newBoxer->save();
        }
    }
}
