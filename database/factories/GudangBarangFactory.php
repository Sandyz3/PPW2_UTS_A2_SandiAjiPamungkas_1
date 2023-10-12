<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\gudang_barang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\gudang_barang>
 */
class GudangBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>s
     */
    public function definition(): array
    {
        return [
            'nama_barang' => fake()->name(),
            'harga' => $this->faker->randomNumber(),
            'stok' => $this->faker->randomNumber(1),
            'id_suplier' => fake()->randomNumber(),
        ];
    }
}
