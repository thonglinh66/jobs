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
                'code' => 'CP1998',
                'password' => bcrypt('123456'),
                'type'=>2,
    
            ],

        ];

        DB::table('acounts')->insert($data);
    }
}
