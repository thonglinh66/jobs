<?php

use Illuminate\Database\Seeder;

class Language extends Seeder
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
                'name' => 'C',
                'PostID' => '',
                'code'=>'',
                
            ],
            [
                'name' => 'C#',
                'PostID' => '',
                'code'=>'',
                
            ],
            [
                'name' => 'Java',
                'PostID' => '',
                'code'=>'',
                
            ],
            [
                'name' => 'JavaScript',
                'PostID' => '',
                'code'=>'',
                
            ],
            [
                'name' => 'Html',
                'PostID' => '',
                'code'=>'',
                
            ],
            [
                'name' => 'Css',
                'PostID' => '',
                'code'=>'',
                
            ],
            [
                'name' => 'Asp.Net',
                'PostID' => '',
                'code'=>'',
                
            ],
            [
                'name' => 'PHP',
                'PostID' => '',
                'code'=>'',
                
            ],
            [
                'name' => 'Python',
                'PostID' => '',
                'code'=>'',
                
            ]
           

        ];

        DB::table('languages')->insert($data);
    }
}
