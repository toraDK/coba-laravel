<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Tora Digda Kristiawan',
            'email' => "toradigda@gmail.com",
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'aaaaaaaaaaaaa',
            'email' => "aaaaaaa@gmail.com",
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis officiis placeat quae accusantium quod numquam ipsam',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis officiis placeat quae accusantium quod numquam ipsam, pariatur perferendis dignissimos suscipit cupiditate quo quaerat animi eos </p><p>modi nobis soluta et magnam quasi quia dolorum eius earum. Earum accusamus, magni numquam atque asperiores consectetur veritatis deserunt quae dolore corrupti rerum vel obcaecati quaerat nam quia odit illo esse laboriosam. Distinctio eligendi qui ipsa </p><p>repellat ducimus minus at officiis ipsum sapiente atque voluptate nostrum beatae, numquam dolore officia fuga? Consectetur maiores temporibus, distinctio sunt veritatis minus? Provident perspiciatis nostrum amet fugiat deserunt distinctio natus autem suscipit ducimus illo, reiciendis, odio sapiente recusandae eum!</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'judul kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis officiis placeat quae accusantium quod numquam ipsam',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis officiis placeat quae accusantium quod numquam ipsam, pariatur perferendis dignissimos suscipit cupiditate quo quaerat animi eos </p><p>modi nobis soluta et magnam quasi quia dolorum eius earum. Earum accusamus, magni numquam atque asperiores consectetur veritatis deserunt quae dolore corrupti rerum vel obcaecati quaerat nam quia odit illo esse laboriosam. Distinctio eligendi qui ipsa </p><p>repellat ducimus minus at officiis ipsum sapiente atque voluptate nostrum beatae, numquam dolore officia fuga? Consectetur maiores temporibus, distinctio sunt veritatis minus? Provident perspiciatis nostrum amet fugiat deserunt distinctio natus autem suscipit ducimus illo, reiciendis, odio sapiente recusandae eum!</p>',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis officiis placeat quae accusantium quod numquam ipsam',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis officiis placeat quae accusantium quod numquam ipsam, pariatur perferendis dignissimos suscipit cupiditate quo quaerat animi eos </p><p>modi nobis soluta et magnam quasi quia dolorum eius earum. Earum accusamus, magni numquam atque asperiores consectetur veritatis deserunt quae dolore corrupti rerum vel obcaecati quaerat nam quia odit illo esse laboriosam. Distinctio eligendi qui ipsa </p><p>repellat ducimus minus at officiis ipsum sapiente atque voluptate nostrum beatae, numquam dolore officia fuga? Consectetur maiores temporibus, distinctio sunt veritatis minus? Provident perspiciatis nostrum amet fugiat deserunt distinctio natus autem suscipit ducimus illo, reiciendis, odio sapiente recusandae eum!</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
