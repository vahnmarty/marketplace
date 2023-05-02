<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the products to seed
        $products = [
            [
                'title' => 'Microsoft Office',
                'description' => 'A suite of productivity applications, including Word, Excel, PowerPoint, and Outlook.'
            ],
            [
                'title' => 'Google Chrome',
                'description' => 'A web browser developed by Google that combines a minimal design with sophisticated technology to make the web faster, safer, and easier.'
            ],
            [
                'title' => 'Adobe Photoshop',
                'description' => 'A graphics editing software that is widely used for image editing, retouching, and photo manipulation.'
            ],
            [
                'title' => 'Zoom',
                'description' => 'A video conferencing software that allows users to conduct virtual meetings, webinars, and online events.'
            ],
            [
                'title' => 'Slack',
                'description' => 'A team communication tool that brings together all of a team\'s messages, files, and apps in one place.'
            ],
            [
                'title' => 'GitHub',
                'description' => 'A web-based platform for version control and collaboration that enables developers to work on projects together.'
            ],
            [
                'title' => 'WordPress',
                'description' => 'A content management system that allows users to easily create and manage websites, blogs, and online stores.'
            ],
            [
                'title' => 'Adobe Illustrator',
                'description' => 'A vector graphics editor that is used to create logos, icons, typography, and other graphics.'
            ],
            [
                'title' => 'Dropbox',
                'description' => 'A cloud storage service that allows users to store and share files and folders with others.'
            ],
            [
                'title' => 'Skype',
                'description' => 'A telecommunications application that provides video chat and voice calls between computers, tablets, mobile devices, and smartwatches.'
            ]
        ];

        // Loop through the products and create a new Product model for each one
        foreach ($products as $product) {
            Product::firstOrCreate([
                'title' => $product['title'],
                'description' => $product['description'],
                'image' => 'img/default.svg'
            ]);
        }


        Product::factory(90)->create();
    }
}
