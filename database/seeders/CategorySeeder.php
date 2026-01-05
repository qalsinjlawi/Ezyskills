<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Cloud Computing', 'slug' => 'cloud-computing', 'icon' => '☁️', 'color' => 'orange', 'order' => 1],
            ['name' => 'Cyber Security', 'slug' => 'cyber-security', 'icon' => '🔒', 'color' => 'gray', 'order' => 2],
            ['name' => 'DevOps', 'slug' => 'devops', 'icon' => '⚙️', 'color' => 'gray', 'order' => 3],
            ['name' => 'Data Science', 'slug' => 'data-science', 'icon' => '📊', 'color' => 'gray', 'order' => 4],
            ['name' => 'Software Testing', 'slug' => 'software-testing', 'icon' => '🧪', 'color' => 'gray', 'order' => 5],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}