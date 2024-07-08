<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->insert(
            $this->getCategories()
        );
    }

    private function getCategories(): array
    {
        return [
            [
                'name' => 'Coffee Drinks',
                'image' => 'https://images.pexels.com/photos/3151766/pexels-photo-3151766.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Desserts',
                'image' => 'https://images.pexels.com/photos/205961/pexels-photo-205961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Cupcakes',
                'image' => 'https://images.pexels.com/photos/14105/pexels-photo-14105.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Pastries',
                'image' => 'https://images.pexels.com/photos/863014/pexels-photo-863014.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
        ];
    }
}
