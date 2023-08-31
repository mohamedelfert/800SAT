<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data['site_name_ar'] = '800 SAT';
        $data['site_name_en'] = '800 SAT';
        $data['logo'] = 'logo.jpg';
        $data['icon'] = 'icon.jpg';
        $data['cover'] = 'cover.jpg';
        $data['email'] = 'info@800sat.com';
        $data['phone'] = '01153225410';
        $data['main_lang'] = 'arabic';
        $data['description'] = '800 SAT Center';
        $data['keywords'] = '800sat';
        $data['status'] = 'open';
        $data['message_maintenance'] = 'Now Site In Maintenance Try Again Later';

        DB::table('settings')->insert($data);
    }
}
