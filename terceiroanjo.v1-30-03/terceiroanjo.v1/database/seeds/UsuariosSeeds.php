<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Ana Carla Moraes";
        $usuario->email = "carlinha1530@hotmail.com";
        $usuario->password = bcrypt("@ninhaM15");
        $usuario->profissao = "Developer Web";
        $usuario->descricao = "Desenvolvedora Web de Sistemas Para Internet.";
        $usuario->imagem = "img/index-2_img01.jpg";
        $usuario->tipo = "usuario";
        $usuario->save();

        factory(\App\User::class, 9)->create();
    }
}
