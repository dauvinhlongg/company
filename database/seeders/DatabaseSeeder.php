<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // DB::table('menus')->insert([
        //     [
        //         'name' => 'Trang chủ',
        //         'url' => '#',
        //     ],
        //     [
        //         'name' => 'Dự án',
        //         'url' => '#',
        //     ],
        //     [
        //         'name' => 'Tuyển Dụng',
        //         'url' => '#',
        //     ],
        //     [
        //         'name' => 'Liên Hệ',
        //         'url' => '#',
        //     ],
        // ]);

        // // Seed danh mục bài viết
        // DB::table('post_categories')->insert([
        //     [
        //         'name' => 'Danh mục A',
        //     ],
        // ]);

        // // Seed bài viết
        // DB::table('posts')->insert([
        //     [
        //         'title' => 'Bài viết số 1',
        //         'content' => 'Nội dung bài viết số 1',
        //         'category_id' => 1,
        //     ],
        //     [
        //         'title' => 'Bài viết số 2',
        //         'content' => 'Nội dung bàiviết số 2',
        //         'category_id' => 1,
        //     ],
        // ]);

        // // Seed logo đối tác
        // DB::table('partners')->insert([
        //     [
        //         'logo' => 'path_to_partner_logo1',
        //     ],
        //     [
        //         'logo' => 'path_to_partner_logo2',
        //     ],
        //     [
        //         'logo' => 'path_to_partner_logo3',
        //     ],
        // ]);
        $this->call(CategoryTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(imageSeeder::class);
    }
}
