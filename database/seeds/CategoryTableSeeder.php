<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $html = new Category();
       $html->name = 'HTML5!';
       $html->slug='html5!';
       $html->save();

        $css = new Category();
        $css->name = 'css3!';
        $css->slug='css3!';
        $css->save();

        $node = new Category();
        $node->name ='nodejs10!';
        $node->slug='node-js10!';
        $node->save();
    }
}
