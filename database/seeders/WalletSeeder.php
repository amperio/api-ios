<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wallet;
class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::insert(
            [
                'type' => '1',
                'date' => '2020-01-23',
                'money' => '500',
                'description' => 'dar clases'
            ],
            [
                'type' => '2',
                'date' => '2020-01-23',
                'money' => '200',
                'description' => 'pago universidad'
            ],
            [
                'type' => '1',
                'date' => '2020-01-23',
                'money' => '0.50',
                'description' => 'agua'
            ],
            [
                'type' => '2',
                'date' => '2020-01-23',
                'money' => '100',
                'description' => 'caucho de raqueta'
            ],
            [
                'type' => '1',
                'date' => '2020-01-23',
                'money' => '9',
                'description' => 'prestamo'
            ]
        );
    }
}
