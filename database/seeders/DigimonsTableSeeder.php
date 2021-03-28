<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DigimonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('digimons')->delete();
        
        DB::table('digimons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Angewomon',
                'image' => 'ultimate/Angewomon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Armormon',
                'image' => 'ultimate/Armormon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Digitamamon',
                'image' => 'ultimate/Digitamamon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'GrapLeomon',
                'image' => 'ultimate/GrapLeomon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Kyukimon',
                'image' => 'ultimate/Kyukimon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'MagnaAngemon',
                'image' => 'ultimate/MagnaAngemon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'MetalGreymon',
                'image' => 'ultimate/MetalGreymon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Myotismon',
                'image' => 'ultimate/Myotismon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Paildramon',
                'image' => 'ultimate/Paildramon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'SkullGreymon',
                'image' => 'ultimate/SkullGreymon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Taomon',
                'image' => 'ultimate/Taomon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'WarGrowlmon',
                'image' => 'ultimate/WarGrowlmon_b.jpg',
                'level_id' => 3,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Beelzemon',
                'image' => 'mega/Beelzemon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'BlackWarGreymon',
                'image' => 'mega/BlackWarGreymon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Cannondramon',
                'image' => 'mega/Cannondramon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Diaboromon',
                'image' => 'mega/Diaboromon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Gallantmon',
                'image' => 'mega/Gallantmon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'GranKuwagamon',
                'image' => 'mega/GranKuwagamon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'GuardiAngemon',
                'image' => 'mega/GuardiAngemon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Imperialdramon DM',
                'image' => 'mega/Imperialdramon_DM_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Imperialdramon FM',
                'image' => 'mega/Imperialdramon_FM_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Imperialdramon PM',
                'image' => 'mega/Imperialdramon_PM_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'MaloMyotismon',
                'image' => 'mega/MaloMyotismon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Marsmon',
                'image' => 'mega/Marsmon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'MegaGargomon',
                'image' => 'mega/MegaGargomon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'MetalGarurumon',
                'image' => 'mega/MetalGarurumon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Omnimon',
                'image' => 'mega/Omnimon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Phoenixmon',
                'image' => 'mega/Phoenixmon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Rosemon',
                'image' => 'mega/Rosemon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Sakuyamon',
                'image' => 'mega/Sakuyamon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Seraphimon',
                'image' => 'mega/Seraphimon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'WarGreymon',
                'image' => 'mega/WarGreymon_b.jpg',
                'level_id' => 4,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Agumon',
                'image' => 'rookie/Agumon_b.jpg',
                'level_id' => 1,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Guilmon',
                'image' => 'rookie/Guilmon_b.jpg',
                'level_id' => 1,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Kotemon',
                'image' => 'rookie/Kotemon_b.jpg',
                'level_id' => 1,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Kumamon',
                'image' => 'rookie/Kumamon_b.jpg',
                'level_id' => 1,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Monmon',
                'image' => 'rookie/Monmon_b.jpg',
                'level_id' => 1,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Patamon',
                'image' => 'rookie/Patamon_b.jpg',
                'level_id' => 1,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Renamon',
                'image' => 'rookie/Renamon_b.jpg',
                'level_id' => 1,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Veemon',
                'image' => 'rookie/Veemon_b.jpg',
                'level_id' => 1,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Angemon',
                'image' => 'champion/Angemon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Devimon',
                'image' => 'champion/Devimon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Dinohyumon',
                'image' => 'champion/Dinohyumon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'ExVeemon',
                'image' => 'champion/ExVeemon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Greymon',
                'image' => 'champion/Greymon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Grizzlymon',
                'image' => 'champion/Grizzlymon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Growlmon',
                'image' => 'champion/Growlmon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Hookmon',
                'image' => 'champion/Hookmon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Kabuterimon',
                'image' => 'champion/Kabuterimon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Kyubimon',
                'image' => 'champion/Kyubimon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Stingmon',
                'image' => 'champion/Stingmon_b.jpg',
                'level_id' => 2,
                'created_at' => '2021-03-23 02:25:14',
                'updated_at' => '2021-03-23 02:25:14',
            ),
        ));
        
        
    }
}