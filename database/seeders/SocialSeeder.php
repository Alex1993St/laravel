<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSocial('Telegram', 'telegram');
        $this->createSocial('Viber', 'viber');
        $this->createSocial('Email', 'email');
    }

    private function createSocial(string $title, string $slug)
    {
        Social::updateOrCreate(
            ['slug' => $slug],
            ['title' => $title]
        );
    }
}
