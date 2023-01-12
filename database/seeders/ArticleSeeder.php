<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Article::create([
            'title' => 'Trauma tsunami Jepang 10 tahun silam dan terapi penyembuhan melalui jalur pendakian',
            'description' => 'Sepuluh tahun setelah tsunami menghancurkan pesisir Jepang, suatu jalur pendakian membantu penduduk lokal untuk menghidupkan dan memulihkan kembali dari tragedi itu. Setelah dua hari melakukan pendakian di sepanjang pantai timur laut Jepang yang terjal, saya dan putra saya hanya memiliki cukup energi untuk berlari ke Pantai Aketo, melepas sepatu dan kaus kaki kami, lalu menceburkan diri ke samudera Pasifik nan dingin.
            Berdiri di pinggir laut, cahaya mulai memudar, kami tidak mendengar apa pun kecuali deburan lembut ombak setinggi tulang kering. Selain beberapa burung camar, pantai sepenuhnya menjadi milik kami.
            Tapi ketika tadi melintasi hamparan pasir kelabu ada pengingat bahwa alam tidak selalu setenang ini: bongkahan tembok laut yang hancur dengan pesan peringatan kengerian yang terjadi di sini, 10 tahun silam.',
            'type_id' => '1',
            'image' => 'image/image.jpg',
            'background' => '#ffffff',
            'user_id' => 1,
        ]);
        Article::create([
            'title' => 'Article 2',
            'description' => 'This is the full body of Article 2. It goes into more detail about the topic discussed in the description.',
            'type_id' => '2',
            'image' => 'image/image.jpg',
            'background' => '#ffffff',
            'user_id' => 1,
        ]);
        Article::create([
            'title' => 'Article 3',
            'description' => 'This is the full body of Article 3. It goes into more detail about the topic discussed in the description.',
            'type_id' => '3',
            'image' => 'image/image.jpg',
            'background' => '#ffffff',
            'user_id' => 1,
        ]);
        Article::create([
            'title' => 'Article 4',
            'description' => 'This is the full body of Article 4. It goes into more detail about the topic discussed in the description.',
            'type_id' => '4',
            'image' => 'image/image.jpg',
            'background' => '#ffffff',
            'user_id' => 1,
        ]);
        Article::create([
            'title' => 'Article 5',
            'description' => 'This is the full body of Article 5. It goes into more detail about the topic discussed in the description.',
            'type_id' => '3',
            'image' => 'image/image.jpg',
            'background' => '#ffffff',
            'user_id' => 1,
        ]);
    }
}
