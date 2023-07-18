<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Arreglo con todas las categorias
        $categories =["Fruits and vegetables", "Meat and fish", "Beverages"];

        // Inserto cada elemento del arreglo en la tabla "categories"
        foreach ($categories as $category){
            DB::table("categories")->insert([
              "name" => $category
            ]);
        }

       // Ejecuto el factory que crea los items
       Item::factory(15)->create();
    }
}
