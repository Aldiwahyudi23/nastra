<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $user = User::create([
            'name'      => 'Aldi Wahyudi',
            'username'  => 'sldiwa23',
            'email'     => 'aldiwahyudi1223@gmail.com',
            'role'      => 'Admin',
            'id_angkatan'      => '01',
            'status'    => 'Aktif',
            'password'  => bcrypt('Komando23')
        ]);

        $user->assignRole('Admin');

        $this->command->info('Data User '.$user->name.' has been saved.');
       
    }
}
