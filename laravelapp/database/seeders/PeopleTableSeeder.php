<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada',
            'age' => 12
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@flower',
            'age' => 34
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@flower',
            'age' => 56
        ];
        DB::table('people')->insert($param);



        // for ($i=0; $i < 100; $i++) { 
        //     $param = [
        //         'name' => 'dummy',
        //         'mail' => 'dummy@data',
        //         'age' => rand(1, 99),
        //     ];
        //     DB::table('people')->insert($param);
        // }
        
    }

}
