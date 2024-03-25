<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dinas = [
            ['kode_dinas' => '01', 'nama_dinas' => 'Dinas Pendidikan'],
            ['kode_dinas' => '02', 'nama_dinas' => 'Dinas Kesehatan'],
            ['kode_dinas' => '03', 'nama_dinas' => 'Dinas Perhubungan'],
            ['kode_dinas' => '04', 'nama_dinas' => 'Dinas Pekerjaan Umum'],
            ['kode_dinas' => '05', 'nama_dinas' => 'Dinas Kehutanan'],
            ['kode_dinas' => '06', 'nama_dinas' => 'Dinas Perikanan'],
            ['kode_dinas' => '07', 'nama_dinas' => 'Dinas Pertanian'],
            ['kode_dinas' => '08', 'nama_dinas' => 'Dinas Perindustrian'],
            ['kode_dinas' => '09', 'nama_dinas' => 'Dinas Perdagangan'],
            ['kode_dinas' => '10', 'nama_dinas' => 'Dinas Koperasi'],
            ['kode_dinas' => '11', 'nama_dinas' => 'Dinas Pariwisata'],
            ['kode_dinas' => '12', 'nama_dinas' => 'Dinas Kebudayaan'],
            ['kode_dinas' => '13', 'nama_dinas' => 'Dinas Sosial'],
            ['kode_dinas' => '14', 'nama_dinas' => 'Dinas Pemuda dan Olahraga'],
            ['kode_dinas' => '15', 'nama_dinas' => 'Dinas Kependudukan dan Catatan Sipil'],
            ['kode_dinas' => '16', 'nama_dinas' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak'],
            ['kode_dinas' => '17', 'nama_dinas' => 'Dinas Lingkungan Hidup'],
            ['kode_dinas' => '18', 'nama_dinas' => 'Dinas Pemadam Kebakaran'],
            ['kode_dinas' => '19', 'nama_dinas' => 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu'],
            ['kode_dinas' => '20', 'nama_dinas' => 'Dinas Komunikasi dan Informatika'],
            ['kode_dinas' => '21', 'nama_dinas' => 'Dinas Kependudukan dan Pencatatan Sipil'],
            ['kode_dinas' => '22', 'nama_dinas' => 'Dinas Pemberdayaan Masyarakat dan Desa'],
            ['kode_dinas' => '23', 'nama_dinas' => 'Dinas Perumahan dan Kawasan Permukiman'],
            ['kode_dinas' => '24', 'nama_dinas' => 'Dinas Pekerjaan Umum dan Penataan Ruang'],
            ['kode_dinas' => '25', 'nama_dinas' => 'Dinas Perhubungan dan Perhubungan'],
            ['kode_dinas' => '26', 'nama_dinas' => 'Dinas Perindustrian dan Perdagangan'],
            ['kode_dinas' => '27', 'nama_dinas' => 'Dinas Perikanan dan Kelautan'],
            ['kode_dinas' => '28', 'nama_dinas' => 'Dinas Pertanian dan Ketahanan Pangan'],
            ['kode_dinas' => '29', 'nama_dinas' => 'Dinas Kehutanan dan Lingkungan Hidup'],
            ['kode_dinas' => '30', 'nama_dinas' => 'Dinas Pariwisata dan Kebudayaan'],
            ['kode_dinas' => '31', 'nama_dinas' => 'Dinas Pemuda dan Olahraga'],
            ['kode_dinas' => '32', 'nama_dinas' => 'Dinas Sosial dan Pemberdayaan Perempuan'],
            ['kode_dinas' => '33', 'nama_dinas' => 'Dinas Pemadam Kebakaran dan Penyelamatan'],
            ['kode_dinas' => '34', 'nama_dinas' => 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu'],
            ['kode_dinas' => '35', 'nama_dinas' => 'Dinas Komunikasi dan Informatika'],
            ['kode_dinas' => '36', 'nama_dinas' => 'Dinas Kependudukan dan Pencatatan Sipil'],
            ['kode_dinas' => '37', 'nama_dinas' => 'Dinas Pemberdayaan Masyarakat dan Desa'],
            ['kode_dinas' => '38', 'nama_dinas' => 'Dinas Perumahan dan Kawasan Permukiman'],
            ['kode_dinas' => '39', 'nama_dinas' => 'Dinas Pekerjaan Umum dan Penataan Ruang'],
            ['kode_dinas' => '40', 'nama_dinas' => 'Dinas Perhubungan dan Perhubungan'],
        ];

        foreach ($dinas as $d) {
            \App\Models\Dinas::create($d);
        }
    }
}
