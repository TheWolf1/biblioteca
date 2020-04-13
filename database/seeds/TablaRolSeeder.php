<?php

use Illuminate\Database\Seeder;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rols = [
            'administrador',
            'editor',
            'supervisor',
        ];
        foreach ($rols as $key => $value) {
            # code...
            DB::table('rol')->insert([
                'nombre'=> $value,
            ]);
        }
        
    }
}
