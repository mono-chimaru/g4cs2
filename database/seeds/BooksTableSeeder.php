<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(['title'=>'Computer Fundamental',
        	'author'=>'Pradeep',
        	"description"=>'Testing',
        	"isbn"=>'1234567890',
        	'year'=>'1990',
        	'amount'=>5,
        	'price'=>'100',
            'user_id'=>1
    ]);
        DB::table('books')->insert(['title'=>'Computer Fundamental',
            'author'=>'Pradeep',
            "description"=>'Testing1',
            "isbn"=>'1234567890',
            'year'=>'1990',
            'amount'=>5,
            'price'=>'100',
            'user_id'=>1
    ]);
        DB::table('books')->insert(['title'=>'Computer Fundamental',
            'author'=>'dara',
            "description"=>'Testing3',
            "isbn"=>'1234567890',
            'year'=>'1990',
            'amount'=>5,
            'price'=>'100',
            'user_id'=>1
    ]);
        DB::table('books')->insert(['title'=>'Computer Fundamental',
            'author'=>'dara',
            "description"=>'Testing2',
            "isbn"=>'1234567890',
            'year'=>'1990',
            'amount'=>5,
            'price'=>'100',
            'user_id'=>1
    ]);
    }
}
