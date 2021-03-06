<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=CategorySeeder
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "categoryId" => 101,
                "categoryName" => "Facebook",
                "subCategoryName" => null
            ],
            [
                "categoryId" => 101,
                "categoryName" => "Facebook",
                "subCategoryName" => "Picture Like"
            ],
            [
                "categoryId" => 101,
                "categoryName" => "Facebook",
                "subCategoryName" => "Page Like"
            ],
            [
                "categoryId" => 102,
                "categoryName" => "Instagram",
                "subCategoryName" => null
            ],
            [
                "categoryId" => 102,
                "categoryName" => "Instagram",
                "subCategoryName" => "Follow"
            ],
            [
                "categoryId" => 102,
                "categoryName" => "Instagram",
                "subCategoryName" => "Like"
            ]
        ];

        DB::table('ProjectCategories')->truncate();

        foreach ($categories as $key => $val) {

            DB::table('ProjectCategories')->insert([
                "categoryId" => $val['categoryId'],
                "categoryName" => $val['categoryName'],
                "subCategoryName" => $val['subCategoryName']
            ]);
        }
    }
}
