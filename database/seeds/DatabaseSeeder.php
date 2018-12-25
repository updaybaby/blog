<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard(); //为了批量填充，暂时关闭安全保护
        // $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
