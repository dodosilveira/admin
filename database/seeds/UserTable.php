<?php

use Illuminate\Database\Seeder;
use app\Models\User;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	"name" 		=> 	'Douglas Silveira',
        	"email" 	=> 	'douglas.silveira@processmind.com.br',
        	"password" 	=> 	bcrypt('123456')
        ]);
    }
}
