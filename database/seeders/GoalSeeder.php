<?php

namespace Database\Seeders;

use App\Models\Goal;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goal::create([
            'title'=>"البرمجه الخاصة",
            'text'=>"تعني انشاء موقع ويب او موبيل "
        ]);
        Goal::create([
            'title'=>"البرمجه الخاصة",
            'text'=>"تعني انشاء موقع ويب او موبيل "
        ]);
        Goal::create([
            'title'=>"تصميم تطبيقات الجوال",
            'text'=>"تعني انشاء موقع ويب او موبيل "
        ]);
        Goal::create([
            'title'=>"تصميم مواقع الشركات",
            'text'=>"تعني انشاء موقع ويب او موبيل "
        ]);
        Goal::create([
            'title'=>"تصميم المتاجرالالكترونية",
            'text'=>"تعني انشاء موقع ويب او موبيل "
        ]);
        Goal::create([
            'title'=>"تصميم المواقع  الالكترونية",
            'text'=>"تعني انشاء موقع ويب او موبيل "
        ]);
    }
}
