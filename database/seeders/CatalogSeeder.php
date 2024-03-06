<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catalogs = [
            [
                'id' => '99ec102a-eba0-4aa1-8f93-3d9e79c7a4d5',
                'name' => 'Tin công ty',
                'slug' => 'tin-cong-ty',
            ],
            [
                'id' => 'c062e43e-351f-47fa-b0a6-9941bfc998e8',
                'name' => 'Tin tức',
                'slug' => 'tin-tuc',
            ]
        ];

        foreach ($catalogs as $catalog) {
            Catalog::create($catalog);
        }
    }
}
