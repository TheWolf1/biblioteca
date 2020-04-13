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
        // $this->call(UsersTableSeeder::class);
        $this->truncateTables([
            'rol','permiso'
        ]);

        $this->call(TablaPermisoSeeder::class);
        $this->call(TablaRolSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        # code...
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($tables as $tabla) {
            # code...
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
