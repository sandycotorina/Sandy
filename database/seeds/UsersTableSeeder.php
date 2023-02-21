<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ketua = factory(User::class)->create([
            'name'     => 'KETUA',
            'email'    => 'ketua@inventory.com',
            'email_verified_at' => now(),
            'password' => bcrypt('inventory'),
        ]);

        $ketua->assignRole('ketua');

        $this->command->info('>_ Here is your ketua details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "inventory"');

        $anggota = factory(User::class)->create([
            'name'     => 'ANGGOTA',
            'email'    => 'anggota@inventory.com',
            'email_verified_at' => now(),
            'password' => bcrypt('inventory'),
        ]);

        $anggota->assignRole('anggota');

        $this->command->info('>_ Here is your anggota details to login:');
        $this->command->warn($anggota->email);
        $this->command->warn('Password is "inventory"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}
