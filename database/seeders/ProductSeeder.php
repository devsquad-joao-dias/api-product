<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->insert([
            ...$this->products(),
        ]);
    }

    public function products(): array
    {
        return [
            [
                'name' => 'Caramel Macchiato',
                'category_id' => 1,
                'description' => 'Steamed milk with vanilla-flavored syrup is marked with espresso and topped with caramel drizzle for an oh-so-sweet finish.',
                'price' => 4.50,
                'image' => 'https://images.pexels.com/photos/5305639/pexels-photo-5305639.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Cappuccino',
                'category_id' => 1,
                'description' => 'Dark, rich espresso lies in wait under a smoothed and stretched layer of thick milk foam.',
                'price' => 3.70,
                'image' => 'https://images.pexels.com/photos/302904/pexels-photo-302904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Latte',
                'category_id' => 1,
                'description' => 'Our smooth signature Espresso Roast with rich steamed milk and a hint of sweetness.',
                'price' => 4.20,
                'image' => 'https://images.pexels.com/photos/3704460/pexels-photo-3704460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Espresso',
                'category_id' => 1,
                'description' => 'Finely ground coffee beans brewed under pressure with near-boiling water.',
                'price' => 2.50,
                'image' => 'https://images.pexels.com/photos/324028/pexels-photo-324028.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Mocha',
                'category_id' => 1,
                'description' => 'Bittersweet mocha sauce and steamed milk are combined with rich espresso, then topped with sweetened whipped cream.',
                'price' => 4.80,
                'image' => 'https://images.pexels.com/photos/3206433/pexels-photo-3206433.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Americano',
                'category_id' => 1,
                'description' => 'Espresso shots topped with hot water create a light layer of crema culminating in this wonderfully rich cup with depth and nuance.',
                'price' => 3.00,
                'image' => 'https://images.pexels.com/photos/4195602/pexels-photo-4195602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Flat White',
                'category_id' => 1,
                'description' => 'Ristretto shots of espresso, with rich, creamy steamed milk and a velvety layer of foam.',
                'price' => 4.50,
                'image' => 'https://images.pexels.com/photos/3371220/pexels-photo-3371220.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Cold Brew',
                'category_id' => 1,
                'description' => 'Slow-steeped, the Cold Brew is made from our custom blend of beans for a smoother flavor.',
                'price' => 3.50,
                'image' => 'https://images.pexels.com/photos/2067404/pexels-photo-2067404.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Frappuccino',
                'category_id' => 1,
                'description' => 'Coffee is blended with ice, then topped with whipped cream.',
                'price' => 5.20,
                'image' => 'https://images.pexels.com/photos/8743862/pexels-photo-8743862.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Iced Tea',
                'category_id' => 1,
                'description' => 'Iced tea shaken with flavors and lemonade over ice for a refreshing lift.',
                'price' => 3.20,
                'image' => 'https://images.pexels.com/photos/792613/pexels-photo-792613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Chocolate Cupcake',
                'category_id' => 3,
                'description' => 'Decadent chocolate cupcake topped with creamy chocolate frosting.',
                'price' => 2.5,
                'image' => 'https://images.pexels.com/photos/15172852/pexels-photo-15172852/free-photo-of-chocolate-cupcake-with-whipped-cream-and-a-strawberry.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Vanilla Cupcake',
                'category_id' => 3,
                'description' => 'Moist vanilla cupcake with fluffy vanilla buttercream frosting.',
                'price' => 2.2,
                'image' => 'https://images.pexels.com/photos/4109784/pexels-photo-4109784.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Red Velvet Cupcake',
                'category_id' => 3,
                'description' => 'Classic red velvet cupcake with smooth cream cheese frosting.',
                'price' => 2.8,
                'image' => 'https://images.pexels.com/photos/10319189/pexels-photo-10319189.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Strawberry Cupcake',
                'category_id' => 3,
                'description' => 'Delicious strawberry cupcake topped with fresh strawberry icing.',
                'price' => 3.0,
                'image' => 'https://images.pexels.com/photos/4109787/pexels-photo-4109787.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Croissant',
                'category_id' => 4,
                'description' => 'Buttery and flaky pastry, perfect for breakfast or a snack.',
                'price' => 2.0,
                'image' => 'https://images.pexels.com/photos/3892469/pexels-photo-3892469.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Bagel',
                'category_id' => 4,
                'description' => 'Soft and chewy bagel, toasted to perfection and served with cream cheese.',
                'price' => 2.5,
                'image' => 'https://images.pexels.com/photos/263116/pexels-photo-263116.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Muffin',
                'category_id' => 4,
                'description' => 'Moist and flavorful muffin, available in various flavors like blueberry or banana nut.',
                'price' => 2.2,
                'image' => 'https://images.pexels.com/photos/1657343/pexels-photo-1657343.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Sandwich',
                'category_id' => 4,
                'description' => 'Freshly made sandwich with premium ingredients such as turkey, ham, or vegetables.',
                'price' => 5.0,
                'image' => 'https://images.pexels.com/photos/1647163/pexels-photo-1647163.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Salad',
                'category_id' => 4,
                'description' => 'Healthy and delicious salad with fresh greens, vegetables, and your choice of dressing.',
                'price' => 6.5,
                'image' => 'https://images.pexels.com/photos/1213710/pexels-photo-1213710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Quiche',
                'category_id' => 4,
                'description' => 'Savory quiche filled with eggs, cheese, and your choice of fillings such as spinach, bacon, or mushrooms.',
                'price' => 4.5,
                'image' => 'https://images.pexels.com/photos/5852260/pexels-photo-5852260.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Cookie',
                'category_id' => 2,
                'description' => 'Soft and chewy cookie, available in classic flavors like chocolate chip or oatmeal raisin.',
                'price' => 1.5,
                'image' => 'https://images.pexels.com/photos/230325/pexels-photo-230325.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Cake Slice',
                'category_id' => 2,
                'description' => 'Indulgent cake slice with layers of moist cake and creamy frosting, perfect for satisfying your sweet tooth.',
                'price' => 4.0,
                'image' => 'https://images.pexels.com/photos/1854652/pexels-photo-1854652.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Yogurt Parfait',
                'category_id' => 2,
                'description' => 'Creamy yogurt layered with granola and fresh fruit for a wholesome and delicious treat.',
                'price' => 3.5,
                'image' => 'https://images.pexels.com/photos/4696279/pexels-photo-4696279.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
            [
                'name' => 'Brownie',
                'category_id' => 2,
                'description' => 'Rich and fudgy brownie, loaded with chocolate goodness and topped with nuts or frosting.',
                'price' => 2.8,
                'image' => 'https://images.pexels.com/photos/3026804/pexels-photo-3026804.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            ],
        ];
    }
}
