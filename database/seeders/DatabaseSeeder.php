<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Reihan Manzis',
            'username'=>'reihanmanzis',
            'email'=>'reihanmanzis@gmail.com',
            'password'=>bcrypt('12345')
        ]);
        
        User::factory(5)->create();
        

        // User::create([
        //     'name'=>'Rai Revan',
        //     'email'=>'revan@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        Category::create([
            'name'=>'Game',
            'slug'=>'game'
        ]);
        Category::create([
            'name'=>'Entertainment',
            'slug'=>'entertainment'
        ]);
        Category::create([
            'name'=>'Website',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=>'Sports',
            'slug'=>'sports'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'saepe debitis explicabo perferendis accusantium? Aperiam quod eaque commodi pariatur animi voluptas harum fuga laudantium!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum cupiditate, fugit, minima reiciendis officia totam facilis sapiente reprehenderit aut consequuntur ipsa culpa sequi enim aliquid repellat numquam at, nulla perspiciatis quam quasi blanditiis </p><p>iusto recusandae maxime! Magnam, accusantium! Sunt saepe aspernatur beatae et necessitatibus. Voluptatem aut laudantium tenetur laboriosam modi voluptatum deserunt dignissimos quos impedit iste repellat consequuntur ex quaerat magnam tempora ducimus beatae, perspiciatis, eos nihil expedita inventore iure asperiores dolorem! Recusandae autem dolore</p><p> exercitationem accusamus iste rem, vitae non quam vero nam saepe debitis explicabo perferendis accusantium? Aperiam quod eaque commodi pariatur animi voluptas harum fuga laudantium!</p>',
        //     'user_id'=>1,
        //     'category_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'saepe debitis explicabo perferendis accusantium? Aperiam quod eaque commodi pariatur animi voluptas harum fuga laudantium!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum cupiditate, fugit, minima reiciendis officia totam facilis sapiente reprehenderit aut consequuntur ipsa culpa sequi enim aliquid repellat numquam at, nulla perspiciatis quam quasi blanditiis </p><p>iusto recusandae maxime! Magnam, accusantium! Sunt saepe aspernatur beatae et necessitatibus. Voluptatem aut laudantium tenetur laboriosam modi voluptatum deserunt dignissimos quos impedit iste repellat consequuntur ex quaerat magnam tempora ducimus beatae, perspiciatis, eos nihil expedita inventore iure asperiores dolorem! Recusandae autem dolore</p><p> exercitationem accusamus iste rem, vitae non quam vero nam saepe debitis explicabo perferendis accusantium? Aperiam quod eaque commodi pariatur animi voluptas harum fuga laudantium!</p>',
        //     'user_id'=>1,
        //     'category_id'=>2
        // ]);

        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'saepe debitis explicabo perferendis accusantium? Aperiam quod eaque commodi pariatur animi voluptas harum fuga laudantium!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum cupiditate, fugit, minima reiciendis officia totam facilis sapiente reprehenderit aut consequuntur ipsa culpa sequi enim aliquid repellat numquam at, nulla perspiciatis quam quasi blanditiis </p><p>iusto recusandae maxime! Magnam, accusantium! Sunt saepe aspernatur beatae et necessitatibus. Voluptatem aut laudantium tenetur laboriosam modi voluptatum deserunt dignissimos quos impedit iste repellat consequuntur ex quaerat magnam tempora ducimus beatae, perspiciatis, eos nihil expedita inventore iure asperiores dolorem! Recusandae autem dolore</p><p> exercitationem accusamus iste rem, vitae non quam vero nam saepe debitis explicabo perferendis accusantium? Aperiam quod eaque commodi pariatur animi voluptas harum fuga laudantium!</p>',
        //     'user_id'=>2,
        //     'category_id'=>1
        // ]);
    }
}
