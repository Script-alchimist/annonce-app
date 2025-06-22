<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname')->after('id')->nullable(); 
            $table->string('lastname')->after('firstname')->nullable();  
            $table->string('profession')->after('lastname')->nullable(); 
            $table->string('phone')->after('profession')->unique()->nullable(); 
            $table->string('role')->default('user')->after('password');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['firstname', 'lastname', 'profession', 'phone', 'role']);
        });
    }
};
