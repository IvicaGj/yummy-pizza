<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Capricciosa',
            'description' => 'mozzarella, tomato, mushrooms, artichokes, cooked ham, olives, olive oil',
            'image' => 'https://www.rachaelraymag.com/.image/c_fit%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_620/MTQ5MDA3NzI1OTgyOTE4MzIz/capricciosa-pizza-102694414.jpg', 
            'price' => 25,
        ]);

        Product::create([
            'name' => 'Pepperoni',
            'description' => 'tomato sauce, mozzarella, peperoni',
            'image' => 'https://tastesbetterfromscratch.com/wp-content/uploads/2019/03/Pepperoni-Pizza-10-500x500.jpg', 
            'price' => 23,
        ]);

        Product::create([
            'name' => 'Calzone',
            'description' => 'tomato sauce, mozzarella, mushrooms, ham, eggs',
            'image' => 'https://therecipecritic.com/wp-content/uploads/2020/02/calzone-7-500x500.jpg', 
            'price' => 20,
        ]);

        Product::create([
            'name' => 'Margherita',
            'description' => 'tomato sauce, mozzarella',
            'image' => 'https://www.veganricha.com/wp-content/uploads/2019/09/Vegan-Margherita-Pizza-veganricha-9522-001-500x500.jpg', 
            'price' => 18,
        ]);

        Product::create([
            'name' => 'Napoletana',
            'description' => 'tomato sauce, anchovies, olives, capers',
            'image' => 'https://www.okokorecepten.nl/i/recepten/kookboeken/2008/de-zilveren-lepel/pizza-napolitana-500.jpg', 
            'price' => 26,
        ]);

        Product::create([
            'name' => 'Caprese',
            'description' => 'mozzarella, tomatoes, basil, olive oil',
            'image' => 'https://theclevermeal.com/wp-content/uploads/2020/03/caprese-pizza-2-500x500.jpg', 
            'price' => 22,
        ]);

        Product::create([
            'name' => 'New York style',
            'description' => 'tomato sauce, mozzarella',
            'image' => 'https://assets.wsimgs.com/wsimgs/ab/images/dp/recipe/202032/0061/img45l.jpg', 
            'price' => 23,
        ]);

        Product::create([
            'name' => 'Marinara',
            'description' => 'tomato sauce, garlic, oregano',
            'image' => 'https://s23991.pcdn.co/wp-content/uploads/fly-images/113192/pizza-marinara-fp-400x400-c.jpg', 
            'price' => 24,
        ]);

        Product::create([
            'name' => 'Hawaiian',
            'description' => 'tomato sauce, ham, pineapple',
            'image' => 'https://www.crazyforcrust.com/wp-content/uploads/2019/10/Hawaiian-Pizza-recipe-500x500.jpg', 
            'price' => 27,
        ]);

        Product::create([
            'name' => 'Quattro Formaggi',
            'description' => 'tomato sauce, mozzarella, parmigiano-reggiano, blue cheese, goat cheese',
            'image' => 'https://www.insidetherustickitchen.com/wp-content/uploads/2020/07/Quattro-formaggi-pizza-square-Inside-the-rustic-kitchen-500x500.jpg', 
            'price' => 30,
        ]);
    }
}
