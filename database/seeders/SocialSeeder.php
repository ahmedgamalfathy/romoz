<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Social::create([
            "title"=>'الفيسبول',
            "link"=>'https://www.facebook.com/?locale=ar_AR'
        ]);
        Social::create([
            "title"=>'الواتساب',
            "link"=>'https://web.whatsapp.com/'
        ]);
        Social::create([
            "title"=>'التليجرام',
            "link"=>'https://web.telegram.org/k/'
        ]);
        Social::create([
            "title"=>'التويتر',
            "link"=>'https://x.com/?lang=ar'
        ]);
    }
}
