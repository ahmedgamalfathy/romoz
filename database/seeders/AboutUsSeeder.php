<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {//title , img, des
         AboutUs::create([
          'title'=>"مؤسسة زموز للتكنولوجيا والمعلومات",
          'des'=>"نحن فريق من الخبراء في البرمجة التصميم والتسويق
          والتسويق الالكتروني تقدم لك خدمات مبتكره ومتطوره",
          'img'=>"/imagefake/2.png"
         ]);
    }
}
