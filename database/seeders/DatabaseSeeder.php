<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Category::create([
            'category' => 'Ilmu Pengetahuan Alam',
            'slug' => 'ipa010'

        ]);

        \App\Models\Category::create([
            'category' => 'Ilmu Pengetahuan Sosial',
            'slug' => 'ips020'

        ]);

        \App\Models\student::create([
            'name' => 'Koni keane',
            'category_id' => '1',
            'nip' => '131516',
            'major' => 'IPA',
            'slug' => 'IPA131516'
        ]);
        
        \App\Models\student::create([
            'name' => 'Anjar Fajar',
            'category_id' => '2',
            'nip' => '131517',
            'major' => 'IPS',
            'slug' => 'IPS131517'
            
        ]);
        \App\Models\student::create([
            'name' => 'Kimi Karen',
            'category_id' => '2',
            'nip' => '131518',
            'major' => 'IPS',
            'slug' => 'IPS131518'
            
        ]);

        \App\Models\student::create([
            'name' => 'Gibran Malik',
            'category_id' => '1',
            'nip' => '131519',
            'major' => 'IPA',
            'slug' => 'IPA131519'
        ]);
        
        \App\Models\Post::create([
                'title' => 'Judul Pertama',
                'category_id' => '1',
                'student_id' => '1',
                'slug' => 'judul_pertama',
                'excerpt' => 'There are a variety of tools and frameworks available to you when building a web application. However,',
                'body' => 'There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.'
        ]);
        \App\Models\Post::create([
                'title' => 'Judul Kedua',
                'category_id' => '2',
                'student_id' => '2',
                'slug' => 'judul_kedua',
                'excerpt' => 'We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If youre just',
                'body' => 'We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If youre just taking your first steps into web development, Laravels vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.'
        ]);
        \App\Models\Post::create([
                'title' => 'Judul Ketiga',
                'category_id' => '1',
                'student_id' => '1',
                'slug' => 'judul_ketiga',
                'excerpt' => 'We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If youre just',
                'body' => 'We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If youre just taking your first steps into web development, Laravels vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.'
        ]);
        \App\Models\Post::create([
                'title' => 'Judul Keempat',
                'category_id' => '2',
                'student_id' => '2',
                'slug' => 'judul_keempat',
                'excerpt' => 'We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If youre just',
                'body' => 'We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you. If youre just taking your first steps into web development, Laravels vast library of documentation, guides, and video tutorials will help you learn the ropes without becoming overwhelmed.'
        ]);
    }
}
               