<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'image' => 'https://www.richardkmorgan.com/wp-content/uploads/altered-carbon_UK_Pb.jpg',
            'title' => 'Altered Carbon',
            'description' => 'Four hundred years from now mankind is strung out across a region of interstellar space inherited from an ancient civilization discovered on Mars. The colonies are linked together by the occasional sublight colony ship voyages and hyperspatial data-casting. Human consciousness is digitally freighted between the stars and downloaded into bodies as a matter of course.',
            'price' => 12
        ]);
        $product->save();
    }
}
