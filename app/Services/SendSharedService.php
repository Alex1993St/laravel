<?php

namespace App\Services;

use App\Services\Socials\Email;
use App\Services\Socials\Telegram;
use App\Services\Socials\Viber;

class SendSharedService
{
    public function __invoke(array $data)
    {
        match ($data['social']) {
            'telegram' => app(Telegram::class)->sendQuote(),
            'viber' => app(Viber::class)->sendQuote(),
            'email' => app(Email::class)->sendQuote(),
        };
    }
}
