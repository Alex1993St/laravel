<?php

namespace App\DTO;

use App\Http\Requests\QuoteRequest;

class QuoteData
{
    public function __construct(
        public string $description
    )
    {}

    public static function formRequest(QuoteRequest $request): self
    {
        return new self(
            description: (string) $request->input('description'),
        );
    }
}
