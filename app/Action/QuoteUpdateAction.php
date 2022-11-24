<?php

namespace App\Action;

use App\DTO\QuoteData;
use App\Models\Quote;

class QuoteUpdateAction
{
    public function __invoke(Quote $quote, QuoteData $dto)
    {
        $quote->update([
            'description' => $dto->description
        ]);
    }
}
