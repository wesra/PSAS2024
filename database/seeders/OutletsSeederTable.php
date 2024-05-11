<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Outlet;

class OutletsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outlet::create([
            'code' => Str::random(),
            'name' => 'Mahendra Haris',
            'status' => 'selesai',
            'address' => 'Cijujung Tengah',
            'phone' => '081543195246',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Gayu Ol',
            'status' => 'Berlangsung',
            'address' => 'GBK',
            'phone' => '089087655633',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Mala Arwita',
            'status' => 'selesai',
            'address' => 'Sydney',
            'phone' => '081198673542',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Haris Altam',
            'status' => 'berlangsung',
            'address' => 'pantai kuta',
            'phone' => '0898734652097',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Mala Arwita',
            'status' => 'selesai',
            'address' => 'Sydney',
            'phone' => '087765367829',
        ]);
    }
}
