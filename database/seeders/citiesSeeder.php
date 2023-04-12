<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class citiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->truncate();  //delete all the records from the cities table
        DB::table('cities')->insert([
            ['city' => 'Agadir'],
            ['city' => 'Al Hoceima'],
            ['city' => 'Asilah'],
            ['city' => 'Azemmour'],
            ['city' => 'Azrou'],
            ['city' => 'Ben Guerir'],
            ['city' => 'Beni Mellal'],
            ['city' => 'Berkane'],
            ['city' => 'Berrechid'],
            ['city' => 'Boujdour'],
            ['city' => 'Bouskoura'],
            ['city' => 'Casablanca'],
            ['city' => 'Chefchaouen'],
            ['city' => 'El Hajeb'],
            ['city' => 'El Jadida'],
            ['city' => 'Errachidia'],
            ['city' => 'Essaouira'],
            ['city' => 'Fes'],
            ['city' => 'Fnideq'],
            ['city' => 'Fquih Ben Salah'],
            ['city' => 'Guelmim'],
            ['city' => 'Guercif'],
            ['city' => 'Ifrane'],
            ['city' => 'Imzouren'],
            ['city' => 'Inezgane'],
            ['city' => 'Jorf'],
            ['city' => 'Kenitra'],
            ['city' => 'Khemisset'],
            ['city' => 'Khenifra'],
            ['city' => 'Khouribga'],
            ['city' => 'Laayoune'],
            ['city' => 'Larache'],
            ['city' => 'Marrakesh'],
            ['city' => 'Martil'],
            ['city' => 'Mediouna'],
            ['city' => 'Meknes'],
            ['city' => 'Midelt'],
            ['city' => 'Mohammedia'],
            ['city' => 'Nador'],
            ['city' => 'Oualidia'],
            ['city' => 'Ouarzazate'],
            ['city' => 'Ouazzane'],
            ['city' => 'Oued Zem'],
            ['city' => 'Oujda'],
            ['city' => 'Rabat'],
            ['city' => 'Safi'],
            ['city' => 'Sale'],
            ['city' => 'Sefrou'],
            ['city' => 'Settat'],
            ['city' => 'Sidi Bennour'],
            ['city' => 'Sidi Ifni'],
            ['city' => 'Sidi Kacem'],
            ['city' => 'Sidi Slimane'],
            ['city' => 'Skhirate'],
            ['city' => 'Tafraout'],
            ['city' => 'Tan-Tan'],
            ['city' => 'Tangier'],
            ['city' => 'Taounate'],
            ['city' => 'Taourirt'],
            ['city' => 'Taroudant'],
            ['city' => 'Taza'],
            ['city' => 'Temara'],
            ['city' => 'Tetouan'],
            ['city' => 'Tifelt'],
            ['city' => 'Tiznit'],
            ['city' => 'Youssoufia'],
            ['city' => 'Zagora'],
		]);
    }
}
