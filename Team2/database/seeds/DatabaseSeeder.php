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
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin CVABP',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789')
        ]);
        DB::table('alamat')->insert([
            'alamat' => 'Jl. Padat Karya Kel. Sukamulya Kec. Cikupa Kab.Tangerang Banten 15710 Tlp. 021.59406032. WA : 08129670263.',
            'no_hp' => '08129670263',
            'email' => 'cv.anugrahbangunperkasa@yahoo.co.id',
            'location' => '!1m18!1m12!1m3!1d63460.37517741144!2d106.77352167910153!3d-6.22763339999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1495f1fddc9%3A0xfe3d872dbc2b760a!2sGoogle%20Indonesia!5e0!3m2!1sid!2sid!4v1592215943020!5m2!1sid!2sid'
        ]);
    }
}
