<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Pandits extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $data = $this->createFakePandits($faker, 10);

        // Using Query Builder
        $this->db->table('pandits')->insertBatch($data);
    }

    public function createFakePandits($faker, $count)
    {
        $pandits = [];
        for ($i = 0; $i < $count; $i++) {
            $pandits[] = [
                'name'             => $faker->name,
                'specialization'   => $faker->numberBetween(1, 5),
                'experience_years' => $faker->numberBetween(1, 20),
                'profile_image'    => $faker->imageUrl('people'),
                'bio'              => $faker->paragraph,
                'rating'           => $faker->randomFloat(1, 1, 5),
                'rate_by'          => $faker->numberBetween(1, 100),
                'status'           => 1,
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ];
        }
        return $pandits;
    }
}
