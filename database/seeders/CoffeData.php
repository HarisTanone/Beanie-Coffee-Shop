<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Hero;
use App\Models\Other;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Support\Str;

class CoffeData extends Seeder
{
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'email_verified_at' => now(),
        ]);

        // Create Hero Section
        Hero::create([
            'title' => 'Special Coffee',
            'description' => 'Morbi justo vel clam non leo elemrtum massa. Molestie ipsum confimentum egestas vitae ut cras aenan enim. Laoreet odio adipiscing auctor scelerisque phasellus nisi faucibus.',
            'image_url' => 'images/hero-banner.jpg',
        ]);

        // Create Categories
        $categories = [
            'Hot Coffee',
            'Iced Coffee',
            'Espresso Based',
            'Non-Coffee',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        // Create Products
        $products = [
            [
                'name' => 'Americano',
                'price' => 25,
                'description' => 'Classic espresso diluted with hot water',
                'image_url' => 'images/products/americano.jpg',
            ],
            [
                'name' => 'Cappuccino',
                'price' => 30,
                'description' => 'Espresso topped with foamy milk',
                'image_url' => 'images/products/cappuccino.jpg',
            ],
            [
                'name' => 'Latte',
                'price' => 28,
                'description' => 'Espresso with steamed milk and light foam',
                'image_url' => 'images/products/latte.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        // Create Blog Posts
        $blogs = [
            [
                'title' => 'The Art of Coffee Making',
                'content' => 'Discover the secrets behind making the perfect cup of coffee...',
                'image_url' => 'images/blogs/coffee-art.jpg',
            ],
            [
                'title' => 'Coffee Bean Origins',
                'content' => 'Learn about different coffee beans from around the world...',
                'image_url' => 'images/blogs/coffee-beans.jpg',
            ],
            [
                'title' => 'Brewing Methods Compared',
                'content' => 'An in-depth look at different brewing methods...',
                'image_url' => 'images/blogs/brewing-methods.jpg',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }

        // Create Testimonials/Quotes
        $quotes = [
            [
                'quote' => 'Best coffee I\'ve ever had!',
                'author' => 'John Doe',
            ],
            [
                'quote' => 'Amazing atmosphere and great service',
                'author' => 'Jane Smith',
            ],
            [
                'quote' => 'Perfect place for coffee lovers',
                'author' => 'Mike Johnson',
            ],
        ];

        foreach ($quotes as $quote) {
            Quote::create($quote);
        }

        // Create Instagram Posts
        $instagramPosts = [
            [
                'title' => 'Morning Coffee Ritual',
                'description' => 'Start your day right with our signature blend',
                'image_url' => 'images/instagram/coffee1.jpg',
                'category' => 'ig',
            ],
            [
                'title' => 'Latte Art',
                'description' => 'Our baristas create beautiful designs',
                'image_url' => 'images/instagram/coffee2.jpg',
                'category' => 'ig',
            ],
            [
                'title' => 'Coffee and Books',
                'description' => 'Perfect combination for a relaxing afternoon',
                'image_url' => 'images/instagram/coffee3.jpg',
                'category' => 'ig',
            ],
            [
                'title' => 'Coffee Shop Vibes',
                'description' => 'Cozy atmosphere for everyone',
                'image_url' => 'images/instagram/coffee4.jpg',
                'category' => 'ig',
            ],
            [
                'title' => 'Fresh Beans',
                'description' => 'Freshly roasted coffee beans',
                'image_url' => 'images/instagram/coffee5.jpg',
                'category' => 'ig',
            ],
            [
                'title' => 'Coffee Making Process',
                'description' => 'Behind the scenes of coffee making',
                'image_url' => 'images/instagram/coffee6.jpg',
                'category' => 'ig',
            ],
        ];

        foreach ($instagramPosts as $post) {
            Other::create($post);
        }

        // Create Product Categories Relations
        $products = Product::all();
        $categories = Category::all();

        foreach ($products as $product) {
            ProductCategory::create([
                'product_id' => $product->id,
                'category_id' => $categories->random()->id,
            ]);
        }
    }
}
