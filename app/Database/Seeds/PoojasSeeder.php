<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PoojasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'             => 'Griha Pravesh Puja',
                'inclusions'       => 'Housewarming ceremony, Vastu Shanti, Blessings for prosperity',
                'best_time'        => 'Morning or Afternoon',
                'best_for'        => 'New Homeowners',
                'description'      => 'A sacred ritual to purify and bless a new home, ensuring peace and prosperity for its inhabitants.',
                'price'            => 5000.00,
                'duration_minutes' => 120,
                'status'           => 1,
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'name'             => 'Satyanarayan Puja',
                'inclusions'       => 'Puja ceremony, Prasad distribution, Storytelling of Lord Satyanarayan',
                'best_time'        => 'Evening',
                'best_for'        => 'Families and Individuals',
                'description'      => 'A popular Hindu ritual performed to seek blessings from Lord Satyanarayan for health, wealth, and prosperity.',
                'price'            => 3000.00,
                'duration_minutes' => 90,
                'status'           => 1,
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'name'             => 'Rudrabhishek',
                'inclusions'       => 'Abhishek ceremony, Chanting of Rudram, Offering of Bilva leaves',
                'best_time'        => 'Morning',
                'best_for'        => 'Devotees of Lord Shiva',
                'description'      => 'A powerful ritual dedicated to Lord Shiva, performed to seek his blessings for health, prosperity, and spiritual growth.',
                'price'            => 4000.00,
                'duration_minutes' => 100,
                'status'           => 1,
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'name'             => 'Wedding Ceremony',
                'inclusions'       => 'Vedic wedding rituals, Blessings from elders, Cultural performances',
                'best_time'        => 'Afternoon or Evening',
                'best_for'        => 'Couples getting married',
                'description'      => 'A traditional Hindu wedding ceremony that includes various rituals and customs to bless the couple for a happy married life.',
                'price'            => 20000.00,
                'duration_minutes' => 240,
                'status'           => 1,
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('pooja')->insertBatch($data);
    }
}
