<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonalIdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('personal_identities')->insert([
            'users_id' => 2,
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'alamat' => $faker->address,
            'berlaku_hingga' => $faker->date('Y-m-d'),
            'golongan_darah' => $faker->randomElement(['A', 'B', 'AB', 'O']),
            'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
            'kecamatan' => $faker->citySuffix,
            'kelurahan_desa' => $faker->citySuffix,
            'kewarganegaraan' => 'WNI',
            'kota_kabupaten' => $faker->city,
            'nama_ktp' => $faker->name,
            'nik' => $faker->unique()->numerify('################'),
            'pekerjaan' => $faker->jobTitle,
            'provinsi' => $faker->state,
            'rt_rw' => $faker->numerify('##/##'),
            'status_perkawinan' => $faker->randomElement(['Belum Kawin', 'Kawin', 'Cerai']),
            'tanggal_lahir' => $faker->date('Y-m-d', '-20 years'),
            'tempat_lahir' => $faker->city,
            'ktp_image_file' => null,
            'verified_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
