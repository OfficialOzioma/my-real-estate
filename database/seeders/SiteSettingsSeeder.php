<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_settings')->insert([
            'key' => "site_title",
            'value' => "Real Estate",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        DB::table('site_settings')->insert([
            'key' => "logo_image",
            'value' => "202206-1434976906.png",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        DB::table('site_settings')->insert([
            'key' => "meta_discription",
            'value' => "real estate",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        DB::table('site_settings')->insert([
            'key' => "brand_title",
            'value' => "Real estate",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        DB::table('site_settings')->insert([
            'key' => "footer_content",
            'value' => "Real estate",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('site_settings')->insert([
            'key' => "site_contact",
            'value' => "070000000",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('site_settings')->insert([
            'key' => "site_email",
            'value' => "contactus@realestate.com",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}