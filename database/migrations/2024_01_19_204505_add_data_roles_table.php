<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Roles;
use Illuminate\Support\Str;
use App\Models\RolesUsers;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Roles::create([
            'id' => 1,
            'unique_id' => Str::uuid()->toString(),
            'description' => 'Administrador',
        ]);

        Roles::create([
            'id' => 2,
            'unique_id' => Str::uuid()->toString(),
            'description' => 'Gestor',
        ]);

        Roles::create([
            'id' => 3,
            'unique_id' => Str::uuid()->toString(),
            'description' => 'Estudiante',
        ]);

        RolesUsers::create([
            'rol_id' => 3,
            'user_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
