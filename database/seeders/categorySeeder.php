<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria_elec = new category();
        $categoria_elec->name = "electrodomestico";
        $categoria_elec->description = "esta es la categoria del electrodomesticos...";
        $categoria_elec->save();

        $categoria_elec_2 = new category();
        $categoria_elec_2->name = "electrodomestico";
        $categoria_elec_2->description = "esta es la categoria del electrodomesticos...";
        $categoria_elec_2->save();

        $categoria_elec_3 = new category();
        $categoria_elec_3->name = "electrodomestico";
        $categoria_elec_3->description = "esta es la categoria del electrodomesticos...";
        $categoria_elec_3->save();

        Category::factory(1000)->create();

    }
}
