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
                'code' => 'CP1999',
                'pass' => bcrypt('123456'),
                'type'=>1,
            ],
            [
                'code' => 'CP1998',
                'pass' => '123456',
                'type'=>1,
    
            ],
            [
                'code' => 'CP1997',
                'pass' => bcrypt('123456'),
                'type'=>1,
    
            ],

        ];

        DB::table('acounts')->insert($data);
    }
}
