<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //title, email, phone, type_serv, salary
        $collection=[
            [
                'title'=>"احمد جمال",
                "email"=>"ahmed@gmail.com",
                "phone"=> 01061673841,
                "type_serv"=>"خدمة  جديدة",
                "salary"=>"500"
            ],[
                'title'=>"Admin",
                "email"=>"admin@gmail.com",
                "phone"=> 01061673851,
                "type_serv"=>"خدمة  جديدة",
                "salary"=>"500"
            ],[
                'title'=>"احمد جمال",
                "email"=>"ahmed@gmail.com",
                "phone"=> 01061673861,
                "type_serv"=>"خدمة  جديدة",
                "salary"=>"500"
            ]
        ];
    foreach ($collection as $data) {
       

    }


    }
}
