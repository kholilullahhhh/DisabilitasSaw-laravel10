<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tb_guru_honorers', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_pos');
            $table->string('nama', 128);
            $table->string('alamat', 128);
            $table->string('tempat_lahir', 128);
            $table->dateTime('tgl_lahir');
            $table->string('no_hp', 16);
            $table->enum('jkl', ['l', 'p'])->default('l');
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'budha', 'hindu', 'konghucu'])->default('islam');
            $table->string('status')->default('honorer');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tb_guru_honorers');
    }
};
