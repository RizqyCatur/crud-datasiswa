<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('siswa', function (Blueprint $table) {
			$table->id();
			$table->string('nis')->nullable();
			$table->string('nama')->nullable();
			$table->enum('jenis_kelamin', ['L', 'P'])->nullable();
			$table->string('tempat_lahir')->nullable();
			$table->date('tanggal_lahir')->nullable();
			$table->string('alamat')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('siswa');
	}
};
