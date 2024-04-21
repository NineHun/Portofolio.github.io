<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Portofolio',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_location',
            'label' => 'Alamat Rumah',
            'value' => 'Araya, Malang, Indonesia',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/na1_arf/',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_linkedin',
            'label' => 'Linkedin',
            'value' => 'https://www.linkedin.com/in/naufal-arif-b8783b295/',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_github',
            'label' => 'GitHub',
            'value' => 'https://github.com/NineHun',
            'type' => 'text',
        ]);
        
        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Halo semuanya',
            'type' => 'text',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
