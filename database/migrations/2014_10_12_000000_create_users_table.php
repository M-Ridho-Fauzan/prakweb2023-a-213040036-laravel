<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * up di gunakan saat kita membuat skema/struktu 
     * dari tabel
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            // $table->string('is_admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * ini kebalikan nya, yaitu untuk menghilangkan 
     * skema yang tadi telah di buat
     * 
     * maka jika ingin menghapus semua isi tabel
     * cukup buka terminal, dan tuliskan "php artisan migrate:rollback"
     * 
     * dan untuk perintah keduanya yaitu menghapus dan membuat, perintahnya adalah
     * "php artisan migrate:fresh", ini digunakan untuk jika merubah isi table
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
