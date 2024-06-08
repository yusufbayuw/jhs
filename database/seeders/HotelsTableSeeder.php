<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            [
                'name' => 'Hotel Syariah Solo',
                'address' => 'Jl. Slamet Riyadi No.1, Solo, Jawa Tengah',
                'city' => 'Solo',
                'description' => 'Hotel Syariah dengan fasilitas lengkap di pusat kota Solo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hotel Syariah Jakarta',
                'address' => 'Jl. Thamrin No.2, Jakarta Pusat, DKI Jakarta',
                'city' => 'Jakarta',
                'description' => 'Hotel Syariah modern dengan lokasi strategis di pusat ibu kota.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hotel Syariah Bandung',
                'address' => 'Jl. Asia Afrika No.10, Bandung, Jawa Barat',
                'city' => 'Bandung',
                'description' => 'Hotel Syariah nyaman dengan pemandangan kota Bandung.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hotel Syariah Surabaya',
                'address' => 'Jl. Tunjungan No.15, Surabaya, Jawa Timur',
                'city' => 'Surabaya',
                'description' => 'Hotel Syariah mewah di jantung kota Surabaya.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hotel Syariah Yogyakarta',
                'address' => 'Jl. Malioboro No.20, Yogyakarta, DI Yogyakarta',
                'city' => 'Yogyakarta',
                'description' => 'Hotel Syariah dekat dengan berbagai tempat wisata di Yogyakarta.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hotel Syariah Medan',
                'address' => 'Jl. Gatot Subroto No.5, Medan, Sumatera Utara',
                'city' => 'Medan',
                'description' => 'Hotel Syariah elegan di pusat kota Medan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hotel Syariah Makassar',
                'address' => 'Jl. Jenderal Sudirman No.8, Makassar, Sulawesi Selatan',
                'city' => 'Makassar',
                'description' => 'Hotel Syariah dengan fasilitas modern di Makassar.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hotel Syariah Semarang',
                'address' => 'Jl. Pandanaran No.3, Semarang, Jawa Tengah',
                'city' => 'Semarang',
                'description' => 'Hotel Syariah dengan suasana nyaman di Semarang.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hotel Syariah Palembang',
                'address' => 'Jl. Merdeka No.4, Palembang, Sumatera Selatan',
                'city' => 'Palembang',
                'description' => 'Hotel Syariah dekat dengan ikon Jembatan Ampera di Palembang.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hotel Syariah Bali',
                'address' => 'Jl. Kuta No.7, Kuta, Bali',
                'city' => 'Bali',
                'description' => 'Hotel Syariah di kawasan wisata Kuta, Bali.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
