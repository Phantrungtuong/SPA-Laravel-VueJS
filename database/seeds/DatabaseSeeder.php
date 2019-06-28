<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call('comment');
    }
}
class category extends Seeder{
    public function run(){
        DB::table('categories')->insert([
            array('name'=>'Category 1', 'description'=>'Description Category 1'),
            array('name'=>'Category 2', 'description'=>'Description Category 2'),
            array('name'=>'Category 3', 'description'=>'Description Category 3'),
            array('name'=>'Category 4', 'description'=>'Description Category 4'),
            array('name'=>'Category 5', 'description'=>'Description Category 5'),
            array('name'=>'Category 6', 'description'=>'Description Category 6'),
        ]);
    }
}

class topic extends Seeder{
    public function run(){
        DB::table('topics')->insert([
            array('user_id'=>1, 'category_id'=>1, 'title'=>'Topic 1', 'body'=>'Body Topic 1', 'views'=>'View Topic 1'),
            array('user_id'=>1, 'category_id'=>2, 'title'=>'Topic 2', 'body'=>'Body Topic 2', 'views'=>'View Topic 2'),
            array('user_id'=>1, 'category_id'=>3, 'title'=>'Topic 3', 'body'=>'Body Topic 3', 'views'=>'View Topic 3'),
            array('user_id'=>1, 'category_id'=>4, 'title'=>'Topic 4', 'body'=>'Body Topic 4', 'views'=>'View Topic 4'),
            array('user_id'=>1, 'category_id'=>5, 'title'=>'Topic 5', 'body'=>'Body Topic 5', 'views'=>'View Topic 5'),
            array('user_id'=>1, 'category_id'=>6, 'title'=>'Topic 6', 'body'=>'Body Topic 6', 'views'=>'View Topic 6'),
        ]);
    }
}

class comment extends Seeder{
    public function run(){
        DB::table('comments')->insert([
           array('user_id'=>1, 'topic_id'=>1, 'content'=>'Comment 1'),
            array('user_id'=>1, 'topic_id'=>2, 'content'=>'Comment 2'),
            array('user_id'=>1, 'topic_id'=>3, 'content'=>'Comment 3'),
            array('user_id'=>1, 'topic_id'=>4, 'content'=>'Comment 4'),
            array('user_id'=>1, 'topic_id'=>5, 'content'=>'Comment 5'),
            array('user_id'=>1, 'topic_id'=>6, 'content'=>'Comment 6'),
        ]);
    }
}
