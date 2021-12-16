<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'          => 'Rizky Haksono',
        //         'alamat'        => 'Jalan Apel Asin',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ],
        //     [
        //         'nama'          => 'Natee',
        //         'alamat'        => 'Jalan Kepala Pusing',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ],
        //     [
        //         'nama'          => 'Pokopoy',
        //         'alamat'        => 'Jalan GG Gaming',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ]
        // ];

        for ($i = 0; $i < 100; $i++) {
            $faker = \Faker\Factory::create('id_ID');
            $data = [
                'nama'          => $faker->name,
                'alamat'        => $faker->address,
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::now()
            ];
            $this->db->table('orang')->insert($data);
        }

        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

        // Using Query Builder

        // Kalau memakai single array
        // $this->db->table('orang')->insert($data);

        // Kalau memakai array associative
        // $this->db->table('orang')->insertBatch($data);
    }
}
