<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $siswa = Siswa::insert([
            [
                'nama' => 'ABU BAKAR TSABIT GHUFRON', 
                'nis' => '20388',
                'gender' => 'L',
                'alamat' => 'Sleman',
                'kontak' => '085839328609',
                'email' => 'makinamikayumi@gmail.com',
                'status_lapor_pkl'=> false,
            ],
            [
                'nama' => 'ADE RAFIF DANESWARA', 
                'nis' => '20389',
                'gender' => 'L',
                'alamat' => 'Sleman',
                'kontak' => '08983688325',
                'email' => 'daneswara@gmail.com',
                'status_lapor_pkl'=> false,
            ],
            [
                'nama' => 'ADE ZAIDAN ALTHAF', 
                'nis' => '20390',
                'gender' => 'L',
                'alamat' => 'GUnungkidul',
                'kontak' => '087786760589',
                'email' => 'adezaidan24@gmail.com',
                'status_lapor_pkl'=> false,
            ],
            [
                'nama' => 'ADHWA KHALILA', 
                'nis' => '20391',
                'gender' => 'P',
                'alamat' => 'Sleman',
                'kontak' => '081245135512',
                'email' => 'adhwakhalila@gmail.com',
                'status_lapor_pkl'=> false,
            ],
            [
                'nama' => 'ADNAN FARIS', 
                'nis' => '20392',
                'gender' => 'L',
                'alamat' => 'Kalasan',
                'kontak' => '081341245153',
                'email' => 'adnanfaris@gmail.com',
                'status_lapor_pkl'=> false,
            ],
            [
                'nama' => 'AHMAD DHANI', 
                'nis' => '20393',
                'gender' => 'P',
                'alamat' => 'Bantul',
                'kontak' => '08923523522',
                'email' => 'ahmaddhani@gmail.com',
                'status_lapor_pkl'=> false,
            ],
            [
                'nama' => 'AKBAR ADHA KUSUMA', 
                'nis' => '20394',
                'gender' => 'L',
                'alamat' => 'Jakal',
                'kontak' => '082456236224',
                'email' => 'akbaradha@gmail.com',
                'status_lapor_pkl'=> false,
            ],
            [
                'nama' => 'ADNHIKA AUGUST', 
                'nis' => '20395',
                'gender' => 'L',
                'alamat' => 'Maguwoharjo',
                'kontak' => '082135351235',
                'email' => 'andikaaugut@gmail.com',
                'status_lapor_pkl'=> false,
            ],
            [
                'nama' => 'THITHIS', 
                'nis' => '20396',
                'gender' => 'P',
                'alamat' => 'Bantul',
                'kontak' => '081242424244',
                'email' => 'thithiss@gmail.com',
                'status_lapor_pkl'=> false,
            ],
            [
                'nama' => 'ARYOK SAJA', 
                'nis' => '20397',
                'gender' => 'L',
                'alamat' => 'Berbah',
                'kontak' => '08923523522',
                'email' => 'aryokkkss@gmail.com',
                'status_lapor_pkl'=> false,
            ],
        ]);
    }
}