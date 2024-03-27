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
            ['kode_dinas' => '01', 'nama_dinas' => 'INSPEKTORAT DAERAH'],
            ['kode_dinas' => '02', 'nama_dinas' => 'SEKRETARIAT DPRD'],
            ['kode_dinas' => '03', 'nama_dinas' => 'DINAS SOSIAL'],
            ['kode_dinas' => '04', 'nama_dinas' => 'DINAS LINGKUNGAN HIDUP DAN KEHUTANAN'],
            ['kode_dinas' => '05', 'nama_dinas' => 'DINAS KESEHATAN'],
            ['kode_dinas' => '06', 'nama_dinas' => 'DINAS PENDIDIKAN'],
            ['kode_dinas' => '07', 'nama_dinas' => 'DINAS PERKEBUNAN DAN PETERNAKAN'],
            ['kode_dinas' => '08', 'nama_dinas' => 'DINAS PERHUBUNGAN'],
            ['kode_dinas' => '09', 'nama_dinas' => 'DINAS KETENAGAKERJAAN'],
            ['kode_dinas' => '10', 'nama_dinas' => 'DINAS KEPEMUDAAN DAN KEOLAHRAGAAN'],
            ['kode_dinas' => '11', 'nama_dinas' => 'DINAS KELAUTAN DAN PERIKANAN'],
            ['kode_dinas' => '12', 'nama_dinas' => 'DINAS PERPUSTAKAAN DAN ARSIP'],
            ['kode_dinas' => '13', 'nama_dinas' => 'DINAS KEBUDAYAAN, PARIWISATA DAN EKONOMI KREATIF'],
            ['kode_dinas' => '14', 'nama_dinas' => 'DINAS KOMUNIKASI DAN INFORMATIKA'],
            ['kode_dinas' => '15', 'nama_dinas' => 'DINAS PERINDUSTRIAN, PERDAGANGAN, ENERGI DAN SUMBER DAYA MINERAL'],
            ['kode_dinas' => '16', 'nama_dinas' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG'],
            ['kode_dinas' => '17', 'nama_dinas' => 'DINAS PERTAHANAN PANGAN, TANAMAN PANGAN DAN HORTIKULTURA'],
            ['kode_dinas' => '18', 'nama_dinas' => 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA, KEPENDUDUKAN DAN CATATAN SIPIL'],
            ['kode_dinas' => '19', 'nama_dinas' => 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN'],
            ['kode_dinas' => '20', 'nama_dinas' => 'DINAS KOPERASI, USAHA KECIL DAN MENENGAH'],
            ['kode_dinas' => '21', 'nama_dinas' => 'DINAS KOPERASI, USAHA KECIL DAN MENENGAH'],
            ['kode_dinas' => '22', 'nama_dinas' => 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU'],
            ['kode_dinas' => '23', 'nama_dinas' => 'BADAN KEPEGAWAIAN'],
            ['kode_dinas' => '24', 'nama_dinas' => 'BADAN PENGHUBUNG DAERAH PROVINSI'],
            ['kode_dinas' => '25', 'nama_dinas' => 'BADAN KESATUAN BANGSA DAN POLITIK'],
            ['kode_dinas' => '26', 'nama_dinas' => 'BADAN PENANGGULANGAN BENCANA DAERAH'],
            ['kode_dinas' => '27', 'nama_dinas' => 'BADAN PERENCANAAN PEMBANGUNAN, PENELITIAN, DAN PENGEMBANGAN'],
            ['kode_dinas' => '28', 'nama_dinas' => 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA'],
            ['kode_dinas' => '29', 'nama_dinas' => 'BADAN KEUANGAN DAN ASET DAERAH'],
            ['kode_dinas' => '30', 'nama_dinas' => 'BADAN PENDAPATAN DAERAH'],
            ['kode_dinas' => '31', 'nama_dinas' => 'BIRO HUKUM'],
            ['kode_dinas' => '32', 'nama_dinas' => 'BIRO ORGANISASI'],
            ['kode_dinas' => '33', 'nama_dinas' => 'BIRO PEMERINTAHAAN DAN OTONOMI DAERAH'],
            ['kode_dinas' => '34', 'nama_dinas' => 'BIRO PERTANIAN'],
            ['kode_dinas' => '35', 'nama_dinas' => 'BIRO UMUM'],
            ['kode_dinas' => '36', 'nama_dinas' => 'BIRO ADMINISTRASI PIMIPINAN'],
            ['kode_dinas' => '37', 'nama_dinas' => 'BIRO ADMINISTRASI PEMBANGUNAN'],
            ['kode_dinas' => '38', 'nama_dinas' => 'BIRO KESEJAHTERAAN RAKYAT'],
            ['kode_dinas' => '39', 'nama_dinas' => 'BIRO PENGADAAN BARANG DAN JASA'],
            ['kode_dinas' => '40', 'nama_dinas' => 'SATUAN POLISI PAMONG PRAJA'],
            ['kode_dinas' => '41', 'nama_dinas' => 'UPTD. KHUSUS RUMAH SAKIT UMUM HAJI MEDAN'],
            ['kode_dinas' => '42', 'nama_dinas' => 'UPTD. KHUSUS RUMAH SAKIT JIWA PROF.DR.M.ILDREM'],
        ];

        foreach ($dinas as $d) {
            \App\Models\Dinas::create($d);
        }
    }
}
