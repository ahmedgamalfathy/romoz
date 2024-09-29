<?php

namespace Database\Seeders;

use App\Models\Service;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Specify the folder containing the images
                // $imagesFolder = public_path('images');

                // // Get all image filenames from the folder
                // $images = File::files($imagesFolder);

                // // Loop over each image and insert it into the database
                // foreach ($images as $image) {
                //     DB::table('your_table_name')->insert([
                //         'img' => 'images/' . $image->getFilename(), // Store the relative path
                //         // Include other columns as necessary
                //     ]);
                // }
        $collections=[
            [
                "title"=>'تصميم المواقع',
                'img'=>'imagefake/3.jpeg'
            ],
            [
                "title"=>'التسويق الالكتروني',
            ],
            [
                "title"=>'تصميم تطبيقات الجوال',
                'img'=>'imagefake/4.jpeg'
            ],
            [
                "title"=>'تصميم مواقع الشركات',
            ],

        ];
     foreach ($collections as $data) {
           Service::create($data);
     }
    }
}
