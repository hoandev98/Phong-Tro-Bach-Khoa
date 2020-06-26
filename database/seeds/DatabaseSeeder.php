<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
        	['name'=>'Thủ Đức','slug'=>'thu-duc'],
        	['name'=>'Quận 1','slug'=>'quan-1'],
        	['name'=>'Quận 2','slug'=>'quan-2'],
        	['name'=>'Quận 3','slug'=>'quan-3'],
        	['name'=>'Quận 4','slug'=>'quan-4'],
            ['name'=>'Quận 5','slug'=>'quan-5'],
            ['name'=>'Quận 6','slug'=>'quan-6'],
            ['name'=>'Quận 7','slug'=>'quan-7'],
            ['name'=>'Quận 8','slug'=>'quan-8'],
            ['name'=>'Quận 9','slug'=>'quan-9'],
        ]);
        $this->call(CategoriesSeeder::class);
    }
}
/**
* 
*/
class CategoriesSeeder extends Seeder
{
    public function run(){
        DB::table('categories')->insert([
            ['name'=>'Phòng trọ cho thuê','slug'=>'phong-tro-cho-thue'],
            ['name'=>'Ở ghép','slug'=>'o-ghep'],
            ['name'=>'Nhà nguyên căn','slug'=>'nha-nguyen-can'],
            ['name'=>'Chung cư','slug'=>'chung-cu']
        ]);
    }
}
