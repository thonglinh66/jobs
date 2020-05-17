<?php

use Illuminate\Database\Seeder;


class AcountSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  [
            [
                'code' => 'admin',
                'password' => bcrypt('admin'),
                'type'=>2,
    
            ],

        ];

        DB::table('acounts')->insert($data);
    }
}
