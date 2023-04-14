<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\goods;
use Illuminate\Support\Facades\DB;

class GoodsSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('goods')->insert([
            'kode_barang' => 'PRD001',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ]);

        DB::table('goods')->insert([
            'kode_barang' => 'PRD002',
            'nama_barang' => 'Pocari Sweat',
            'kategori_barang' => 'Minuman',
            'harga' => '6000',
            'qty' => '50'
        ]);

        DB::table('goods')->insert([
            'kode_barang' => 'PRD003',
            'nama_barang' => 'Silverqueen',
            'kategori_barang' => 'Snack',
            'harga' => '12500',
            'qty' => '45'
        ]);

        $nama=['Nasi Padang', 'Yakult', 'Chitato', 'Rendang', 'Pepsi', 'Potato Bee', 'Ayam Kremes', 'Kopi Kap', 'Beng Beng', 'Nasi Goreng', 'Es Jeruk', 'Better', 'Mixue', 'Walls', 'Paddle Pop', 'Aice', 'Ventella'];
        $kategori=['Makanan', 'Minuman', 'Snacks', 'Makanan', 'Minuman', 'Snacks', 'Makanan', 'Minuman', 'Snacks', 'Makanan', 'Minuman', 'Snacks', 'Es Krim', 'Es Krim', 'Es Krim', 'Es Krim', 'Es Krim'];
        $harga=['24000', '9000', '12000', '18000', '16000', '13000', '14000', '3000', '4000', '12000', '5000', '4000', '18000', '11000', '10000', '8000', '40000'];

        for($i=0; $i<17; $i++) {
            DB::table('goods')->insert([
                'kode_barang' => 'PRD00'.($i+4),
                'nama_barang' => $nama[$i],
                'kategori_barang' => $kategori[$i],
                'harga' => $harga[$i],
                'qty' => rand(10,70)
            ]);
        }
        

    }
    // run php artisan db:seed --class=GoodsSeeder
}
