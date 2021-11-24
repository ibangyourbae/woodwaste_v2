<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Store;
use App\Models\AllWood;
use App\Models\Wooddata;
use App\Models\Woodpedia;
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
            'name' => 'woodwaste admin',
            'username' => 'Woodwaste',
            'alamat' => 'Indramayu',
            'kepentingan' => 'Kepentingan',
            'no_hp' => '087834332582',
            'password' => bcrypt('Inno2021'),
            'is_admin' => 1
        ]);
        
        // Woodpedia::create([
        //     'title' => 'Masyarakat Mandiri dari Rumah Berdikari',
        //     'slug' => 'masyarakat-mandiri-dari-rumah-berdikari',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, odio culpa aliquid modi, et eius amet, pariatur cum error ipsa laudantium corporis quia! Incidunt minus tenetur debitis quis ea asperiores, nostrum sunt tempora placeat laboriosam perspiciatis repellendus exercitationem molestiae veniam earum, quasi optio quam dolorem sapiente aspernatur. Debitis dolorem, assumenda possimus, nostrum alias deserunt veritatis molestias harum modi neque doloribus recusandae ducimus. Illo soluta cupiditate aliquid nesciunt. Illo molestiae voluptates sunt ducimus molestias necessitatibus eligendi labore cumque quod rem, rerum quisquam dolor aspernatur vel odio nostrum? Odio amet laborum quae veniam numquam ut, porro praesentium veritatis! Ab et harum ad.',
        //     'link' => 'https://www.instagram.com/',
        //     'user_id' => 1
        // ]);
        // Woodpedia::create([
        //     'title' => 'Mengecat Perahu',
        //     'slug' => 'mengecat-perahu',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, odio culpa aliquid modi, et eius amet, pariatur cum error ipsa laudantium corporis quia! Incidunt minus tenetur debitis quis ea asperiores, nostrum sunt tempora placeat laboriosam perspiciatis repellendus exercitationem molestiae veniam earum, quasi optio quam dolorem sapiente aspernatur. Debitis dolorem, assumenda possimus, nostrum alias deserunt veritatis molestias harum modi neque doloribus recusandae ducimus. Illo soluta cupiditate aliquid nesciunt. Illo molestiae voluptates sunt ducimus molestias necessitatibus eligendi labore cumque quod rem, rerum quisquam dolor aspernatur vel odio nostrum? Odio amet laborum quae veniam numquam ut, porro praesentium veritatis! Ab et harum ad.',
        //     'link' => 'https://www.instagram.com/',
        //     'user_id' => 1
        // ]);
        // Woodpedia::create([
        //     'title' => 'Masyarakat Mandiri dari Rumah Berdikari',
        //     'slug' => 'masyarakat-mandiri-dari-rumah-berdikari-2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, odio culpa aliquid modi, et eius amet, pariatur cum error ipsa laudantium corporis quia! Incidunt minus tenetur debitis quis ea asperiores, nostrum sunt tempora placeat laboriosam perspiciatis repellendus exercitationem molestiae veniam earum, quasi optio quam dolorem sapiente aspernatur. Debitis dolorem, assumenda possimus, nostrum alias deserunt veritatis molestias harum modi neque doloribus recusandae ducimus. Illo soluta cupiditate aliquid nesciunt. Illo molestiae voluptates sunt ducimus molestias necessitatibus eligendi labore cumque quod rem, rerum quisquam dolor aspernatur vel odio nostrum? Odio amet laborum quae veniam numquam ut, porro praesentium veritatis! Ab et harum ad.',
        //     'link' => 'https://www.instagram.com/',
        //     'user_id' => 1
        // ]);
        // Woodpedia::create([
        //     'title' => 'Mengecat Perahu',
        //     'slug' => 'mengecat-perahu-2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, odio culpa aliquid modi, et eius amet, pariatur cum error ipsa laudantium corporis quia! Incidunt minus tenetur debitis quis ea asperiores, nostrum sunt tempora placeat laboriosam perspiciatis repellendus exercitationem molestiae veniam earum, quasi optio quam dolorem sapiente aspernatur. Debitis dolorem, assumenda possimus, nostrum alias deserunt veritatis molestias harum modi neque doloribus recusandae ducimus. Illo soluta cupiditate aliquid nesciunt. Illo molestiae voluptates sunt ducimus molestias necessitatibus eligendi labore cumque quod rem, rerum quisquam dolor aspernatur vel odio nostrum? Odio amet laborum quae veniam numquam ut, porro praesentium veritatis! Ab et harum ad.',
        //     'link' => 'https://www.instagram.com/',
        //     'user_id' => 1
        // ]);

        Wooddata::create([
            'title' => 'Sisa pembuatan kapal',
            'jumlah' => '5'
        ]);
        Wooddata::create([
            'title' => 'Sisa pembuatan furniture',
            'jumlah' => '27'
        ]);
        Wooddata::create([
            'title' => 'Sisa serbuk kayu',
            'jumlah' => '4'
        ]);

        Store::create([
            'store_name' => 'Handicraft',
            'slug' => 'handicraft',
            'store_address' => 'Indramayu, Jawa Barat',
            'store_phone' => '6287834332582',
            'user_id' => 1,
            'image' => 'images-store/logo.png'
        ]);

        // Store::create([
        //     'store_name' => 'Toko Kayu',
        //     'slug' => 'toko-kayu',
        //     'store_address' => 'Indramayu, Jawa Barat',
        //     'store_phone' => '6287834332582',
        //     'user_id' => 2
        // ]);

        // Store::create([
        //     'store_name' => 'Tangan Besi',
        //     'slug' => 'tangan-besi',
        //     'store_address' => 'Indramayu, Jawa Barat',
        //     'store_phone' => '6287834332582',
        //     'user_id' => 3
        // ]);
        // Store::create([
        //     'store_name' => 'Tangan Batu',
        //     'slug' => 'tangan batu',
        //     'store_address' => 'Indramayu, Jawa Barat',
        //     'store_phone' => '6287834332582',
        //     'user_id' => 4
        // ]);

        // AllWood::create([
        //     'wood_name' => 'Kayu',
        //     'slug' => 'kayu',
        //     'stock' => 15,
        //     'price' => 150000,
        //     'store_id' => 1,
        // ]);

        // AllWood::create([
        //     'wood_name' => 'Tumbuhan',
        //     'slug' => 'tumbuhan',
        //     'stock' => 15,
        //     'price' => 150000,
        //     'store_id' => 1,
        // ]);
        // AllWood::create([
        //     'wood_name' => 'Kayu',
        //     'slug' => 'kayu',
        //     'stock' => 15,
        //     'price' => 150000,
        //     'store_id' => 2,
        // ]);



    }
}
