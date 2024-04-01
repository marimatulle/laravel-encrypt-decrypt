<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Marina Matulle'),
            'email' => Crypt::encryptString('marinamatulle@mail.com'),
            'telefone' => Crypt::encryptString('(42) 999999999'),
            'data_nascimento' => Crypt::encryptString('2000-10-26')
        ]);

        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Stheffany Hadlich'),
            'email' => Crypt::encryptString('stheffanyhadlich@mail.com'),
            'telefone' => Crypt::encryptString('(42) 999999999'),
            'data_nascimento' => Crypt::encryptString('1997-04-05')
        ]);
    }
}