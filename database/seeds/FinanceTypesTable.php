<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceTypesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finance_types')->insert([[
            'name'      => 'Infaq Jumat',
            'status'    => 'Aktif'
        ], [
            'name'      => 'Infaq Pengajian',
            'status'    => 'Aktif'
        ], [
            'name'      => 'Zakat',
            'status'    => 'Aktif'
        ], [
            'name'      => 'Qurban',
            'status'    => 'Aktif'
        ], [
            'name'      => 'Kotak Amal',
            'status'    => 'Aktif'
        ], [
            'name'      => 'Biaya Service AC',
            'status'    => 'Aktif'
        ], [
            'name'      => 'Biaya Operasional Kebersihan',
            'status'    => 'Aktif'
        ], [
            'name'      => 'Biaya Imam Rawatib',
            'status'    => 'Aktif'
        ], [
            'name'      => 'Biaya Lain-Lain',
            'status'    => 'Aktif'
        ]]);
    }
}
