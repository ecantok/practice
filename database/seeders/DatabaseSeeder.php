<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Penembak Jitu',
            'email' => 'pj@email.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Sharp Shooter',
            'email' => 'sharpshooter@email.com',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'First Title',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'first-title',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos delectus animi quasi amet illum quas tempore consequuntur mollitia!',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos delectus animi quasi amet illum quas tempore consequuntur mollitia!</p><p>Dolor minima vitae corporis impedit consequuntur repellat ullam delectus odio animi. Voluptates sequi voluptate facilis, vitae, error unde nesciunt tempore culpa maiores cumque quaerat.</p><p>Culpa non debitis, iusto quibusdam saepe praesentium natus suscipit architecto nobis dolores nemo accusamus perferendis, officiis voluptates obcaecati cupiditate? Eius sequi beatae, eum qui ipsum veritatis consequuntur.</p>'
        ]);

        Post::create([
            'title'=>'Second Title',
            'slug'=>'second-title',
            'category_id' => 1,
            'user_id' => 2,
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur excepturi, nulla culpa adipisci doloremque vel libero earum quo amet deserunt repudiandae, quos, accusantium suscipit quam deleniti praesentium minima in dolor doloribus!',
            'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur excepturi, nulla culpa adipisci doloremque vel libero earum quo amet deserunt repudiandae, quos, accusantium suscipit quam deleniti praesentium minima in dolor doloribus!</p><p>Ullam debitis vel adipisci commodi, possimus similique explicabo official.</p>'
        ]);

        Post::create([
            'title' => 'Third Title',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'third-title',
            'excerpt' => 'Lorem ipsum, dolor balla reni qousan. Natus nulla dicta officia maxime, voluptatem animi aliquam esse nisi saepe ex odit velit reprehenderit eos exercitationem iste accusamus, sit harum ullam deleniti.',
            'body' => '<p>Lorem ipsum, dolor balla reni qousan. Natus nulla dicta officia maxime, voluptatem animi aliquam esse nisi saepe ex odit velit reprehenderit eos exercitationem iste accusamus, sit harum ullam deleniti.</p><p>Ea totam quas commodi aspernatur dolorum dolores sapiente laudantium, non repellendus quae incidunt veritatis nemo eum dignissimos quasi sequi vero explicabo. Iste voluptas similique at ut nisi.</p><p>Facilis repudiandae excepturi vero aut, perferendis, possimus accusamus ipsum provident sunt debitis accusantium. Harum unde, laudantium in officiis atque dolore totam ad, modi odit rerum amet suscipit, obcaecati provident beatae cum assumenda officia quaerat facilis blanditiis neque impedit optio magnam? Ipsum, libero.</p>'
        ]);

        Post::create([
            'title' => 'The Fourth Title',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'fourth-title',
            'excerpt' => 'Lorem ipsum, dolor balla reni qousan. Natus nulla dicta officia maxime, voluptatem animi aliquam esse nisi saepe ex odit velit reprehenderit eos exercitationem iste accusamus, sit harum ullam deleniti.',
            'body' => '<p>Lorem ipsum, dolor balla reni qousan. Natus nulla dicta officia maxime, voluptatem animi aliquam esse nisi saepe ex odit velit reprehenderit eos exercitationem iste accusamus, sit harum ullam deleniti.</p><p>Ea totam quas commodi aspernatur dolorum dolores sapiente laudantium, non repellendus quae incidunt veritatis nemo eum dignissimos quasi sequi vero explicabo. Iste voluptas similique at ut nisi.</p><p>Facilis repudiandae excepturi vero aut, perferendis, possimus accusamus ipsum provident sunt debitis accusantium. Harum unde, laudantium in officiis atque dolore totam ad, modi odit rerum amet suscipit, obcaecati provident beatae cum assumenda officia quaerat facilis blanditiis neque impedit optio magnam? Ipsum, libero.</p>'
        ]);
    }
}
