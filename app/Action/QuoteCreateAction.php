<?php

namespace App\Action;

use App\DTO\QuoteData;
use App\Models\Quote;

class QuoteCreateAction
{
    public function __invoke(QuoteData $dto)
    {
        Quote::create([
            'description' => $dto->description
        ]);
    }
}
