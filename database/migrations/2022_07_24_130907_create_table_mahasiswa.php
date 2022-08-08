<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nama');
            $table->string('nim');
            $table->float('ipk',8,2);
            $table->integer('masaStudiBulan');
            $table->integer('masaStudiTahun');
            $table->string('fakultas');
            $table->string('kemampuanBIng');
            $table->string('pengalamanMagang');
            $table->string('jenisPekerjaanPertama');
            $table->string('hubStudidgnPekerjaan');
            $table->boolean('ikutOrganisasi');
            $table->timestamps();

            /*
            $table->string('nama');
            $table->string('nim');
            $table->float('ipk',8,2);
            $table->enum('masaStudiBulan', [1,2,3,4,5]);
            $table->enum('masaStudiTahun', [1,2,3,4,5]);
            $table->enum('fakultas', ['EKONOMI', 'HUKUM', 'ILMU KOMPUTER', 'ILMU SOSIAL DAN ILMU POLITIK', 'KEDOKTERAN', 'KEGURUAN DAN ILMU PENDIDIKAN', 'KESEHATAN MASYARAKAT', 'MATEMATIKA DAN ILMU PENGETAHUAN ALAM', 'PERTANIAN', 'TEKNIK',]);
            $table->enum('kemampuanBIng', [1,2,3,4,5]);
            $table->enum('pengalamanMagang', [1,2,3,4,5]);
            $table->enum('jenisPekerjaanPertama', ['BUMN', 'BUMD', 'Instansi Pemerintah', 'Organisasi non-profit', 'Swasta', 'Wiraswasta',]);
            $table->enum('hubStudidgnPekerjaan', [1,2,3,4,5]);
            $table->boolean('ikutOrganisasi');
            $table->timestamps();
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
