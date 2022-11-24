<?php

namespace App\Action;

use App\Models\Quote;

class QuoteICountIncreaseAction
{
    public function __invoke(?Quote $quote)
    {
        if ($quote) {
            $quote->update([
                'shared_count' => ++$quote->shared_count
            ]);
        }
    }
}
