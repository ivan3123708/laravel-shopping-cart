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
            'image' => 'https://images.gr-assets.com/books/1531415180l/40792913.jpg',
            'title' => 'Altered Carbon',
            'description' => 'Four hundred years from now mankind is strung out across a region of interstellar space inherited from an ancient civilization discovered on Mars. The colonies are linked together by the occasional sublight colony ship voyages and hyperspatial data-casting. Human consciousness is digitally freighted between the stars and downloaded into bodies as a matter of course.',
            'price' => 18
        ]);
        $product->save();

        $product = new \App\Product([
            'image' => 'https://images.gr-assets.com/books/1389758530l/279561.jpg',
            'title' => 'Broken Angels',
            'description' => 'Welcome back to the brash, brutal new world of the twenty-fifth century: where global politics isn’t just for planet Earth anymore; and where death is just a break in the action, thanks to the techno-miracle that can preserve human consciousness and download it into one new body after another. ',
            'price' => 20
        ]);
        $product->save();
        
        $product = new \App\Product([
            'image' => 'https://images.gr-assets.com/books/1388198991l/29397.jpg',
            'title' => 'Woken Furies',
            'description' => 'Takeshi Kovacs has come home. Home to Harlan\'s World. An ocean planet with only 5 percent of its landmass poking above the dangerous and unpredictable seas. Try and get above the weather in anything more sophisticated than a helicopter and the Martian orbital platforms will burn you out of the sky.',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'image' => 'https://images.gr-assets.com/books/1281419771l/888628.jpg',
            'title' => 'Neuromancer',
            'description' => 'The Matrix is a world within the world, a global consensus- hallucination, the representation of every byte of data in cyberspace . . .',
            'price' => 17
        ]);
        $product->save();

        $product = new \App\Product([
            'image' => 'https://images.gr-assets.com/books/1390358225l/22200.jpg',
            'title' => 'Count Zero',
            'description' => 'A corporate mercenary wakes in a reconstructed body, a beautiful woman by his side. Then Hosaka Corporation reactivates him, for a mission more dangerous than the one he’s recovering from: to get a defecting chief of R&D—and the biochip he’s perfected—out intact. But this proves to be of supreme interest to certain other parties—some of whom aren’t remotely human...',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'image' => 'https://images.gr-assets.com/books/1374778887l/154091.jpg',
            'title' => 'Mona Lisa Overdrive',
            'description' => 'Since childhood, Angie has been able to tap into cyberspace without a computer. Now, from inside cyberspace, a kidnapping plot is masterminded by a phantom entity who has plans for Mona, Angie, and all humanity, plans that cannot be controlled... or even known. And behind the intrigue lurks the shadowy Yakuza, the powerful Japanese underworld, whose leaders ruthlessly manipulate people and events to suit their own purposes... or so they think.',
            'price' => 15
        ]);
        $product->save();
    }
}
