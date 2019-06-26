<?php

use Illuminate\Database\Seeder;
use Prueba\User;
use Prueba\Categoria;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email =	"Admin@mail.com";
        $user->password = bcrypt('query');
        $user->save();

        $faker = Faker::create();
        for ($i=0; $i < 20; $i++) {
            \DB::table('categorias')->insert(array(
           'nombre' => $faker->firstNameFemale,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
            ));
        }
        $faker = Faker::create();
        for ($i=0; $i < 20; $i++) {
            \DB::table('articulos')->insert(array(
           'nombre' => $faker->firstNameFemale,
           'cantidad'=> $faker->unique(true)->numberBetween(1,20),
           'categoria_id'=> $faker->unique(true)->numberBetween(1,20),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
           ));
          }
    }
}
