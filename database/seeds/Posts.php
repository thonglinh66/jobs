<?php

use Illuminate\Database\Seeder;

class Posts extends Seeder
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
                'member' => '20',
                'title' => 'Java Developer',
                'pdecription' => 'hông làm vẫn có ăn',
                'type' => 1,
                'min_salary' => 1000,
                'max_salary' => 5000
            ],
            [
                'code' => 'CP1999',
                'member' => '30',
                'title' => 'Mobile Developer',
                'pdecription' => 'việc nhẹ lương cao',
                'type' => 2,
                'min_salary' => 500,
                'max_salary' => 3000
            ],
            [
                'code' => 'CP1998',
                'member' => '50',
                'title' => 'Web Frontend',
                'pdecription' => 'thảnh thơi',
                'type' => 1,
                'min_salary' => 1500,
                'max_salary' => 10000
            ],

        ];

        DB::table('posts')->insert($data);
    }
}
